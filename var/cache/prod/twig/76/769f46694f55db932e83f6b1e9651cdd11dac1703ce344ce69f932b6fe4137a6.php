<?php

/* :widgets:locations.html.twig */
class __TwigTemplate_3839ce84686695079fe0c60e1d233ac866267c952137bff93460fd694ceb566b extends Twig_Template
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
        echo "
<script type=\"text/javascript\">

    function initMap(){
        var locations = JSON.parse('";
        // line 5
        echo ($context["locations"] ?? null);
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
        return array (  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":widgets:locations.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/widgets/locations.html.twig");
    }
}
