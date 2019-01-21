<?php

/* :user:show_user_id.html.twig */
class __TwigTemplate_7b0dd2314aea1dc5d16afd3f9f259f51f85c4e55e5f4e5cd71a8f13bb04a2a7b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show_user_id.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "</h1>
        <h3>E-mail: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</h3>
        <h3>Rola: ";
        // line 7
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role", array())), "html", null, true);
        echo "</h3>
        <h3>
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isActive", array())) {
            // line 10
            echo "                Status: Aktywny
            ";
        } else {
            // line 12
            echo "                Status: Nieaktywny
            ";
        }
        // line 14
        echo "        </h3>
        <h3>Utworzony: ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getCreatedAt", array()), "d-m-Y H:i:s"), "html", null, true);
        echo "</h3>
        <hr/>
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Edytuj dane</a><br/><br/>
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteForm"] ?? null), 'form_start');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["deleteForm"] ?? null), "submit", array()), 'widget');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["deleteForm"] ?? null), 'rest');
        echo "
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteForm"] ?? null), 'form_end');
        echo "
        <hr/>
        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show_all");
        echo "\" class=\"btn btn-default\">Powrót</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":user:show_user_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  64 => 15,  61 => 14,  57 => 12,  53 => 10,  51 => 9,  46 => 7,  42 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":user:show_user_id.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/user/show_user_id.html.twig");
    }
}
