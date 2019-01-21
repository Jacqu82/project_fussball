<?php

/* :flash:flash_messages.html.twig */
class __TwigTemplate_35d58c84be1490952f6beaa2c92ea4dca871fa6104cc13af56b9bee79a0e210c extends Twig_Template
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
        // line 1
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 2
            echo "  <div class=\"alert alert-success\" role=\"alert\">
    <div class=\"container\">
      ";
            // line 4
            echo (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method")) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null);
            echo "
    </div>
  </div>
";
        }
        // line 8
        echo "
";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 10
            echo "  <div class=\"alert alert-danger\" role=\"alert\">
    <div class=\"container\">
      ";
            // line 12
            echo (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method")) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[0] ?? null) : null);
            echo "
    </div>
  </div>
";
        }
        // line 16
        echo "
";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
            // line 18
            echo "  <div class=\"alert alert-warning\" role=\"alert\">
    <div class=\"container\">
      ";
            // line 20
            echo (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method")) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[0] ?? null) : null);
            echo "
    </div>
  </div>
";
        }
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
        return array (  61 => 20,  57 => 18,  55 => 17,  52 => 16,  45 => 12,  41 => 10,  39 => 9,  36 => 8,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":flash:flash_messages.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/flash/flash_messages.html.twig");
    }
}
