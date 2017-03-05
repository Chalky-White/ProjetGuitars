<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * Matches / exactly
     *
     * @Route("/", name="home_home")
     */
    public function homeAction()
    {
        return $this->render('SiteBundle:Public:index.html.twig');
    }
}
