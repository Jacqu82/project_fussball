<?php

/* :game:show_game_id.html.twig */
class __TwigTemplate_2027ce98f909d355030b84b879372d6f13a5c4c8a0c252a83919f60f2286057c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "date", array()), "html", null, true);
        echo "r.&nbsp; godz. ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "hour", array()), "html", null, true);
        echo "<br/><br/>
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "homeTeam", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "goalsHomeTeam", array()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "goalsAwayTeam", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "awayTeam", array()), "html", null, true);
        echo "</h1>
        <hr/>
    ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Edytuj dane meczowe</a>
        <hr/>
        ";
            // line 11
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteForm"] ?? null), 'form_start');
            echo "
            ";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["deleteForm"] ?? null), "submit", array()), 'widget');
            echo "
            ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["deleteForm"] ?? null), 'rest');
            echo "
        ";
            // line 14
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteForm"] ?? null), 'form_end');
            echo "
        <hr/>
    ";
        }
        // line 17
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("round_show_id", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "round", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\">Powrót</a>
    </div>
";
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
        return array (  81 => 17,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  57 => 9,  55 => 8,  44 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":game:show_game_id.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/game/show_game_id.html.twig");
    }
}
