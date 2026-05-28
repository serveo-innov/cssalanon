<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = trim($request->input('q', ''));

        if (empty($query)) {
            return view('pages.search', [
                'query'   => '',
                'results' => [],
                'total'   => 0,
            ]);
        }

        $queryLower = mb_strtolower($query);
        $results    = [];

        // ── Articles ──────────────────────────────────────────────
        foreach (app(NewsController::class)->getArticlesPublic() as $article) {
            $score = 0;
            if (str_contains(mb_strtolower($article['titre']),    $queryLower)) $score += 3;
            if (str_contains(mb_strtolower($article['intro']),    $queryLower)) $score += 2;
            if (str_contains(mb_strtolower($article['contenu1']), $queryLower)) $score += 1;
            if ($score > 0) {
                $results[] = [
                    'type'    => 'Actualité',
                    'titre'   => $article['titre'],
                    'extrait' => $article['intro'],
                    'url'     => route('news.show', $article['slug']),
                    'score'   => $score,
                    'date'    => $article['date'],
                ];
            }
        }

        // ── Programmes ────────────────────────────────────────────
        foreach (app(ProgramController::class)->getProgramsPublic() as $prog) {
            $score = 0;
            if (str_contains(mb_strtolower($prog['titre']),       $queryLower)) $score += 3;
            if (str_contains(mb_strtolower($prog['description']), $queryLower)) $score += 2;
            if ($score > 0) {
                $results[] = [
                    'type'    => 'Programme',
                    'titre'   => $prog['titre'],
                    'extrait' => Str::limit($prog['description'], 150),
                    'url'     => route('program.show', $prog['slug']),
                    'score'   => $score,
                    'date'    => null,
                ];
            }
        }

        // ── Événements ────────────────────────────────────────────
        foreach (app(EventController::class)->getEventsPublic() as $event) {
            $score = 0;
            if (str_contains(mb_strtolower($event['titre']),       $queryLower)) $score += 3;
            if (str_contains(mb_strtolower($event['description']), $queryLower)) $score += 2;
            if ($score > 0) {
                $results[] = [
                    'type'    => 'Événement',
                    'titre'   => $event['titre'],
                    'extrait' => Str::limit($event['description'], 150),
                    'url'     => route('event.show', $event['slug']),
                    'score'   => $score,
                    'date'    => $event['date_full'],
                ];
            }
        }

        // ── Équipe ────────────────────────────────────────────────
        foreach (app(TeamController::class)->getMembersPublic() as $member) {
            $score = 0;
            if (str_contains(mb_strtolower($member['nom']),  $queryLower)) $score += 3;
            if (str_contains(mb_strtolower($member['role']), $queryLower)) $score += 2;
            if (str_contains(mb_strtolower($member['bio']),  $queryLower)) $score += 1;
            if ($score > 0) {
                $results[] = [
                    'type'    => 'Enseignant',
                    'titre'   => $member['nom'] . ' — ' . $member['role'],
                    'extrait' => Str::limit($member['bio'], 150),
                    'url'     => route('team.show', $member['slug']),
                    'score'   => $score,
                    'date'    => null,
                ];
            }
        }

        usort($results, fn($a, $b) => $b['score'] - $a['score']);

        return view('pages.search', [
            'query'   => $query,
            'results' => $results,
            'total'   => count($results),
        ]);
    }
}