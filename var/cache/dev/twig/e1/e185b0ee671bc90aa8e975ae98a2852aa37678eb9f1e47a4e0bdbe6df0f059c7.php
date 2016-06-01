<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_420abbb7c9040458b1cbbf36a52b96d93e837194b950f69649a32e122f5b3675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c96ad9217756e8e12b5ba271c0adc63bdc4a7514a8f177904139a965a2a621d0 = $this->env->getExtension("native_profiler");
        $__internal_c96ad9217756e8e12b5ba271c0adc63bdc4a7514a8f177904139a965a2a621d0->enter($__internal_c96ad9217756e8e12b5ba271c0adc63bdc4a7514a8f177904139a965a2a621d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c96ad9217756e8e12b5ba271c0adc63bdc4a7514a8f177904139a965a2a621d0->leave($__internal_c96ad9217756e8e12b5ba271c0adc63bdc4a7514a8f177904139a965a2a621d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_735fff7976253733af9e65add0d9fffff85a7e98a05cbbb8cce4c1d659d39e79 = $this->env->getExtension("native_profiler");
        $__internal_735fff7976253733af9e65add0d9fffff85a7e98a05cbbb8cce4c1d659d39e79->enter($__internal_735fff7976253733af9e65add0d9fffff85a7e98a05cbbb8cce4c1d659d39e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_735fff7976253733af9e65add0d9fffff85a7e98a05cbbb8cce4c1d659d39e79->leave($__internal_735fff7976253733af9e65add0d9fffff85a7e98a05cbbb8cce4c1d659d39e79_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17c9030c4de2b5d5d2a3992b1ea4654ca4cd347ad967487a3bfed68022b76391 = $this->env->getExtension("native_profiler");
        $__internal_17c9030c4de2b5d5d2a3992b1ea4654ca4cd347ad967487a3bfed68022b76391->enter($__internal_17c9030c4de2b5d5d2a3992b1ea4654ca4cd347ad967487a3bfed68022b76391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_17c9030c4de2b5d5d2a3992b1ea4654ca4cd347ad967487a3bfed68022b76391->leave($__internal_17c9030c4de2b5d5d2a3992b1ea4654ca4cd347ad967487a3bfed68022b76391_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b8b01d534b4eb428fe37c84ffa3aefae488a402b354f2ffc045528fd8f3f696 = $this->env->getExtension("native_profiler");
        $__internal_7b8b01d534b4eb428fe37c84ffa3aefae488a402b354f2ffc045528fd8f3f696->enter($__internal_7b8b01d534b4eb428fe37c84ffa3aefae488a402b354f2ffc045528fd8f3f696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7b8b01d534b4eb428fe37c84ffa3aefae488a402b354f2ffc045528fd8f3f696->leave($__internal_7b8b01d534b4eb428fe37c84ffa3aefae488a402b354f2ffc045528fd8f3f696_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
