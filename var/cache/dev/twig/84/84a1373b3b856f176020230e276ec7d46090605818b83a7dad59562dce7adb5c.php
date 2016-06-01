<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b12224b95393f1a2d8aca1184b5c4a2dcfbc3bde448ecdb9656863469777e020 extends Twig_Template
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
        $__internal_be2eb90927e6c957c068a40380af4e780dd40ac0ea22fec0a7eb142a65e9c77f = $this->env->getExtension("native_profiler");
        $__internal_be2eb90927e6c957c068a40380af4e780dd40ac0ea22fec0a7eb142a65e9c77f->enter($__internal_be2eb90927e6c957c068a40380af4e780dd40ac0ea22fec0a7eb142a65e9c77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_be2eb90927e6c957c068a40380af4e780dd40ac0ea22fec0a7eb142a65e9c77f->leave($__internal_be2eb90927e6c957c068a40380af4e780dd40ac0ea22fec0a7eb142a65e9c77f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
