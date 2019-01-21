<?php

/* base.html.twig */
class __TwigTemplate_d5904134f116ffe9077d1658adb4d8520e383899378d2f57c812e329f36e0eec extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ekstraklasa.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 13
        $this->loadTemplate("widgets/header.html.twig", "base.html.twig", 13)->display($context);
        // line 14
        echo "<div class=\"container\">
    <div style=\"padding-top: auto;\">
        ";
        // line 16
        echo twig_include($this->env, $context, "flash/flash_messages.html.twig");
        echo "
    </div>
</div>
";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        $this->loadTemplate("widgets/footer.html.twig", "base.html.twig", 20)->display($context);
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Ekstraklasa";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("framework/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("framework/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  98 => 22,  95 => 21,  90 => 19,  84 => 8,  79 => 7,  76 => 6,  70 => 5,  64 => 25,  62 => 21,  60 => 20,  58 => 19,  52 => 16,  48 => 14,  46 => 13,  39 => 10,  37 => 6,  33 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/base.html.twig");
    }
}
