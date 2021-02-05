<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Google Maps JavaScript API</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1 style="text-align:center">Owl Drive App</h1>
<lable for="">Name: <input type="text" placeholder="YOUR NAME" size="100"></lable><br><br>
<lable for="">Gmail: <input type="text" placeholder="example@gmail.com" size="100"></lable><br><br>
<lable for="">Car Number: <input type="text" placeholder="YOUR CAR NUMBER (AT FRONTAND BACKSIDE OF YOUR CAR)" size="100"></lable><br><br>
<lable for="">Address: <input id="map-search" class="controls" type="text" placeholder="TYPE YOU ADDRESS OR YOUR DESTINATION ADDRESS " size="104"></label><br><br>
<lable for="">Lat: <input type="text" class="latitude"></label>
<lable for="">Long: <input type="text" class="longitude"></label>
<lable for="">City <input type="text" class="reg-input-city" placeholder="THE CITY YOU WANT TO GO OR THE CITY WHICH YOU ARE LIVING" size="90"></label>

<div id="map-canvas"></div>

<script src="javascript.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVJgCbjP3rRilJyezU7Z3qAnZjZRiUJqU&libraries=places&callback=initialize"></script>
</body>
</html>
