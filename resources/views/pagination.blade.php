
<!DOCTYPE html>
<html>
  <head>
    <title> Pagination</title>
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
    <style type="text/css">
       html,body {
        width:1400px;
        margin: 0 auto;
      } 
        .pagination li {
         display:  inline ;
          float: left;
          padding :10px;
          background :#ddd;
        }
     .pagination li a {
  background :#ddd;
       padding-right: 10px;
       padding-left: 10px;
       text-decoration: none ;
      }
      li.active span {
         background :#ccc;
       padding-right: 10px;
       padding-left: 10px;
       text-decoration: none ;
      }
      li.disaply span {
        
         background :gray;
       padding-right: 10px;
       padding-left: 10px;
       text-decoration: none ;
      }
      table {
        border-collapse :collapse ;
      }
      table tr > td , tr >th {
        border:1px solid #ddd;
        padding :5px;
      }
       
    </style>
     
  </head>
  <body>
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
						<li><a  class="scroll"><img src="{{ url('images/adl.png') }}" class="img-responsive" alt="">Ajouter des données</a>
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
										<li><a href="pagination" class="scroll"> <img src="{{ url('images/usr.png') }}" >Liste des utilisateurs</a></li>						
						<li><a class="scroll"><img src="{{ url('images/sugg.png') }}"  >Liste des suggestions</a>
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
										<li class="reg">
						         </li>
						<li><a href="shop.html" class="scroll"><img src="{{ url('images/av.png') }}">Avis des utilisateurs</a></li>
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
 
      <h1>               liste utilisateur </h1>
      <table>
        <tr>
                    
          <th>ID</th>
          <th>name</th>
          <th>lastname</th>
          <th>email</th>
          <th>birthday</th>
          <th>role</th>
          <th>created_at</th>
          <th>update_at</th>
          <th>Action</th>
                   
                   
        </tr>
      
                       @foreach($users as $key =>$u)    
                <tr> 
                  <td>{{ $u -> id}}</td>
                  <td>{{ $u -> name}}</td>
                  <td>{{ $u -> lastname}}</td>
                  <td>{{ $u -> email}}</td>
                  <td>{{ $u -> birthday}}</td>
                  <td>{{ $u -> role}}</td>
                  <td>{{ $u -> created_at}}</td>
                  <td>{{ $u -> updated_at}}</td>
                 <td>
                  <a href="{{url ('postdelete',[$u->id])}}" > <img src="{{ url('images/delete.png') }}" > supprimer </a> 
										@if ($u->role=='utilisateur')
									 <a href="{{url ('rendreAdmin',[$u->id])}}" > <img src="{{ url('images/addadmin.png') }}" > ajouter comme administrateur </a> 
										@else
										
										<a href="{{url ('supprimerAdmin',[$u->id])}}" > <img src="{{ url('images/removeadmin.png') }}" >supprimer droit d'administration </a> 
										@endif

									</td>
        </tr>
                    @endforeach
    </table>
    <h1>{{$users->currentPage()}} </h1>
    <hr>
    {{$users ->links() }}
          <div class="footer">
		<div class="container">
       <div class="clearfix"></div>
			<div class="footer-bottom">
				<p>Planning Voyages</p>
			</div>
  </body>
</html>