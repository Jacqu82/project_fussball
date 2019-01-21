<?php

/* @EWZRecaptcha/Form/ewz_recaptcha_widget.html.php */
class __TwigTemplate_55c6de591c23d2320ba5190c7325fcfa5acb9d9acfb09950483c18ebfbb31578 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.php"));

        // line 1
        echo "<?php if (\$ewz_recaptcha_enabled): ?>
    <?php if (!\$ewz_recaptcha_ajax): ?>
        <?php if (\$attr['options']['size'] == 'invisible' && !isset(\$attr['options']['callback'])): ?>
            <?php \$attr['options']['callback'] = 'onReCaptchaSuccess' ?>

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
        <?php endif ?>

        <script type=\"text/javascript\" src=\"<?php echo \$url_challenge ?>\"
            <?php if (isset(\$attr['options']['defer']) && \$attr['options']['defer']): ?> defer<?php endif ?>
            <?php if (isset(\$attr['options']['async']) && \$attr['options']['async']): ?> async<?php endif ?>
        ></script>
        <div class=\"g-recaptcha\" data-theme=\"<?php echo \$attr['options']['theme'] ?>\" data-size=\"<?php echo \$attr['options']['size'] ?>\" data-type=\"<?php echo \$attr['options']['type'] ?>\" data-sitekey=\"<?php echo \$public_key ?>\"
            <?php if (isset(\$attr['options']['callback'])): ?>data-callback=\"<?php echo \$attr['options']['callback'] ?>\"<?php endif ?>
            <?php if (isset(\$attr['options']['expiredCallback'])): ?>data-expired-callback=\"<?php echo \$attr['options']['expiredCallback'] ?>\"<?php endif ?>
            <?php if (isset(\$attr['options']['bind'])): ?>data-bind=\"<?php echo \$attr['options']['bind'] ?>\"<?php endif ?>
            <?php if (isset(\$attr['options']['badge'])): ?>data-badge=\"<?php echo \$attr['options']['badge'] ?>\"<?php endif ?>
        ></div>
        <noscript>
            <div style=\"width: 302px; height: 352px;\">
                <div style=\"width: 302px; height: 352px; position: relative;\">
                    <div style=\"width: 302px; height: 352px; position: absolute;\">
                        <iframe src=\"https://<?php echo \$ewz_recaptcha_apihost ?>/recaptcha/api/fallback?k=<?php echo \$public_key ?>\"
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
    <?php else: ?>
        <div id=\"ewz_recaptcha_div\"></div>

        <script type=\"text/javascript\">
        (function() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.onload = function() {
                Recaptcha.create('<?php echo \$public_key ?>', 'ewz_recaptcha_div', <?php echo json_encode(\$attr['options']) ?>);
            };
            script.src = '<?php echo \$url_api ?>';
            <?php if (isset(\$attr['options']['defer']) && \$attr['options']['defer']): ?>script.defer = true;<?php endif ?>
            <?php if (isset(\$attr['options']['async']) && \$attr['options']['async']): ?>script.async = true;<?php endif ?>
            document.getElementsByTagName('head')[0].appendChild(script);
        })();
        </script>
    <?php endif ?>
<?php endif ?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$ewz_recaptcha_enabled): ?>
    <?php if (!\$ewz_recaptcha_ajax): ?>
        <?php if (\$attr['options']['size'] == 'invisible' && !isset(\$attr['options']['callback'])): ?>
            <?php \$attr['options']['callback'] = 'onReCaptchaSuccess' ?>

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
        <?php endif ?>

        <script type=\"text/javascript\" src=\"<?php echo \$url_challenge ?>\"
            <?php if (isset(\$attr['options']['defer']) && \$attr['options']['defer']): ?> defer<?php endif ?>
            <?php if (isset(\$attr['options']['async']) && \$attr['options']['async']): ?> async<?php endif ?>
        ></script>
        <div class=\"g-recaptcha\" data-theme=\"<?php echo \$attr['options']['theme'] ?>\" data-size=\"<?php echo \$attr['options']['size'] ?>\" data-type=\"<?php echo \$attr['options']['type'] ?>\" data-sitekey=\"<?php echo \$public_key ?>\"
            <?php if (isset(\$attr['options']['callback'])): ?>data-callback=\"<?php echo \$attr['options']['callback'] ?>\"<?php endif ?>
            <?php if (isset(\$attr['options']['expiredCallback'])): ?>data-expired-callback=\"<?php echo \$attr['options']['expiredCallback'] ?>\"<?php endif ?>
            <?php if (isset(\$attr['options']['bind'])): ?>data-bind=\"<?php echo \$attr['options']['bind'] ?>\"<?php endif ?>
            <?php if (isset(\$attr['options']['badge'])): ?>data-badge=\"<?php echo \$attr['options']['badge'] ?>\"<?php endif ?>
        ></div>
        <noscript>
            <div style=\"width: 302px; height: 352px;\">
                <div style=\"width: 302px; height: 352px; position: relative;\">
                    <div style=\"width: 302px; height: 352px; position: absolute;\">
                        <iframe src=\"https://<?php echo \$ewz_recaptcha_apihost ?>/recaptcha/api/fallback?k=<?php echo \$public_key ?>\"
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
    <?php else: ?>
        <div id=\"ewz_recaptcha_div\"></div>

        <script type=\"text/javascript\">
        (function() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.onload = function() {
                Recaptcha.create('<?php echo \$public_key ?>', 'ewz_recaptcha_div', <?php echo json_encode(\$attr['options']) ?>);
            };
            script.src = '<?php echo \$url_api ?>';
            <?php if (isset(\$attr['options']['defer']) && \$attr['options']['defer']): ?>script.defer = true;<?php endif ?>
            <?php if (isset(\$attr['options']['async']) && \$attr['options']['async']): ?>script.async = true;<?php endif ?>
            document.getElementsByTagName('head')[0].appendChild(script);
        })();
        </script>
    <?php endif ?>
<?php endif ?>
", "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.php", "/home/jaca/Workspace/Symfony/project_fussball/vendor/excelwebzone/recaptcha-bundle/src/Resources/views/Form/ewz_recaptcha_widget.html.php");
    }
}
