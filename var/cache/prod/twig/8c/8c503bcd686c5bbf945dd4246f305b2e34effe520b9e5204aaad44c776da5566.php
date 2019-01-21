<?php

/* :player:show_player_id.html.twig */
class __TwigTemplate_f92a514a293a8f73d7f41bbeac973d4222d5a7a955886834a1638927f0d6dd9c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container text-center\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
        <h3>Pozycja: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "position", array()), "html", null, true);
        echo "</h3>
        <h3>Kraj pochodzenia: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "country", array()), "html", null, true);
        echo "</h3>
        <h3>Data urodzenia: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "dateOfBirth", array()), "html", null, true);
        echo "</h3>
        <h3>Wzrost/Waga: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "growth", array()), "html", null, true);
        echo "cm / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "weight", array()), "html", null, true);
        echo "kg</h3>
        <h3>Poprzedni klub: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "previousClub", array()), "html", null, true);
        echo "</h3>
        <hr/>
        ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Edytuj dane</a>
            <hr/>
            ";
            // line 15
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteForm"] ?? null), 'form_start');
            echo "
            ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["deleteForm"] ?? null), "submit", array()), 'widget');
            echo "
            ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["deleteForm"] ?? null), 'rest');
            echo "
            ";
            // line 18
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteForm"] ?? null), 'form_end');
            echo "
            <hr/>
        ";
        }
        // line 21
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_show_id", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["player"] ?? null), "club", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\">Powrót</a>
    </div>
";
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
        return array (  91 => 21,  85 => 18,  81 => 17,  77 => 16,  73 => 15,  67 => 13,  65 => 12,  60 => 10,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":player:show_player_id.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/player/show_player_id.html.twig");
    }
}
