<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7d6c36fe9be49412f15e9b8ea9ecd396d952ad0978567772e699b71c249aa69b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php echo \$view['form']->formEncodeCurrency(\$money_pattern, \$view['form']->block(\$form, 'form_widget_simple')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/money_widget.html.php", "/home/jaca/Workspace/Symfony/project_fussball/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
