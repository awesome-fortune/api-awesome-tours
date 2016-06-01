<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_70aea278931070a276569613dd74d252bfe78980bc73eb9a88e201fbe32db271 extends Twig_Template
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
        $__internal_e20354f4206f73507e2e7a4a89aca4dfacbeaeec0bfc94bd2d002288fc021eac = $this->env->getExtension("native_profiler");
        $__internal_e20354f4206f73507e2e7a4a89aca4dfacbeaeec0bfc94bd2d002288fc021eac->enter($__internal_e20354f4206f73507e2e7a4a89aca4dfacbeaeec0bfc94bd2d002288fc021eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e20354f4206f73507e2e7a4a89aca4dfacbeaeec0bfc94bd2d002288fc021eac->leave($__internal_e20354f4206f73507e2e7a4a89aca4dfacbeaeec0bfc94bd2d002288fc021eac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
