<html>
	<head>
		<style>
	#map {
		width:250px;
		height :350px;
	}
</style>
<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
<script src="{{ url('js/jquery.min.js') }}"></script>
   <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">
<script type="text/javascript"
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqSTkzPn8PpJBY3Pclu-TTjmGDLzqKMD4&libraries=places">
    </script>
<script src="js/locationpicker.jquery.js"></script>
	</head>
	<body>
		<div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                                    <div class="form-horizontal" style="width: 550px">
                                       <div class="form-group">
                                           <label class="col-sm-2 control-label">Location:</label>

                                           <div class="col-sm-10">
                                               <input type="text" class="form-control" id="us3-address" />
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <label class="col-sm-2 control-label">Radius:</label>

                                           <div class="col-sm-5">
                                               <input type="text" class="form-control" id="us3-radius" name="altitude"/>
                                           </div>
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
                                               <input type="text" class="form-control" style="width: 110px" id="us3-lon" name="longitude"/>
                                           </div>
                                       </div>
                                      <div class="clearfix"></div>
                                    </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
		<script>
    $('#us3').locationpicker({
        location: {
            latitude: 46.15242437752303,
            longitude: 2.7470703125
        },
        radius: 300,
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