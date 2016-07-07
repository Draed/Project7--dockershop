<?php

namespace LocalRepoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LocalRepoBundle:Default:index.html.twig');
    }
}
