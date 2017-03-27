
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
									<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(300, function(){
						});
					});
				</script>
			
			</div>
			<div class="head-right">
			             	<ul class="number">
					            <li><a href="register"><i class="roc"> </i>Inscription</a></li>
											</ul>
									</div>
			
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
				<div class="col-md-11 login-left" data-wow-delay="0.4s">
		<div class="register">
	              <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

           

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Votre Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
										<div class="head-right">
				<ul class="number">
			
									</div>
									

                    

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Connexion
                                </button>
                            </div>
                        </div>
                    </form>
				</div>
		   </div>
			   </div>
			   
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- login -->
  <div class="footer">
		<div class="container">
       <div class="clearfix"></div>
			<div class="footer-bottom">
				<p> Planning Voyages</p>
			</div>
		</div>
	</div>
</body>
</html>