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
        $__internal_88c58e1348f668aa012f415ed4be4c29fe4e3e22c45d50a91c9617b3b1cb2eb0 = $this->env->getExtension("native_profiler");
        $__internal_88c58e1348f668aa012f415ed4be4c29fe4e3e22c45d50a91c9617b3b1cb2eb0->enter($__internal_88c58e1348f668aa012f415ed4be4c29fe4e3e22c45d50a91c9617b3b1cb2eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88c58e1348f668aa012f415ed4be4c29fe4e3e22c45d50a91c9617b3b1cb2eb0->leave($__internal_88c58e1348f668aa012f415ed4be4c29fe4e3e22c45d50a91c9617b3b1cb2eb0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_925bfa6733a91286a959b99b24eeda9662f1d27d7d5a3eb69399abc5fea38871 = $this->env->getExtension("native_profiler");
        $__internal_925bfa6733a91286a959b99b24eeda9662f1d27d7d5a3eb69399abc5fea38871->enter($__internal_925bfa6733a91286a959b99b24eeda9662f1d27d7d5a3eb69399abc5fea38871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_925bfa6733a91286a959b99b24eeda9662f1d27d7d5a3eb69399abc5fea38871->leave($__internal_925bfa6733a91286a959b99b24eeda9662f1d27d7d5a3eb69399abc5fea38871_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d468962f3911f1e52a0939bfed9a827ee466bca235c0410de875a50666654882 = $this->env->getExtension("native_profiler");
        $__internal_d468962f3911f1e52a0939bfed9a827ee466bca235c0410de875a50666654882->enter($__internal_d468962f3911f1e52a0939bfed9a827ee466bca235c0410de875a50666654882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d468962f3911f1e52a0939bfed9a827ee466bca235c0410de875a50666654882->leave($__internal_d468962f3911f1e52a0939bfed9a827ee466bca235c0410de875a50666654882_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fdb25f7b76c12e74d897f4655bd8fa3955550be448100d31f5a9b7084db9b6a = $this->env->getExtension("native_profiler");
        $__internal_7fdb25f7b76c12e74d897f4655bd8fa3955550be448100d31f5a9b7084db9b6a->enter($__internal_7fdb25f7b76c12e74d897f4655bd8fa3955550be448100d31f5a9b7084db9b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7fdb25f7b76c12e74d897f4655bd8fa3955550be448100d31f5a9b7084db9b6a->leave($__internal_7fdb25f7b76c12e74d897f4655bd8fa3955550be448100d31f5a9b7084db9b6a_prof);

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
