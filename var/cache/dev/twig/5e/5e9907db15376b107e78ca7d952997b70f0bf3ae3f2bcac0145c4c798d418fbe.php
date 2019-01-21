<?php

/* :widgets:location.html.twig */
class __TwigTemplate_506eeae373802d0debbe134cf5e50e63f619a0d70bff17c6744b94fd9233caf5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":widgets:location.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":widgets:location.html.twig"));

        // line 1
        echo "
    <script>
        var longitude = JSON.parse(";
        // line 3
        echo twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 3, $this->source); })()), "longitude", array());
        echo ");
        var latitude = JSON.parse(";
        // line 4
        echo twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 4, $this->source); })()), "latitude", array());
        echo ");

//        console.log(longitude);
//        console.log(latitude);

        function initMap() {

            var styledMapType = new google.maps.StyledMapType(

                [
                    {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                    {
                        featureType: 'administrative.locality',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'poi',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'geometry',
                        stylers: [{color: '#263c3f'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#6b9a76'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry',
                        stylers: [{color: '#38414e'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#212a37'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#9ca5b3'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry',
                        stylers: [{color: '#746855'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#1f2835'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#f3d19c'}]
                    },
                    {
                        featureType: 'transit',
                        elementType: 'geometry',
                        stylers: [{color: '#2f3948'}]
                    },
                    {
                        featureType: 'transit.station',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry',
                        stylers: [{color: '#17263c'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#515c6d'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.stroke',
                        stylers: [{color: '#17263c'}]
                    }
                ],
                {name: 'Night'
                });

            var location = {lat: latitude, lng: longitude};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: location,
                mapTypeControlOptions: {
                    mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                        'Night']
                }

            });

            map.mapTypes.set('Night', styledMapType);
            map.setMapTypeId('satellite');

            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
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
        return ":widgets:location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
    <script>
        var longitude = JSON.parse({{ club.longitude|raw }});
        var latitude = JSON.parse({{ club.latitude|raw }});

//        console.log(longitude);
//        console.log(latitude);

        function initMap() {

            var styledMapType = new google.maps.StyledMapType(

                [
                    {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                    {
                        featureType: 'administrative.locality',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'poi',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'geometry',
                        stylers: [{color: '#263c3f'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#6b9a76'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry',
                        stylers: [{color: '#38414e'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#212a37'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#9ca5b3'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry',
                        stylers: [{color: '#746855'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#1f2835'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#f3d19c'}]
                    },
                    {
                        featureType: 'transit',
                        elementType: 'geometry',
                        stylers: [{color: '#2f3948'}]
                    },
                    {
                        featureType: 'transit.station',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry',
                        stylers: [{color: '#17263c'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#515c6d'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.stroke',
                        stylers: [{color: '#17263c'}]
                    }
                ],
                {name: 'Night'
                });

            var location = {lat: latitude, lng: longitude};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: location,
                mapTypeControlOptions: {
                    mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                        'Night']
                }

            });

            map.mapTypes.set('Night', styledMapType);
            map.setMapTypeId('satellite');

            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
    <div id=\"map\" style=\"width: 720px; height:500px; margin: 0 auto\"></div>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDGIUHCRMEXI3XjoD8m8jBdKQEiPwpL0_M&callback=initMap\">
    </script>", ":widgets:location.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/widgets/location.html.twig");
    }
}
