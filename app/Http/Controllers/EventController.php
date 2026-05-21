<?php

namespace App\Http\Controllers;

class EventController extends Controller
{
    private function events(): array
    {
        return [
            [
                'slug'        => 'journee-portes-ouvertes',
                'titre'       => 'Journée portes ouvertes',
                'jour'        => '15',
                'mois'        => 'Mars, 2026',
                'date_full'   => '15 Mars 2026',
                'heure'       => '8h00 – 12h00',
                'lieu'        => 'Cotonou, Bénin',
                'places'      => 50,
                'entree'      => 'Gratuite',
                'image'       => 'activities-image.jpg',
                'description' => 'Venez découvrir le Complexe Scolaire SALANON lors de notre Journée Portes Ouvertes. Rencontrez les enseignants, visitez les classes et informez-vous sur nos programmes pédagogiques.',
                'description2'=> 'C\'est l\'occasion idéale pour les familles de s\'imprégner de l\'atmosphère chaleureuse de notre école et de poser toutes leurs questions sur les inscriptions.',
                'citation'    => '"Offrir à chaque enfant un espace d\'expression libre, c\'est lui offrir les clés de son avenir."',
                'points'      => [
                    'Visite guidée des installations',
                    'Rencontre avec les enseignants',
                    'Présentation des programmes',
                    'Dossiers d\'inscription disponibles',
                ],
                'intervenants' => [
                    ['nom' => 'Mme Adjobi', 'role' => 'Directrice pédagogique'],
                    ['nom' => 'M. Kokou',   'role' => 'Coordinateur des activités'],
                ],
            ],
            [
                'slug'        => 'campagne-de-solidarite',
                'titre'       => 'Campagne de solidarité',
                'jour'        => '19',
                'mois'        => 'Mars, 2026',
                'date_full'   => '19 Mars 2026',
                'heure'       => '9h00 – 14h00',
                'lieu'        => 'Cotonou, Bénin',
                'places'      => 100,
                'entree'      => 'Gratuite',
                'image'       => 'activities-image-2.jpg',
                'description' => 'Le CS SALANON organise sa campagne annuelle de solidarité. Les élèves, enseignants et parents se mobilisent pour soutenir les enfants défavorisés de notre communauté.',
                'description2'=> 'Dons de matériels scolaires, animations culturelles et repas communautaire sont au programme de cette belle journée de partage.',
                'citation'    => '"L\'éducation est un acte de solidarité envers les générations futures."',
                'points'      => [
                    'Collecte de fournitures scolaires',
                    'Animations culturelles',
                    'Repas communautaire partagé',
                    'Témoignages d\'élèves bénéficiaires',
                ],
                'intervenants' => [
                    ['nom' => 'Mme Dossou', 'role' => 'Responsable actions sociales'],
                    ['nom' => 'M. Agbessi', 'role' => 'Coordinateur général'],
                ],
            ],
            [
                'slug'        => 'journee-sportive-annuelle',
                'titre'       => 'Journée sportive annuelle',
                'jour'        => '25',
                'mois'        => 'Mars, 2026',
                'date_full'   => '25 Mars 2026',
                'heure'       => '7h30 – 17h00',
                'lieu'        => 'Cotonou, Bénin',
                'places'      => 200,
                'entree'      => 'Gratuite',
                'image'       => 'activities-image-3.jpg',
                'description' => 'La grande journée sportive annuelle réunit tous les élèves du CS SALANON pour une compétition amicale et bienveillante. Football, athlétisme, jeux collectifs et bien plus encore.',
                'description2'=> 'Un événement incontournable qui renforce la cohésion de notre communauté scolaire et valorise les talents sportifs de nos élèves.',
                'citation'    => '"Le sport enseigne la persévérance, le respect et l\'esprit d\'équipe."',
                'points'      => [
                    'Compétitions par niveaux',
                    'Remise de trophées et médailles',
                    'Restauration sur place',
                    'Photos et souvenirs',
                ],
                'intervenants' => [
                    ['nom' => 'Dawson Timms', 'role' => 'Professeur de sport'],
                    ['nom' => 'M. Kokou',     'role' => 'Coordinateur des activités'],
                ],
            ],
            [
                'slug'        => 'fete-de-fin-dannee',
                'titre'       => 'Fête de fin d\'année',
                'jour'        => '10',
                'mois'        => 'Juin, 2026',
                'date_full'   => '10 Juin 2026',
                'heure'       => '10h00 – 18h00',
                'lieu'        => 'Cotonou, Bénin',
                'places'      => 300,
                'entree'      => 'Gratuite',
                'image'       => 'activities-image.jpg',
                'description' => 'La fête de fin d\'année est le grand moment pour célébrer les réussites des élèves et clôturer l\'année scolaire en beauté. Spectacles, remises de prix et retrouvailles.',
                'description2'=> 'Parents, élèves et enseignants se réunissent pour partager des moments de joie et de fierté, marquant ainsi la fin d\'une belle année scolaire au CS SALANON.',
                'citation'    => '"Chaque fin d\'année est une victoire que nous célébrons ensemble."',
                'points'      => [
                    'Spectacles et danses des élèves',
                    'Remise des bulletins et prix d\'excellence',
                    'Buffet et animation musicale',
                    'Exposition des travaux de l\'année',
                ],
                'intervenants' => [
                    ['nom' => 'Michele Bailey', 'role' => 'Directrice'],
                    ['nom' => 'Mme Adjobi',     'role' => 'Directrice pédagogique'],
                ],
            ],
        ];
    }

    public function index()
    {
        $events = $this->events();
        return view('pages.events', compact('events'));
    }

    public function show(string $slug)
    {
        $event = collect($this->events())->firstWhere('slug', $slug);
        if (!$event) abort(404);

        $others = collect($this->events())
            ->where('slug', '!=', $slug)
            ->take(3)->values()->all();

        return view('pages.event-details', compact('event', 'others'));
    }
}