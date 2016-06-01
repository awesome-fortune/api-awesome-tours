<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_044bbc32a80cba3ad442bc9871943544335f2ae79f9102b53c8539d7a2bfc9da extends Twig_Template
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
        $__internal_df348ae28ba0f44f0b8f4bfb9a8f7b5e3e35e897f42f9cd21c146db05fcfdfa6 = $this->env->getExtension("native_profiler");
        $__internal_df348ae28ba0f44f0b8f4bfb9a8f7b5e3e35e897f42f9cd21c146db05fcfdfa6->enter($__internal_df348ae28ba0f44f0b8f4bfb9a8f7b5e3e35e897f42f9cd21c146db05fcfdfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_df348ae28ba0f44f0b8f4bfb9a8f7b5e3e35e897f42f9cd21c146db05fcfdfa6->leave($__internal_df348ae28ba0f44f0b8f4bfb9a8f7b5e3e35e897f42f9cd21c146db05fcfdfa6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
