<?php

namespace App\Http\Controllers;

class EventController extends Controller
{
    public function getEventsPublic(): array
    {
        return $this->events();
    }
    
    private function events(): array
    {
        return [
            [
                'slug'        => 'art-et-artisanat',
                'titre'       => 'Art & Artisanat',
                'jour'        => 'debut',
                'mois'        => 'Janv',
                'date_full'   => 'debut Janv',
                'heure'       => '8h00 – 12h00',
                'lieu'        => 'CS SALANON, Cotonou',
                'places'      => 200,
                'entree'      => 'Gratuite',
                'image'       => 'activities-image.jpg',
                'description' => 'L\'atelier Art & Artisanat du CS SALANON est un espace de création hebdomadaire où les élèves de tous niveaux explorent leur créativité. Dessin, peinture, modelage, collage et fabrication d\'objets sont au programme pour développer la motricité fine, la concentration et l\'expression artistique.',
                'description2'=> 'Encadrés par des enseignants spécialisés, les élèves apprennent à observer, imaginer et créer librement. Leurs œuvres sont exposées lors de la fête de fin d\'année, un moment de fierté pour toute la communauté scolaire.',
                'citation'    => '"La créativité, c\'est l\'intelligence qui s\'amuse. Chaque œuvre d\'un enfant est une fenêtre sur son monde intérieur."',
                'points'      => [
                    'Ateliers hebdomadaires encadrés',
                    'Matériel fourni par l\'école',
                    'Exposition des œuvres en fin d\'année',
                    'Ouvert à tous les niveaux',
                ],
                'intervenants' => [
                    ['nom' => 'Mme HOUKPATIN', 'role' => 'Directrice pédagogique'],
                    ['nom' => 'Équipe artistique', 'role' => 'Enseignants spécialisés'],
                ],
            ],
            [
                'slug'        => 'musique-et-danse',
                'titre'       => 'Musique & Danse',
                'jour'        => 'mi',
                'mois'        => 'Janv',
                'date_full'   => 'mi Janv',
                'heure'       => '9h00 – 12h00',
                'lieu'        => 'CS SALANON, Cotonou',
                'places'      => 80,
                'entree'      => 'Gratuite',
                'image'       => 'activities-image-2.jpg',
                'description' => 'L\'activité Musique & Danse du CS SALANON est bien plus qu\'un simple loisir. À travers le chant choral, l\'initiation aux instruments de musique et les chorégraphies collectives, les élèves développent leur sens du rythme, leur coordination et leur confiance en soi.',
                'description2'=> 'Ces séances régulières renforcent le lien social entre élèves de différents niveaux et cultivent le goût pour les arts de la scène. Les spectacles présentés lors des événements scolaires témoignent de l\'engagement et du talent de nos élèves.',
                'citation'    => '"La musique donne une âme à nos cœurs et des ailes à la pensée. Elle unit les élèves dans une même harmonie."',
                'points'      => [
                    'Séances régulières de chant choral',
                    'Initiation aux instruments de musique',
                    'Chorégraphies et spectacles de fin d\'année',
                    'Développement de la confiance en soi',
                ],
                'intervenants' => [
                    ['nom' => 'Mme HOUKPATIN', 'role' => 'Directrice pédagogique'],
                    ['nom' => 'Équipe artistique', 'role' => 'Animateurs musique & danse'],
                ],
            ],
            [
                'slug'        => 'journee-sportive-annuelle',
                'titre'       => 'Journée sportive annuelle',
                'jour'        => 'fin',
                'mois'        => 'Mars',
                'date_full'   => 'fin Mars',
                'heure'       => '7h30 – 17h00',
                'lieu'        => 'CS SALANON, Cotonou',
                'places'      => 200,
                'entree'      => 'Gratuite',
                'image'       => 'activities-image-3.jpg',
                'description' => 'La grande journée sportive annuelle du CS SALANON réunit élèves, enseignants et parents dans une compétition amicale et bienveillante. Football, athlétisme, jeux de relais et activités collectives sont au programme pour une journée inoubliable.',
                'description2'=> 'Cet événement incontournable valorise les talents sportifs de nos élèves et renforce l\'esprit d\'équipe, la persévérance et le fairplay. Chaque participant repart avec des souvenirs et, pour les meilleurs, des trophées et médailles.',
                'citation'    => '"Le sport enseigne la persévérance, le respect et l\'esprit d\'équipe. Il forge des caractères autant qu\'il développe des corps."',
                'points'      => [
                    'Compétitions sportives par niveaux',
                    'Remise de trophées et médailles',
                    'Restauration et animation sur place',
                    'Photos souvenirs pour tous',
                ],
                'intervenants' => [
                    ['nom' => 'Mme. ZAMMA', 'role' => 'Directrice du collège'],
                    ['nom' => 'Équipe sportive', 'role' => 'Professeurs d\'EPS'],
                ],
            ],
            [
                'slug'        => 'journee-portes-ouvertes',
                'titre'       => 'Journée portes ouvertes',
                'jour'        => 'fin',
                'mois'        => 'Août',
                'date_full'   => 'fin Août',
                'heure'       => '8h00 – 13h00',
                'lieu'        => 'CS SALANON, Cotonou',
                'places'      => 'Indéfinie',
                'entree'      => 'Gratuite',
                'image'       => 'activities-image-4.jpg',
                'description' => 'Venez découvrir le Complexe Scolaire SALANON lors de notre Journée Portes Ouvertes. Rencontrez les enseignants, visitez les classes de la Maternelle au Secondaire et informez-vous sur nos programmes pédagogiques.',
                'description2'=> 'C\'est l\'occasion idéale pour les familles de s\'imprégner de l\'atmosphère chaleureuse du CS SALANON et de poser toutes leurs questions sur les inscriptions, les frais et le fonctionnement de l\'école.',
                'citation'    => '"Offrir à chaque enfant un espace d\'expression libre, c\'est lui offrir les clés de son avenir."',
                'points'      => [
                    'Visite guidée de toutes les installations',
                    'Rencontre avec les enseignants et la direction',
                    'Présentation de tous les programmes',
                    'Dossiers d\'inscription disponibles sur place',
                ],
                'intervenants' => [
                    ['nom' => 'Mme HOUKPATIN', 'role' => 'Directrice pédagogique'],
                    ['nom' => 'Mme. ZAMMA',       'role' => 'Directrice du collège'],
                ],
            ],
            [
                'slug'        => 'campagne-de-solidarite',
                'titre'       => 'Campagne de solidarité',
                'jour'        => 'mi',
                'mois'        => 'Janvier',
                'date_full'   => 'mi Janvier',
                'heure'       => '9h00 – 14h00',
                'lieu'        => 'CS SALANON, Cotonou',
                'places'      => 150,
                'entree'      => 'Gratuite',
                'image'       => 'activities-image-5.jpg',
                'description' => 'Le CS SALANON organise sa campagne annuelle de solidarité. Élèves, enseignants et parents se mobilisent pour soutenir les enfants défavorisés de notre communauté à travers des dons de matériels scolaires et des animations culturelles.',
                'description2'=> 'Cette journée de partage et d\'entraide reflète les valeurs fondamentales du CS SALANON : générosité, civisme et solidarité. Un repas communautaire clôture la journée dans une ambiance fraternelle.',
                'citation'    => '"L\'éducation est un acte de solidarité envers les générations futures. Donner, c\'est construire l\'avenir ensemble."',
                'points'      => [
                    'Collecte de fournitures scolaires',
                    'Animations culturelles et artistiques',
                    'Repas communautaire partagé',
                    'Témoignages d\'élèves bénéficiaires',
                ],
                'intervenants' => [
                    ['nom' => 'Mme HOUKPATIN', 'role' => 'Directrice pédagogique'],
                    ['nom' => 'Mme. ZAMMA',       'role' => 'Directrice du collège'],
                ],
            ],
            [
                'slug'        => 'fete-de-fin-dannee',
                'titre'       => 'Fête de fin d\'année',
                'jour'        => 'fin',
                'mois'        => 'Juin',
                'date_full'   => 'fin Juin',
                'heure'       => '10h00 – 18h00',
                'lieu'        => 'CS SALANON, Cotonou',
                'places'      => 'Indéfinie',
                'entree'      => 'Gratuite',
                'image'       => 'activities-image-6.jpg',
                'description' => 'La fête de fin d\'année est le grand moment pour célébrer les réussites des élèves du CS SALANON et clôturer l\'année scolaire en beauté. Spectacles de danse et de musique, remises de prix et retrouvailles sont au programme.',
                'description2'=> 'Parents, élèves et enseignants se réunissent pour partager des moments de joie et de fierté. L\'exposition des travaux réalisés tout au long de l\'année témoigne du talent et de l\'investissement de nos élèves.',
                'citation'    => '"Chaque fin d\'année est une victoire que nous célébrons ensemble. La réussite de nos élèves est notre plus belle fierté."',
                'points'      => [
                    'Spectacles de danse et de musique',
                    'Remise des bulletins et prix d\'excellence',
                    'Buffet et animation musicale',
                    'Exposition des travaux de l\'année',
                ],
                'intervenants' => [
                    ['nom' => 'Mme HOUKPATIN', 'role' => 'Directrice pédagogique'],
                    ['nom' => 'Mme. ZAMMA',       'role' => 'Directrice du collège'],
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