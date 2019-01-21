<?php

/* :widgets:header.html.twig */
class __TwigTemplate_d61556a3ac38c9f7b2b19c8e36d3f056c652690422b5462c921eec6b5edd7209 extends Twig_Template
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
        // line 1
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array())) {
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
            $context["user"] = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array());
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show_id", array("id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
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
        return array (  105 => 44,  98 => 42,  91 => 38,  87 => 37,  83 => 36,  76 => 32,  70 => 28,  67 => 27,  54 => 17,  49 => 15,  42 => 11,  38 => 10,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":widgets:header.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/widgets/header.html.twig");
    }
}
