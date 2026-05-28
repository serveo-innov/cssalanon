<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    private function articles(): array
    {
        return [
            [
                'slug'        => 'importance-education-prescolaire',
                'titre'       => 'Pourquoi l\'éducation préscolaire est essentielle pour votre enfant',
                'image'       => 'blog-post-1.jpg',
                'image_detail'=> 'blog-post-4.jpg',
                'image2'      => 'blog-post-5.jpg',
                'image3'      => 'blog-post-6.jpg',
                'date'        => '11 Mars 2026',
                'auteur'      => 'Administration',
                'categorie'   => 'Éducation',
                'commentaires'=> 19,
                'intro'       => 'À l\'École SALANON, nous croyons que chaque enfant mérite le meilleur départ dans la vie. Nos enseignants qualifiés créent un environnement stimulant et bienveillant.',
                'contenu1'    => 'L\'éducation préscolaire joue un rôle fondamental dans le développement cognitif, social et émotionnel de l\'enfant. Les recherches scientifiques confirment que les apprentissages réalisés entre 3 et 6 ans ont un impact durable sur tout le parcours scolaire.',
                'contenu2'    => 'Au CS SALANON, nous avons conçu des programmes adaptés à chaque tranche d\'âge, permettant à chaque enfant de progresser à son rythme dans un cadre sécurisé et stimulant.',
                'citation'    => '"Investir dans l\'éducation d\'un enfant, c\'est investir dans l\'avenir de toute une nation."',
                'contenu3'    => 'Les familles qui nous font confiance témoignent régulièrement des progrès remarquables de leurs enfants, tant sur le plan académique que comportemental.',
                'tags'        => ['Éducation', 'Enfants', 'Préscolaire'],
                'commentaires_list' => [
                    ['auteur' => 'Mme Adjobi', 'date' => '20 Mars 2026 à 14h37', 'note' => 5, 'texte' => 'Article très instructif ! En tant qu\'enseignante, je confirme que l\'éducation préscolaire est déterminante.'],
                    ['auteur' => 'M. Kokou',   'date' => '21 Mars 2026 à 09h15', 'note' => 5, 'texte' => 'Mon fils a intégré le Groupe Éveil cette année et les progrès sont impressionnants.'],
                ],
            ],
            [
                'slug'        => 'activites-ludiques-creativite',
                'titre'       => 'Activités ludiques qui stimulent la créativité des enfants',
                'image'       => 'blog-post-2.jpg',
                'image_detail'=> 'blog-post-4.jpg',
                'image2'      => 'blog-post-5.jpg',
                'image3'      => 'blog-post-6.jpg',
                'date'        => '18 Mars 2026',
                'auteur'      => 'Équipe pédagogique',
                'categorie'   => 'Activités',
                'commentaires'=> 14,
                'intro'       => 'La créativité est une compétence clé du 21e siècle. Découvrez comment nos activités ludiques développent l\'imagination et l\'innovation chez nos élèves.',
                'contenu1'    => 'Les activités artistiques, musicales et manuelles occupent une place centrale dans notre approche pédagogique. Elles permettent aux enfants d\'explorer leur potentiel créatif tout en développant leur motricité fine.',
                'contenu2'    => 'Nos ateliers hebdomadaires de dessin, de peinture et de musique sont encadrés par des enseignants spécialisés qui savent libérer la créativité de chaque enfant sans jugement.',
                'citation'    => '"La créativité, c\'est l\'intelligence qui s\'amuse." — Albert Einstein',
                'contenu3'    => 'Les élèves du CS SALANON exposent leurs créations lors de notre fête annuelle de fin d\'année. C\'est toujours un moment émouvant qui révèle les talents insoupçonnés de nos jeunes artistes.',
                'tags'        => ['Créativité', 'Activités', 'Arts'],
                'commentaires_list' => [
                    ['auteur' => 'Mme Dossou', 'date' => '22 Mars 2026 à 10h20', 'note' => 5, 'texte' => 'Ma fille adore les ateliers créatifs du jeudi. Elle revient toujours avec des créations magnifiques !'],
                    ['auteur' => 'M. Adjovi',  'date' => '23 Mars 2026 à 15h45', 'note' => 4, 'texte' => 'Mon fils s\'est découvert une passion pour la peinture grâce aux ateliers du CS SALANON.'],
                ],
            ],
            [
                'slug'        => 'environnement-positif-jeunes-esprits',
                'titre'       => 'Comment un environnement scolaire positif façonne les jeunes esprits',
                'image'       => 'blog-post-3.jpg',
                'image_detail'=> 'blog-post-4.jpg',
                'image2'      => 'blog-post-5.jpg',
                'image3'      => 'blog-post-6.jpg',
                'date'        => '25 Mars 2026',
                'auteur'      => 'Direction',
                'categorie'   => 'Bien-être',
                'commentaires'=> 22,
                'intro'       => 'L\'environnement dans lequel évolue un enfant influence profondément son développement. Au CS SALANON, nous créons chaque jour un espace bienveillant et stimulant.',
                'contenu1'    => 'Un environnement scolaire positif se caractérise par des relations de confiance entre élèves et enseignants, un cadre physique adapté et une culture de l\'encouragement.',
                'contenu2'    => 'Nous avons investi dans la rénovation de nos salles de classe, l\'aménagement d\'espaces verts et la création de coins lecture pour offrir aux élèves un cadre inspirant.',
                'citation'    => '"Un enfant heureux à l\'école est un enfant qui apprend mieux et qui grandit mieux."',
                'contenu3'    => 'Notre programme de développement socio-émotionnel contribue à créer une communauté scolaire solidaire où chaque enfant se sent en sécurité et valorisé.',
                'tags'        => ['Bien-être', 'Environnement', 'Épanouissement'],
                'commentaires_list' => [
                    ['auteur' => 'Mme Houédanou', 'date' => '28 Mars 2026 à 08h30', 'note' => 5, 'texte' => 'Je suis vraiment impressionnée par l\'atmosphère qui règne dans cette école. Mon enfant est épanoui chaque matin.'],
                    ['auteur' => 'M. Gbaguidi',   'date' => '29 Mars 2026 à 11h00', 'note' => 5, 'texte' => 'Bravo à toute l\'équipe du CS SALANON pour ce travail remarquable.'],
                ],
            ],
        ];
    }

    // Méthode publique pour le SearchController
    public function getArticlesPublic(): array
    {
        return $this->articles();
    }

    public function index()
    {
        $articles = $this->articles();
        return view('pages.news', compact('articles'));
    }

    public function show(string $slug)
    {
        $article = collect($this->articles())->firstWhere('slug', $slug);
        if (!$article) abort(404);

        $recents = collect($this->articles())
            ->where('slug', '!=', $slug)
            ->take(2)->values()->all();

        return view('pages.news-details', compact('article', 'recents'));
    }
}