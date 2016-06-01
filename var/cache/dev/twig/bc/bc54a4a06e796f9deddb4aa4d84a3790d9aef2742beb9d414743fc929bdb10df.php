<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9bb1cfccf01765efd7546b201461cb6876e16ec65f88baa4d1029d20a2cf4249 extends Twig_Template
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
        $__internal_5cc6e8054d1b06e528a5c0029d9731eef28db21a166496fc4f384cc7b884e4e6 = $this->env->getExtension("native_profiler");
        $__internal_5cc6e8054d1b06e528a5c0029d9731eef28db21a166496fc4f384cc7b884e4e6->enter($__internal_5cc6e8054d1b06e528a5c0029d9731eef28db21a166496fc4f384cc7b884e4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5cc6e8054d1b06e528a5c0029d9731eef28db21a166496fc4f384cc7b884e4e6->leave($__internal_5cc6e8054d1b06e528a5c0029d9731eef28db21a166496fc4f384cc7b884e4e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
