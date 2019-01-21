<?php

/* :user/email:email_activation.html.twig */
class __TwigTemplate_7614569d1d592d948b2e9763eda7cda99ce0ff2ac0337fcee0cdca6f655599f4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user/email:email_activation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user/email:email_activation.html.twig"));

        // line 1
        $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_activate", array("type" => "email", "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 1, $this->source); })()), "id", array()), "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 1, $this->source); })()), "value" => twig_urlencode_filter((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 1, $this->source); })()))));
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
                                <td>
                                    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%; margin-top: 15px; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: #fff;\">
                                        <tr>
                                            <td valign=\"top\" style=\"vertical-align: top;\">
                                                <p style=\"margin: 0;\">
                                                    ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 23, $this->source); })()), "fullname", array()), "html", null, true);
        echo ", odnotowaliśmy proces zmiany adresu email dla Twojego konta.:
                                                </p>
                                                <p style=\"margin: 15px 0 0 0;\">
                                                    Aby zakończyć proces i zmienić adres email który będzie przypisany do Twojego konta na: ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 26, $this->source); })()), "html", null, true);
        echo ", kliknij w link poniżej:
                                                </p>
                                                <div style=\"margin: 10px 0 0 0;\">
                                                    <a style=\"display: inline-block; background: #F00000; padding: 11px; color: #fff;\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "</a>
                                                </div>
                                                <p style=\"margin: 15px 0 0 0;\">
                                                    ---<br/>
                                                    ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["websiteDomain"]) || array_key_exists("websiteDomain", $context) ? $context["websiteDomain"] : (function () { throw new Twig_Error_Runtime('Variable "websiteDomain" does not exist.', 33, $this->source); })()), "html", null, true);
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
                                    <p style=\"margin: 0 0 0 0;\">THIS IS AN AUTOMATICALLY GENERATED EMAIL. PLEASE DO NOT REPLY TO THIS
                                        MESSAGE. </p>
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
        return ":user/email:email_activation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 33,  77 => 29,  71 => 26,  65 => 23,  44 => 7,  37 => 6,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set url = url('user_activate', {type: 'email', id : user.id, token : token, value: email|url_encode }) %}

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
                                <td>
                                    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%; margin-top: 15px; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: #fff;\">
                                        <tr>
                                            <td valign=\"top\" style=\"vertical-align: top;\">
                                                <p style=\"margin: 0;\">
                                                    {{ user.fullname }}, odnotowaliśmy proces zmiany adresu email dla Twojego konta.:
                                                </p>
                                                <p style=\"margin: 15px 0 0 0;\">
                                                    Aby zakończyć proces i zmienić adres email który będzie przypisany do Twojego konta na: {{ email }}, kliknij w link poniżej:
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
                                    <p style=\"margin: 0 0 0 0;\">THIS IS AN AUTOMATICALLY GENERATED EMAIL. PLEASE DO NOT REPLY TO THIS
                                        MESSAGE. </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>", ":user/email:email_activation.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/user/email/email_activation.html.twig");
    }
}
