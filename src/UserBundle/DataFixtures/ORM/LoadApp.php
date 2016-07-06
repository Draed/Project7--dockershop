<?php
// src/UserBundle/DataFixtures/ORM/LoadApp.php

namespace UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ShopBundle\Entity\App;

class LoadApp implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Les noms d'applicationà créer
    $listNames = array('blog', 'redmine', 'minecraft');
    $version = '1.0';
    $image = 'default300x225.png';
    $parametres = '-p 80:80';

    foreach ($listNames as $name) {
      // On crée l'app
      $app = new App;

      $app->setName($name);
      $app->setDescription($name);
      $app->setVersion($version);
      $app->setImage($image);
      $app->setParametres($parametres);


      // On le persiste
      $manager->persist($app);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}