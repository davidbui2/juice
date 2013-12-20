<?php

namespace Acme\ResumeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\ResumeBundle\Entity\Profile;
use Acme\ResumeBundle\Entity\Experience;
use Acme\ResumeBundle\Entity\Job;
use Acme\ResumeBundle\Entity\Highlight;

use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
   	  $profile = file_get_contents("http://localhost:8888/Symfony/web/app_dev.php/profile"); 
   	  $highlight = file_get_contents("http://localhost:8888/Symfony/web/app_dev.php/highlight/"); 
   	  $jobs = file_get_contents("http://localhost:8888/Symfony/web/app_dev.php/jobs/1/1"); 
      $job2 = file_get_contents("http://localhost:8888/Symfony/web/app_dev.php/job/2"); 
      $job3 = file_get_contents("http://localhost:8888/Symfony/web/app_dev.php/job/3"); 
     
     
      $profile = json_decode($profile);
      $highlight = json_decode($highlight);
      $jobs = json_decode($jobs);
      $job2 = json_decode($job2);
      $job3 = json_decode($job3);
     

      
      $content = $this->renderView(
  	  'AcmeResumeBundle:Default:index.html.twig',
     	array('profile' => $profile, 'highlight' => $highlight, 'jobs' => $jobs)
	  );
	  
	  return new Response($content);

   }
    
    
    public function createAction()
    {
    	$profile = new Profile();
    	$profile->setName('David Bui');
    	$profile->setAddress('123 fake street');
    	$profile->setWebsite('http://www.google.com');
    	$profile->setPhone('555-555-9049');
    	$profile->setEmail('bui.david@gmail.com');
    	
    	$highlight = new Highlight();
    	$highlight->setQualifications('Ability to fly');
    	$highlight->setProfile($profile);
    	
    	$highlight2 = new Highlight();
    	$highlight2->setQualifications('Can shoot laser beams from eyes');
    	$highlight2->setProfile($profile);
    	
    	$highlight3 = new Highlight();
    	$highlight3->setQualifications('Faster then the flash');
    	$highlight3->setProfile($profile);
    	
    	$job1 = new Job();
    	$job1->setCompany('Compu-Global-Hyper-Mega-Net');
    	$job1->setPosition('CEO');
    	$job1->setStartdate(new \DateTime('2005-01-01'));
    	$job1->setEnddate(new \DateTime('2006-01-01'));
    	$job1->setProfile($profile);
    	
    	$experience1 = new Experience();
    	$experience1->setDescription('dealt with Flanders');
    	$experience1->setJob($job1);
    	
    	$experience2 = new Experience();
    	$experience2->setDescription('fought Bill Gates');
    	$experience2->setJob($job1);
    	
    	
    	$job2 = new Job();
    	$job2->setCompany('Dunder Mifflin');
    	$job2->setPosition('Sales Director');
    	$job2->setStartdate(new \DateTime('2006-01-02'));
    	$job2->setEnddate(new \DateTime('2010-02-06'));
    	$job2->setProfile($profile);
    	
    	$experience3 = new Experience();
    	$experience3->setDescription('Sold 10k worth of paper in 2 months');
    	$experience3->setJob($job2);
    	
    	
    	$job3 = new Job();
    	$job3->setCompany('Initech');
    	$job3->setPosition('Customer Service Engineer');
    	$job3->setStartdate(new \DateTime('2010-02-07'));
    	$job3->setEnddate(new \DateTime('2013-06-22'));
    	$job3->setProfile($profile);
    	
    	$experience4 = new Experience();
    	$experience4->setDescription('Bought the specs to the engineers');
    	$experience4->setJob($job3);
    	
    	$experience5 = new Experience();
    	$experience5->setDescription('I have people skills. I am good at dealing with people.');
    	$experience5->setJob($job3);
    	
    	$em = $this->getDoctrine()->getManager();
    	$em->persist($profile);
    	$em->persist($highlight);
    	$em->persist($highlight2);
    	$em->persist($highlight3);
    	$em->persist($job1);
    	$em->persist($job2);
    	$em->persist($job3);
    	$em->persist($experience1);
    	$em->persist($experience2);
    	$em->persist($experience3);
    	$em->persist($experience4);
    	$em->persist($experience5);
    	$em->flush();
    	return new Response('Created new Profile id '.$profile->getId().' highlights '.$highlight->getId());
    	
    	
    	
    	
    	
    }
    


    
    
}
