<?php

/* :user:login.html.twig */
class __TwigTemplate_58396a79268ad91e0326bcd1401b5fdea5d2cb81f5c5af6fbbfd0369d086ca67 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:login.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:login.html.twig"));

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
        <h1>Strona logowania</h1>
        <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
            <input type=\"text\" id=\"username\" placeholder=\"Nazwa użytkownika\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\"/><br/><br/>
            <input type=\"password\" id=\"password\" placeholder=\"Hasło\" name=\"_password\"/><br/><br/>
            <button class=\"links btn btn-success\" type=\"submit\">Zaloguj się</button>
        </form>
        <hr/>
        <h3><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recovery");
        echo "\" class=\"links btn btn-info\">Zapomnialeś hasła?</a></h3>
        <hr/>
        <h3>Nie masz konta?</h3>
        <h3><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\" class=\"links btn btn-info\">Zarejestruj się</a></h3>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":user:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  69 => 12,  61 => 7,  57 => 6,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container text-center\">
        <h1>Strona logowania</h1>
        <form action=\"{{ path('login') }}\" method=\"post\">
            <input type=\"text\" id=\"username\" placeholder=\"Nazwa użytkownika\" name=\"_username\" value=\"{{ username }}\"/><br/><br/>
            <input type=\"password\" id=\"password\" placeholder=\"Hasło\" name=\"_password\"/><br/><br/>
            <button class=\"links btn btn-success\" type=\"submit\">Zaloguj się</button>
        </form>
        <hr/>
        <h3><a href=\"{{ path('recovery') }}\" class=\"links btn btn-info\">Zapomnialeś hasła?</a></h3>
        <hr/>
        <h3>Nie masz konta?</h3>
        <h3><a href=\"{{ path('register') }}\" class=\"links btn btn-info\">Zarejestruj się</a></h3>
    </div>
{% endblock %}", ":user:login.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/user/login.html.twig");
    }
}
