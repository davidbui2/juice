<?php

namespace Acme\ResumeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\ResumeBundle\Entity\Experience;
use Acme\ResumeBundle\Entity\Job;

use Symfony\Component\HttpFoundation\Response;

class JobController extends Controller
{

    
    public function jobAction($id)
	{
    $related_experiences = $this->getDoctrine()
        ->getRepository('AcmeResumeBundle:Experience')
        ->findByJob($id);
        
      foreach ($related_experiences as $key=>$value){
      	$descriptions[] = $related_experiences[$key]->getDescription();
      }
      $job = $related_experiences[0]->getJob();
      
  	  $return = array('id' => $job->getId(),
 					  'position' => $job->getPosition(),
 					  'company' => $job->getCompany(),
 					  'startdate' => $job->getStartdate(),
 					  'enddate' => $job->getEnddate(),
 					  'experiences' =>$descriptions
 					  );
 						
      $response = new Response(); 
      $response->setContent(json_encode($return ));
   		
	  $response->headers->set('Content-Type', 'application/json');
	  return $response;
  
	}	
	
	
	public function jobsAction($startdate, $enddate)
	{
	
       $jobs = $this->getDoctrine()
       ->getRepository('AcmeResumeBundle:Job')
       ->findAll();
        
        foreach ($jobs as $key=>$value){
            $job['id'] = $jobs[$key]->getId();
            $job['position'] = $jobs[$key]->getPosition();
            $job['company'] = $jobs[$key]->getCompany();
            $job['startdate'] = $jobs[$key]->getStartdate();
            $job['enddate'] = $jobs[$key]->getEnddate();
            
             $related_experiences = $this->getDoctrine()
             ->getRepository('AcmeResumeBundle:Experience')
             ->findByJob($jobs[$key]->getId());
        
            $descriptions = array();
            foreach ($related_experiences as $key=>$value){
            	$descriptions[] = $related_experiences[$key]->getDescription();
            }
            
            $job['experiences'] = $descriptions;
        	$return[] = $job;
        }
        

      $response = new Response(json_encode($return));
	  $response->headers->set('Content-Type', 'application/json');
      return $response;
	}	
    
}
