<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_afbdeb4aaeaaf2f566a1daf7d355e0f3f05d195f9363375de2c7686b282813d4 extends Twig_Template
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
        $__internal_f9e3f3a99f42204fbc171dca72c9375e771fa94752a171a68c3464fe1537817e = $this->env->getExtension("native_profiler");
        $__internal_f9e3f3a99f42204fbc171dca72c9375e771fa94752a171a68c3464fe1537817e->enter($__internal_f9e3f3a99f42204fbc171dca72c9375e771fa94752a171a68c3464fe1537817e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f9e3f3a99f42204fbc171dca72c9375e771fa94752a171a68c3464fe1537817e->leave($__internal_f9e3f3a99f42204fbc171dca72c9375e771fa94752a171a68c3464fe1537817e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
