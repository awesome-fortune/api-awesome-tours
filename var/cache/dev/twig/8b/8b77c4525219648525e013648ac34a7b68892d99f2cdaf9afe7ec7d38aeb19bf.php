<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1005a0f94e37a5b85feb661a0d13edc8baee13e730f6e8f1b392cc749aab0692 extends Twig_Template
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
        $__internal_eda115a66adb7614e77a0fe458bdc29e9ab3545d15c9be87f5ff30de2bac0d1d = $this->env->getExtension("native_profiler");
        $__internal_eda115a66adb7614e77a0fe458bdc29e9ab3545d15c9be87f5ff30de2bac0d1d->enter($__internal_eda115a66adb7614e77a0fe458bdc29e9ab3545d15c9be87f5ff30de2bac0d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eda115a66adb7614e77a0fe458bdc29e9ab3545d15c9be87f5ff30de2bac0d1d->leave($__internal_eda115a66adb7614e77a0fe458bdc29e9ab3545d15c9be87f5ff30de2bac0d1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
