<?php

/* :club:show_club_id.html.twig */
class __TwigTemplate_c46d999be9cb0bd693eed8bcd2a276148c0374f796a53d544ae25b973b501a2e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "getWebPath", array()), "html", null, true);
        echo "\" width=\"300\" height=\"300\">
        <hr/>
        <h3><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "page", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"links btn btn-success\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "page", array()), "html", null, true);
        echo "</a></h3>
        <h3>Rok założenia: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "createdAt", array()), "html", null, true);
        echo "</h3>
        <h3>Barwy: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "colours", array()), "html", null, true);
        echo "</h3>
        <h3>Adres: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "address", array()), "html", null, true);
        echo "</h3>
        <h3>Stadion: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "stadium", array()), "html", null, true);
        echo "</h3>
        <h3>Pojemność stadionu: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "capacity", array()), "html", null, true);
        echo "</h3>
        <h3>Prezes: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "chairman", array()), "html", null, true);
        echo "</h3>
        <h3>Trener: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "coach", array()), "html", null, true);
        echo "</h3>
        <h3>Największe sukcesy: </h3>
        <h5>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "content", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "players", array()));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "players", array()));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "players", array()));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "players", array()));
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Edytuj dane</a><br/><br/>
            <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emblem_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Edytuj herb</a>
            <hr/>
            ";
            // line 94
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteForm"] ?? null), 'form_start');
            echo "
            ";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["deleteForm"] ?? null), "submit", array()), 'widget');
            echo "
            ";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["deleteForm"] ?? null), 'rest');
            echo "
            ";
            // line 97
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteForm"] ?? null), 'form_end');
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
        return array (  336 => 100,  330 => 97,  326 => 96,  322 => 95,  318 => 94,  313 => 92,  308 => 91,  306 => 90,  302 => 88,  300 => 87,  292 => 81,  286 => 80,  280 => 77,  274 => 76,  270 => 75,  266 => 74,  262 => 73,  258 => 72,  254 => 71,  251 => 70,  248 => 69,  243 => 68,  237 => 67,  231 => 64,  225 => 63,  221 => 62,  217 => 61,  213 => 60,  209 => 59,  205 => 58,  202 => 57,  199 => 56,  194 => 55,  188 => 54,  182 => 51,  176 => 50,  172 => 49,  168 => 48,  164 => 47,  160 => 46,  156 => 45,  153 => 44,  150 => 43,  145 => 42,  139 => 41,  133 => 38,  127 => 37,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  107 => 32,  104 => 31,  101 => 30,  97 => 29,  82 => 17,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  47 => 8,  42 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":club:show_club_id.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/club/show_club_id.html.twig");
    }
}
