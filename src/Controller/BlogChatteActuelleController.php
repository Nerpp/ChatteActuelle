<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogChatteActuelleController extends AbstractController
{
    /**
     * @Route("/blog/chatte/actuelle", name="blog_chatte_actuelle")
     */
    public function index()
    {
        return $this->render('blog_chatte_actuelle/index.html.twig', [
            'controller_name' => 'BlogChatteActuelleController',
        ]);
    }
}
