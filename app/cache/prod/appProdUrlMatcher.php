<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // acme_resume_homepage
        if (rtrim($pathinfo, '/') === '/resume') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_resume_homepage');
            }

            return array (  '_controller' => 'Acme\\ResumeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_resume_homepage',);
        }

        // acme_resume_create
        if (rtrim($pathinfo, '/') === '/create') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_resume_create');
            }

            return array (  '_controller' => 'Acme\\ResumeBundle\\Controller\\DefaultController::createAction',  '_route' => 'acme_resume_create',);
        }

        // acme_resume_profile
        if (0 === strpos($pathinfo, '/profile') && preg_match('#^/profile(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_resume_profile')), array (  '_controller' => 'Acme\\ResumeBundle\\Controller\\ProfileController::profileAction',  'id' => 1,));
        }

        // acme_resume_job
        if (0 === strpos($pathinfo, '/job') && preg_match('#^/job/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_resume_job')), array (  '_controller' => 'Acme\\ResumeBundle\\Controller\\JobController::jobAction',));
        }

        // acme_resume_highlight
        if (rtrim($pathinfo, '/') === '/highlight') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_resume_highlight');
            }

            return array (  '_controller' => 'Acme\\ResumeBundle\\Controller\\HighlightController::highlightAction',  '_route' => 'acme_resume_highlight',);
        }

        // acme_resume_jobs
        if (0 === strpos($pathinfo, '/jobs') && preg_match('#^/jobs/(?P<startdate>[^/]++)/(?P<enddate>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_resume_jobs')), array (  '_controller' => 'Acme\\ResumeBundle\\Controller\\JobController::jobsAction',));
        }

        // acme_resume_experiences
        if (rtrim($pathinfo, '/') === '/experiences') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_resume_experiences');
            }

            return array (  '_controller' => 'Acme\\ResumeBundle\\Controller\\ExperienceController::experiencesAction',  '_route' => 'acme_resume_experiences',);
        }

        // acme_helloo_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_helloo_homepage')), array (  '_controller' => 'Acme\\HellooBundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
