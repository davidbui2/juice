<?php

/* AcmeResumeBundle:Default:index.html.twig */
class __TwigTemplate_b2f3974e0193110e272949d446c46433e3f6514e72a068652c1f3fb95e47455e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "name"), "html", null, true);
        echo "</div>
<div>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "address"), "html", null, true);
        echo "</div>
<div>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "website"), "html", null, true);
        echo "</div>
<div>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "email"), "html", null, true);
        echo "</div>
<div>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "phone"), "html", null, true);
        echo "</div>

 <ul>
 ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["highlight"]) ? $context["highlight"] : $this->getContext($context, "highlight")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 9
            echo "     <li> ";
            echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "html", null, true);
            echo "  </li>                                                 
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo " </ul>
 

 ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 15
            echo "     \t
     <div> job id: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"), "html", null, true);
            echo "  </div>   
     <div> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position"), "html", null, true);
            echo "  </div> 
     <div> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company"), "html", null, true);
            echo "  </div> 
     <div> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "startdate"), "date"), "html", null, true);
            echo "  </div> 
     <div> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "enddate"), "date"), "html", null, true);
            echo "  </div> 
      
     <ul>
\t\t ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "experiences"));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 24
                echo "     \t\t<li> ";
                echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "html", null, true);
                echo "  </li>                                                 
 \t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo " \t </ul>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "AcmeResumeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  93 => 24,  89 => 23,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  64 => 15,  60 => 14,  55 => 11,  46 => 9,  42 => 8,  36 => 5,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
