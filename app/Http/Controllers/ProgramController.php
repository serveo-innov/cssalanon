<?php

namespace App\Http\Controllers;

class ProgramController extends Controller
{
    private function programs(): array
    {
        return [
            [
                'slug'        => 'groupe-eveil',
                'titre'       => 'Groupe Éveil',
                'age'         => '3-5 ans',
                'duree'       => '2h30',
                'image'       => 'program-01.jpg',
                'hand'        => 'hand-1.png',
                'categorie'   => 'Maternelle',
                'seances'     => 30,
                'avis'        => '4.8 (36 avis)',
                'langue'      => 'Français',
                'max_eleves'  => 20,
                'certificat'  => 'Oui',
                'horaires'    => '9h00 – 11h30',
                'description' => 'Le Groupe Éveil est conçu pour les tout-petits de 3 à 5 ans. À travers des activités ludiques, musicales et artistiques, nous développons la motricité fine, la curiosité et la confiance en soi de chaque enfant dans un cadre bienveillant.',
                'prerequis'   => 'Aucun prérequis. Ce programme est ouvert à tous les enfants de 3 à 5 ans. Le matériel est fourni par l\'école.',
                'points'      => [
                    'Matériel pédagogique fourni par l\'école',
                    'Groupes à effectif réduit (20 élèves max)',
                    'Enseignants spécialisés petite enfance',
                    'Bilan trimestriel avec les parents',
                ],
                'enseignant'  => [
                    'nom'        => 'Mme Adjobi',
                    'role'       => 'Enseignante spécialisée petite enfance',
                    'experience' => '10 ans',
                    'eleves'     => 200,
                    'note'       => '4.9',
                    'image'      => 'teacher.jpg',
                    'bio'        => 'Mme Adjobi accompagne les tout-petits depuis plus de 10 ans avec patience et créativité. Sa méthode favorise l\'épanouissement naturel de chaque enfant.',
                ],
            ],
            [
                'slug'        => 'maternelle',
                'titre'       => 'Maternelle',
                'age'         => '5-7 ans',
                'duree'       => '2h30',
                'image'       => 'program-02.jpg',
                'hand'        => 'hand-2.png',
                'categorie'   => 'Maternelle',
                'seances'     => 35,
                'avis'        => '4.7 (42 avis)',
                'langue'      => 'Français',
                'max_eleves'  => 25,
                'certificat'  => 'Oui',
                'horaires'    => '8h00 – 12h00',
                'description' => 'La classe de Maternelle prépare les enfants de 5 à 7 ans aux fondamentaux de la lecture, de l\'écriture et du calcul à travers des approches pédagogiques modernes et ludiques.',
                'prerequis'   => 'Avoir suivi le Groupe Éveil ou justifier d\'une maturité équivalente. Entretien d\'admission possible.',
                'points'      => [
                    'Introduction à la lecture et l\'écriture',
                    'Activités artistiques et sportives incluses',
                    'Suivi personnalisé de chaque élève',
                    'Réunions parents-enseignants régulières',
                ],
                'enseignant'  => [
                    'nom'        => 'Mme Dossou',
                    'role'       => 'Enseignante de maternelle',
                    'experience' => '8 ans',
                    'eleves'     => 180,
                    'note'       => '4.8',
                    'image'      => 'teacher.jpg',
                    'bio'        => 'Mme Dossou est passionnée par l\'éveil des jeunes enfants. Elle utilise des méthodes actives pour rendre chaque apprentissage mémorable.',
                ],
            ],
            [
                'slug'        => 'programme-primaire',
                'titre'       => 'Programme Primaire',
                'age'         => '7-12 ans',
                'duree'       => '3h00',
                'image'       => 'program-03.jpg',
                'hand'        => 'hand-3.png',
                'categorie'   => 'Primaire',
                'seances'     => 40,
                'avis'        => '4.9 (55 avis)',
                'langue'      => 'Français',
                'max_eleves'  => 30,
                'certificat'  => 'Oui',
                'horaires'    => '7h30 – 12h30',
                'description' => 'Le Programme Primaire couvre l\'ensemble du cycle élémentaire pour les enfants de 7 à 12 ans. L\'accent est mis sur la maîtrise du français, des mathématiques et de l\'éveil scientifique.',
                'prerequis'   => 'Avoir validé la classe de Maternelle ou équivalent. Test de niveau à l\'inscription.',
                'points'      => [
                    'Programme officiel béninois',
                    'Cours de renforcement disponibles',
                    'Activités parascolaires incluses',
                    'Préparation aux examens nationaux',
                ],
                'enseignant'  => [
                    'nom'        => 'M. Kokou',
                    'role'       => 'Enseignant principal du primaire',
                    'experience' => '12 ans',
                    'eleves'     => 300,
                    'note'       => '4.9',
                    'image'      => 'teacher.jpg',
                    'bio'        => 'M. Kokou est reconnu pour sa rigueur pédagogique et sa capacité à motiver les élèves. Il prépare ses élèves avec sérieux aux grandes étapes scolaires.',
                ],
            ],
            [
                'slug'        => 'college-junior',
                'titre'       => 'Collège Junior',
                'age'         => '12-15 ans',
                'duree'       => '3h30',
                'image'       => 'program-03.jpg',
                'hand'        => 'hand-4.png',
                'categorie'   => 'Secondaire',
                'seances'     => 45,
                'avis'        => '4.7 (28 avis)',
                'langue'      => 'Français',
                'max_eleves'  => 35,
                'certificat'  => 'Oui',
                'horaires'    => '7h00 – 13h00',
                'description' => 'Le Collège Junior accompagne les adolescents de 12 à 15 ans dans la transition vers l\'enseignement secondaire. Le programme renforce les acquis du primaire et développe l\'autonomie.',
                'prerequis'   => 'Avoir complété le cycle primaire avec succès. Dossier d\'admission requis.',
                'points'      => [
                    'Transition douce vers le secondaire',
                    'Encadrement renforcé et personnalisé',
                    'Clubs sportifs et culturels',
                    'Orientation scolaire et professionnelle',
                ],
                'enseignant'  => [
                    'nom'        => 'M. Agbessi',
                    'role'       => 'Coordinateur du Collège Junior',
                    'experience' => '15 ans',
                    'eleves'     => 400,
                    'note'       => '4.8',
                    'image'      => 'teacher.jpg',
                    'bio'        => 'M. Agbessi dirige le Collège Junior avec passion. Son expérience lui permet de guider chaque adolescent vers ses propres objectifs avec clarté et bienveillance.',
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

        if (!$program) {
            abort(404);
        }

        $others = collect($this->programs())
            ->where('slug', '!=', $slug)
            ->values()
            ->all();

        return view('pages.program-details', compact('program', 'others'));
    }
}