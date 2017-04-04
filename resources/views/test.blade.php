<style>
	#map {
		width:250px;
		height :350px;
	}
</style>
   <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">
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
					<div id="map" style="position:fixed;top:0:left:0;height:50%;width:50%;"></div>
					</div>
			<div class="form-group">
			<label for="">lng</label>
			<input type="text" class="form-control input-sm" name="lng">
		</div>
			<div class="form-group">
			<label for="">lat</label>
			<input type="text" class="form-control input-sm" name="lat">
		</div>

		</div>

	</div>
  <script>
		 var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 27.27,
									 lng: 85.63},
          
          zoom: 15
			 
		 });
		   var marker = new google.maps.Marker({
       position :  {
				 lat: 27.27,
									 lng: 85.63},
        map:map,
				 draggable:true
				     });
   
		var searchBox =new google.maps.places.SearchBox(document.getElementById('searchamp'));
				    
</script>

