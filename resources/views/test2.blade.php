<!DOCTYPE html> 
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Calcul d'itinéraire Google Map Api v3</title>
    <link rel="stylesheet" href="jquery-ui-1.8.12.custom.css" type="text/css" /> 
  </head>
  <style type="text/css">
    body{font-family:Arial;background:#000000;margin:0px;padding:0px;}
    #container{position:relative;width:990px;margin:auto;background:#FFFFFF;padding:20px 0px 20px 0px;}
    #container h1{margin:0px 0px 10px 20px;}
    #container #map{width:700px;height:500px;margin:auto;}
    #container #panel{width:700px;margin:auto;}
    #container #destinationForm{margin:0px 0px 20px 0px;background:#EEEEEE;padding:10px 20px;border:solid 1px #C0C0C0;}
    #container #destinationForm input[type=text]{border:solid 1px #C0C0C0;}
  </style>
  <body>
    <div id="container">
        <h1>Calcul d'itinéraire Google Maps Api V3</h1>
        <div id="destinationForm">
            <form action="" method="get" name="direction" id="direction">
                <label>Point de départ :</label>
                <input type="text" name="origin" id="origin">
                <label>Destination :</label>
                <input type="text" name="destination" id="destination">
                <input type="button" value="Calculer l'itinéraire" onclick="javascript:calculate()">
            </form>
        </div>
        <div id="panel"></div>
        <div id="map">
            <p>Veuillez patienter pendant le chargement de la carte...</p>
        </div>
    </div>
    
    <!-- Include Javascript -->
 
    <script type="text/javascript"  src="{{ url('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery-ui-1.8.12.custom.min.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=fr&key=AIzaSyDqSTkzPn8PpJBY3Pclu-TTjmGDLzqKMD4"></script>
    <script type="text/javascript" src="{{url ('js/functions.js') }}"></script>
  </body>
</html>
