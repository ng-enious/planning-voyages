<style>
	#map {
		width:250px;
		height :350px;
	}
</style>
<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">

<script type="text/javascript"
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqSTkzPn8PpJBY3Pclu-TTjmGDLzqKMD4&libraries=places&callback=initMap">
</script>
<div class="container">
	<div class="col-sm-4">
	   	<h1> addd lieu</h1>

		<div class="form-group">
			<label for="">titre</label>
			<input type="text" class="form-control input-sm" name="title">
		</div>
				<div class="form-group">
			<label for="">map</label>
					
			<input type="text" id="searchamp">
					<div id="map" style="position:fixed;top:0:left:0;height:250px;width:350px;"></div>
    </div>
			<div class="form-group">
			<label for="">lat</label>
			<input type="text" class="form-control input-sm" name="lat" id="lat">
		</div>
			<div class="form-group">
			<label for="">lng</label>
			<input type="text" class="form-control input-sm" name="lng" id="lng">
        <button class="text" class="btn btn-sm btn-danger">save</button>
          
        </button>
		</div>

		</div>

	</div>
  <script>
		 var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 35.767103,
									 lng: 10.871110},
          
          zoom: 8
			 
		 });
		   var marker = new google.maps.Marker({
       position :  {
				 lat: 35.767103,
									 lng: 10.781110},
        map:map,
				 draggable:true
				     });
   
		var searchBox =new google.maps.places.SearchBox(document.getElementById('searchamp'));
		google.maps.event.addlistener(searchBox,'places_changed',function(){
			
			var places =searchBox.getPlaces();
			var bounds =new google.maps.latlngBounds();
			var i,place;
			for (i=0; place=places[i];i++){
				 bounds.extend(place.geometry.location); 
				marker.setPosItion(place.geometry.location); 
			}
			map.fitBounds(bounds); 
			map.setZoom( 15) ;
			
		});
		google.maps.event.addlistenner(marker,'position_changed',function(){
			
			var lat=marker.getPosition().lat();
			var lng=marker.getPosition().lng();
			$('#lat').val(lat);
			$('#lng').val(lng);
			
		})
				    
</script>

