<!DOCTYPE HTML>
<html>
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
						<li><a href="location.html" class="scroll"><span> </span>Trouver une destination</a>
							<div class="megapanel">
								<div class="na-left">
									<ul class="grid-img-list">
										<li><a href="ajouterlieu">ajouter lieu  </a></li> |
										<li><a href="ajoutermoyendetransport">ajouter moyen </a></li>
										<div class="clearfix"> </div>	
									</ul>
								</div>
								<div class="na-right">
									<ul class="grid-img-list">
										<li class="reg">
									
										</li>
										<div class="clearfix"> </div>	
									</ul>
								</div>
								<div class="clearfix"> </div>	
		    				</div>
						</li>
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
				</div>
		   </div>
			   </div>
			   <div class="col-md-8 login-right wow fadeInRight" data-wow-delay="0.4s">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50425.625635580545!2d145.12407634632558!3d-37.822799693691664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sin!4v1430741934072" width="100%" height="500" frameborder="0" style="border:0"></iframe>
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

</body>
</html>