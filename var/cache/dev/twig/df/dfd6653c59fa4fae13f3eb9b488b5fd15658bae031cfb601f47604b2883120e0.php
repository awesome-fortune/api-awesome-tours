<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1145e30cb38f9209b69ff321996245b3563d7cb5b500a493d664e53ff7bbc1dd extends Twig_Template
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
        $__internal_c9c8506aeaa0f3596c294c3dc01888f95c09d398568551e57861a746a4683a1d = $this->env->getExtension("native_profiler");
        $__internal_c9c8506aeaa0f3596c294c3dc01888f95c09d398568551e57861a746a4683a1d->enter($__internal_c9c8506aeaa0f3596c294c3dc01888f95c09d398568551e57861a746a4683a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c9c8506aeaa0f3596c294c3dc01888f95c09d398568551e57861a746a4683a1d->leave($__internal_c9c8506aeaa0f3596c294c3dc01888f95c09d398568551e57861a746a4683a1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
