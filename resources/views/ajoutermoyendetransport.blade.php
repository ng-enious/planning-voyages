<html> 
<head> 
	<title>Ajouter moyen</title>
<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
<link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/jquery.easydropdown.js')}}"></script>
<!-- Mega Menu -->
<link href="{{ url('css/megamenu.css') }}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{ url('js/megamenu.js') }}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
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
  
  
  function trouveRoute() {
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
		  trouveRoute();
		} else {
		  alert("Geocode n'a rien trouvé !\n raison : " + status);
		}
	  });
	}
	
  }
  

</script> 
</head> 
		<div class="container">
		<div class="logo">
		    <a href="{{ url('/admin') }}"><img src="{{ url('images/logo.png') }}" class="img-responsive" alt=""></a>
			</div>
							<div class="clearfix"></div>
		</div>
	</div>
<div class="header-bottom">
		<div class="container">
			<div class="top-nav">
				<span class="menu"> </span>
					<ul class="navig megamenu skyblue">
							<li><a  class="scroll"><img src="{{ url('images/adl.png') }}" class="img-responsive" alt="">Ajouter des données</a>
							<div class="megapanel">
								<div class="na-left">
									<ul class="grid-img-list">
										<li><a href="ajouterlieu">ajouter lieu  </a></li> |
        					  <li><a href="ajoutermoyendetransport">ajouter moyen </a></li>|
       					    <li><a href="ajoutertrajet">ajouter trajet </a></li>
										<div class="clearfix"> </div>	
									</ul>
								</div>
								<div class="na-right">
									<ul class="grid-img-list">
									<li class="reg"></li>
										<div class="clearfix"> </div>	
									</ul>
								</div>
								<div class="clearfix"> </div>	
		    				</div>
						</li>
						<li><a href="pagination" class="scroll"> <img src="{{ url('images/usr.png') }}" >Liste des utilisateurs</a></li>						
						<li><a  class="scroll"><img src="{{ url('images/sugg.png') }}"  >Liste des suggestions</a>
									<div class="megapanel">
								<div class="na-left">
									<ul class="grid-img-list">
									<li><a href="paginationlieu">Lieux suggérés</a></li> |
										<li><a href="paginationmoyen">moyens suggérés </a></li> |
										<li><a href="paginationtrajet">trajet suggérés </a></li>
										<div class="clearfix"> </div>	
									</ul>
								</div>
								<div class="na-right">
									<li class="reg"></li>
						<li><a href="shop.html" class="scroll"><img src="{{ url('images/av.png') }}">Avis des utilisateurs</a></li>
						<div class="clearfix"></div>
						</ul>
					<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(300, function(){
						});
					});
				</script>
			</div>
						</div>
			</div>
<body onload="init();"> 
<div> 
<table>
	  <form class="form-horizontal" role="form" method="POST" action="{{ url('/ajoutermoyen') }}">
						<h3>Ajouter un nouveau moyen de transport</h3>
<tr><td><b>d&eacute;part: </b></td>
<td><input type="text" id="adrDep" name ="de" value="" style="width:300px;"></td>
<td><input type="button" value="recherche" onclick="rechercher('adrDep',true)"></td>
<td rowspan="2">
<b>Transport: </b> 
<select id="mode" name ="type" onchange="calcRoute();"> 
  <option value="DRIVING">voiture</option>
  <option value="DRIVING">louage</option>
  <option value="WALKING">marche</option>
  <option value="BICYCLING">v&eacute;lo</option>
  <option value="TRANSIT">transit</option>
</select></td></tr>
<tr><td><b>arriv&eacute;e: </b></td><td><input type="text" id="adrArr" name ="vers"value="" style="width:300px;"></td><td>
  <input type="button" value="recherche" onclick="rechercher('adrArr',false)"></td></tr>
</table>
	 <button type="submit" class="btn btn-primary">
                                  ajouter
                                </button>

</div> 
<div id="divMap" style="float:left;width:70%; height:80%"></div>  
<br/>

		</form>
	
</body> 
</html> 