<?php


namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\FOSRestBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Users;


/**
 * @Route("/api, name='api_")
 */

class ArticleController extends FOSRestBundle
{

    public function homepage()
    {
        return new Response('pierwsza stronka');
    }

    /**
     * List of all users
     * @Rest\Get("/users")
     * @return Response
     */

    public function getUsers()
    {
        $repository = $this->getDoctrine()->getRepository(Users::class);
        $users = -$repository->findall();
        return $this->handleView($this->view($users));

    }

}