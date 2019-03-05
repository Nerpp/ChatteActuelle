<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Titre;

class TitreFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1;$i <= 10;$i++){
            $article = new Article();
            $article->settitre("Titre de l'article n°$i");
            $article->setarticle("<p>Contenu de l'article $i</p>");
            $article->setimage("http://placehold.it/350x150");
            $article->setdate(new \DateTime());
            $manager->persist($article);
        }

        $manager->flush();
    }
}
