<html> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
<!--importation de l'API google MAP Version 3-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyDqSTkzPn8PpJBY3Pclu-TTjmGDLzqKMD4"></script> 
<script type="text/javascript"> 
  var directionsService = new google.maps.DirectionsService();
  var map,geocoder, marker;
  var depart,arrivee,ptCheck;
  
  /*initialise google MAP V3*/
  function init() {
	/*gestion des routes*/
    directionsDisplay = new google.maps.DirectionsRenderer();
	/*emplacement par défaut de la carte (j'ai mis Paris)*/
    var maison = new google.maps.LatLng(48.873818, 2.29498386);
	/*option par défaut de la carte*/
    var myOptions = {
      zoom:6,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: maison
    }
	/*creation de la map*/
    map = new google.maps.Map(document.getElementById("divMap"), myOptions);
	/*connexion de la map + le panneau de l'itinéraire*/
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById("divRoute"));
	/*intialise le geocoder pour localiser les adresses */
	geocoder = new google.maps.Geocoder();
	}
  
  
  function trouveRoute(depart,arrivee) {
  /*test si les variables sont bien initialisés*/
	if (depart && arrivee)
	{
	/*mode de transport*/
	var choixMode = document.getElementById("mode").value;
	
    var request = {
        origin:depart, 
        destination:arrivee,
        travelMode: google.maps.DirectionsTravelMode[choixMode]
    };
	/*appel à l'API pour tracer l'itinéraire*/
    directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
      }
    });
	}
  }
  
  function rechercher(src,code)
  {
    ptCheck = code; /*adresse de départ ou arrivée ? */
	if (geocoder) {
	  geocoder.geocode( { 'address': document.getElementById(src).value}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
		 
		  /*ajoute un marqueur à l'adresse choisie*/
		  map.setCenter(results[0].geometry.location);
		  if (marker) { marker.setMap(null);}
		  marker = new google.maps.Marker({
			  map: map, 			  
			  position: results[0].geometry.location
		  });
		  /*on remplace l'adresse par celle fournie du geocoder*/
		  document.getElementById(src).value = results[0].formatted_address;
		  if (ptCheck)
		  {
		  depart = results[0].formatted_address;
		  } else
		  {
		  arrivee = results[0].formatted_address;
		  }
		  /*trace la route*/
		  trouveRoute(depart,arrivee);
		} else {
		  alert("Geocode n'a rien trouvé !\n raison : " + status);
		}
	  });
	}
	
  }
	  function rechercher1(src,code)
  {
    ptCheck = code; /*adresse de départ ou arrivée ? */
	if (geocoder) {
	  geocoder.geocode( { 'address': document.getElementById(src).value}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
		 
		  /*ajoute un marqueur à l'adresse choisie*/
		  map.setCenter(results[0].geometry.location);
		  if (marker) { marker.setMap(null);}
		  marker = new google.maps.Marker({
			  map: map, 			  
			  position: results[0].geometry.location
		  });
		  /*on remplace l'adresse par celle fournie du geocoder*/
		  document.getElementById(src).value = results[0].formatted_address;
		  if (ptCheck)
		  {
		  depart = results[0].formatted_address;
		  } else
		  {
		  arrivee = results[0].formatted_address;
		  }
		  /*trace la route*/
		  trouveRoute(depart,arrivee);
		} else {
		  alert("Geocode n'a rien trouvé !\n raison : " + status);
		}
	  });
	}
	
  }
  

</script> 
</head> 
<body onload="init();"> 
<div> 
<table>
<tr><td><b>d&eacute;part: </b></td>
<td><input type="text" id="adrDep" value="" style="width:300px;"></td>
<td><input type="button" value="recherche" onclick="rechercher('adrDep',true)"></td>
<td rowspan="2">
<b>Transport: </b> 
<select id="mode" onchange="calcRoute();"> 
  <option value="DRIVING">voiture</option>
  <option value="DRIVING">louage</option>
  <option value="WALKING">marche</option>
  <option value="BICYCLING">v&eacute;lo</option>
  <option value="TRANSIT">transit</option>
</select></td></tr>
<tr><td><b>arriv&eacute;e: </b></td><td><input type="text" id="adrArr" value="" style="width:300px;"></td><td>
  <input type="button" value="recherche" onclick="rechercher('adrArr',false)"></td></tr>
</table>
</div>
	<div> 
<table>
<tr><td><b>d&eacute;part: </b></td>
<td><input type="text" id="adrDep1" value="" style="width:300px;"></td>
<td><input type="button" value="recherche" onclick="rechercher1('adrDep1',true)"></td>
<td rowspan="2">
<b>Transport: </b> 
<select id="mode" onchange="calcRoute();"> 
  <option value="DRIVING">voiture</option>
  <option value="DRIVING">louage</option>
  <option value="WALKING">marche</option>
  <option value="BICYCLING">v&eacute;lo</option>
  <option value="TRANSIT">transit</option>
</select></td></tr>
<tr><td><b>arriv&eacute;e: </b></td><td><input type="text" id="adrArr1" value="" style="width:300px;"></td><td>
  <input type="button" value="recherche" onclick="rechercher1('adrArr1',false)"></td></tr>
</table>
</div>

<div id="divMap" style="float:left;width:70%; height:80%"></div> 
<div id="divRoute" style="float:right;width:30%;height 80%"></div> 
<br/>
<center>
<div style="font-family:Tahoma;font-size:9px">derni&egrave;re mise &agrave; jour sur mon site : <a href="http://www.crew.free.fr">http://www.crew.free.fr</a><br>powered by <b>AmRouNiX</b> / <b>MaSTeR-KiLLeR</b> (<i>A. Selim</i>) <br> Toutes copies autoris&eacute;es !</div>
</center>
	  
</body> 
</html> 