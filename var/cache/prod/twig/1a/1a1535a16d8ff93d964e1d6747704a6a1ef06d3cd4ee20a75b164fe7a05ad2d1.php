<?php

/* :user:show_all_users.html.twig */
class __TwigTemplate_495fe721da77bad541a125c193359465ebceed097c7f1f48377a86e6e7c7bfae extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show_all_users.html.twig", 1);
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
        ";
        // line 5
        if ((($context["action"] ?? null) == true)) {
            // line 6
            echo "            <h1>Lista aktywnych użytkowników</h1>
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 8
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show_id", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
                echo "\"
                   class=\"links btn btn-primary\">";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
                echo "</a>
                <hr/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        ";
        } else {
            // line 13
            echo "            <h2>Strona tylko dla Admina</h2>
        ";
        }
        // line 15
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return ":user:show_all_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  64 => 13,  61 => 12,  52 => 9,  47 => 8,  43 => 7,  40 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":user:show_all_users.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/user/show_all_users.html.twig");
    }
}
