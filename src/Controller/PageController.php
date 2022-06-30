<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




//    class PageController
//    {
//        /**
//        * @Route("/")
//         * Je crée une route, en utilisant des commentaires PHP et "@Route" pour spécifier
//         * l'url de la page je veux crer la route situés au dessus de la méthode à appeler pour la page.
//         */
//        public function home()
//        {
//            //Je renvoie une réponse HTTP gràce à l'objet Response
//            //(du composant http fondation de symfony)
//            //ça affichera la phrase quand l'url "/" sera demandée
//            return new Response( 'Hello Acceuil');
//        }
//    }
//Creation de la classe
    class PageController extends AbstractController
    {
        /**
         * Je crée la route contact
         * @Route("/", name="contact")
         */
        //Je crée la fonction contact
        public function contact()
        {
            //Je renvoie la réponse HTTP gràace à l'objet Response
            return new Response("contact");
        }
    }

