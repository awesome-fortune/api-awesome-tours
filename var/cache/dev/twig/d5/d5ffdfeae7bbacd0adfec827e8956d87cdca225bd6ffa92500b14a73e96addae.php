<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fccc2e8ff751d67104ea8df17a9d7f04c2239de794190e698361d5ccd1a2eb09 extends Twig_Template
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
        $__internal_842de736770e3cbb0bf1886d07122a74c7f11a310eb36a151d72ebe2e8e29b98 = $this->env->getExtension("native_profiler");
        $__internal_842de736770e3cbb0bf1886d07122a74c7f11a310eb36a151d72ebe2e8e29b98->enter($__internal_842de736770e3cbb0bf1886d07122a74c7f11a310eb36a151d72ebe2e8e29b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_842de736770e3cbb0bf1886d07122a74c7f11a310eb36a151d72ebe2e8e29b98->leave($__internal_842de736770e3cbb0bf1886d07122a74c7f11a310eb36a151d72ebe2e8e29b98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
