<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_25c1966fcc50dc0285241cc24b7e0001968ef5c0640ea459791936256ba7373a extends Twig_Template
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
        $__internal_0bbcd08b609b7ef37be27ad1715d7c5979f0c6c5bb1c9aa641d4aaf4ec4f6331 = $this->env->getExtension("native_profiler");
        $__internal_0bbcd08b609b7ef37be27ad1715d7c5979f0c6c5bb1c9aa641d4aaf4ec4f6331->enter($__internal_0bbcd08b609b7ef37be27ad1715d7c5979f0c6c5bb1c9aa641d4aaf4ec4f6331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0bbcd08b609b7ef37be27ad1715d7c5979f0c6c5bb1c9aa641d4aaf4ec4f6331->leave($__internal_0bbcd08b609b7ef37be27ad1715d7c5979f0c6c5bb1c9aa641d4aaf4ec4f6331_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
