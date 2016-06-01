<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f1bbe3a6748f418aaae13b1ce1744adb52702b5081abae585270fba62c14bd5a extends Twig_Template
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
        $__internal_aa97f36b53b400731420606ea28857216b7cb0988dd09773ad0cfa40de1ac635 = $this->env->getExtension("native_profiler");
        $__internal_aa97f36b53b400731420606ea28857216b7cb0988dd09773ad0cfa40de1ac635->enter($__internal_aa97f36b53b400731420606ea28857216b7cb0988dd09773ad0cfa40de1ac635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_aa97f36b53b400731420606ea28857216b7cb0988dd09773ad0cfa40de1ac635->leave($__internal_aa97f36b53b400731420606ea28857216b7cb0988dd09773ad0cfa40de1ac635_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
