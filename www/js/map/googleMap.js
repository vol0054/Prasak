var labels = '123456789';
var labelIndex = 0;


function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 15,
		center: {lat: 49.834339, lng: 18.166266},
		scrollwheel: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});
	


	var coordinates = [
	  //vrtule
	  {lat: 49.836921, lng: 18.157845},
	  //vagon
	  {lat: 49.837111, lng: 18.160821},
	  //vzpominka
	  {lat:49.834436, lng:18.167759},
	  //mukade
	  {lat: 49.831411, lng:18.164820},
	  //babylon
	  {lat: 49.830217, lng: 18.164170},
	  //vrtule
	  {lat: 49.836921, lng: 18.157845},
	];
	var flightPath = new google.maps.Polyline({
	  path: coordinates,
	  geodesic: true,
	  strokeColor: '#FFAA00',
	  strokeOpacity: 1.0,
	  strokeWeight: 4
	});

	flightPath.setMap(map);
	var beerMarker = 'assets/icons/beer-marker-example.png';
	for(i=0; i < coordinates.length - 1; i++) {	
		marker = new google.maps.Marker({
			position: coordinates[i],
			map: map,
			label:labels[i],
			title: 'hospoda Vzpomínka',
			icon: beerMarker				
		});
	};
}

