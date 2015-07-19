<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEaSEgbh5KcHPXA4tc4LrFgjfmAmFFCao"></script>
		
	<script type="text/javascript">
		var marker;

    	function initialize() {
        	var myLatlng = new google.maps.LatLng(19.249965, -103.725026);
        	var mapOptions = {
          		center: myLatlng, 
          		zoom: 15
        	};
        	var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

        	google.maps.event.addListener(map, 'click', function(event) {
  				placeMarker(event.latLng);
			});

			function placeMarker(location) {
				document.getElementById('latitud').value = location.A;
				document.getElementById('longitud').value = location.F;
			  	if ( marker ) {
			    	marker.setPosition(location);
			  	} else {
			    	marker = new google.maps.Marker({
			      		position: location,
			      		map: map
			    	});
			  	}
			}
      	}
    </script>