<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_81e8cb9cfe57ef8389bf01b2484a7efa2de37ffcad2785bea2a5363294448a09 extends Twig_Template
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
        $__internal_042a7eb7026285ae9cc8807142f1f45ddfc2668d26cae8baff1a15c7843a854c = $this->env->getExtension("native_profiler");
        $__internal_042a7eb7026285ae9cc8807142f1f45ddfc2668d26cae8baff1a15c7843a854c->enter($__internal_042a7eb7026285ae9cc8807142f1f45ddfc2668d26cae8baff1a15c7843a854c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_042a7eb7026285ae9cc8807142f1f45ddfc2668d26cae8baff1a15c7843a854c->leave($__internal_042a7eb7026285ae9cc8807142f1f45ddfc2668d26cae8baff1a15c7843a854c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
