<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_417ce98f32d1c68b7a0f6b242203956fc87e1c36d847f184248d4cbba5e9ef38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4320e53a4eec06e9c0b6facc92386cf3f35026d252164a62cf79ae2982aaeef4 = $this->env->getExtension("native_profiler");
        $__internal_4320e53a4eec06e9c0b6facc92386cf3f35026d252164a62cf79ae2982aaeef4->enter($__internal_4320e53a4eec06e9c0b6facc92386cf3f35026d252164a62cf79ae2982aaeef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4320e53a4eec06e9c0b6facc92386cf3f35026d252164a62cf79ae2982aaeef4->leave($__internal_4320e53a4eec06e9c0b6facc92386cf3f35026d252164a62cf79ae2982aaeef4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_398ae1b4abc096e5eb273c71a87c9ee4e42d667098a20a6fe14a2f7c76559af5 = $this->env->getExtension("native_profiler");
        $__internal_398ae1b4abc096e5eb273c71a87c9ee4e42d667098a20a6fe14a2f7c76559af5->enter($__internal_398ae1b4abc096e5eb273c71a87c9ee4e42d667098a20a6fe14a2f7c76559af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_398ae1b4abc096e5eb273c71a87c9ee4e42d667098a20a6fe14a2f7c76559af5->leave($__internal_398ae1b4abc096e5eb273c71a87c9ee4e42d667098a20a6fe14a2f7c76559af5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b176424eabfd45975f3b5ee10b2631428e2f3200fe5079bf97283d57c4df5c9 = $this->env->getExtension("native_profiler");
        $__internal_2b176424eabfd45975f3b5ee10b2631428e2f3200fe5079bf97283d57c4df5c9->enter($__internal_2b176424eabfd45975f3b5ee10b2631428e2f3200fe5079bf97283d57c4df5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b176424eabfd45975f3b5ee10b2631428e2f3200fe5079bf97283d57c4df5c9->leave($__internal_2b176424eabfd45975f3b5ee10b2631428e2f3200fe5079bf97283d57c4df5c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f32cbe3fff37ef634f4577098118e13972138472eeed22ef67b1a0bb8448a4ad = $this->env->getExtension("native_profiler");
        $__internal_f32cbe3fff37ef634f4577098118e13972138472eeed22ef67b1a0bb8448a4ad->enter($__internal_f32cbe3fff37ef634f4577098118e13972138472eeed22ef67b1a0bb8448a4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f32cbe3fff37ef634f4577098118e13972138472eeed22ef67b1a0bb8448a4ad->leave($__internal_f32cbe3fff37ef634f4577098118e13972138472eeed22ef67b1a0bb8448a4ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
