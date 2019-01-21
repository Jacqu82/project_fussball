<?php

/* :user/email:recovery.html.twig */
class __TwigTemplate_fad6f752ca1f454fce89fc24c6c91485319209d74bd2bf43a334e83974b1a1b7 extends Twig_Template
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
        $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_activate", array("type" => "password", "id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()), "token" => ($context["token"] ?? null)));
        // line 2
        echo "
<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 100%; padding: 25px; border: 0; background-color: #000000; font-family:Arial,Helvetica,sans-serif; font-size: 12px; color: #fff;\">
  <tr>
    <td style=\"padding-bottom: 5px;\">
      <a href=\"";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array())) {
            echo "http://";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "host", array()), "html", null, true);
        }
        echo "\" style=\"outline: none; text-decoration: none; color: #fff; font-size: 28px; font-weight: bold;\">
        <img src=\"";
        // line 7
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
        // line 19
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
                          Kliknij tutaj aby utworzyć nowe hasło dla swojego konta:
                        </p>
                        <div style=\"margin: 10px 0 0 0;\">
                          <a style=\"display: inline-block; background: #F00000; padding: 11px; color: #fff;\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "</a>
                        </div>
                        <p style=\"margin: 15px 0 0 0;\">
                          ---<br/>
                            ";
        // line 35
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
        return ":user/email:recovery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 35,  70 => 31,  55 => 19,  38 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":user/email:recovery.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/user/email/recovery.html.twig");
    }
}
