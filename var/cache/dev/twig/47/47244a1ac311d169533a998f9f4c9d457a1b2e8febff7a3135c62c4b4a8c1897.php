<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b2c36e80710547909ec3937ceb2f6ea945b014dd484a0a8559f198d9c75633ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73e6f9a0a54cedeb51110c98547fcf4d6d7468eeb28cf2d69360bea53952d20a = $this->env->getExtension("native_profiler");
        $__internal_73e6f9a0a54cedeb51110c98547fcf4d6d7468eeb28cf2d69360bea53952d20a->enter($__internal_73e6f9a0a54cedeb51110c98547fcf4d6d7468eeb28cf2d69360bea53952d20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_73e6f9a0a54cedeb51110c98547fcf4d6d7468eeb28cf2d69360bea53952d20a->leave($__internal_73e6f9a0a54cedeb51110c98547fcf4d6d7468eeb28cf2d69360bea53952d20a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb325243eb6550ec88675f26564a9a250507bbf1fd394d6c7ae1b9a487b935b5 = $this->env->getExtension("native_profiler");
        $__internal_eb325243eb6550ec88675f26564a9a250507bbf1fd394d6c7ae1b9a487b935b5->enter($__internal_eb325243eb6550ec88675f26564a9a250507bbf1fd394d6c7ae1b9a487b935b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eb325243eb6550ec88675f26564a9a250507bbf1fd394d6c7ae1b9a487b935b5->leave($__internal_eb325243eb6550ec88675f26564a9a250507bbf1fd394d6c7ae1b9a487b935b5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
