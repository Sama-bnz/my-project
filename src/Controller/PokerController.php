<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PokerController extends AbstractController
{
    /**
    * @Route("/poker", name="poker")
    */
    // Je passe en parametre de la methode poker, la classe
    // Request, on fais ensuite une variable $request
    // On stock Request dans une variable
    public function poker(Request $request)
    {
        // j'utilise l'objet Request et la propriété query
        // pour récupérer le parametre GET d'âge
        // je le stocke dans une variable
        $age = $request->query->get('age');

        // L'age est > à 18 donc on accepte
        if ($age >= 18) {
            return new Response("Salam met toi bien");
            // sinon je lui mets une message de refus
        } else {
            return $this->redirectToRoute("mineur");
        }

    }
}