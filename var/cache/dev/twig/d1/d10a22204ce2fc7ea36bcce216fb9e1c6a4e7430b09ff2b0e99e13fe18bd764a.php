<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1394082f925a1d77f4bc3fa7513a654fb065e6c4836358284c4cbabcca1fbd19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ea2e88389839c4114193ee0ec8791ac2ed0e7b52884ed67246aeff71a45820bc = $this->env->getExtension("native_profiler");
        $__internal_ea2e88389839c4114193ee0ec8791ac2ed0e7b52884ed67246aeff71a45820bc->enter($__internal_ea2e88389839c4114193ee0ec8791ac2ed0e7b52884ed67246aeff71a45820bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea2e88389839c4114193ee0ec8791ac2ed0e7b52884ed67246aeff71a45820bc->leave($__internal_ea2e88389839c4114193ee0ec8791ac2ed0e7b52884ed67246aeff71a45820bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee87baf6e151f1d761acc597297521eca2dc4b44277d789fb29b0204f8aba7c4 = $this->env->getExtension("native_profiler");
        $__internal_ee87baf6e151f1d761acc597297521eca2dc4b44277d789fb29b0204f8aba7c4->enter($__internal_ee87baf6e151f1d761acc597297521eca2dc4b44277d789fb29b0204f8aba7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ee87baf6e151f1d761acc597297521eca2dc4b44277d789fb29b0204f8aba7c4->leave($__internal_ee87baf6e151f1d761acc597297521eca2dc4b44277d789fb29b0204f8aba7c4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f10220de11a977f805d0daeabcace631be23934b970c5a65d23707d4471e938 = $this->env->getExtension("native_profiler");
        $__internal_2f10220de11a977f805d0daeabcace631be23934b970c5a65d23707d4471e938->enter($__internal_2f10220de11a977f805d0daeabcace631be23934b970c5a65d23707d4471e938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2f10220de11a977f805d0daeabcace631be23934b970c5a65d23707d4471e938->leave($__internal_2f10220de11a977f805d0daeabcace631be23934b970c5a65d23707d4471e938_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
