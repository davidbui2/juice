<?php

namespace Acme\ResumeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\ResumeBundle\Entity\Experience;

use Symfony\Component\HttpFoundation\Response;

class ExperienceController extends Controller
{

    
    public function experiencesAction()
	{
     $experiences = $this->getDoctrine()
        ->getRepository('AcmeResumeBundle:Experience')
        ->findAll();
        
        foreach ($experiences as $key=>$value){
        	$return[] = $experiences[$key]->getDescription();
        }
        
        
      $response = new Response(json_encode($return));
	  $response->headers->set('Content-Type', 'application/json');
      return $response;
	}	
	
}
