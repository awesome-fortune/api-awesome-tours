<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4f986af751dc97fc90cf53e537d7d0973b453f3fd8c208866d959f24b6381833 extends Twig_Template
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
        $__internal_d15c9affc8cefbdac784170c817c071e02396f70ebfb8cf5248d055e0c5655a9 = $this->env->getExtension("native_profiler");
        $__internal_d15c9affc8cefbdac784170c817c071e02396f70ebfb8cf5248d055e0c5655a9->enter($__internal_d15c9affc8cefbdac784170c817c071e02396f70ebfb8cf5248d055e0c5655a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d15c9affc8cefbdac784170c817c071e02396f70ebfb8cf5248d055e0c5655a9->leave($__internal_d15c9affc8cefbdac784170c817c071e02396f70ebfb8cf5248d055e0c5655a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
