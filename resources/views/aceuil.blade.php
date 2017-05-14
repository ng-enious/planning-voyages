<html> 
<head> 
	<title>planifier</title>
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
						<li><a  class="scroll"><img src="{{ url('images/usr (1).png') }}"class="img-responsive" alt="" >Suggérer des données</a>
							<div class="megapanel">
								<div class="na-left">
									<ul class="grid-img-list">
										<li><a href="suggererlieu">ajouter lieu  </a></li> |
        					  <li><a href="suggerermoyendetransport">ajouter moyen </a></li>|
       					    <li><a href="suggerertrajet">ajouter trajet </a></li>
										<div class="clearfix"> </div>	
									</ul>
								</div>
								<div class="na-right">
									<ul class="grid-img-list">
										<li class="reg"><li>
										<div class="clearfix"> </div>	
									</ul>
								</div>
								<div class="clearfix"> </div>	
		    				</div>
												</li>
						
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
<!-- <div id="map"></div> -->
	
<div id="right-panel" >
  <div>
    <form method="post" action="{{ url('/get_trajet') }}">
      	 {{ csrf_field() }}
      <b>depart :</b>
			  	<select id="start1" name='start' style="background-color:#FFFFFF;border-color:#5e8af9;border-radius:5px;" onclick='style="background-color:#FFFFFF;border-color:#5e8af9;"'>
  <option value="Tunis">Tunis</option>
  <option value="gabes">gabes</option>
  <option value="Monastir">Monastir</option>
	<option value="soussa">soussa</option>
</select>
				
<input  type="text" placeholder="ajouter ville" id="option1" ></input>
		<br>
		<button type="button" onclick="myFunction1()">ajouter ville</button>
		<br>
      <b>arriver :</b>
	<select id="end1" name='end' style="background-color:#FFFFFF;border-color:#5e8af9;border-radius:5px;" onclick='style="background-color:#FFFFFF;border-color:#5e8af9;"'>		
   <option value="tataouine">tatouine</option>
  <option value="beja">beja</option>
  <option value="Hammamet">Hammamet</option>
  <option value="kasserine">kasserine</option>
		<option value="ben geurdane">ben geurdane</option>
</select>
<input  type="text"  placeholder="ajouter ville" id="option3" ></input>
	<br>
		<button type="button" onclick="myFunction3()">ajouter ville</button>
		<br>
      <br>
      <b>Moyen:</b>
		<select id="moyen" name='moyen' style="background-color:#FFFFFF;border-color:#5e8af9;border-radius:5px;" onclick='style="background-color:#FFFFFF;border-color:#5e8af9;"'>
  <option value="bus">bus</option>
  <option value="train">train</option>
  <option value="metro">metro</option>
  <option value="louage">louage</option>
	<option value="taxi">taxi</option>
		<option value="voiture">voiture</option>

</select>
	@if (Auth::check())
	<br>
	<br>
		<label>
  <input type="checkbox" id="cbox1" value="1" name="save"> 
  Enregistrer

</label>
				<br> 
				 @endif
      <input type="submit" value="recherche">
      
    </form>
    </div>
<div hidden>
	<form method="post" action="{{ url('/ajoutertrajet') }}" >

		 {{ csrf_field() }}
	
<b>Start:</b>
<select id="start" name='start'>
  @if(session()->has('trajet'))
 
  <option value="{{session('trajet')->depart}}" selected>{{session('trajet')->depart}}</option>

	@endif
</select>
		<button type="button" onclick="myFunction1()">Insert option</button>
<input  type="text" id="option1" >option</input>
<br>
<b>Waypoints:</b> <br> <br>
<select multiple id="waypoints" name='points[]'>
  
  @if(session()->has('trajet'))
  @foreach(session('trajet')->wayPoints as $w)
  <option value="{{$w->name}}" selected>{{$w->name}}</option>
@endforeach
	@endif
</select>
	<button type="button" onclick="myFunction2()">Insert option</button>
<input  type="text" id="option2" >option</input>
<br>
<b>End:</b>
<select id="end" name='end' >
  @if(session()->has('trajet'))
 
  <option value="{{session('trajet')->arrive}}" selected>{{session('trajet')->arrive}}</option>

	@endif
</select>
		<button type="button" onclick="myFunction3()">Insert option</button>
<input  type="text" id="option3" >option</input>
<br>
	<select  id="moyen" name='moyen'>
  <option value="bus">bus</option>
  <option value="train">train</option>
  <option value="metro">metro</option>
  <option value="louage">louage</option>
	<option value="taxi">taxi</option>
		<option value="voiture">voiture</option>

</select>

	<input type="submit">
	</form>

</div>
<div id="directions-panel" style=" visibility: hidden"></div>

				 @if (Auth::check())
<a href="{{ url('/donneavis') }}">
	<button type="button" >Donner Avis</button> <br>
</a>

				 @endif
</div>

<div id="map" style="float:left;width:70%; height:80%"></div>  
<br/>
	</div>

			<div class="clearfix"></div>

	
	
			
<!-- 404 -->
	  <div class="footer" style="margin-top:500px">
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
  //document.getElementById('view').addEventListener('click', function() 
			  
			//*********************/
    @if(session()->has('status'))
          @if(session('status') == 'ok'){
            calculateAndDisplayRoute(directionsService, directionsDisplay);
						    //var locations = {{session('lieux')}} ;
						var latitude = [@foreach(session('lieux') as $k => $lieu)
   '{{ $lieu['latitude'] }}',
@endforeach ];
						var langitude = [@foreach(session('lieux') as $k => $lieu)
   '{{ $lieu['langitude'] }}',
@endforeach ];
						var names = [@foreach(session('lieux') as $k => $lieu)
   '{{ $lieu['nom'] }}',
@endforeach ];
												 						var addresses = [@foreach(session('lieux') as $k => $lieu)
   '{{ $lieu['addresse'] }}',
@endforeach ];
			
						console.log('lat',latitude);
						console.log('lan',langitude);
						console.log('name',names);
						
						
// 						var locations = [
//   ['stade', 35.82, 10.61, 'sousse']
//   ];
      var marker, i
for (i =0,j =0,k=0,l=0; i < latitude.length, j < langitude.length,k<names.length, l<addresses.length;l++,k++, i++,j++)
 {  
 var loan = names[k]
 var lat = latitude[i]
 var long = langitude[j]
 var add =  addresses[l]
 latlngset = new google.maps.LatLng(lat, long);
  var marker = new google.maps.Marker({  
          map: map, title: loan , position: latlngset  
        });
        map.setCenter(marker.getPosition())
        var content = "Name: " + loan +  '</h3>' + "Address: " + add     
  var infowindow = new google.maps.InfoWindow()
google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
        return function() {
           infowindow.setContent(content);
           infowindow.open(map,marker);
        };
    })(marker,content,infowindow)); 
  }
  }
    @else
      window.alert(" trajet non trouvé");
  @endif
  @endif
}
		function myFunction1() {
    var x = document.getElementById("start1");
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
    var x = document.getElementById("end1");
    var option = document.createElement("option");
    option.text = document.getElementById("option3").value;
    x.add(option);
}
		function calculateAndDisplayRoute(directionsService, directionsDisplay) {
				/******markers****/
				
			/*************************/
  var waypts =[]
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
      summaryPanel.style.visibility = 'visible';
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}
		function setMarkers(map){
  var locations = [
  ['stade', 35.82, 10.61, 'sousse']
  ];
      var marker, i
for (i = 0; i < locations.length; i++)
 {  
 var loan = locations[i][0]
 var lat = locations[i][1]
 var long = locations[i][2]
 var add =  locations[i][3]
 latlngset = new google.maps.LatLng(lat, long);
  var marker = new google.maps.Marker({  
          map: map, title: loan , position: latlngset  
        });
        map.setCenter(marker.getPosition())
        var content = "Loan Number: " + loan +  '</h3>' + "Address: " + add     
  var infowindow = new google.maps.InfoWindow()
google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
        return function() {
           infowindow.setContent(content);
           infowindow.open(map,marker);
        };
    })(marker,content,infowindow)); 
  }
  }
</script> 
</body> 
</html> 