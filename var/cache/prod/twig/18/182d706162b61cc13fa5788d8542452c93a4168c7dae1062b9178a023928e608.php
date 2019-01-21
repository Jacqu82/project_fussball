<?php

/* EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig */
class __TwigTemplate_5e52aa3a47a42e7db4d0e3f130632d06677d49f36136a62112bc8306c4c7cd98 extends Twig_Template
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
        // line 1
        $this->displayBlock('ewz_recaptcha_widget', $context, $blocks);
        // line 84
        echo "
";
    }

    // line 1
    public function block_ewz_recaptcha_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "ewz_recaptcha_enabled", array())) {
            // line 4
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "ewz_recaptcha_ajax", array())) {
                // line 5
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), "size", array()) == "invisible") &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "callback", array(), "any", true, true))) {
                    // line 6
                    echo "                ";
                    $context["options"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), array("callback" => "onReCaptchaSuccess"));
                    // line 7
                    echo "                ";
                    $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("options" => ($context["options"] ?? null)));
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "url_challenge", array()), "html", null, true);
                echo "\"";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "defer", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), "defer", array()))) {
                    echo " defer";
                }
                // line 36
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "async", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), "async", array()))) {
                    echo " async";
                }
                // line 37
                echo "></script>
            <div class=\"g-recaptcha\" data-theme=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), "theme", array()), "html", null, true);
                echo "\" data-size=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), "size", array()), "html", null, true);
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), "type", array()), "html", null, true);
                echo "\" data-sitekey=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "public_key", array()), "html", null, true);
                echo "\"";
                // line 39
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "callback", array(), "any", true, true)) {
                    echo " data-callback=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), "callback", array()), "html", null, true);
                    echo "\"";
                }
                // line 40
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "expiredCallback", array(), "any", true, true)) {
                    echo " data-expired-callback=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), "expiredCallback", array()), "html", null, true);
                    echo "\"";
                }
                // line 41
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "bind", array(), "any", true, true)) {
                    echo " data-bind=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), "bind", array()), "html", null, true);
                    echo "\"";
                }
                // line 42
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "badge", array(), "any", true, true)) {
                    echo " data-badge=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), "badge", array()), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "ewz_recaptcha_apihost", array()), "html", null, true);
                echo "/recaptcha/api/fallback?k=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "public_key", array()), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "public_key", array()), "html", null, true);
                echo "', 'ewz_recaptcha_div', ";
                echo json_encode(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), array())) : (array())));
                echo ");
                };
                script.src = '";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "url_api", array()), "html", null, true);
                echo "';
                ";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "defer", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), "defer", array()))) {
                    echo "script.defer = true;";
                }
                // line 76
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array(), "any", false, true), "async", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", array()), "async", array()))) {
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
    }

    public function getTemplateName()
    {
        return "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  192 => 81,  186 => 77,  181 => 76,  177 => 75,  173 => 74,  166 => 72,  157 => 65,  135 => 48,  128 => 43,  122 => 42,  116 => 41,  110 => 40,  104 => 39,  95 => 38,  92 => 37,  88 => 36,  84 => 35,  81 => 34,  78 => 33,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  39 => 4,  36 => 3,  34 => 2,  31 => 1,  26 => 84,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/vendor/excelwebzone/recaptcha-bundle/src/Resources/views/Form/ewz_recaptcha_widget.html.twig");
    }
}
