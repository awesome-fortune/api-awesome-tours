<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3fe9c31ec81e6d2efef0613d7a10a9e980fae0ab17288ee19f4897cbb370b6ec extends Twig_Template
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
        $__internal_bf78761474303eb44fe8a5dbfba468957159e1644fe8763c4c07a0b6f364b617 = $this->env->getExtension("native_profiler");
        $__internal_bf78761474303eb44fe8a5dbfba468957159e1644fe8763c4c07a0b6f364b617->enter($__internal_bf78761474303eb44fe8a5dbfba468957159e1644fe8763c4c07a0b6f364b617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_bf78761474303eb44fe8a5dbfba468957159e1644fe8763c4c07a0b6f364b617->leave($__internal_bf78761474303eb44fe8a5dbfba468957159e1644fe8763c4c07a0b6f364b617_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
