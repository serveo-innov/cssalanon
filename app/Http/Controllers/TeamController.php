<?php

namespace App\Http\Controllers;

class TeamController extends Controller
{
    private function members(): array
    {
        return [
            [
                'slug'        => 'michele-bailey',
                'nom'         => 'Michele Bailey',
                'role'        => 'Directrice',
                'image'       => 'team-2.png',
                'bg'          => 'team-bg2.png',
                'image_detail'=> 'team-details.jpg',
                'experience'  => '20 ans',
                'eleves'      => 500,
                'note'        => '5.0 (80 avis)',
                'bio'         => 'Michele Bailey dirige le CS SALANON avec passion et vision depuis de nombreuses années. Son leadership bienveillant a façonné une école d\'excellence reconnue à Cotonou.',
                'info'        => 'Diplômée en sciences de l\'éducation et en management scolaire, Michele Bailey a consacré toute sa carrière au développement de l\'enseignement de qualité au Bénin.',
                'competences' => [
                    ['titre' => 'Leadership pédagogique',     'point' => '95%', 'style' => ''],
                    ['titre' => 'Gestion administrative',     'point' => '90%', 'style' => 'style-two'],
                    ['titre' => 'Relations avec les familles','point' => '98%', 'style' => 'style-three'],
                ],
                'social' => ['facebook' => '#', 'twitter' => '#', 'linkedin' => '#', 'youtube' => '#'],
            ],
            [
                'slug'        => 'dawson-timms',
                'nom'         => 'Dawson Timms',
                'role'        => 'Professeur de sport',
                'image'       => 'team-1.png',
                'bg'          => 'team-bg.png',
                'image_detail'=> 'team-details.jpg',
                'experience'  => '12 ans',
                'eleves'      => 350,
                'note'        => '4.9 (65 avis)',
                'bio'         => 'Dawson Timms est le pilier sportif du CS SALANON. Il transmet aux élèves les valeurs du sport : persévérance, respect, esprit d\'équipe et dépassement de soi.',
                'info'        => 'Ancien athlète et titulaire d\'un diplôme en éducation physique, Dawson Timms organise les journées sportives annuelles et entraîne les équipes scolaires avec enthousiasme.',
                'competences' => [
                    ['titre' => 'Éducation physique', 'point' => '98%', 'style' => ''],
                    ['titre' => 'Coaching d\'équipe',  'point' => '90%', 'style' => 'style-two'],
                    ['titre' => 'Premiers secours',    'point' => '85%', 'style' => 'style-three'],
                ],
                'social' => ['facebook' => '#', 'twitter' => '#', 'linkedin' => '#', 'youtube' => '#'],
            ],
            [
                'slug'        => 'brian-marsh',
                'nom'         => 'Brian Marsh',
                'role'        => 'Enseignant senior',
                'image'       => 'team-3.png',
                'bg'          => 'team-bg3.png',
                'image_detail'=> 'team-details.jpg',
                'experience'  => '15 ans',
                'eleves'      => 420,
                'note'        => '4.8 (72 avis)',
                'bio'         => 'Brian Marsh est l\'un des enseignants les plus expérimentés du CS SALANON. Sa pédagogie rigoureuse et bienveillante a permis à des centaines d\'élèves d\'exceller.',
                'info'        => 'Diplômé en mathématiques appliquées, Brian Marsh utilise des méthodes innovantes pour rendre les matières scientifiques accessibles et passionnantes pour tous les élèves.',
                'competences' => [
                    ['titre' => 'Mathématiques',       'point' => '97%', 'style' => ''],
                    ['titre' => 'Sciences naturelles', 'point' => '92%', 'style' => 'style-two'],
                    ['titre' => 'Pédagogie active',    'point' => '88%', 'style' => 'style-three'],
                ],
                'social' => ['facebook' => '#', 'twitter' => '#', 'linkedin' => '#', 'youtube' => '#'],
            ],
            [
                'slug'        => 'aria-sophia',
                'nom'         => 'Aria Sophia',
                'role'        => 'Enseignante senior',
                'image'       => 'team-4.png',
                'bg'          => 'team-bg4.png',
                'image_detail'=> 'team-details.jpg',
                'experience'  => '10 ans',
                'eleves'      => 280,
                'note'        => '4.9 (58 avis)',
                'bio'         => 'Aria Sophia enseigne le français et les arts au CS SALANON. Sa passion pour la littérature et l\'expression artistique est contagieuse et inspire de nombreux élèves.',
                'info'        => 'Titulaire d\'un master en lettres modernes, Aria Sophia organise régulièrement des ateliers d\'écriture créative très appréciés des élèves.',
                'competences' => [
                    ['titre' => 'Français et littérature', 'point' => '96%', 'style' => ''],
                    ['titre' => 'Arts plastiques',         'point' => '94%', 'style' => 'style-two'],
                    ['titre' => 'Expression orale',        'point' => '90%', 'style' => 'style-three'],
                ],
                'social' => ['facebook' => '#', 'twitter' => '#', 'linkedin' => '#', 'youtube' => '#'],
            ],
            [
                'slug'        => 'scarlett-audrey',
                'nom'         => 'Scarlett Audrey',
                'role'        => 'Enseignante',
                'image'       => 'team-5.png',
                'bg'          => 'team-bg4.png',
                'image_detail'=> 'team-details.jpg',
                'experience'  => '7 ans',
                'eleves'      => 190,
                'note'        => '4.8 (45 avis)',
                'bio'         => 'Scarlett Audrey est spécialisée dans l\'enseignement des langues étrangères. Elle a introduit des méthodes modernes d\'apprentissage qui ont transformé les résultats des élèves.',
                'info'        => 'Ayant vécu plusieurs années à l\'étranger, Scarlett Audrey utilise des outils numériques innovants pour rendre les cours de langues vivants et interactifs.',
                'competences' => [
                    ['titre' => 'Anglais',            'point' => '98%', 'style' => ''],
                    ['titre' => 'Langues étrangères', 'point' => '88%', 'style' => 'style-two'],
                    ['titre' => 'Multimédia éducatif','point' => '85%', 'style' => 'style-three'],
                ],
                'social' => ['facebook' => '#', 'twitter' => '#', 'linkedin' => '#', 'youtube' => '#'],
            ],
            [
                'slug'        => 'ruby-nora',
                'nom'         => 'Ruby Nora',
                'role'        => 'Enseignante maternelle',
                'image'       => 'team-6.png',
                'bg'          => 'team-bg4.png',
                'image_detail'=> 'team-details.jpg',
                'experience'  => '8 ans',
                'eleves'      => 160,
                'note'        => '4.9 (52 avis)',
                'bio'         => 'Ruby Nora est la référence de la petite enfance au CS SALANON. Sa douceur, sa patience et sa créativité font d\'elle l\'enseignante préférée des tout-petits.',
                'info'        => 'Formée en psychologie de l\'enfant, Ruby Nora crée un environnement de classe rassurant et joyeux qui facilite les premiers apprentissages.',
                'competences' => [
                    ['titre' => 'Petite enfance',    'point' => '99%', 'style' => ''],
                    ['titre' => 'Éveil musical',     'point' => '92%', 'style' => 'style-two'],
                    ['titre' => 'Psychologie enfant','point' => '88%', 'style' => 'style-three'],
                ],
                'social' => ['facebook' => '#', 'twitter' => '#', 'linkedin' => '#', 'youtube' => '#'],
            ],
        ];
    }

    public function index()
    {
        $members = $this->members();
        return view('pages.team', compact('members'));
    }

    public function show(string $slug)
    {
        $member = collect($this->members())->firstWhere('slug', $slug);
        if (!$member) abort(404);

        $others = collect($this->members())
            ->where('slug', '!=', $slug)
            ->take(4)->values()->all();

        return view('pages.team-details', compact('member', 'others'));
    }
}