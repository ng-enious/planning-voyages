<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Ajout lieu </title>
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
						<li><a  class="scroll"><span> </span> Suggérer des données</a>
							<div class="megapanel">
								<div class="na-left">
									<ul class="grid-img-list">
											<li><a>ajouter lieu  </a></li> |
        					  <li><a href="ajoutermoyendetransport">ajouter moyen </a></li>|
       					    <li><a href="ajoutertrajet">ajouter trajet </a></li>
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

						<div class="clearfix"> </div>						
				</ul>
			</div>
			<div class="clearfix"> </div>	
		</div>
	</div>
<!-- 404 -->
	<div class="addlocation">
		<div class="container">
      <h3>Ajouter nouveau lieu</h3>
			<div class="col-md-6">
				<div class="booki1"><span>Nom: </span><form><input type="text" placeholder="" required=""></form><div class="clearfix"> </div></div>
						<div class="booki1"><span>Type: </span><select id="country" onchange="change_country(this.value)" class="frm-field required">
											<option value="null">cafe</option>
											<option value="null">restaurant</option>         
											<option value="AX">mosque</option>
											<option value="AX">hotel</option>
									  </select><div class="clearfix"> </div></div>
				<div class="booki1"><span>Adresse: </span><form><input type="text" placeholder="" required=""></form><div class="clearfix"> </div></div>
        <div class="booki1"><span>Latitude: </span><form><input type="text" placeholder="" required=""></form><div class="clearfix"> </div></div>
      <div class="booki1"><span>langtitude: </span><form><input type="text" placeholder="" required=""></form><div class="clearfix"> </div></div>
			  <button type="submit" class="btn btn-primary">
                                   ajouter
                                </button>
      </div>	
			<div class="col-md-6">
	 <div class="col-md-8 login-right wow fadeInRight" data-wow-delay="0.4s">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50425.625635580545!2d145.12407634632558!3d-37.822799693691664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sin!4v1430741934072" width="100%" height="500" frameborder="0" style="border:0"></iframe>
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

</body>
</html>