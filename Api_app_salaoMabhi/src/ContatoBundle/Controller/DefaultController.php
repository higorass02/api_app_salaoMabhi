<?php

namespace ContatoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/contato/novo")
     */
    public function indexAction()
    {
        return $this->render('ContatoBundle:Default:index.html.twig');
    }
}
