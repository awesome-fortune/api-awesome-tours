<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_cdec99899669f35c6feb73c1470e745ed0f9752ef8f1915b9a7b5e94151ee8db extends Twig_Template
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
        $__internal_79ddc6673e6aad11b4feb3f1054d54f91e3a9c1c9f6e2a026c39710af313428d = $this->env->getExtension("native_profiler");
        $__internal_79ddc6673e6aad11b4feb3f1054d54f91e3a9c1c9f6e2a026c39710af313428d->enter($__internal_79ddc6673e6aad11b4feb3f1054d54f91e3a9c1c9f6e2a026c39710af313428d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_79ddc6673e6aad11b4feb3f1054d54f91e3a9c1c9f6e2a026c39710af313428d->leave($__internal_79ddc6673e6aad11b4feb3f1054d54f91e3a9c1c9f6e2a026c39710af313428d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
