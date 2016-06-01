<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_92bfe3fec92c7e6d76994df4e7ce0d2f05dc8e7b3fb66a2057aba106cd90a3dd extends Twig_Template
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
        $__internal_6f1237c71412cfa0b046700898b55fc3f13440c83c1fe0591b841d76000cd8f3 = $this->env->getExtension("native_profiler");
        $__internal_6f1237c71412cfa0b046700898b55fc3f13440c83c1fe0591b841d76000cd8f3->enter($__internal_6f1237c71412cfa0b046700898b55fc3f13440c83c1fe0591b841d76000cd8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6f1237c71412cfa0b046700898b55fc3f13440c83c1fe0591b841d76000cd8f3->leave($__internal_6f1237c71412cfa0b046700898b55fc3f13440c83c1fe0591b841d76000cd8f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
