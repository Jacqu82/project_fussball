<?php

/* :game:edit_game.html.twig */
class __TwigTemplate_89990c005e0d6d431f03920e39dd0afa62d50fe01d9e4e6c0504112d868aa5b9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":game:edit_game.html.twig", 1);
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
        <h2>Edycja meczu</h2>
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
    <hr/>
    <p class=\"text-center\">
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_show_id", array("id" => twig_get_attribute($this->env, $this->source, ($context["game"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\">Powrót</a>
    </p>
";
    }

    public function getTemplateName()
    {
        return ":game:edit_game.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  47 => 8,  43 => 7,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":game:edit_game.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/game/edit_game.html.twig");
    }
}
