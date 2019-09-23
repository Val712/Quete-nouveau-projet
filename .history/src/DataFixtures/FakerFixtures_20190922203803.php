<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Personne;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;
 
class FakerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
 
        // On configure dans quelles langues nous voulons nos données
        $faker = Faker\Factory::create('fr_FR');
 
        // on créé 50 articless
        for ($i = 0; $i < 50; $i++) {
            $article = new Article();
            $article->setTitle($faker->titre);
            $article->setContent($faker->contenu);
          
            
        }
 
        $manager->flush();
    }
}