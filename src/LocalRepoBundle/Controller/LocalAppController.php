<?php

namespace LocalRepoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Docker\Docker;                   
use Docker\API\Model\ContainerConfig;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use ShopBundle\Entity\LocalApp;


class LocalAppController extends Controller
{
    /**
     * Lists all App entities.
     *
     * @Route("/LocalApp", name="LocalApp")
     * @Method("GET")
     */
    public function indexAction()
    {


        //refer to the doc :
        //If the DOCKER_HOST environment variable is not set, it will use unix:///var/run/docker.sock as the default tcp address.
        $docker = new Docker();
        $containers = $docker->getContainerManager()->findAll();
        return $this->render('LocalRepoBundle:Default:index.html.twig', array(
            'containers' => $containers,
        ));


        $em = $this->getDoctrine()->getManager();

        $apps = $em->getRepository('LocalRepoBundle:LocalApp')->findAll();

        return $this->render('LocalRepoBundle:Default:index.html.twig', array(
            'apps' => $apps,
        ));
    }
}
