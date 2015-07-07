<?php
/**
 * Created by PhpStorm.
 * User: pradip
 * Date: 21-06-2015
 * Time: 20:11
 */



$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$city = $geo["geoplugin_city"];
$region = $geo["geoplugin_regionName"];
$country = $geo["geoplugin_countryName"];
$latitude = $geo["geoplugin_latitude"];
$longitude = $geo["geoplugin_longitude"];
$regionCode = $geo["geoplugin_regionCode"];
echo "City: ".$city."<br>";
echo "Region: ".$region."<br>";
echo "Country: ".$country."<br>";
echo "latitude: ".$latitude."<br>";
echo "longitude: ".$longitude."<br>";
echo "User IP: ".$user_ip."<br>";
echo "regionCode: ".$regionCode."<br>";


?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
        html, body, #map-canvas {
            height: 100%;
            margin: 0px;
            padding: 0px
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
        function initialize() {
            var myLatlng = new google.maps.LatLng(<?php echo $latitude ?>,<?php echo $longitude ?>);
            var mapOptions = {
                zoom: 4,
                center: myLatlng
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Hello World!'
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
</head>
<body>
<div id="map-canvas"></div>
</body>
</html>

