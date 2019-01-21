<?php

/* :widgets:header.html.twig */
class __TwigTemplate_a60707a9b1054e7e09dd4e23dec2a84ec3910e10613d6dae4d996a2463f3b71b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":widgets:header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":widgets:header.html.twig"));

        // line 1
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array())) {
            // line 2
            echo "    <div class=\"container\">
        <div class=\"navbar-header\">
            <div class=\"container text-center\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">Strona główna</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_show_all");
            echo "\">Kluby ekstraklasy</a></li>
                        <li><a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("round_show_all");
            echo "\">Terminarz ekstraklasy</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Utwórz konto</a>
                        </li>
                        <li><a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
                                <span class=\"glyphicon glyphicon-log-in\"></span> Zaloguj się
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        } else {
            // line 27
            echo "    ";
            $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->source); })()), "user", array());
            // line 28
            echo "    <div class=\"container\">
        <div class=\"navbar-header\">
            <div class=\"container text-center\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">Strona główna</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_panel");
            echo "\">Admin Panel</a></li>
                        <li><a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_show_all");
            echo "\">Kluby ekstraklasy</a></li>
                        <li><a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("round_show_all");
            echo "\">Terminarz ekstraklasy</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"user\" style=\"margin-top: 15px;\">Zalogowany jako
                            <a class=\"user\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show_id", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 42, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                        </li>
                        <li><a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">
                                <span class=\"glyphicon glyphicon-log-out\"></span> Wyloguj
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":widgets:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 44,  104 => 42,  97 => 38,  93 => 37,  89 => 36,  82 => 32,  76 => 28,  73 => 27,  60 => 17,  55 => 15,  48 => 11,  44 => 10,  37 => 6,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not app.user %}
    <div class=\"container\">
        <div class=\"navbar-header\">
            <div class=\"container text-center\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Strona główna</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"{{ path('club_show_all') }}\">Kluby ekstraklasy</a></li>
                        <li><a href=\"{{ path('round_show_all') }}\">Terminarz ekstraklasy</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"{{ path('register') }}\">Utwórz konto</a>
                        </li>
                        <li><a href=\"{{ path('login') }}\">
                                <span class=\"glyphicon glyphicon-log-in\"></span> Zaloguj się
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% else %}
    {% set user = app.user %}
    <div class=\"container\">
        <div class=\"navbar-header\">
            <div class=\"container text-center\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Strona główna</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"{{ path('admin_panel') }}\">Admin Panel</a></li>
                        <li><a href=\"{{ path('club_show_all') }}\">Kluby ekstraklasy</a></li>
                        <li><a href=\"{{ path('round_show_all') }}\">Terminarz ekstraklasy</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"user\" style=\"margin-top: 15px;\">Zalogowany jako
                            <a class=\"user\" href=\"{{ path('user_show_id', {'id': user.id}) }}\">{{ app.user.username }}</a>
                        </li>
                        <li><a href=\"{{ path('logout') }}\">
                                <span class=\"glyphicon glyphicon-log-out\"></span> Wyloguj
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% endif %}", ":widgets:header.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/widgets/header.html.twig");
    }
}
