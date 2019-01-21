<?php

/* :widgets:location.html.twig */
class __TwigTemplate_ea67543ac41a85390df651ee40fd1d16f3cae2ffc995e816d952a91c63203207 extends Twig_Template
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
    <script>
        var longitude = JSON.parse(";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "longitude", array());
        echo ");
        var latitude = JSON.parse(";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["club"] ?? null), "latitude", array());
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
        return array (  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":widgets:location.html.twig", "/home/jaca/Workspace/Symfony/project_fussball/app/Resources/views/widgets/location.html.twig");
    }
}
