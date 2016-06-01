<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c7856187a5303876218e163ce9c07c6098213efdba8be2f3c644a84ff4b8fa77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7033863033903ad18fb362074ad33a0a7410f39a25e2a3af0a0d0ecadd24b411 = $this->env->getExtension("native_profiler");
        $__internal_7033863033903ad18fb362074ad33a0a7410f39a25e2a3af0a0d0ecadd24b411->enter($__internal_7033863033903ad18fb362074ad33a0a7410f39a25e2a3af0a0d0ecadd24b411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7033863033903ad18fb362074ad33a0a7410f39a25e2a3af0a0d0ecadd24b411->leave($__internal_7033863033903ad18fb362074ad33a0a7410f39a25e2a3af0a0d0ecadd24b411_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db2d90fc613422349560e5ba74d4dfd5d57b27b95cecb7ae90309a158b12fcec = $this->env->getExtension("native_profiler");
        $__internal_db2d90fc613422349560e5ba74d4dfd5d57b27b95cecb7ae90309a158b12fcec->enter($__internal_db2d90fc613422349560e5ba74d4dfd5d57b27b95cecb7ae90309a158b12fcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_db2d90fc613422349560e5ba74d4dfd5d57b27b95cecb7ae90309a158b12fcec->leave($__internal_db2d90fc613422349560e5ba74d4dfd5d57b27b95cecb7ae90309a158b12fcec_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_301c9354e5eb7c1af8bfe74a7a308fc5fc54e26a10501947f0b76b5521b47f6f = $this->env->getExtension("native_profiler");
        $__internal_301c9354e5eb7c1af8bfe74a7a308fc5fc54e26a10501947f0b76b5521b47f6f->enter($__internal_301c9354e5eb7c1af8bfe74a7a308fc5fc54e26a10501947f0b76b5521b47f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_301c9354e5eb7c1af8bfe74a7a308fc5fc54e26a10501947f0b76b5521b47f6f->leave($__internal_301c9354e5eb7c1af8bfe74a7a308fc5fc54e26a10501947f0b76b5521b47f6f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab460d40d385325c6640d91423b2eec5eca55faf4515c8dc5454741e6a46b80b = $this->env->getExtension("native_profiler");
        $__internal_ab460d40d385325c6640d91423b2eec5eca55faf4515c8dc5454741e6a46b80b->enter($__internal_ab460d40d385325c6640d91423b2eec5eca55faf4515c8dc5454741e6a46b80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ab460d40d385325c6640d91423b2eec5eca55faf4515c8dc5454741e6a46b80b->leave($__internal_ab460d40d385325c6640d91423b2eec5eca55faf4515c8dc5454741e6a46b80b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
