<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_160f1c6d3ac16092534d64206c7c9eb6f15946a4d1e98eed8ec2f0bbfcfb4ee1 extends Twig_Template
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
        $__internal_b988d0f2ed2643fb9b028cc30fa526bdfb01f0c4718f816b2222fb2770fbbe9b = $this->env->getExtension("native_profiler");
        $__internal_b988d0f2ed2643fb9b028cc30fa526bdfb01f0c4718f816b2222fb2770fbbe9b->enter($__internal_b988d0f2ed2643fb9b028cc30fa526bdfb01f0c4718f816b2222fb2770fbbe9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b988d0f2ed2643fb9b028cc30fa526bdfb01f0c4718f816b2222fb2770fbbe9b->leave($__internal_b988d0f2ed2643fb9b028cc30fa526bdfb01f0c4718f816b2222fb2770fbbe9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
