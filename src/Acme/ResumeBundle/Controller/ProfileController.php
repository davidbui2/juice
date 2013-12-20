<?php

namespace Acme\ResumeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\ResumeBundle\Entity\Profile;

use Symfony\Component\HttpFoundation\Response;

class ProfileController extends Controller
{
    public function profileAction($id)
	{
    $profile = $this->getDoctrine()
        ->getRepository('AcmeResumeBundle:Profile')
        ->find($id);
 
 		$return = array('name' => $profile->getName(), 
 						'address' => $profile->getAddress(),
 						'website' => $profile->getWebsite(),
 						'email' => $profile->getEmail(),
 						'phone' => $profile->getPhone());
        $response = new Response(); 
        $response->setContent(json_encode($return));
   			 
		$response->headers->set('Content-Type', 'application/json');
		return $response;
	}	
	

    
    
}
