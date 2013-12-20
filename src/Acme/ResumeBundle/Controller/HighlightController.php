<?php

namespace Acme\ResumeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\ResumeBundle\Entity\Highlight;
use Symfony\Component\HttpFoundation\Response;

class HighlightController extends Controller
{
    
    public function highlightAction()
	{
  	     $highlights = $this->getDoctrine()
        ->getRepository('AcmeResumeBundle:Highlight')
        ->findAll();
        
        foreach ($highlights as $key=>$value){
        	$return[] = $highlights[$key]->getQualifications();
        }
        

      $response = new Response(json_encode($return));
	  $response->headers->set('Content-Type', 'application/json');
      return $response;
  
	}	
	
  
}
