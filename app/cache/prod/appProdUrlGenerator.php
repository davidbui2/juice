<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'acme_resume_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ResumeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resume/',    ),  ),  4 =>   array (  ),),
        'acme_resume_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ResumeBundle\\Controller\\DefaultController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create/',    ),  ),  4 =>   array (  ),),
        'acme_resume_profile' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ResumeBundle\\Controller\\ProfileController::profileAction',    'id' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/profile',    ),  ),  4 =>   array (  ),),
        'acme_resume_job' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ResumeBundle\\Controller\\JobController::jobAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/job',    ),  ),  4 =>   array (  ),),
        'acme_resume_highlight' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ResumeBundle\\Controller\\HighlightController::highlightAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/highlight/',    ),  ),  4 =>   array (  ),),
        'acme_resume_jobs' => array (  0 =>   array (    0 => 'startdate',    1 => 'enddate',  ),  1 =>   array (    '_controller' => 'Acme\\ResumeBundle\\Controller\\JobController::jobsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'enddate',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'startdate',    ),    2 =>     array (      0 => 'text',      1 => '/jobs',    ),  ),  4 =>   array (  ),),
        'acme_resume_experiences' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ResumeBundle\\Controller\\ExperienceController::experiencesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/experiences/',    ),  ),  4 =>   array (  ),),
        'acme_helloo_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\HellooBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
