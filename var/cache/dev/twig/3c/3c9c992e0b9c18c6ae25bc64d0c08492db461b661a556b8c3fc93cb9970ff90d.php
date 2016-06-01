<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d72430c86584e7a91f08a8c12ffafd77ee025d261de233bc07622f3a3b855955 extends Twig_Template
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
        $__internal_ab0c135b83d58b4cd9001d9ccf089479a6b827b3ffd54206b2538df17366fe97 = $this->env->getExtension("native_profiler");
        $__internal_ab0c135b83d58b4cd9001d9ccf089479a6b827b3ffd54206b2538df17366fe97->enter($__internal_ab0c135b83d58b4cd9001d9ccf089479a6b827b3ffd54206b2538df17366fe97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ab0c135b83d58b4cd9001d9ccf089479a6b827b3ffd54206b2538df17366fe97->leave($__internal_ab0c135b83d58b4cd9001d9ccf089479a6b827b3ffd54206b2538df17366fe97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
