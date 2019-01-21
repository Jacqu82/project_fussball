<?php

/* EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig */
class __TwigTemplate_9b166ec28d031b896d932a0a8e6db4e54ed120a97e2bfee01a035b38acb38d7b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'ewz_recaptcha_widget' => array($this, 'block_ewz_recaptcha_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig"));

        // line 1
        $this->displayBlock('ewz_recaptcha_widget', $context, $blocks);
        // line 84
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_ewz_recaptcha_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ewz_recaptcha_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ewz_recaptcha_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), "vars", array()), "ewz_recaptcha_enabled", array())) {
            // line 4
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), "vars", array()), "ewz_recaptcha_ajax", array())) {
                // line 5
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 5, $this->source); })()), "options", array()), "size", array()) == "invisible") &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "callback", array(), "any", true, true))) {
                    // line 6
                    echo "                ";
                    $context["options"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 6, $this->source); })()), "options", array()), array("callback" => "onReCaptchaSuccess"));
                    // line 7
                    echo "                ";
                    $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->source); })()), array("options" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 7, $this->source); })())));
                    // line 8
                    echo "
                <script type=\"text/javascript\">
                    var onReCaptchaSuccess = function() {
                        var errorDivs = document.getElementsByClassName('recaptcha-error');
                        if (errorDivs.length) {
                            errorDivs[0].className = '';
                        }

                        var errorMsgs = document.getElementsByClassName('recaptcha-error-message');
                        if (errorMsgs.length) {
                            errorMsgs[0].parentNode.removeChild(errorMsgs[0]);
                        }

                        var forms = document.getElementsByClassName('recaptcha-form');
                        if (forms.length) {
                          var recaptchaSubmitEvent = document.createEvent('Event');
                          recaptchaSubmitEvent.initEvent('submit', true, true);
                          forms[0].addEventListener('submit', function (e) {
                            e.target.submit();
                          }, false);
                          forms[0].dispatchEvent(recaptchaSubmitEvent);
                        }
                    };
                </script>
            ";
                }
                // line 33
                echo "
            <script type=\"text/javascript\" src=\"";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "vars", array()), "url_challenge", array()), "html", null, true);
                echo "\"";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "defer", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 35, $this->source); })()), "options", array()), "defer", array()))) {
                    echo " defer";
                }
                // line 36
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "async", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 36, $this->source); })()), "options", array()), "async", array()))) {
                    echo " async";
                }
                // line 37
                echo "></script>
            <div class=\"g-recaptcha\" data-theme=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 38, $this->source); })()), "options", array()), "theme", array()), "html", null, true);
                echo "\" data-size=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 38, $this->source); })()), "options", array()), "size", array()), "html", null, true);
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 38, $this->source); })()), "options", array()), "type", array()), "html", null, true);
                echo "\" data-sitekey=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "vars", array()), "public_key", array()), "html", null, true);
                echo "\"";
                // line 39
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "callback", array(), "any", true, true)) {
                    echo " data-callback=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 39, $this->source); })()), "options", array()), "callback", array()), "html", null, true);
                    echo "\"";
                }
                // line 40
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "expiredCallback", array(), "any", true, true)) {
                    echo " data-expired-callback=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 40, $this->source); })()), "options", array()), "expiredCallback", array()), "html", null, true);
                    echo "\"";
                }
                // line 41
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "bind", array(), "any", true, true)) {
                    echo " data-bind=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 41, $this->source); })()), "options", array()), "bind", array()), "html", null, true);
                    echo "\"";
                }
                // line 42
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "badge", array(), "any", true, true)) {
                    echo " data-badge=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 42, $this->source); })()), "options", array()), "badge", array()), "html", null, true);
                    echo "\"";
                }
                // line 43
                echo "></div>
            <noscript>
                <div style=\"width: 302px; height: 352px;\">
                    <div style=\"width: 302px; height: 352px; position: relative;\">
                        <div style=\"width: 302px; height: 352px; position: absolute;\">
                            <iframe src=\"https://";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "vars", array()), "ewz_recaptcha_apihost", array()), "html", null, true);
                echo "/recaptcha/api/fallback?k=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "vars", array()), "public_key", array()), "html", null, true);
                echo "\"
                                    frameborder=\"0\" scrolling=\"no\"
                                    style=\"width: 302px; height:352px; border-style: none;\"
                            >
                            </iframe>
                        </div>
                        <div style=\"width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0; padding: 0; right: 25px;\">
                            <textarea id=\"g-recaptcha-response\" name=\"g-recaptcha-response\"
                                      class=\"g-recaptcha-response\"
                                      style=\"width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0; padding: 0; resize: none;\"
                            >
                            </textarea>
                        </div>
                    </div>
                </div>
            </noscript>
        ";
            } else {
                // line 65
                echo "            <div id=\"ewz_recaptcha_div\"></div>

            <script type=\"text/javascript\">
            (function() {
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onload = function() {
                    Recaptcha.create('";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "vars", array()), "public_key", array()), "html", null, true);
                echo "', 'ewz_recaptcha_div', ";
                echo json_encode(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), array())) : (array())));
                echo ");
                };
                script.src = '";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "vars", array()), "url_api", array()), "html", null, true);
                echo "';
                ";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "defer", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 75, $this->source); })()), "options", array()), "defer", array()))) {
                    echo "script.defer = true;";
                }
                // line 76
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "async", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 76, $this->source); })()), "options", array()), "async", array()))) {
                    echo "script.async = true;";
                }
                // line 77
                echo "                document.getElementsByTagName('head')[0].appendChild(script);
            })();
            </script>
        ";
            }
            // line 81
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  210 => 81,  204 => 77,  199 => 76,  195 => 75,  191 => 74,  184 => 72,  175 => 65,  153 => 48,  146 => 43,  140 => 42,  134 => 41,  128 => 40,  122 => 39,  113 => 38,  110 => 37,  106 => 36,  102 => 35,  99 => 34,  96 => 33,  69 => 8,  66 => 7,  63 => 6,  60 => 5,  57 => 4,  54 => 3,  52 => 2,  43 => 1,  32 => 84,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block ewz_recaptcha_widget %}
{% spaceless %}
    {% if form.vars.ewz_recaptcha_enabled %}
        {% if not form.vars.ewz_recaptcha_ajax %}
            {% if attr.options.size == 'invisible' and attr.options.callback is not defined %}
                {% set options = attr.options|merge({'callback': 'onReCaptchaSuccess'}) %}
                {% set attr = attr|merge({'options': options}) %}

                <script type=\"text/javascript\">
                    var onReCaptchaSuccess = function() {
                        var errorDivs = document.getElementsByClassName('recaptcha-error');
                        if (errorDivs.length) {
                            errorDivs[0].className = '';
                        }

                        var errorMsgs = document.getElementsByClassName('recaptcha-error-message');
                        if (errorMsgs.length) {
                            errorMsgs[0].parentNode.removeChild(errorMsgs[0]);
                        }

                        var forms = document.getElementsByClassName('recaptcha-form');
                        if (forms.length) {
                          var recaptchaSubmitEvent = document.createEvent('Event');
                          recaptchaSubmitEvent.initEvent('submit', true, true);
                          forms[0].addEventListener('submit', function (e) {
                            e.target.submit();
                          }, false);
                          forms[0].dispatchEvent(recaptchaSubmitEvent);
                        }
                    };
                </script>
            {% endif %}

            <script type=\"text/javascript\" src=\"{{ form.vars.url_challenge }}\"
                {%- if attr.options.defer is defined and attr.options.defer %} defer{% endif -%}
                {%- if attr.options.async is defined and attr.options.async %} async{% endif -%}
            ></script>
            <div class=\"g-recaptcha\" data-theme=\"{{ attr.options.theme }}\" data-size=\"{{ attr.options.size }}\" data-type=\"{{ attr.options.type }}\" data-sitekey=\"{{ form.vars.public_key }}\"
                 {%- if attr.options.callback is defined %} data-callback=\"{{ attr.options.callback }}\"{% endif -%}
                 {%- if attr.options.expiredCallback is defined %} data-expired-callback=\"{{ attr.options.expiredCallback }}\"{% endif -%}
                 {%- if attr.options.bind is defined %} data-bind=\"{{ attr.options.bind }}\"{% endif -%}
                 {%- if attr.options.badge is defined %} data-badge=\"{{ attr.options.badge }}\"{% endif -%}
            ></div>
            <noscript>
                <div style=\"width: 302px; height: 352px;\">
                    <div style=\"width: 302px; height: 352px; position: relative;\">
                        <div style=\"width: 302px; height: 352px; position: absolute;\">
                            <iframe src=\"https://{{ form.vars.ewz_recaptcha_apihost }}/recaptcha/api/fallback?k={{ form.vars.public_key }}\"
                                    frameborder=\"0\" scrolling=\"no\"
                                    style=\"width: 302px; height:352px; border-style: none;\"
                            >
                            </iframe>
                        </div>
                        <div style=\"width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0; padding: 0; right: 25px;\">
                            <textarea id=\"g-recaptcha-response\" name=\"g-recaptcha-response\"
                                      class=\"g-recaptcha-response\"
                                      style=\"width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0; padding: 0; resize: none;\"
                            >
                            </textarea>
                        </div>
                    </div>
                </div>
            </noscript>
        {% else %}
            <div id=\"ewz_recaptcha_div\"></div>

            <script type=\"text/javascript\">
            (function() {
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onload = function() {
                    Recaptcha.create('{{ form.vars.public_key }}', 'ewz_recaptcha_div', {{ attr.options|default({})|json_encode|raw }});
                };
                script.src = '{{ form.vars.url_api }}';
                {% if attr.options.defer is defined and attr.options.defer %}script.defer = true;{% endif %}
                {% if attr.options.async is defined and attr.options.async %}script.async = true;{% endif %}
                document.getElementsByTagName('head')[0].appendChild(script);
            })();
            </script>
        {% endif %}
    {% endif %}
{% endspaceless %}
{% endblock ewz_recaptcha_widget %}

", "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/vendor/excelwebzone/recaptcha-bundle/src/Resources/views/Form/ewz_recaptcha_widget.html.twig");
    }
}
