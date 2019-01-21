<?php

/* :widgets:footer.html.twig */
class __TwigTemplate_30595531b7242bb9600d4300ae965a6f5e840b293b914785cfdd546c25d69f6d extends Twig_Template
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
        echo "
<div class=\"container text-center footer\">
    <div>© Ekstraklasa ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return ":widgets:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":widgets:footer.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/widgets/footer.html.twig");
    }
}
