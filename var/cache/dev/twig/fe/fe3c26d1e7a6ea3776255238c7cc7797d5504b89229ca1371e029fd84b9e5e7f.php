<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_69b0080e4721667a27b55a39f0ab8706eb3d2c7ba6e9c96354cc4425346d73ec extends Twig_Template
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
        $__internal_ca035aa39121a3cccfe66c33028ab4106de780a3a09ca36dfb7c3f1d00d3bf20 = $this->env->getExtension("native_profiler");
        $__internal_ca035aa39121a3cccfe66c33028ab4106de780a3a09ca36dfb7c3f1d00d3bf20->enter($__internal_ca035aa39121a3cccfe66c33028ab4106de780a3a09ca36dfb7c3f1d00d3bf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ca035aa39121a3cccfe66c33028ab4106de780a3a09ca36dfb7c3f1d00d3bf20->leave($__internal_ca035aa39121a3cccfe66c33028ab4106de780a3a09ca36dfb7c3f1d00d3bf20_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
