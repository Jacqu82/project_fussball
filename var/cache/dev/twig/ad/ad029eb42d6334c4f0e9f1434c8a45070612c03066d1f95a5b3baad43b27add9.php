<?php

/* :widgets:locations.html.twig */
class __TwigTemplate_236dff01ba0f597b2674776625fae904cba13783257b428fee1768a4ab861e15 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":widgets:locations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":widgets:locations.html.twig"));

        // line 1
        echo "
<script type=\"text/javascript\">

    function initMap(){
        var locations = JSON.parse('";
        // line 5
        echo (isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new Twig_Error_Runtime('Variable "locations" does not exist.', 5, $this->source); })());
        echo "');
//            console.log(locations);

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: new google.maps.LatLng(51.895252, 19.063110)
        });

        var pins = [];

        for (var j = 1; j <= 100; j++ ) {
            pins.push(j);
        }

        //var pins = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var infowindow = new google.maps.InfoWindow;

        for (var i = 0; i < locations.length; i++) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i]['latitude'], locations[i]['longitude']),
                label: String(pins[i % pins.length]),
                map: map
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i]['name']);
                    infowindow.open(map, marker);
                }
            })(marker, i));

        }
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

    }

</script>
<script src=\"https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js\">
</script>

<div id=\"map\" style=\"width: 720px; height:500px; margin: 0 auto\"></div>
<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDGIUHCRMEXI3XjoD8m8jBdKQEiPwpL0_M&callback=initMap\">
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":widgets:locations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<script type=\"text/javascript\">

    function initMap(){
        var locations = JSON.parse('{{ locations|raw }}');
//            console.log(locations);

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: new google.maps.LatLng(51.895252, 19.063110)
        });

        var pins = [];

        for (var j = 1; j <= 100; j++ ) {
            pins.push(j);
        }

        //var pins = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var infowindow = new google.maps.InfoWindow;

        for (var i = 0; i < locations.length; i++) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i]['latitude'], locations[i]['longitude']),
                label: String(pins[i % pins.length]),
                map: map
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i]['name']);
                    infowindow.open(map, marker);
                }
            })(marker, i));

        }
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

    }

</script>
<script src=\"https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js\">
</script>

<div id=\"map\" style=\"width: 720px; height:500px; margin: 0 auto\"></div>
<script async defer
        src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDGIUHCRMEXI3XjoD8m8jBdKQEiPwpL0_M&callback=initMap\">
</script>", ":widgets:locations.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/widgets/locations.html.twig");
    }
}
