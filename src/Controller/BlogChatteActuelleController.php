<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Titre;
use App\Repository\TitreRepository;


class BlogChatteActuelleController extends AbstractController
{
    /**
     * @Route("/BlogChatteActuelle", name="BlogChatteActuelle")
     */
    public function index(TitreRepository $repo)
    {
       

        $articles = $repo->findAll();

        return $this->render('BlogChatteActuelle/index.html.twig', [
            'controller_name' => 'BlogChatteActuelleController',
            'articles' => $articles
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
     * @Route("/BlogChatteActuelle/{id}", name="BlogChatteActuelleShow")
     */
    public function show(Titre $article){
        
        return $this->render('BlogChatteActuelle/show.html.twig',[
            'article' => $article
        ]);
    }


}
