<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Admin</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Location Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<!-- Mega Menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- Mega Menu -->
</head>
<body>
<!-- banner -->
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="{{ url('/') }}"><img src="images/logo.png" class="img-responsive" alt=""></a>
			</div>
			<div class="header-left">
				<li a="" href="#"><div class="drop-down">
								</div></li>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container">
			<div class="top-nav">
				<span class="menu"> </span>
					<ul class="navig megamenu skyblue">
						<li><a class="scroll"><span> </span> Ajouter des inf</a>
							<div class="megapanel">
								<div class="na-left">
									<ul class="grid-img-list">
								<li><a href="ajouterlieu">ajouter lieu  </a></li> |
										<li><a href="ajoutermoyendetransport">ajouter moyen </a></li> |
										<li><a href="ajoutertrajet">ajouter trajet </a></li>
										<div class="clearfix"> </div>	
									</ul>
								</div>
								<div class="na-right">
										<li class="reg">
										</li>
										<div class="clearfix"> </div>	
									</ul>
								</div>
								<div class="clearfix"> </div>	
		    				</div>
					
						<div class="clearfix"></div>
					<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(300, function(){
						});
					});
				</script>
			</div>
			<div class="head-right">
				<ul class="number">
					<li><a href="login.html"><i class="roc"> </i>My Account</a></li>
					<li><a href="register.html"><i class="phone"> </i>Sign Up</a></li>
					<li><a href="contact.html"><i class="mail"> </i>Contact</a></li>	
						<div class="clearfix"> </div>						
				</ul>
			</div>
			<div class="clearfix"> </div>	
		</div>
	</div>
<!-- shop -->
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
						<div class="shop-top">
				<h3>Générer :</h3>
			<div class="col-md-3 shop-left">
				<ul>
          <li><a href="listeutilisateur">Liste utilisateurs</a></li>
					<li><a >Liste suggestions</a></li>
				</ul>
			</div>
				</div>
		   </div>
			   </div>
				</div>
				
		
			<div class="col-md-3 shop-left">
	
			</div>
			<div class="col-md-3 shop-left">
		
			</div>
			<div class="col-md-3 shop-left">
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	<!-- shop -->
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