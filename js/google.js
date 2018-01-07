function initialize(){
    //define map
    var map;
    //lat lng
    myLatlng = new google.maps.LatLng(31.635503, 74.824363);
    //define style
    var styles = [
        {
            //set all color
            featureType: "all",
            stylers: [{ hue: "#35a9d8" }]
        },
        {
            //hide business
            featureType: "poi.business",
            elementType: "labels",
            stylers: [{ visibility: "off" }]
        }
    ];
    //map options
    var mapOptions = {
        zoom: 16,
        center: myLatlng ,
        mapTypeControlOptions: {mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']} ,
        panControl: false , //hide panControl
        zoomControl: true , //hide zoomControl
        mapTypeControl: false , //hide mapTypeControl
        scaleControl: false , //hide scaleControl
        streetViewControl: false , //hide streetViewControl
        overviewMapControl: false , //hide overviewMapControl
    }
    //adding attribute value
    map = new google.maps.Map(document.getElementById('templatemo_contact_map'), mapOptions);
    var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
    //add marker
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Welcome to Aurum 2016'
    });
}


$(document).ready(function(){
      
       var myVar = document.getElementById("contact");
        google.maps.event.trigger(myVar, 'click'); //with marker is global validate
google.maps.event.addDomListener(window, 'load', initialize);
google.maps.event.addDomListener(window, 'resize', initialize);
google.maps.event.addDomListener( myVar, 'mouseover', initialize);
google.maps.event.addDomListener( myVar, 'mouseout', initialize);
google.maps.event.addDomListener(window, 'scroll', initialize);

});
