<?php

/* :club:show_all_clubs.html.twig */
class __TwigTemplate_8a8cf71df2bed2711f7e6599df0ee7ce0ae35b27b40e1d6b2d6791d22f5f67c8 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <h1>Kluby Ekstraklasy</h1>
        <hr/>
        <h3>Mój klub</h3>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clubs"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["clubs"] ?? null));
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
        return array (  97 => 24,  91 => 23,  85 => 20,  78 => 19,  75 => 18,  71 => 17,  67 => 15,  61 => 14,  55 => 11,  48 => 10,  45 => 9,  41 => 8,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":club:show_all_clubs.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/club/show_all_clubs.html.twig");
    }
}
