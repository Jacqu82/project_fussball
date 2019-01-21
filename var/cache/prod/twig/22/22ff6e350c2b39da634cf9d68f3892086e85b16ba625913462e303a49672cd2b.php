<?php

/* :club:edit_club.html.twig */
class __TwigTemplate_2aa97fd67ec22fed3648bf54aa3ed28f150ecf67460121a344ca8fd507ebb67e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":club:edit_club.html.twig", 1);
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
        <h2>Edycja klubu</h2>
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_show_id", array("id" => twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\">Powrót</a>
    </p>
";
    }

    public function getTemplateName()
    {
        return ":club:edit_club.html.twig";
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
        return new Twig_Source("", ":club:edit_club.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/club/edit_club.html.twig");
    }
}
