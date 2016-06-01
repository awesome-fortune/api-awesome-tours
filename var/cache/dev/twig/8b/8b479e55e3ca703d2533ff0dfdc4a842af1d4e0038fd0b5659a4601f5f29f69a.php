<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_cfaeada23d884573f8f1f6e2c03b3015c18e0c8befa568f348df776de27e0925 extends Twig_Template
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
        $__internal_d8db4da5ce4aedbe02e9e6c5621f9ddb7fbb8fecd1f4255b45010b507be5e363 = $this->env->getExtension("native_profiler");
        $__internal_d8db4da5ce4aedbe02e9e6c5621f9ddb7fbb8fecd1f4255b45010b507be5e363->enter($__internal_d8db4da5ce4aedbe02e9e6c5621f9ddb7fbb8fecd1f4255b45010b507be5e363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d8db4da5ce4aedbe02e9e6c5621f9ddb7fbb8fecd1f4255b45010b507be5e363->leave($__internal_d8db4da5ce4aedbe02e9e6c5621f9ddb7fbb8fecd1f4255b45010b507be5e363_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
