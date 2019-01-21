<?php

/* :default:homepage.html.twig */
class __TwigTemplate_3de35741d3a5d997e7eb5a658792b69b1ef36181b69d4b4adea6630a467a9c11 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <h1>Ekstraklasa</h1>
        <hr/>
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ekstraklasa.jpg"), "html", null, true);
        echo "\" width=\"300\" height=\"250\"/>
    </div>
    <hr/>
    <div class=\"container text-center\">
        <h3>Kluby ekstraklasy na mapie Polski</h3>
    </div>
    <div class=\"container map\">
        ";
        // line 14
        $this->loadTemplate("widgets/locations.html.twig", ":default:homepage.html.twig", 14)->display($context);
        // line 15
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return ":default:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  50 => 14,  40 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:homepage.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/default/homepage.html.twig");
    }
}
