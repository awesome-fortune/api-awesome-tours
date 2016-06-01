<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9700b63f25fa1551e5e8c6dcc409e0a0a3e5833a2d22093187d347b1b172f806 extends Twig_Template
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
        $__internal_6e12d9b5f6449ab4461dc42c04768dc5e17d403c666b35ccc37beb329b691e8e = $this->env->getExtension("native_profiler");
        $__internal_6e12d9b5f6449ab4461dc42c04768dc5e17d403c666b35ccc37beb329b691e8e->enter($__internal_6e12d9b5f6449ab4461dc42c04768dc5e17d403c666b35ccc37beb329b691e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6e12d9b5f6449ab4461dc42c04768dc5e17d403c666b35ccc37beb329b691e8e->leave($__internal_6e12d9b5f6449ab4461dc42c04768dc5e17d403c666b35ccc37beb329b691e8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
