<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class GenusController
 * @package AppBundle\Controller
 */
class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}", name="genus_show_action")
     * @param string $genusName
     * @return Response
     */
    public function showAction($genusName)
    {
        return new Response('The genus: ' . $genusName);
    }
}