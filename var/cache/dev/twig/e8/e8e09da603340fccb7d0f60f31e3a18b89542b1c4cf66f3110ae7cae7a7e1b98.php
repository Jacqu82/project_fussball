<?php

/* :game:show_game_id.html.twig */
class __TwigTemplate_7b19f7b23cc78972647a7eab1ee04dc9e32900d17eb80f325a2c4840831d6009 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":game:show_game_id.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":game:show_game_id.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":game:show_game_id.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 5, $this->source); })()), "date", array()), "html", null, true);
        echo "r.&nbsp; godz. ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 5, $this->source); })()), "hour", array()), "html", null, true);
        echo "<br/><br/>
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 6, $this->source); })()), "homeTeam", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 6, $this->source); })()), "goalsHomeTeam", array()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 6, $this->source); })()), "goalsAwayTeam", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 6, $this->source); })()), "awayTeam", array()), "html", null, true);
        echo "</h1>
        <hr/>
    ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 9, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Edytuj dane meczowe</a>
        <hr/>
        ";
            // line 11
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 11, $this->source); })()), 'form_start');
            echo "
            ";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 12, $this->source); })()), "submit", array()), 'widget');
            echo "
            ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 13, $this->source); })()), 'rest');
            echo "
        ";
            // line 14
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 14, $this->source); })()), 'form_end');
            echo "
        <hr/>
    ";
        }
        // line 17
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("round_show_id", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new Twig_Error_Runtime('Variable "game" does not exist.', 17, $this->source); })()), "round", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\">Powrót</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":game:show_game_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  89 => 13,  85 => 12,  81 => 11,  75 => 9,  73 => 8,  62 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container text-center\">
        <h1>{{ game.date }}r.&nbsp; godz. {{ game.hour }}<br/><br/>
            {{ game.homeTeam }} {{ game.goalsHomeTeam }} : {{ game.goalsAwayTeam }} {{ game.awayTeam }}</h1>
        <hr/>
    {% if is_granted('ROLE_ADMIN') %}
        <a href=\"{{ path('game_edit', {'id': game.id}) }}\" class=\"btn btn-warning\">Edytuj dane meczowe</a>
        <hr/>
        {{ form_start(deleteForm) }}
            {{ form_widget(deleteForm.submit) }}
            {{ form_rest(deleteForm) }}
        {{ form_end(deleteForm) }}
        <hr/>
    {% endif %}
        <a href=\"{{ path('round_show_id', {'id': game.round.id}) }}\" class=\"btn btn-info\">Powrót</a>
    </div>
{% endblock %}", ":game:show_game_id.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/game/show_game_id.html.twig");
    }
}
