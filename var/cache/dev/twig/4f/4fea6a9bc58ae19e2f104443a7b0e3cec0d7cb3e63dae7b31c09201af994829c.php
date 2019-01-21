<?php

/* :user:show_user_id.html.twig */
class __TwigTemplate_ae2c3929ecda8ab059f6869bdca74fd1801ea3e855a0d5182dce4202b84e793e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show_user_id.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show_user_id.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show_user_id.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->source); })()), "username", array()), "html", null, true);
        echo "</h1>
        <h3>E-mail: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->source); })()), "email", array()), "html", null, true);
        echo "</h3>
        <h3>Rola: ";
        // line 7
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->source); })()), "role", array())), "html", null, true);
        echo "</h3>
        <h3>
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->source); })()), "isActive", array())) {
            // line 10
            echo "                Status: Aktywny
            ";
        } else {
            // line 12
            echo "                Status: Nieaktywny
            ";
        }
        // line 14
        echo "        </h3>
        <h3>Utworzony: ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->source); })()), "getCreatedAt", array()), "d-m-Y H:i:s"), "html", null, true);
        echo "</h3>
        <hr/>
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 17, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Edytuj dane</a><br/><br/>
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 19, $this->source); })()), "submit", array()), 'widget');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 20, $this->source); })()), 'rest');
        echo "
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
        <hr/>
        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show_all");
        echo "\" class=\"btn btn-default\">Powrót</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":user:show_user_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 23,  103 => 21,  99 => 20,  95 => 19,  91 => 18,  87 => 17,  82 => 15,  79 => 14,  75 => 12,  71 => 10,  69 => 9,  64 => 7,  60 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container text-center\">
        <h1>{{ user.username }}</h1>
        <h3>E-mail: {{ user.email }}</h3>
        <h3>Rola: {{ user.role|capitalize }}</h3>
        <h3>
            {% if user.isActive %}
                Status: Aktywny
            {% else %}
                Status: Nieaktywny
            {% endif %}
        </h3>
        <h3>Utworzony: {{ user.getCreatedAt|date('d-m-Y H:i:s') }}</h3>
        <hr/>
        <a href=\"{{ path('user_edit', {'id': user.id}) }}\" class=\"btn btn-warning\">Edytuj dane</a><br/><br/>
        {{ form_start(deleteForm) }}
        {{ form_widget(deleteForm.submit) }}
        {{ form_rest(deleteForm) }}
        {{ form_end(deleteForm) }}
        <hr/>
        <a href=\"{{ path('user_show_all') }}\" class=\"btn btn-default\">Powrót</a>
    </div>
{% endblock %}", ":user:show_user_id.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/user/show_user_id.html.twig");
    }
}
