<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
  public function indexAction()
  {
      $em = $this->getDoctrine()->getManager();
      $colocations = $em->getRepository('AppBundle:Colocation')->findAll();
      return $this->render('@App/default/index.html.twig', array(
          'colocations' => $colocations,
      ));
  }
}
