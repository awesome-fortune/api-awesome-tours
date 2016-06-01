<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2afd6cc1e27ed93454aee1b11af62a83401243efd76b1126629c3cdf2c637b67 extends Twig_Template
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
        $__internal_26c0583bd29ceb8f3a3394cdf172644887ccdfae992e6e8bde7e082f3741ca19 = $this->env->getExtension("native_profiler");
        $__internal_26c0583bd29ceb8f3a3394cdf172644887ccdfae992e6e8bde7e082f3741ca19->enter($__internal_26c0583bd29ceb8f3a3394cdf172644887ccdfae992e6e8bde7e082f3741ca19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_26c0583bd29ceb8f3a3394cdf172644887ccdfae992e6e8bde7e082f3741ca19->leave($__internal_26c0583bd29ceb8f3a3394cdf172644887ccdfae992e6e8bde7e082f3741ca19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
