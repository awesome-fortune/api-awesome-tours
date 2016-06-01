<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0c997fb269201af241a202bec8155d05b68cb29ab98d6a6762a214155ea5987b extends Twig_Template
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
        $__internal_4aec1fe2812337f3e5af9a3812c917b706ba20236ca2cf5e363011242a3dc6e5 = $this->env->getExtension("native_profiler");
        $__internal_4aec1fe2812337f3e5af9a3812c917b706ba20236ca2cf5e363011242a3dc6e5->enter($__internal_4aec1fe2812337f3e5af9a3812c917b706ba20236ca2cf5e363011242a3dc6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4aec1fe2812337f3e5af9a3812c917b706ba20236ca2cf5e363011242a3dc6e5->leave($__internal_4aec1fe2812337f3e5af9a3812c917b706ba20236ca2cf5e363011242a3dc6e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
