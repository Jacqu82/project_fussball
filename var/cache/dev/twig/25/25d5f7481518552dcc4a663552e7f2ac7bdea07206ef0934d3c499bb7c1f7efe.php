<?php

/* :club:show_all_clubs.html.twig */
class __TwigTemplate_157ee041fc91ee191043072932454f644be2a17cbda8a7cd6e1cdf0215cdc633 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":club:show_all_clubs.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":club:show_all_clubs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":club:show_all_clubs.html.twig"));

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
        <h1>Kluby Ekstraklasy</h1>
        <hr/>
        <h3>Mój klub</h3>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new Twig_Error_Runtime('Variable "clubs" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 9
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["club"], "name", array()) == "Górnik Zabrze")) {
                // line 10
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_show_id", array("id" => twig_get_attribute($this->env, $this->source, $context["club"], "id", array()))), "html", null, true);
                echo "\" class=\"links btn btn-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["club"], "name", array()), "html", null, true);
                echo "<br/>
                    <img src=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["club"], "getWebPath", array()), "html", null, true);
                echo "\" width=\"200\" height=\"200\">
                </a>
            ";
            }
            // line 14
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        <hr/>
        <h3>Pozostałe kluby</h3>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new Twig_Error_Runtime('Variable "clubs" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 18
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["club"], "name", array()) != "Górnik Zabrze")) {
                // line 19
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_show_id", array("id" => twig_get_attribute($this->env, $this->source, $context["club"], "id", array()))), "html", null, true);
                echo "\" class=\"links btn btn-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["club"], "name", array()), "html", null, true);
                echo "<br/>
                    <img src=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["club"], "getWebPath", array()), "html", null, true);
                echo "\" width=\"200\" height=\"200\">
                </a>
            ";
            }
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        <hr/>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":club:show_all_clubs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 24,  109 => 23,  103 => 20,  96 => 19,  93 => 18,  89 => 17,  85 => 15,  79 => 14,  73 => 11,  66 => 10,  63 => 9,  59 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container text-center\">
        <h1>Kluby Ekstraklasy</h1>
        <hr/>
        <h3>Mój klub</h3>
        {% for club in clubs %}
            {% if club.name == 'Górnik Zabrze' %}
                <a href=\"{{ path('club_show_id', {'id': club.id}) }}\" class=\"links btn btn-danger\">{{ club.name }}<br/>
                    <img src=\"{{ club.getWebPath }}\" width=\"200\" height=\"200\">
                </a>
            {% endif %}
        {% endfor %}
        <hr/>
        <h3>Pozostałe kluby</h3>
        {% for club in clubs %}
            {% if club.name != 'Górnik Zabrze' %}
                <a href=\"{{ path('club_show_id', {'id': club.id}) }}\" class=\"links btn btn-info\">{{ club.name }}<br/>
                    <img src=\"{{ club.getWebPath }}\" width=\"200\" height=\"200\">
                </a>
            {% endif %}
        {% endfor %}
        <hr/>
    </div>
{% endblock %}", ":club:show_all_clubs.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/club/show_all_clubs.html.twig");
    }
}
