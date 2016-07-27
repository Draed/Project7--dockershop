<?php

namespace LocalRepoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Docker\Docker;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	//refer to the doc :
    	//If the DOCKER_HOST environment variable is not set, it will use unix:///var/run/docker.sock as the default tcp address.
		$docker = new Docker();
		$containers = $docker->getContainerManager()->findAll();
		return $this->render('LocalRepoBundle:Default:index.html.twig', array(
            'containers' => $containers,
        ));

    }
}
