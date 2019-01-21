<?php

/* :club:show_club_id.html.twig */
class __TwigTemplate_7d11e50444f0b211cf8a06d872306cb0c6f0af4b3548122c3be9a8db889f7602 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":club:show_club_id.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":club:show_club_id.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":club:show_club_id.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 5, $this->source); })()), "name", array()), "html", null, true);
        echo "</h1>
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 6, $this->source); })()), "getWebPath", array()), "html", null, true);
        echo "\" width=\"300\" height=\"300\">
        <hr/>
        <h3><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 8, $this->source); })()), "page", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"links btn btn-success\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 8, $this->source); })()), "page", array()), "html", null, true);
        echo "</a></h3>
        <h3>Rok założenia: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 9, $this->source); })()), "createdAt", array()), "html", null, true);
        echo "</h3>
        <h3>Barwy: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 10, $this->source); })()), "colours", array()), "html", null, true);
        echo "</h3>
        <h3>Adres: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 11, $this->source); })()), "address", array()), "html", null, true);
        echo "</h3>
        <h3>Stadion: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 12, $this->source); })()), "stadium", array()), "html", null, true);
        echo "</h3>
        <h3>Pojemność stadionu: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 13, $this->source); })()), "capacity", array()), "html", null, true);
        echo "</h3>
        <h3>Prezes: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 14, $this->source); })()), "chairman", array()), "html", null, true);
        echo "</h3>
        <h3>Trener: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 15, $this->source); })()), "coach", array()), "html", null, true);
        echo "</h3>
        <h3>Największe sukcesy: </h3>
        <h5>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 17, $this->source); })()), "content", array()), "html", null, true);
        echo "</h5>

        <h1>Kadra:</h1>
        <table align=\"center\">
            <tr>
                <th>Imię i nazwisko</th>
                <th>Pozycja</th>
                <th>Kraj pochodzenia</th>
                <th>Data urodzenia</th>
                <th>Wzrost/Waga</th>
                <th>Poprzedni klub</th>
            </tr>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 29, $this->source); })()), "players", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 30
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "position", array()) == twig_get_attribute($this->env, $this->source, $context["player"], "goalKeeper", array()))) {
                // line 31
                echo "                    <tr style=\"color: red\">
                        <td><a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player_show_id", array("id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", array()))), "html", null, true);
                echo "\"
                               class=\"btn btn-danger\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", array()), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "position", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "country", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "dateOfBirth", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "growth", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "weight", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "previousClub", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 41
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 42, $this->source); })()), "players", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 43
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "position", array()) == twig_get_attribute($this->env, $this->source, $context["player"], "defender", array()))) {
                // line 44
                echo "                    <tr style=\"color: gold\">
                        <td><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player_show_id", array("id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", array()))), "html", null, true);
                echo "\"
                               class=\"btn btn-warning\">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", array()), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "position", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "country", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "dateOfBirth", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "growth", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "weight", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "previousClub", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 54
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 55, $this->source); })()), "players", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 56
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "position", array()) == twig_get_attribute($this->env, $this->source, $context["player"], "midfielder", array()))) {
                // line 57
                echo "                    <tr style=\"color: green\">
                        <td><a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player_show_id", array("id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", array()))), "html", null, true);
                echo "\"
                               class=\"btn btn-success\">";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", array()), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "position", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "country", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "dateOfBirth", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "growth", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "weight", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "previousClub", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 67
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 68, $this->source); })()), "players", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 69
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "position", array()) == twig_get_attribute($this->env, $this->source, $context["player"], "forward", array()))) {
                // line 70
                echo "                    <tr style=\"color: blue\">
                        <td><a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player_show_id", array("id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", array()))), "html", null, true);
                echo "\"
                               class=\"btn btn-primary\">";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", array()), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "position", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "country", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "dateOfBirth", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "growth", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "weight", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "previousClub", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 80
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </table>
        <hr/>
        <div class=\"container text-center\">
            <h3>Położenie stadionu na mapie</h3>
        </div>
        <div class=\"container map\">
            ";
        // line 87
        $this->loadTemplate("widgets/location.html.twig", ":club:show_club_id.html.twig", 87)->display($context);
        // line 88
        echo "        </div>
        <hr/>
        ";
        // line 90
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 91
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 91, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Edytuj dane</a><br/><br/>
            <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emblem_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 92, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Edytuj herb</a>
            <hr/>
            ";
            // line 94
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 94, $this->source); })()), 'form_start');
            echo "
            ";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 95, $this->source); })()), "submit", array()), 'widget');
            echo "
            ";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 96, $this->source); })()), 'rest');
            echo "
            ";
            // line 97
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteForm"]) || array_key_exists("deleteForm", $context) ? $context["deleteForm"] : (function () { throw new Twig_Error_Runtime('Variable "deleteForm" does not exist.', 97, $this->source); })()), 'form_end');
            echo "
            <hr/>
        ";
        }
        // line 100
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_show_all");
        echo "\" class=\"btn btn-info\">Powrót</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":club:show_club_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 100,  348 => 97,  344 => 96,  340 => 95,  336 => 94,  331 => 92,  326 => 91,  324 => 90,  320 => 88,  318 => 87,  310 => 81,  304 => 80,  298 => 77,  292 => 76,  288 => 75,  284 => 74,  280 => 73,  276 => 72,  272 => 71,  269 => 70,  266 => 69,  261 => 68,  255 => 67,  249 => 64,  243 => 63,  239 => 62,  235 => 61,  231 => 60,  227 => 59,  223 => 58,  220 => 57,  217 => 56,  212 => 55,  206 => 54,  200 => 51,  194 => 50,  190 => 49,  186 => 48,  182 => 47,  178 => 46,  174 => 45,  171 => 44,  168 => 43,  163 => 42,  157 => 41,  151 => 38,  145 => 37,  141 => 36,  137 => 35,  133 => 34,  129 => 33,  125 => 32,  122 => 31,  119 => 30,  115 => 29,  100 => 17,  95 => 15,  91 => 14,  87 => 13,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  65 => 8,  60 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container text-center\">
        <h1>{{ club.name }}</h1>
        <img src=\"{{ club.getWebPath }}\" width=\"300\" height=\"300\">
        <hr/>
        <h3><a href=\"{{ club.page }}\" target=\"_blank\" class=\"links btn btn-success\">{{ club.page }}</a></h3>
        <h3>Rok założenia: {{ club.createdAt }}</h3>
        <h3>Barwy: {{ club.colours }}</h3>
        <h3>Adres: {{ club.address }}</h3>
        <h3>Stadion: {{ club.stadium }}</h3>
        <h3>Pojemność stadionu: {{ club.capacity }}</h3>
        <h3>Prezes: {{ club.chairman }}</h3>
        <h3>Trener: {{ club.coach }}</h3>
        <h3>Największe sukcesy: </h3>
        <h5>{{ club.content }}</h5>

        <h1>Kadra:</h1>
        <table align=\"center\">
            <tr>
                <th>Imię i nazwisko</th>
                <th>Pozycja</th>
                <th>Kraj pochodzenia</th>
                <th>Data urodzenia</th>
                <th>Wzrost/Waga</th>
                <th>Poprzedni klub</th>
            </tr>
            {% for player in club.players %}
                {% if player.position == player.goalKeeper %}
                    <tr style=\"color: red\">
                        <td><a href=\"{{ path('player_show_id', {'id': player.id}) }}\"
                               class=\"btn btn-danger\">{{ player.name }}</a></td>
                        <td>{{ player.position }}</td>
                        <td>{{ player.country }}</td>
                        <td>{{ player.dateOfBirth }}</td>
                        <td>{{ player.growth }}/{{ player.weight }}</td>
                        <td>{{ player.previousClub }}</td>
                    </tr>
                {% endif %}
            {% endfor %}
            {% for player in club.players %}
                {% if player.position == player.defender %}
                    <tr style=\"color: gold\">
                        <td><a href=\"{{ path('player_show_id', {'id': player.id}) }}\"
                               class=\"btn btn-warning\">{{ player.name }}</a></td>
                        <td>{{ player.position }}</td>
                        <td>{{ player.country }}</td>
                        <td>{{ player.dateOfBirth }}</td>
                        <td>{{ player.growth }}/{{ player.weight }}</td>
                        <td>{{ player.previousClub }}</td>
                    </tr>
                {% endif %}
            {% endfor %}
            {% for player in club.players %}
                {% if player.position == player.midfielder %}
                    <tr style=\"color: green\">
                        <td><a href=\"{{ path('player_show_id', {'id': player.id}) }}\"
                               class=\"btn btn-success\">{{ player.name }}</a></td>
                        <td>{{ player.position }}</td>
                        <td>{{ player.country }}</td>
                        <td>{{ player.dateOfBirth }}</td>
                        <td>{{ player.growth }}/{{ player.weight }}</td>
                        <td>{{ player.previousClub }}</td>
                    </tr>
                {% endif %}
            {% endfor %}
            {% for player in club.players %}
                {% if player.position == player.forward %}
                    <tr style=\"color: blue\">
                        <td><a href=\"{{ path('player_show_id', {'id': player.id}) }}\"
                               class=\"btn btn-primary\">{{ player.name }}</a></td>
                        <td>{{ player.position }}</td>
                        <td>{{ player.country }}</td>
                        <td>{{ player.dateOfBirth }}</td>
                        <td>{{ player.growth }}/{{ player.weight }}</td>
                        <td>{{ player.previousClub }}</td>
                    </tr>
                {% endif %}
            {% endfor %}
        </table>
        <hr/>
        <div class=\"container text-center\">
            <h3>Położenie stadionu na mapie</h3>
        </div>
        <div class=\"container map\">
            {% include 'widgets/location.html.twig' %}
        </div>
        <hr/>
        {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('club_edit', {'id': club.id}) }}\" class=\"btn btn-warning\">Edytuj dane</a><br/><br/>
            <a href=\"{{ path('emblem_edit', {'id': club.id}) }}\" class=\"btn btn-warning\">Edytuj herb</a>
            <hr/>
            {{ form_start(deleteForm) }}
            {{ form_widget(deleteForm.submit) }}
            {{ form_rest(deleteForm) }}
            {{ form_end(deleteForm) }}
            <hr/>
        {% endif %}
        <a href=\"{{ path('club_show_all') }}\" class=\"btn btn-info\">Powrót</a>
    </div>
{% endblock %}", ":club:show_club_id.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/club/show_club_id.html.twig");
    }
}
