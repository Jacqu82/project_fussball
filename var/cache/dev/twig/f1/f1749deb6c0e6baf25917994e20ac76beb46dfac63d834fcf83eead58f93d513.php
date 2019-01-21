<?php

/* :player:show_player_id.html.twig */
class __TwigTemplate_d5321576996d71bf2a8f187f9347b1bfd459d91549ccebfa9ee3d17ed8f1f949 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":player:show_player_id.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":player:show_player_id.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":player:show_player_id.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new Twig_Error_Runtime('Variable "player" does not exist.', 5, $this->source); })()), "name", array()), "html", null, true);
        echo "</h1>
        <h3>Pozycja: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new Twig_Error_Runtime('Variable "player" does not exist.', 6, $this->source); })()), "position", array()), "html", null, true);
        echo "</h3>
        <h3>Kraj pochodzenia: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new Twig_Error_Runtime('Variable "player" does not exist.', 7, $this->source); })()), "country", array()), "html", null, true);
        echo "</h3>
        <h3>Data urodzenia: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new Twig_Error_Runtime('Variable "player" does not exist.', 8, $this->source); })()), "dateOfBirth", array()), "html", null, true);
        echo "</h3>
        <h3>Wzrost/Waga: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new Twig_Error_Runtime('Variable "player" does not exist.', 9, $this->source); })()), "growth", array()), "html", null, true);
        echo "cm / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new Twig_Error_Runtime('Variable "player" does not exist.', 9, $this->source); })()), "weight", array()), "html", null, true);
        echo "kg</h3>
        <h3>Poprzedni klub: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new Twig_Error_Runtime('Variable "player" does not exist.', 10, $this->source); })()), "previousClub", array()), "html", null, true);
        echo "</h3>
        <hr/>
        ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new Twig_Error_Runtime('Variable "player" does not exist.', 13, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Edytuj dane</a>
            <hr/>
            ";
            // line 15
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 15, $this->source); })()), 'form_start');
            echo "
            ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 16, $this->source); })()), "submit", array()), 'widget');
            echo "
            ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 17, $this->source); })()), 'rest');
            echo "
            ";
            // line 18
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 18, $this->source); })()), 'form_end');
            echo "
            <hr/>
        ";
        }
        // line 21
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_show_id", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new Twig_Error_Runtime('Variable "player" does not exist.', 21, $this->source); })()), "club", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\">Powrót</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":player:show_player_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 21,  103 => 18,  99 => 17,  95 => 16,  91 => 15,  85 => 13,  83 => 12,  78 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container text-center\">
        <h1>{{ player.name }}</h1>
        <h3>Pozycja: {{ player.position }}</h3>
        <h3>Kraj pochodzenia: {{ player.country }}</h3>
        <h3>Data urodzenia: {{ player.dateOfBirth }}</h3>
        <h3>Wzrost/Waga: {{ player.growth }}cm / {{ player.weight }}kg</h3>
        <h3>Poprzedni klub: {{ player.previousClub }}</h3>
        <hr/>
        {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('player_edit', {'id': player.id}) }}\" class=\"btn btn-warning\">Edytuj dane</a>
            <hr/>
            {{ form_start(deleteForm) }}
            {{ form_widget(deleteForm.submit) }}
            {{ form_rest(deleteForm) }}
            {{ form_end(deleteForm) }}
            <hr/>
        {% endif %}
        <a href=\"{{ path('club_show_id', {'id': player.club.id}) }}\" class=\"btn btn-info\">Powrót</a>
    </div>
{% endblock %}", ":player:show_player_id.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/player/show_player_id.html.twig");
    }
}
