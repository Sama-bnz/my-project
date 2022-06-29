<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


    class BlogController
    {
        /**
        * @Route("/blog", name="blog")
        */
        public function blog()
        {
        return new Response("titre d'un article");
        }
    }