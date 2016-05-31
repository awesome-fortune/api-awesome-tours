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
        $__internal_f31551c5bcc9a0abb51876d59bae319031fcf7088999c38da4a668546b66703d = $this->env->getExtension("native_profiler");
        $__internal_f31551c5bcc9a0abb51876d59bae319031fcf7088999c38da4a668546b66703d->enter($__internal_f31551c5bcc9a0abb51876d59bae319031fcf7088999c38da4a668546b66703d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f31551c5bcc9a0abb51876d59bae319031fcf7088999c38da4a668546b66703d->leave($__internal_f31551c5bcc9a0abb51876d59bae319031fcf7088999c38da4a668546b66703d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ab775e482b8bf51430139c8e05ed8b429ab9db10879f6d7912d19f6f7f18fcb = $this->env->getExtension("native_profiler");
        $__internal_2ab775e482b8bf51430139c8e05ed8b429ab9db10879f6d7912d19f6f7f18fcb->enter($__internal_2ab775e482b8bf51430139c8e05ed8b429ab9db10879f6d7912d19f6f7f18fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2ab775e482b8bf51430139c8e05ed8b429ab9db10879f6d7912d19f6f7f18fcb->leave($__internal_2ab775e482b8bf51430139c8e05ed8b429ab9db10879f6d7912d19f6f7f18fcb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb8b62f0838603d60dc3f460fc5180cf771030be9b85974391ac0f3c86a20687 = $this->env->getExtension("native_profiler");
        $__internal_cb8b62f0838603d60dc3f460fc5180cf771030be9b85974391ac0f3c86a20687->enter($__internal_cb8b62f0838603d60dc3f460fc5180cf771030be9b85974391ac0f3c86a20687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb8b62f0838603d60dc3f460fc5180cf771030be9b85974391ac0f3c86a20687->leave($__internal_cb8b62f0838603d60dc3f460fc5180cf771030be9b85974391ac0f3c86a20687_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_63c90d43ae6403b96257ef7815f595e9c1a0ed76a550ffd1e3f804ac4b1bf70d = $this->env->getExtension("native_profiler");
        $__internal_63c90d43ae6403b96257ef7815f595e9c1a0ed76a550ffd1e3f804ac4b1bf70d->enter($__internal_63c90d43ae6403b96257ef7815f595e9c1a0ed76a550ffd1e3f804ac4b1bf70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_63c90d43ae6403b96257ef7815f595e9c1a0ed76a550ffd1e3f804ac4b1bf70d->leave($__internal_63c90d43ae6403b96257ef7815f595e9c1a0ed76a550ffd1e3f804ac4b1bf70d_prof);

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
