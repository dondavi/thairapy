/*---------------------------------------------------------------------------
|	BEGIN: RENDER CUSTOM GOOGLE MAP
|---------------------------------------------------------------------------*/

function initMap() {

  var styles = [
    {
	featureType: "all",
    	stylers: [
			{ hue: "#088cb4" },
      		{ saturation: -60 }
    	]
  	},{
    featureType: "road.arterial",
    elementType: "geometry",
    	stylers: [
      		{ hue: "#088cb4" },
      		{ saturation:-20 },
	  		{ lightness: -20 },
      		{ visibility: "simplified" }
    	]
  	},{
    featureType: "poi.business",
    elementType: "labels",
    	stylers: [
      		{ visibility: "on" }
    	]
    },{
	featureType: "transit", 
		stylers: [
			{ hue: "#062d48" },
      		{ saturation: 0 }]
	},{
	featureType: "landscape",
    elementType: "geometry", 
		stylers: [
			{ hue: "#b3e1ee" },
      		{ saturation: 50 }]
	}
];
	
var myLatlng = new google.maps.LatLng(29.75195, -95.397415);
var mapOptions = {
	zoom: 17,
	center: myLatlng,
  scaleControl: false,
  scrollwheel: false,
	mapTypeControlOptions: {mapTypeIds: ['map_style',google.maps.MapTypeId.SATELLITE,google.maps.MapTypeId.HYBRID]}
}
var styledMap = new google.maps.StyledMapType(styles,{name: "Map"});
var map = new google.maps.Map(document.getElementById('map'), mapOptions);

map.mapTypes.set('map_style', styledMap);
map.setMapTypeId('map_style');

var contentString = '<h4 style="padding-top:0;">Thairapy Salon &amp; Spa</h4><p style="margin:3px 0 8px 0;">1721 Waugh Drive, Houston, Texas, 77006</p>';
var infowindow = new google.maps.InfoWindow({
	content: contentString,
	maxWidth: 500
});
var image = 'http://inspiredroots.com/thairapy/wp-content/themes/thairapysalonspa/framework/dist/img/touch/apple-touch-icon.png';
var marker = new google.maps.Marker({
	position: myLatlng,
	map: map,
	icon: image,
	title: 'Thairapy Salon &amp; Spa'
});
google.maps.event.addListener(marker, 'click', function() {
	infowindow.open(map,marker);
});
}
/*---------------------------------------------------------------------------
|	END: RENDER CUSTOM GOOGLE MAP
|---------------------------------------------------------------------------*/