<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0bf04b99810133fbd415412f9a91c034ec633fd7e4ec40588e0caa76eb0176bd extends Twig_Template
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
        $__internal_ce0f488956950197e63c4bc97a79149d5d78bbf5d29fb4cc868c09781ac8e3b8 = $this->env->getExtension("native_profiler");
        $__internal_ce0f488956950197e63c4bc97a79149d5d78bbf5d29fb4cc868c09781ac8e3b8->enter($__internal_ce0f488956950197e63c4bc97a79149d5d78bbf5d29fb4cc868c09781ac8e3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ce0f488956950197e63c4bc97a79149d5d78bbf5d29fb4cc868c09781ac8e3b8->leave($__internal_ce0f488956950197e63c4bc97a79149d5d78bbf5d29fb4cc868c09781ac8e3b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
