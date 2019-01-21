<?php

/* :user/email:register.html.twig */
class __TwigTemplate_55d039a3db7c9b57458ca1d8595e6c29f62e50c72809ac156c3ba8f2ded5b974 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user/email:register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user/email:register.html.twig"));

        // line 1
        $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_activate", array("type" => "account", "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 1, $this->source); })()), "id", array()), "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 1, $this->source); })())));
        // line 2
        echo "
<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 100%; padding: 25px; border: 0; background-color: #000000; font-family:Arial,Helvetica,sans-serif; font-size: 12px; color: #fff;\">
  <tr>
    <td style=\"padding-bottom: 5px;\">
      <a href=\"";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "request", array())) {
            echo "http://";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "request", array()), "host", array()), "html", null, true);
        }
        echo "\" style=\"outline: none; text-decoration: none; color: #fff; font-size: 28px; font-weight: bold;\">
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["websiteDomain"]) || array_key_exists("websiteDomain", $context) ? $context["websiteDomain"] : (function () { throw new Twig_Error_Runtime('Variable "websiteDomain" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" border=\"0\" style=\"border: none;\"/>
      </a>
    </td>
  </tr>
  <tr>
    <td>
      <table width=\"600\" cellspacing=\"0\" cellpadding=\"20\" border=\"0\" style=\"width: 600px; background-color: #1A1A1A; border: 2px solid #1A1A1A; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: #fff;\">
        <tr>
          <td>
            <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: #fff;\">
              <tr>
                <td style=\"font-weight: bold; font-size: 16px; color: #fff;\">
                  <b>Witaj w  ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["websiteDomain"]) || array_key_exists("websiteDomain", $context) ? $context["websiteDomain"] : (function () { throw new Twig_Error_Runtime('Variable "websiteDomain" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "!</b>
                </td>
              </tr>
              <tr>
                <td>
                  <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%; margin-top: 15px; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: #fff;\">
                    <tr>
                      <td valign=\"top\" style=\"vertical-align: top;\">
                        <p style=\"margin: 0;\">
                          ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 28, $this->source); })()), "username", array()), "html", null, true);
        echo ", twoje konto zostało stworzone. Twoje dane logowania:
                        </p>
                        <div style=\"display: inline-block; margin: 15px 0 0 0; padding: 10px; border: 1px solid #F00000; \">
                          <p style=\"margin: 0;\">
                            <span style=\"display: inline-block; width: 75px;\">Nazwa użytkownika:</span>
                            <b>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 33, $this->source); })()), "username", array()), "html", null, true);
        echo "</b>
                          </p>
                            <p style=\"margin: 0;\">
                              <span style=\"display: inline-block; width: 75px;\">Hasło:</span> <b>";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["password"]) || array_key_exists("password", $context) ? $context["password"] : (function () { throw new Twig_Error_Runtime('Variable "password" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "</b>
                            </p>
                        </div>
                        <p style=\"margin: 15px 0 0 0;\">
                          Kliknij tutaj aby aktywować konto:
                        </p>
                        <div style=\"margin: 10px 0 0 0;\">
                          <a style=\"display: inline-block; background: #F00000; padding: 11px; color: #fff;\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "</a>
                        </div>
                        <p style=\"margin: 15px 0 0 0;\">
                          ---<br/>
                          ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["websiteDomain"]) || array_key_exists("websiteDomain", $context) ? $context["websiteDomain"] : (function () { throw new Twig_Error_Runtime('Variable "websiteDomain" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "
                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>
      <table width=\"600\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 600px; font-family: Arial,Helvetica,sans-serif; font-size: 12px;\">
        <tr>
          <td>
            <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 100%; padding: 10px 20px 0 20px; font-family: Arial,Helvetica,sans-serif; font-size: 12px;\">
              <tr>
                <td style=\"color: #7F7F7F;\">
                  <p style=\"margin: 0 0 0 0;\">TO JEST AUTOMATYCZNA WIADOMOŚĆ E-MAIL. PROSIMY NA NIĄ
                    NIE ODPOWIADAĆ. </p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":user/email:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  97 => 43,  87 => 36,  81 => 33,  73 => 28,  61 => 19,  44 => 7,  37 => 6,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set url = url('user_activate', {type: 'account', id : user.id, token : token }) %}

<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 100%; padding: 25px; border: 0; background-color: #000000; font-family:Arial,Helvetica,sans-serif; font-size: 12px; color: #fff;\">
  <tr>
    <td style=\"padding-bottom: 5px;\">
      <a href=\"{% if app.request %}http://{{ app.request.host }}{% endif %}\" style=\"outline: none; text-decoration: none; color: #fff; font-size: 28px; font-weight: bold;\">
        <img src=\"{{ absolute_url(asset('images/logo.png')) }}\" alt=\"{{ websiteDomain }}\" border=\"0\" style=\"border: none;\"/>
      </a>
    </td>
  </tr>
  <tr>
    <td>
      <table width=\"600\" cellspacing=\"0\" cellpadding=\"20\" border=\"0\" style=\"width: 600px; background-color: #1A1A1A; border: 2px solid #1A1A1A; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: #fff;\">
        <tr>
          <td>
            <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: #fff;\">
              <tr>
                <td style=\"font-weight: bold; font-size: 16px; color: #fff;\">
                  <b>Witaj w  {{ websiteDomain }}!</b>
                </td>
              </tr>
              <tr>
                <td>
                  <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%; margin-top: 15px; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: #fff;\">
                    <tr>
                      <td valign=\"top\" style=\"vertical-align: top;\">
                        <p style=\"margin: 0;\">
                          {{ user.username }}, twoje konto zostało stworzone. Twoje dane logowania:
                        </p>
                        <div style=\"display: inline-block; margin: 15px 0 0 0; padding: 10px; border: 1px solid #F00000; \">
                          <p style=\"margin: 0;\">
                            <span style=\"display: inline-block; width: 75px;\">Nazwa użytkownika:</span>
                            <b>{{ user.username }}</b>
                          </p>
                            <p style=\"margin: 0;\">
                              <span style=\"display: inline-block; width: 75px;\">Hasło:</span> <b>{{ password }}</b>
                            </p>
                        </div>
                        <p style=\"margin: 15px 0 0 0;\">
                          Kliknij tutaj aby aktywować konto:
                        </p>
                        <div style=\"margin: 10px 0 0 0;\">
                          <a style=\"display: inline-block; background: #F00000; padding: 11px; color: #fff;\" href=\"{{ url }}\">{{ url }}</a>
                        </div>
                        <p style=\"margin: 15px 0 0 0;\">
                          ---<br/>
                          {{ websiteDomain }}
                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>
      <table width=\"600\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 600px; font-family: Arial,Helvetica,sans-serif; font-size: 12px;\">
        <tr>
          <td>
            <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 100%; padding: 10px 20px 0 20px; font-family: Arial,Helvetica,sans-serif; font-size: 12px;\">
              <tr>
                <td style=\"color: #7F7F7F;\">
                  <p style=\"margin: 0 0 0 0;\">TO JEST AUTOMATYCZNA WIADOMOŚĆ E-MAIL. PROSIMY NA NIĄ
                    NIE ODPOWIADAĆ. </p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>", ":user/email:register.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/user/email/register.html.twig");
    }
}
