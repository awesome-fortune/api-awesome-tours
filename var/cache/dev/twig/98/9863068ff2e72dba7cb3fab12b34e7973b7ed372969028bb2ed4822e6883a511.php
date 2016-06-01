<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_793ec0206e6972c0bdcd7a96843d59cbad49a1edb79cbacb3011c5b70efe2c71 extends Twig_Template
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
        $__internal_8874f7feaf56e12d47fe78b27bbff5c48b8cd6d2fcd915da8efb51d4a3731f06 = $this->env->getExtension("native_profiler");
        $__internal_8874f7feaf56e12d47fe78b27bbff5c48b8cd6d2fcd915da8efb51d4a3731f06->enter($__internal_8874f7feaf56e12d47fe78b27bbff5c48b8cd6d2fcd915da8efb51d4a3731f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8874f7feaf56e12d47fe78b27bbff5c48b8cd6d2fcd915da8efb51d4a3731f06->leave($__internal_8874f7feaf56e12d47fe78b27bbff5c48b8cd6d2fcd915da8efb51d4a3731f06_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
