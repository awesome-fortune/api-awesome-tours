<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_37d2a28fe2f52986c23aa3b183e5b03a2e4ebe46e590baa42a45c58f9064ce44 extends Twig_Template
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
        $__internal_127422a510f53d006354db4fa0e954aab03308b4a8525671e1f35a6398f16588 = $this->env->getExtension("native_profiler");
        $__internal_127422a510f53d006354db4fa0e954aab03308b4a8525671e1f35a6398f16588->enter($__internal_127422a510f53d006354db4fa0e954aab03308b4a8525671e1f35a6398f16588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_127422a510f53d006354db4fa0e954aab03308b4a8525671e1f35a6398f16588->leave($__internal_127422a510f53d006354db4fa0e954aab03308b4a8525671e1f35a6398f16588_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
