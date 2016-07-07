<?php

namespace LocalRepoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Docker\Docker;

class DefaultController extends Controller
{
    public function indexAction()
    {


		$docker = new Docker();
		$containers = $docker->getContainerManager()->findAll();
		return $this->render('LocalRepoBundle:Default:index.html.twig', array(
            'containers' => $containers,
        ));

    }
}
