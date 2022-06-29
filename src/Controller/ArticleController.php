<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    //Je crée ma route
    /**
     * @Route("/article", name="article_show")
     */
    public function showArticle(Request $request)
    {
        //requete SQL "SELECT" * FROM article";
        //Je crée mon objet
        $articles = [
            1 => [
                'title' => "La canicule c'est pas cool",
                'contenu' => "Parce que il fait chaud "
            ],
            2 => [
                'title' => "L'eau c'est cool",
                'contenu' => "Je suis maintenant hydraté"
            ],
            3 => [
                'title' => "L'alcool c'est pas cool????!!",
                'contenu' => "Alors pourquoi il y as 'cool' dans alcool?!"
            ]
        ];

        //Je récupère l'id dans l'url
        $id = $request->query->get('id');

//         $ids = $request->query->get('id');
////        $titles = "";
////        foreach ($ids as $id) {
////            $titles .= " | " . $articles[$id]['title'];
////        }
////        return new Response($titles);

        //je trouve dans la liste des articles l'id selectionné
        $article = $articles [$id];

        //J'affiche maintenant la réponse

        return new Response($article['title'] . " " . $article['contenu']);

    }

    /**
     * @Route("/article/{id}", name="article_show_wildcard")
     * si je veux avoir une url plus "propre" je peux utiliser, au lieu d'un query parameter id,
     * une wildcard dans l'url
     * pour ça je créé mon url en précisant que l'id est variable en le passant entre accolades
     */
    // je demande à Symfony de récupérer la valeur de l'id en passant en parametre de la méthode
    // une variable qui a le même nom que la wildcard
    public function showArticleWildcard($id)
    {

        // fake requête SQL "SELECT * FROM article";
        $articles = [
            1 => [
                'title' => 'La canicule, il fait chaud',
                'content' => 'je transpire'
            ],
            2 => [
                'title' => 'Fin des moteurs thermiques en 2035',
                'content' => 'BROUM'
            ],
            3 => [
                'title' => "L'alcool c'est pas cool",
                'content' => "Pourquoi y'a cool dans alcool ?"
            ]
        ];

        // trouver dans la liste des articles l'article qui correspond à l'id récupéré
        $article = $articles[$id];

        // afficher son titre en réponse
        return new Response($article['title']);

    }
}
