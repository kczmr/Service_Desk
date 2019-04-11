<?php


namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Users;


/**
 * @Route("/user", name="user_")
 */

class ArticleController extends AbstractFOSRestController
{

    public function homepage()
    {
        return new Response('pierwsza stronka');
    }

    /**
     * List of all users
     * @Rest\Get("", name="get_all")
     * @return View
     */

    public function getUsers(TestUserRepository $userRepository)
    {

        $test = $userRepository->findAll();

        print_r($test);
        die();
        return $this->view();

    }

}