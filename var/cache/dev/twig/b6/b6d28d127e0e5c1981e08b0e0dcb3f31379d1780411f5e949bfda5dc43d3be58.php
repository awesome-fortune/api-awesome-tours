<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_cc2335206cf383fda54547740fe6d0596ab0e86e83598acf06e68aff7117142d extends Twig_Template
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
        $__internal_074a527b3cabbb62753320fe0dc1967c90401d3f90d41c6f7555cfa90d09da2f = $this->env->getExtension("native_profiler");
        $__internal_074a527b3cabbb62753320fe0dc1967c90401d3f90d41c6f7555cfa90d09da2f->enter($__internal_074a527b3cabbb62753320fe0dc1967c90401d3f90d41c6f7555cfa90d09da2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_074a527b3cabbb62753320fe0dc1967c90401d3f90d41c6f7555cfa90d09da2f->leave($__internal_074a527b3cabbb62753320fe0dc1967c90401d3f90d41c6f7555cfa90d09da2f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
