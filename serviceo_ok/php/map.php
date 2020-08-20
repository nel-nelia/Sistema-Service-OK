<!DOCTYPE html>
<html>
<head>
    <title>Obtener ubicacion</title>
</head>
<body>
    <h1>Obtener ubicacion y mostrarla en un mapa</h1>
<div id="map" style="width:100%;height:600px;"></div>

<script>
navigator.geolocation.getCurrentPosition(function(location) {
    
  console.log(location.coords.latitude);
  console.log(location.coords.longitude);

    var map;
    var center = {lat: location.coords.latitude, lng: location.coords.longitude};
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
        center: center,
        zoom: 6
        });

        var marker = new google.maps.Marker({
        position: {lat: location.coords.latitude, lng: location.coords.longitude},
        map:map,
        title: 'Ubication'

        });

    }

    
    initMap();
});
</script>
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHUMaudNC3W-f3XO7NXbXBJP7wytJF4SI&callback=initMap"></script>

</body>
</html>