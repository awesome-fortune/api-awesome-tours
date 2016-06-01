<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_420abbb7c9040458b1cbbf36a52b96d93e837194b950f69649a32e122f5b3675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_7f5efb975bc2e73087d6ad2d87476766684434a4113df8e2ed099108f2e5bb5a = $this->env->getExtension("native_profiler");
        $__internal_7f5efb975bc2e73087d6ad2d87476766684434a4113df8e2ed099108f2e5bb5a->enter($__internal_7f5efb975bc2e73087d6ad2d87476766684434a4113df8e2ed099108f2e5bb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f5efb975bc2e73087d6ad2d87476766684434a4113df8e2ed099108f2e5bb5a->leave($__internal_7f5efb975bc2e73087d6ad2d87476766684434a4113df8e2ed099108f2e5bb5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d7c7e0eb985c1660f914fd8275c3b1785d2a53d69ed2d9f52f3291ce902dd023 = $this->env->getExtension("native_profiler");
        $__internal_d7c7e0eb985c1660f914fd8275c3b1785d2a53d69ed2d9f52f3291ce902dd023->enter($__internal_d7c7e0eb985c1660f914fd8275c3b1785d2a53d69ed2d9f52f3291ce902dd023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d7c7e0eb985c1660f914fd8275c3b1785d2a53d69ed2d9f52f3291ce902dd023->leave($__internal_d7c7e0eb985c1660f914fd8275c3b1785d2a53d69ed2d9f52f3291ce902dd023_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5880d89af06a18c8af0bf7a22a59501a80ae5f64a8f138a04a790d29296be6d = $this->env->getExtension("native_profiler");
        $__internal_a5880d89af06a18c8af0bf7a22a59501a80ae5f64a8f138a04a790d29296be6d->enter($__internal_a5880d89af06a18c8af0bf7a22a59501a80ae5f64a8f138a04a790d29296be6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a5880d89af06a18c8af0bf7a22a59501a80ae5f64a8f138a04a790d29296be6d->leave($__internal_a5880d89af06a18c8af0bf7a22a59501a80ae5f64a8f138a04a790d29296be6d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d2b335dc95a6c2ff6632043f751fe659c3d64768656e3939d65e1ac826d9f29 = $this->env->getExtension("native_profiler");
        $__internal_7d2b335dc95a6c2ff6632043f751fe659c3d64768656e3939d65e1ac826d9f29->enter($__internal_7d2b335dc95a6c2ff6632043f751fe659c3d64768656e3939d65e1ac826d9f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d2b335dc95a6c2ff6632043f751fe659c3d64768656e3939d65e1ac826d9f29->leave($__internal_7d2b335dc95a6c2ff6632043f751fe659c3d64768656e3939d65e1ac826d9f29_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
