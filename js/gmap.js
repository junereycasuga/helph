function initialize(){
	google.maps.visualRefresh = true;
	var mapProp = {
		center: new google.maps.LatLng(51.508742,-0.120850),
		zoom: 5,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

function loadScript(){
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyCpuVJQiLE2zdqA8tPnhjdN-3lmQvJyUQg&sensor=false&callback=initialize";
	document.body.appendChild(script);
}

window.onload = loadScript;