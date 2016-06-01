<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3a18333e8179c7c0600edb9e494272df6d5b32d24601abaad8fdbb5549b2b0ec extends Twig_Template
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
        $__internal_0f41e9e8cc0eb5f88cd28752979f421393ba1b35567db02555199a605a144dfd = $this->env->getExtension("native_profiler");
        $__internal_0f41e9e8cc0eb5f88cd28752979f421393ba1b35567db02555199a605a144dfd->enter($__internal_0f41e9e8cc0eb5f88cd28752979f421393ba1b35567db02555199a605a144dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0f41e9e8cc0eb5f88cd28752979f421393ba1b35567db02555199a605a144dfd->leave($__internal_0f41e9e8cc0eb5f88cd28752979f421393ba1b35567db02555199a605a144dfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
