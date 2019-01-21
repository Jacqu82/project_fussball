<?php

/* :flash:flash_messages.html.twig */
class __TwigTemplate_00352b19cd4d421acbc3ddd72d806637ab2cdea3205e278a6a9ff7467068c57a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flash:flash_messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flash:flash_messages.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 2
            echo "  <div class=\"alert alert-success\" role=\"alert\">
    <div class=\"container\">
      ";
            // line 4
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"), 0, array(), "array");
            echo "
    </div>
  </div>
";
        }
        // line 8
        echo "
";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 10
            echo "  <div class=\"alert alert-danger\" role=\"alert\">
    <div class=\"container\">
      ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"), 0, array(), "array");
            echo "
    </div>
  </div>
";
        }
        // line 16
        echo "
";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->source); })()), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
            // line 18
            echo "  <div class=\"alert alert-warning\" role=\"alert\">
    <div class=\"container\">
      ";
            // line 20
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"), 0, array(), "array");
            echo "
    </div>
  </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":flash:flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  63 => 18,  61 => 17,  58 => 16,  51 => 12,  47 => 10,  45 => 9,  42 => 8,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.session.flashBag.has('success') %}
  <div class=\"alert alert-success\" role=\"alert\">
    <div class=\"container\">
      {{ app.session.flashBag.get('success')[0]|raw }}
    </div>
  </div>
{% endif %}

{% if app.session.flashBag.has('error') %}
  <div class=\"alert alert-danger\" role=\"alert\">
    <div class=\"container\">
      {{ app.session.flashBag.get('error')[0]|raw }}
    </div>
  </div>
{% endif %}

{% if app.session.flashBag.has('warning') %}
  <div class=\"alert alert-warning\" role=\"alert\">
    <div class=\"container\">
      {{ app.session.flashBag.get('warning')[0]|raw }}
    </div>
  </div>
{% endif %}", ":flash:flash_messages.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/flash/flash_messages.html.twig");
    }
}
