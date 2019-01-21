<?php

/* :round:show_round_id.html.twig */
class __TwigTemplate_79d8c967c5a9142c4d3f7fab78f5bf91ee7519e7ff4250fff9cac48daf70104d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":round:show_round_id.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":round:show_round_id.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container text-center\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["round"]) || array_key_exists("round", $context) ? $context["round"] : (function () { throw new Twig_Error_Runtime('Variable "round" does not exist.', 5, $this->source); })()), "roundNumber", array()), "html", null, true);
        echo ". kolejka</h1>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["round"]) || array_key_exists("round", $context) ? $context["round"] : (function () { throw new Twig_Error_Runtime('Variable "round" does not exist.', 6, $this->source); })()), "games", array()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  122 => 20,  119 => 19,  113 => 18,  101 => 15,  95 => 14,  90 => 13,  78 => 10,  72 => 9,  67 => 8,  64 => 7,  60 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container text-center\">
        <h1>{{ round.roundNumber }}. kolejka</h1>
        {% for game in round.games %}
            {% if (game.homeTeam.id == 1) or (game.awayTeam.id == 1) %}
                <a href=\"{{ path('game_show_id', {'id': game.id}) }}\">
                    <h3 style=\"color: gold\">{{ game.date }}r.&nbsp; godz. {{ game.hour }} &nbsp;&nbsp;&nbsp;
                        {{ game.homeTeam }} {{ game.goalsHomeTeam }} : {{ game.goalsAwayTeam }} {{ game.awayTeam }}</h3>
                </a>
            {% else %}
                <a href=\"{{ path('game_show_id', {'id': game.id}) }}\">
                    <h3 style=\"color: white\">{{ game.date }}r.&nbsp; godz. {{ game.hour }} &nbsp;&nbsp;&nbsp;
                        {{ game.homeTeam }} {{ game.goalsHomeTeam }} : {{ game.goalsAwayTeam }} {{ game.awayTeam }}</h3>
                </a>
            {% endif %}
        {% endfor %}
        <hr/>
        <a href=\"{{ path('round_show_all') }}\" class=\"btn btn-info\">Powrót</a>
    </div>
{% endblock %}", ":round:show_round_id.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/round/show_round_id.html.twig");
    }
}
