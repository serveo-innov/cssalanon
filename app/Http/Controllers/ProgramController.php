<?php

namespace App\Http\Controllers;

class ProgramController extends Controller
{
    private function programs(): array
    {
        return [
            [
                'slug'        => 'maternelle',
                'titre'       => 'Maternelle',
                'age'         => '3-5 ans',
                'duree'       => '02 ans',
                'thumb'       => 'program1.png',
                'hand'        => 'hand-1.png',
                'image'       => 'program-01.jpg',
                'categorie'   => 'Maternelle',
                'langue'      => 'Français',
                'max_eleves'  => 30,
                'certificat'  => 'Oui',
                'horaires'    => '8h00 – 16h30',
                'description' => 'La Maternelle I et II est un programme structuré pour les enfants de 3 à 5 ans. À travers des activités d\'éveil, de lecture et de calcul, pour développer le langage, la logique et l\'autonomie de chaque enfant dans un environnement stimulant.',
                'prerequis'   => 'Aucun prérequis. Ce programme est ouvert à tous les enfants de 3 à 5 ans. Le matériel est fourni par l\'école.',
                'points'      => [
                    'Matériel pédagogique fourni par l\'école',
                    'Groupes à effectif réduit (30 élèves max)',
                    'Enseignants spécialisés petite enfance',
                    'Bilan trimestriel avec les parents',
                ],
                'directrice' => [
                    'nom'        => 'Mme HOUKPATIN',
                    'role'       => 'Directrice principale spécialisée petite enfance',
                    'experience' => '20 ans+',
                    'eleves'     => 200,
                    'image'      => 'teacher.jpg',
                    'bio'        => 'Mme HOUKPATIN dirige les sections des tout-petits depuis plus de 05 ans au CS SALANON avec patience et créativité. Sa méthode favorise l\'épanouissement naturel de chaque enfant.',
                ],
            ],
            [
                'slug'        => 'primaire',
                'titre'       => 'Primaire',
                'age'         => '5-10 ans',
                'duree'       => '06 ans',
                'thumb'       => 'program2.png',
                'hand'        => 'hand-2.png',
                'image'       => 'program-02.jpg',
                'categorie'   => 'Primaire',
                'langue'      => 'Français',
                'max_eleves'  => '40+',
                'certificat'  => 'Oui',
                'horaires'    => '8h00 – 17h00',
                'description' => 'Le cycle Primaire accompagne les enfants de 5 à 10 ans dans l\'acquisition des savoirs fondamentaux en français, mathématiques et sciences à travers des méthodes pédagogiques actives et adaptées.',
                'prerequis'   => 'Avoir complété la Maternelle II ou justifier d\'un niveau adapté. Entretien d\'admission possible.',
                'points'      => [
                    'Introduction à la lecture et l\'écriture',
                    'Activités artistiques et sportives incluses',
                    'Suivi personnalisé de chaque élève',
                    'Réunions parents-enseignants régulières',
                ],
                'directrice' => [
                    'nom'        => 'Mme HOUKPATIN',
                    'role'       => 'Directrice principale du Primaire',
                    'experience' => '5 ans+',
                    'eleves'     => "200+",
                    'image'      => 'teacher.jpg',
                    'bio'        => 'Mme HOUKPATIN passionnée par l\'éveil des jeunes enfants. Elle utilise des méthodes actives pour rendre chaque apprentissage mémorable.',
                ],
            ],
            [
                'slug'        => 'secondaire-cycleI',
                'titre'       => 'Secondaire 1er Cycle',
                'age'         => '10 ans+',
                'duree'       => '07 ans',
                'thumb'       => 'program3.png',
                'hand'        => 'hand-3.png',
                'image'       => 'program-03.jpg',
                'categorie'   => 'Secondaire',
                'langue'      => 'Français',
                'max_eleves'  => '300+',
                'certificat'  => 'Oui',
                'horaires'    => '7h30 – 19h00',
                'description' => 'Le Programme Secondaire couvre l\'ensemble du cycle collège-lycée pour les jeunes de 10 ans et plus. L\'accent est mis sur la maîtrise des sciences, des lettres et de la culture générale.',
                'prerequis'   => 'Avoir validé le cycle Primaire ou équivalent. Test de niveau à l\'inscription.',
                'points'      => [
                    'Transition douce vers le 2ème cycle',
                    'Cours de renforcement disponibles',
                    'Activités parascolaires incluses',
                    'Préparation aux examens nationaux',
                ],
                'directrice' => [
                    'nom'        => 'M. ZAMMA',
                    'role'       => 'Directrice principale du collège',
                    'experience' => '12 ans',
                    'eleves'     => 300,
                    'image'      => 'teacher.jpg',
                    'bio'        => 'M. ZAMMA est reconnue pour sa rigueur pédagogique et sa capacité à motiver les élèves. elle prépare ses élèves avec sérieux aux grandes étapes scolaires.',
                ],
            ],
            [
                'slug'        => 'secondaire',
                'titre'       => 'Secondaire 1er & 2ème Cycle',
                'age'         => '10 ans+',
                'duree'       => '07 ans',
                'thumb'       => 'program4.png',
                'hand'        => 'hand-4.png',
                'image'       => 'program-03.jpg',
                'categorie'   => 'Secondaire',
                'langue'      => 'Français',
                'max_eleves'  => '300+',
                'certificat'  => 'Oui',
                'horaires'    => '7h00 – 19h00',
                'description' => 'Le Programme Secondaire 2ème cycle couvre l\'ensemble du lycée pour les jeunes de 16 ans et plus. L\'accent est mis sur la maîtrise des sciences, des lettres et de la culture générale.',
                'prerequis'   => 'Avoir validé le Secondaire 1er cycle ou équivalent. Test de niveau à l\'inscription.',
                'points'      => [
                    'Programme officiel pour les séries ABCD',
                    'Encadrement renforcé et personnalisé',
                    'Clubs sportifs et culturels',
                    'Orientation scolaire et professionnelle',
                ],
                'directrice' => [
                    'nom'        => 'M. ZAMMA',
                    'role'       => 'Diretrice du Collège',
                    'experience' => '10 ans+',
                    'eleves'     => 400,
                    'image'      => 'teacher.jpg',
                    'bio'        => 'M. ZAMMA dirige le Collège SALANON avec passion. Son expérience lui permet de guider chaque adolescent vers ses propres objectifs avec clarté et bienveillance vers la réussite.',
                ],
            ],
        ];
    }

    public function index()
    {
        $programs = $this->programs();
        return view('pages.programs', compact('programs'));
    }

    public function show(string $slug)
    {
        $program = collect($this->programs())->firstWhere('slug', $slug);
        if (!$program) abort(404);

        $others = collect($this->programs())
            ->where('slug', '!=', $slug)
            ->values()->all();

        return view('pages.program-details', compact('program', 'others'));
    }
}