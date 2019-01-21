<?php

/* :user:login.html.twig */
class __TwigTemplate_564056ea6247afdb6e70d311b6339bd618a39f738d47c4d0c8fcaa8bced258ab extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:login.html.twig", 1);
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
        <h1>Strona logowania</h1>
        <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
            <input type=\"text\" id=\"username\" placeholder=\"Nazwa użytkownika\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\"/><br/><br/>
            <input type=\"password\" id=\"password\" placeholder=\"Hasło\" name=\"_password\"/><br/><br/>
            <button class=\"links btn btn-success\" type=\"submit\">Zaloguj się</button>
        </form>
        <hr/>
        <h3><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recovery");
        echo "\" class=\"links btn btn-info\">Zapomnialeś hasła?</a></h3>
        <hr/>
        <h3>Nie masz konta?</h3>
        <h3><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\" class=\"links btn btn-info\">Zarejestruj się</a></h3>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":user:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  51 => 12,  43 => 7,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":user:login.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/user/login.html.twig");
    }
}
