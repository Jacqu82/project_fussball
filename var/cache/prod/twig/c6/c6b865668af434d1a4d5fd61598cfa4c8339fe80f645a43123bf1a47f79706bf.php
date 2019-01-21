<?php

/* :user/email:recovery_password.html.twig */
class __TwigTemplate_dc51f2fefe41db5dd490c912572fdbb0f95a72df76b81460c91b64e0b7545056 extends Twig_Template
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
        echo "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 100%; padding: 25px; border: 0; background-color: #000000; font-family:Arial,Helvetica,sans-serif; font-size: 12px; color: #fff;\">
  <tr>
    <td style=\"padding-bottom: 5px;\">
      <a href=\"";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array())) {
            echo "http://";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "host", array()), "html", null, true);
        }
        echo "\" style=\"outline: none; text-decoration: none; color: #fff; font-size: 28px; font-weight: bold;\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["websiteDomain"] ?? null), "html", null, true);
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
                  <b>Witaj ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
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
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
        echo ", poniżej możesz znaleźć swoje dane logowania:
                        </p>
                        <div style=\"display: inline-block; margin: 15px 0 0 0; padding: 10px; border: 1px solid #F00000; \">
                          <p style=\"margin: 0;\">
                            <span style=\"display: inline-block; width: 75px;\">Nazwa użytkownika:</span>
                            <b>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "</b> albo
                            <span style=\"font-weight: bold; color: #fff;\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</span>
                          </p>
                          <p style=\"margin: 0;\">
                            <span style=\"display: inline-block; width: 75px;\">Hasło:</span> <b>";
        // line 35
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "</b>
                          </p>
                        </div>
                        <p style=\"margin: 15px 0 0 0;\">
                          ---<br/>
                          ";
        // line 40
        echo twig_escape_filter($this->env, ($context["websiteDomain"] ?? null), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return ":user/email:recovery_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 40,  82 => 35,  76 => 32,  72 => 31,  64 => 26,  52 => 17,  35 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":user/email:recovery_password.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/user/email/recovery_password.html.twig");
    }
}
