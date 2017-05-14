<!DOCTYPE HTML>
<html>
<head>
<title>Ajouter lieu</title>
<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
<link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/jquery.easydropdown.js')}}"></script>
<script src="{{ url('js/jquery.min.js') }}"></script>
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
						@if (Auth::check())
							<li><a  class="scroll"><img src="{{ url('images/adl.png') }}" class="img-responsive" alt="">Ajouter des données</a>
							<div class="megapanel">
								<div class="na-left">
									<ul class="grid-img-list">
										<li><a>ajouter lieu  </a></li> <br>
        					  <li><a href="ajoutermoyendetransport">ajouter moyen </a></li><br>
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
<!-- 404 -->
	<div class="addlocation">
		<div class="container">
      <h3>Ajouter un nouveau lieu</h3>
			<div class="col-md-6">
				  <form class="form-horizontal" role="form" method="POST" action="{{ url('/ajouterlieu') }}">
			<div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
													<div class="booki1">
														<b>Nom:</b> 
																					
					<input type="text" name="nom" placeholder="" required="">
					<div class="clearfix"> </div></div>
					      <b>type : </b>
	<select id="type" name='type' style="background-color:#FFFFFF;border-color:#5e8af9;border-radius:5px;" onclick='style="background-color:#FFFFFF;border-color:#5e8af9;"'>		
   <option value="cafe">cafe</option>
  <option value="mosqué">mosqué</option>
  <option value="hotel">hotel</option>
  <option value="restaurant">restaurant</option>
</select>
									  <div class="clearfix"> </div></div>

                                    <div class="form-horizontal" style="width: 550px">
                                       <div class="form-group">
                                           <label class="col-sm-2 control-label">Adresse </label>

                                           <div class="col-sm-10">
                                               <input type="text" name="addresse" class="form-control" id="us3-address" />
                                           </div>
                                       </div>
                                       <div class="form-group">
                                        

                                        
                                       </div>
                                       <div id="us3" style="width: 800px; height: 500px;"></div>
                                       <div class="clearfix">&nbsp;</div>
                                       <div class="m-t-small">
                                           <label class="p-r-small col-sm-1 control-label">Latitude: </label>

                                           <div class="col-sm-3">
                                               <input type="text" class="form-control" style="width: 110px" id="us3-lat" name="latitude" />
                                           </div>
                                           <label class="p-r-small col-sm-2 control-label">Longitude: </label>

                                           <div class="col-sm-3">
                                               <input type="text" class="form-control" style="width: 110px" id="us3-lon" name="langtitude"/>
                                           </div>
                                       </div>
                                      <div class="clearfix"></div>
                                    </div>
			  <button type="submit" class="btn btn-primary">
                                   ajouter
					                      </button>
						</form>
  
</div>
						</div>
			</div>
				<div class="clearfix"></div>
		</div>	
	</div>
			
<!-- 404 -->
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
            latitude: 35.7642515,
            longitude: 10.811288500000046
        },
        radius: 50,
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