//chamando função quando a pagina for carregada
$(function(){
	sendForm();

	//chamando script do google após a pagina ser carregada
	$("html").append('<script async defer src="https://maps.googleapis.com/maps/api/js?key=" '+ key + '"&callback=initMap"></script>');
});

function sendForm(){
	$("#btnSearch").click(function(){
		centerLocation();
	});
}


function centerLocation(){
	var address = $("#txtAddress").val();	
	var url     = "https://maps.googleapis.com/maps/api/geocode/json?address=" + address + "&key=" + key;		
	
	$.getJSON(url).done(function(json){
		// buscando json com latitude e longitude
		var longitude = parseFloat(json.results[0].geometry.location.lng);
		var latitude  = parseFloat(json.results[0].geometry.location.lat);

		//iniciando mapa
		initMap(latitude, longitude);		
	});

}

//inicia mapa eadiciona marcador na localização informada
function initMap(lat, long){
	var map;
	map = new google.maps.Map(document.getElementById('map'),{
		//parametros minimos obrigatórios para o maps
		center: {lat: lat, lng: long},
		zoom: 18
	});

	//adicionando marcador
	var marker = new google.maps.Marker({
		position: {lat: lat, lng: long},
		map: map,
		title: "Pin"
	})
}
