<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class BlogChatteActuelleController extends AbstractController
{
    /**
     * @Route("/BlogChatteActuelle", name="BlogChatteActuelle")
     */
    public function index()
    {
        return $this->render('BlogChatteActuelle/index.html.twig', [
            'controller_name' => 'BlogChatteActuelleController',
        ]);
    }

    /**
     * @Route("/",name="home")
     */

    public function home()
    {
        return $this->render('BlogChatteActuelle/home.html.twig');
    }

    /**
     * @Route("/BlogChatteActuelle/article/12", name="BlogChatteActuelleShow")
     */
    public function show(){
        return $this->render('BlogChatteActuelle/show.html.twig');
    }
}
