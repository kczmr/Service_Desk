<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('pierwsza stronka');
    }

    /**
     * @Route("/api/{slug}")
     */

    public function show($slug)
    {
        return new Response(sprintf(
            'uhh test: %s',
            $slug
        ));
    }

}