<!DOCTYPE HTML>
<html>
	<head>
		<style>
	#map {
		width:250px;
		height :350px;
	}
</style>
<head>
	<title>Planning Voyage</title>
<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
<link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
	<script src="{{ url('js/jquery.min.js') }}"></script>
	<script src="{{ url('js/jquery.easydropdown.js')}}"></script>
	   <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">
<script type="text/javascript"
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqSTkzPn8PpJBY3Pclu-TTjmGDLzqKMD4&libraries=places">
    </script>
<script src="js/locationpicker.jquery.js"></script>
	
<!-- Mega Menu -->
<link href="{{ url('css/megamenu.css') }}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{ url('js/megamenu.js') }}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- Mega Menu -->
	
</head>
<body>
<!-- banner -->
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
<!-- login -->
	<div class="login-page">
		<div class="container">
			<div class="account_grid">
				<div class="col-md-4 login-left" data-wow-delay="0.4s">
		<div class="register">
@if(session()->has('message'))
{{session('message')}}

	@endif
		  	  <form> 
									 <div class="register-top-grid">
					<h3>Choisir votre destination</h3>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>DE <label>*</label></span>
						<input type="text"> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>VERS<label>*</label></span>
						<input type="text"> 
					 </div>
					
					 <div class="clearfix"> </div>
					 </div>
				     
				<div class="clearfix"> </div>
				<div class="register-but">
					   <input type="submit" value="Planifier" class="btn btn-primary btn-md">
					   <div class="clearfix"> </div>
				   </form>
						         <label class="col-sm-2 control-label">Location:</label>

                                           <div class="col-sm-10">
                                               <input type="text" class="form-control" id="us3-address" />
                                           </div>
				</div>
		
					</div>
				</div>
			   <div class="col-md-8 login-right wow fadeInRight" data-wow-delay="0.4s">
				<div class="form-group">

                                       
                                       </div>
                                       <div id="us3" style="width: 800px; height: 500px;"></div>
                                       <div class="clearfix"></div>
					 </div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
     <div class="footer">
		<div class="container">
       <div class="clearfix"></div>
			<div class="footer-bottom">
				<p>Planning Voyages</p>
			</div>
		</div>
	</div>
				<script>
    $('#us3').locationpicker({
     location: {
            latitude: 35.76612799228189,
            longitude: 10.839695968017622
        },
        radius: 10,
        inputBinding: {
            latitudeInput: $('#us3-lat'),
            longitudeInput: $('#us3-lon'),
            radiusInput: $('#us3-radius'),
            locationNameInput: $('#us3-address')
        },
        enableAutocomplete: true,
        onchanged: function (currentLocation, radius, isMarkerDropped) {
        }
    });

</script>

</body>
</html>