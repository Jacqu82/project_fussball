<?php

/* :round:show_all_rounds.html.twig */
class __TwigTemplate_1e5285f23d8313eeeb7572539b798a12cc0a8271ab32d6d5f588efaecfd37b72 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":round:show_all_rounds.html.twig", 1);
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
    <h1>Terminarz Ekstraklasy</h1>
    <hr/>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rounds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["round"]) {
            // line 8
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("round_show_id", array("id" => twig_get_attribute($this->env, $this->source, $context["round"], "id", array()))), "html", null, true);
            echo "\"
           class=\"links btn btn-success\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["round"], "roundNumber", array()), "html", null, true);
            echo ". kolejka</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['round'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <hr/>
";
    }

    public function getTemplateName()
    {
        return ":round:show_all_rounds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  49 => 9,  44 => 8,  40 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":round:show_all_rounds.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/round/show_all_rounds.html.twig");
    }
}
