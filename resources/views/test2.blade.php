 
<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
<script src="{{ URL::asset('js/locationpicker.jquery.js')}}"></script>
<script type="text/javascript"
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqSTkzPn8PpJBY3Pclu-TTjmGDLzqKMD4&libraries=places&callback=initMap">
    </script>

<h3 class="form-section coppo"><i class="fa fa-map-marker"></i> Localisation
                    </h3>
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                                    <div class="form-horizontal" style="width: 550px">
                                       <div class="form-group">
                                           <label class="col-sm-2 control-label">Location:</label>

                                           <div class="col-sm-10">
                                               <input type="text" class="form-control" id="map-address" />
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <label class="col-sm-2 control-label">Radius:</label>

                                           <div class="col-sm-5">
                                               <input type="text" class="form-control" id="map-radius" name="altitude"/>
                                           </div>
                                       </div>
                                       <div id="map" style="width: 800px; height: 500px;"></div>
                                       <div class="clearfix">&nbsp;</div>
                                       <div class="m-t-small">
                                           <label class="p-r-small col-sm-1 control-label">Latitude: </label>

                                           <div class="col-sm-3">
                                               <input type="text" class="form-control" style="width: 110px" id="map-lat" name="latitude" />
                                           </div>
                                           <label class="p-r-small col-sm-2 control-label">Longitude: </label>

                                           <div class="col-sm-3">
                                               <input type="text" class="form-control" style="width: 110px" id="map-lon" name="longitude"/>
                                           </div>
                                       </div>
                                      <div class="clearfix"></div>
                                    </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
<script>
    $('#map').locationpicker({
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