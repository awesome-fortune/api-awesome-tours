<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2bb32c1769302988ef4a6f90fdc468c3dbe774371e2a850a1232b36083bc8f3e extends Twig_Template
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
        $__internal_54032305db8678e5cb75c495d1127c486cb0a3019f67a942e4c6840be5e88956 = $this->env->getExtension("native_profiler");
        $__internal_54032305db8678e5cb75c495d1127c486cb0a3019f67a942e4c6840be5e88956->enter($__internal_54032305db8678e5cb75c495d1127c486cb0a3019f67a942e4c6840be5e88956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_54032305db8678e5cb75c495d1127c486cb0a3019f67a942e4c6840be5e88956->leave($__internal_54032305db8678e5cb75c495d1127c486cb0a3019f67a942e4c6840be5e88956_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
