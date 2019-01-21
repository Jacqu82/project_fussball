<?php

/* :default:admin_panel.html.twig */
class __TwigTemplate_6e8b8784e8814d25c79ee16d1a1870882aa6c1717833a8ce89258d9efe44dffb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:admin_panel.html.twig", 1);
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
        ";
        // line 5
        if ((($context["action"] ?? null) == true)) {
            // line 6
            echo "            <h1>Panel Admina</h1>
            <hr/>
            <h3><a href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show_all");
            echo "\" class=\"links btn btn-success\">Lista użytkowników</a></h3>
            <h3><a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_add");
            echo "\" class=\"links btn btn-success\">Dodaj klub do bazy</a></h3>
            <h3><a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player_add");
            echo "\" class=\"links btn btn-success\">Dodaj zawodnika do bazy</a></h3>
            <h3><a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_add");
            echo "\" class=\"links btn btn-success\">Dodaj mecz do terminarza</a></h3>
        ";
        } else {
            // line 13
            echo "            <h2>Strona tylko dla Admina!</h2>
        ";
        }
        // line 15
        echo "        <hr/>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":default:admin_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  61 => 13,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:admin_panel.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/default/admin_panel.html.twig");
    }
}
