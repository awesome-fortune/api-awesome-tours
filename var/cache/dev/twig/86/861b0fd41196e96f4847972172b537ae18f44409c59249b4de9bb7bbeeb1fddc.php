<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_08dadc62e4d381748a6f820989a01f472140ffbc8064bd6675022afb21c05ec7 extends Twig_Template
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
        $__internal_c1939cc2591e729e8b0922e6e35f56bea36880de33190cd855d993157aa30574 = $this->env->getExtension("native_profiler");
        $__internal_c1939cc2591e729e8b0922e6e35f56bea36880de33190cd855d993157aa30574->enter($__internal_c1939cc2591e729e8b0922e6e35f56bea36880de33190cd855d993157aa30574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c1939cc2591e729e8b0922e6e35f56bea36880de33190cd855d993157aa30574->leave($__internal_c1939cc2591e729e8b0922e6e35f56bea36880de33190cd855d993157aa30574_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
