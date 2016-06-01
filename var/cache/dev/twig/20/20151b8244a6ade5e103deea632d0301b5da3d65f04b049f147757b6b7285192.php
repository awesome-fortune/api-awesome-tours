<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_67c309f16ad971fb529fd7334980b714e1023bb0f67c21ae9c71b1aec4bb0730 extends Twig_Template
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
        $__internal_b72a2473c6ab747aa9c998ca5fb5f2cffc48c72986c00858ef84446c33078db8 = $this->env->getExtension("native_profiler");
        $__internal_b72a2473c6ab747aa9c998ca5fb5f2cffc48c72986c00858ef84446c33078db8->enter($__internal_b72a2473c6ab747aa9c998ca5fb5f2cffc48c72986c00858ef84446c33078db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b72a2473c6ab747aa9c998ca5fb5f2cffc48c72986c00858ef84446c33078db8->leave($__internal_b72a2473c6ab747aa9c998ca5fb5f2cffc48c72986c00858ef84446c33078db8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
