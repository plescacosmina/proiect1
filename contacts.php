  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Music Store</title>

 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/> 
    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
   integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
   crossorigin=""></script>
    
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

 
<body>

    <?php
    require_once 'header.php';
    ?>
    <p><strong>PROGRAM:</strong></p>
    <br>Luni- Sambata: 09:00 - 21:00</br>
    <br>Duminica : 09:00 - 21:00</br>
    <br>Telefon: 0755 276263</br>
<div id="content">
<div id="leftPan">
<div id="categories">
   <h2></h2>
  
     <div id="mapid" style="width: 600px; height: 400px;"></div>
     
<script>

	var mymap = L.map('mapid').setView([ 47.7448932,26.6590118], 13);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);

	L.marker([47.7448932,26.6590118]).addTo(mymap)
		.bindPopup("<b>Cofetaria</b><br />Capsunica").openPopup();


	var popup = L.popup();

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent("You clicked the map at " + e.latlng.toString())
			.openOn(mymap);
	}

	mymap.on('click', onMapClick);

</script>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/I752ofYu7ag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

     <audio controls>
  <source src="http://localhost/TARTA.mp3" type="audio/mpeg">
</audio> 
<video width="320" height="240" controls>
  <source src="http://localhost/savarina.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>

<canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>

<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");

// Create gradient
var grd = ctx.createRadialGradient(75,50,5,90,60,100);
grd.addColorStop(0,"red");
grd.addColorStop(1,"white");

// Fill with gradient
ctx.fillStyle = grd;
ctx.fillRect(10,10,150,80);
</script>

<svg width="100" height="100">
  <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
</svg>
 
 
 
 
 
%<p><a href="#">HOME</a> | <a href="#">ABOUT
US</a> | <a href="#">SERVICES</a> | <a href="#">PRODUCTS</a> | <a href="#">SUPPORT
INFO</a> | <a href="#">NEWS &amp; EVENTS</a>
| <a href="#">CONTACTS</a><br />
Copyright © Your Company Name. Designed by <a href="http://www.templatesland.com">TemplatesLand.com</a></p>
<p><a href="http://www.templatesland.com">Supported by </a><a href="http://www.hosting24.com/" target="_blank">Hosting24.com</a></p>
</div>
 
</body>
</html>

