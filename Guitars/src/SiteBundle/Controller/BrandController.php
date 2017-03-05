<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BrandController extends Controller
{
    /**
     * Matches /* exactly
     *
     * @Route("/{brandName}", name="brand_oneBrand")
     */
    public function oneBrandAction($brandName)
    {
        $em = $this->getDoctrine()->getManager();
        $brand = $em->getRepository('SiteBundle:Brand')->find($brandName);

        // permet de renvoyer vers l'affichage de la page
        return $this->render('SiteBundle:Public:brand.html.twig', array(
            'brand' => $brand
        ));
    }

}

