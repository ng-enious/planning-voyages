<html> 
<head> 
	<title>Ajouter moyen</title>
<!-- <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
<link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" media="all" /> -->
<link href="{{ url('css/multiroutes.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
<link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'> -->
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/jquery.easydropdown.js')}}"></script>
<!-- Mega Menu -->
<!-- <link href="{{ url('css/megamenu.css') }}" rel="stylesheet" type="text/css" media="all" /> -->
<script type="text/javascript" src="{{ url('js/megamenu.js') }}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
<!--importation de l'API google MAP Version 3-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyDqSTkzPn8PpJBY3Pclu-TTjmGDLzqKMD4"></script> 

</head> 
<body onload="initMap();"> 
	<div class="header">
		<div class="container">
		<div class="logo">
		    <a href="{{ url('/') }}"><img src="{{ url('images/logo.png') }}" class="img-responsive" alt=""></a>
			</div>
			
				<div class="clearfix"></div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container">
			<div class="top-nav">
				<span class="menu"> </span>
					<ul class="navig megamenu skyblue">
		@if (Auth::check())
							<li><a  class="scroll"><img src="{{ url('images/adl.png') }}" class="img-responsive" alt="">Ajouter des données</a>
							<div class="megapanel">
								<div class="na-left">
									<ul class="grid-img-list">
										<li><a>ajouter lieu  </a></li> <br>
        					  <li><a href="ajoutermoyendetransport">ajouter moyen </a></li> <br>
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
									<li><a href="paginationlieu">Lieux suggérés</a></li> <br>
										<li><a href="paginationmoyen">moyens suggérés </a></li> <br>
										<li><a href="paginationtrajet">trajet suggérés </a></li>
										<div class="clearfix"> </div>	
									</ul>
								</div>
								<div class="na-right">
									<li class="reg"></li>
						<li><a href="shop.html" class="scroll"><img src="{{ url('images/av.png') }}">Avis des utilisateurs</a></li>
									       @endif
						<div class="clearfix"></div>
						</ul>
					<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(300, function(){
						});
					});
				</script>
			</div>
							
	<div class="head-right">
				<ul class="number">
	 @if (Auth::check())
                 <li><a><i class="roc"> </i>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</a></li>
				 <li>                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Se déconnecter
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
					 </form></li>

	 @else

					<li><a href="{{ url('/register') }}"><i class="roc"> </i>Inscription</a></li>
					<li><a href="{{ url('/login') }}"><i class="phone"> </i>Connexion</a></li>

				 @endif
  
				   <div class="clearfix"> 

					</div>						
				</ul>
			</div>
			<div class="clearfix"> </div>	
		</div>
	</div>
		</div>
<div id="right-panel">
<div>
	<form method="post" action="{{ url('/ajoutermoyenmoyen') }}" >

		 {{ csrf_field() }}

		<b>moyen:</b>
			<input id="type" name='type' style="background-color:#FFFFFF;border-color:#5e8af9;border-radius:5px;" onclick='style="background-color:#FFFFFF;border-color:#5e8af9;"'>

	<br>
		
<b>De:</b>
			  	<select id="de" name='de' style="background-color:#FFFFFF;border-color:#5e8af9;border-radius:5px;" onclick='style="background-color:#FFFFFF;border-color:#5e8af9;"'>
  <option value="Tunis">Tunis</option>
  <option value="gabes">gabes</option>
  <option value="Monastir">NMonastir</option>
  <option value="soussa">soussa</option>
</select>
		<button type="button" onclick="myFunction1()">ajouter ville</button>
		<input  type="text" id="option1" ></input>
<br>
<b>End:</b>
	<select id="vers" name='vers' style="background-color:#FFFFFF;border-color:#5e8af9;border-radius:5px;" onclick='style="background-color:#FFFFFF;border-color:#5e8af9;"'>
  <option value="tataouine">tatouine</option>
  <option value="beja">beja</option>
  <option value="Hammamet">Hammamet</option>
  <option value="khniss">khniss</option>
</select>
		<button type="button" onclick="myFunction3()">ajouter ville</button>
<input  type="text" id="option3" ></input>
<br>
	<input type="submit">
</div>
	</form>
<div id="directions-panel"></div>
</div>
<div id="map" style="float:left;width:70%; height:80%"></div>  
<br/>
	</div>
<div class="clearfix"></div>
	+
<!-- 404 -->
	   <div class="footer" style="margin-top:300px">
		<div class="container">
       <div class="clearfix"></div>
			<div class="footer-bottom">
				<p>Planning Voyages</p>
			</div>
		</div>
				</div>
<script type="text/javascript"> 
  var directionsService = new google.maps.DirectionsService();
  var map,geocoder, marker;
  var depart,arrivee,ptCheck;
  
  /*initialise google MAP V3*/
  function initMap() {
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 7,
    center: {lat: 33.81 , lng: 10.166}
  });
  directionsDisplay.setMap(map);

  document.getElementById('view').addEventListener('click', function() {
    calculateAndDisplayRoute(directionsService, directionsDisplay);
  });
}
		function myFunction1() {
    var x = document.getElementById("start");
    var option = document.createElement("option");
    option.text = document.getElementById("option1").value;
    x.add(option);
}
	function myFunction2() {
    var x = document.getElementById("waypoints");
    var option = document.createElement("option");
    option.text = document.getElementById("option2").value;
    x.add(option);
}
		function myFunction3() {
    var x = document.getElementById("end");
    var option = document.createElement("option");
    option.text = document.getElementById("option3").value;
    x.add(option);
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  var waypts = [];
  var checkboxArray = document.getElementById('waypoints');
  for (var i = 0; i < checkboxArray.length; i++) {
    if (checkboxArray.options[i].selected) {
      waypts.push({
        location: checkboxArray[i].value,
        stopover: true
      });
    }
  }

  directionsService.route({
    origin: document.getElementById('start').value,
    destination: document.getElementById('end').value,
    waypoints: waypts,
    optimizeWaypoints: true,
    travelMode: 'DRIVING'
  }, function(response, status) {
    if (status === 'OK') {
      directionsDisplay.setDirections(response);
      var route = response.routes[0];
      var summaryPanel = document.getElementById('directions-panel');
      summaryPanel.innerHTML = '';
      // For each route, display summary information.
      for (var i = 0; i < route.legs.length; i++) {
        var routeSegment = i + 1;
        summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
            '</b><br>';
        summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
        summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
        summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
      }
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}

</script> 
</body> 
</html> 