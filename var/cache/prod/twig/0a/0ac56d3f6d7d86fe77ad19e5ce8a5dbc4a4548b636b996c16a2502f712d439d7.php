<?php

/* :round:show_round_id.html.twig */
class __TwigTemplate_9185fc00934d6ca741f12191eb102ef02deb4be2e5cb1f13cadf05092328abc0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":round:show_round_id.html.twig", 1);
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
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["round"] ?? null), "roundNumber", array()), "html", null, true);
        echo ". kolejka</h1>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["round"] ?? null), "games", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 7
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["game"], "homeTeam", array()), "id", array()) == 1) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["game"], "awayTeam", array()), "id", array()) == 1))) {
                // line 8
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_show_id", array("id" => twig_get_attribute($this->env, $this->source, $context["game"], "id", array()))), "html", null, true);
                echo "\">
                    <h3 style=\"color: gold\">";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "date", array()), "html", null, true);
                echo "r.&nbsp; godz. ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "hour", array()), "html", null, true);
                echo " &nbsp;&nbsp;&nbsp;
                        ";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "homeTeam", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "goalsHomeTeam", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "goalsAwayTeam", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "awayTeam", array()), "html", null, true);
                echo "</h3>
                </a>
            ";
            } else {
                // line 13
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_show_id", array("id" => twig_get_attribute($this->env, $this->source, $context["game"], "id", array()))), "html", null, true);
                echo "\">
                    <h3 style=\"color: white\">";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "date", array()), "html", null, true);
                echo "r.&nbsp; godz. ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "hour", array()), "html", null, true);
                echo " &nbsp;&nbsp;&nbsp;
                        ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "homeTeam", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "goalsHomeTeam", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "goalsAwayTeam", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "awayTeam", array()), "html", null, true);
                echo "</h3>
                </a>
            ";
            }
            // line 18
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        <hr/>
        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("round_show_all");
        echo "\" class=\"btn btn-info\">Powrót</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":round:show_round_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 20,  101 => 19,  95 => 18,  83 => 15,  77 => 14,  72 => 13,  60 => 10,  54 => 9,  49 => 8,  46 => 7,  42 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":round:show_round_id.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/round/show_round_id.html.twig");
    }
}
