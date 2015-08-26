/*
 * Add the code below to the bottom of your page, just before the closing </body> tag.
Edit myLatlng and the other variables.

Find syntax for Features that can be styled here:

https://developers.google.com/maps/documentation/javascript/reference#MapTypeStyleFeatureType

Or use a service such as:

http://software.stadtwerk.org/google_maps_colorizr/#
http://gmaps-samples-v3.googlecode.com/svn/trunk/styledmaps/wizard/index.html
https://developers.google.com/maps/documentation/javascript/tutorial
 */

var bittersMap = (function () {

    var vzpominkaLatlng = new google.maps.LatLng(49.834436, 18.167759),
	vrtuleLatlng = new google.maps.LatLng(49.836921, 18.157845),
	vagonLatlng = new google.maps.LatLng(49.837111, 18.160821),
	babylonLatlng = new google.maps.LatLng(49.830217, 18.164170),
	mukadeLatlng = new google.maps.LatLng(49.831411, 18.164820),
	ctyriLatlng = new google.maps.LatLng(49.829207, 18.176122),
        mapCenter = new google.maps.LatLng(49.833131, 18.165386),
        mapCanvas = document.getElementById('map'),
        mapOptions = {
          center: mapCenter,
          zoom: 15,
          scrollwheel: false,
          draggable: true,
          disableDefaultUI: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        },
        map = new google.maps.Map(mapCanvas, mapOptions),
        contentString =
          '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h1 id="firstHeading" class="firstHeading">thoughtbot</h1>'+
          '<div id="bodyContent"'+
          '<p>Sveavägen 98</p>'+
          '</div>'+
          '</div>',
        infowindow = new google.maps.InfoWindow({
          content: contentString,
          maxWidth: 300
        }),
        marker = new google.maps.Marker({
          position: vzpominkaLatlng,
          map: map,
          title: 'hospoda Vzpomínka'
        });
	marker2 = new google.maps.Marker({
          position: vrtuleLatlng,
          map: map,
          title: 'hospoda Vrtule'
        });
	marker3 = new google.maps.Marker({
          position: vagonLatlng,
          map: map,
          title: 'hospoda Vagon'
        });
	marker4 = new google.maps.Marker({
          position: babylonLatlng,
          map: map,
          title: 'hospoda Vagon'
        });
	
	marker6 = new google.maps.Marker({
          position: ctyriLatlng,
          map: map,
          title: 'hospoda Vagon'
        });
	marker7 = new google.maps.Marker({
          position: mukadeLatlng,
          map: map,
          title: 'hospoda Vagon'
        });

    return {
      init: function () {
        map.set('styles', [{
          featureType: 'landscape',
          elementType: 'geometry',
          stylers: [
            { hue: '#ffff00' },
            { saturation: 30 },
            { lightness: 10}
          ]}
        ]);

        google.maps.event.addListener(marker, 'click', function () {
          infowindow.open(map,marker);
        });
      }
    };
  }());

  bittersMap.init();

