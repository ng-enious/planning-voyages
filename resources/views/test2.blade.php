<style>    
  html, body {    
    height: 100%;    
    margin: 0;    
    padding: 0;    
  }    
  #map {    
   height: 99%;  
   width: 99%;  
 }    
#panel {    
  position: absolute;    
  top: 0px;    
  left: 25%;    
  z-index: 5;    
  background-color: #fff;    
  padding: 0px;    
  border: 1px solid #999;    
  text-align: center;    
  font-family: 'Roboto','sans-serif';    
  line-height: 0px;    
  padding-left: 10px;    
}    
</style> 
 <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap&key={AIzaSyDqSTkzPn8PpJBY3Pclu-TTjmGDLzqKMD4}"    
        async defer></script>    
        <script>    
function initMap() {  
  var lat_lng = {lat: 22.08672, lng: 79.42444};  
  var directionsService = new google.maps.DirectionsService;    
  var directionsDisplay = new google.maps.DirectionsRenderer;    
  var map = new google.maps.Map(document.getElementById('map'), {    
    zoom: 6,    
    center: lat_lng    
  });    
  directionsDisplay.setMap(map);    
    
  var onChangeHandler = function() {    
    calculateAndDisplayRoute(directionsService, directionsDisplay);    
  };    
  document.getElementById('Source').addEventListener('change', onChangeHandler);    
  document.getElementById('Destination').addEventListener('change', onChangeHandler);    
}    
    
function calculateAndDisplayRoute(directionsService, directionsDisplay) {    
  directionsService.route({    
    origin: document.getElementById('Source').value,    
    destination: document.getElementById('Destination').value,    
    travelMode: google.maps.TravelMode.DRIVING    
  }, function(response, status) {    
    if (status === google.maps.DirectionsStatus.OK) {    
      directionsDisplay.setDirections(response);    
    } else {    
      window.alert('Request for getting direction is failed due to ' + status);    
    }    
  });    
 
}    
  </script>  
  
    <div id="panel">    
    <b>Source: </b>    
    <select id="Source">    
        
      <option value="New Delhi, in">New Delhi</option>  
      <option value="Mumbai, in">Mumbai</option>   
      <option value="Kolkata, in">Kolkata</option>    
      <option value="Chennai, in">Chennai</option>    
      <option value="Indore, in">Indore</option>    
      <option value="Hyderabad, in">Hyderabad</option>    
      <option value="Ahemdabad, in">Ahemdabad</option>    
       <option value="Pune, in">Pune</option>    
      <option value="Bhopal, in">Bhopal</option>    
      <option value="Jaipur, in">Jaipur</option>    
      <option value="Bengluru, in">Bengluru</option>      
    </select>    
    <b>Destination: </b>    
    <select id="Destination">    
      <option value="Mumbai, in">Mumbai</option>    
      <option value="New Delhi, in">New Delhi</option>    
      <option value="Kolkata, in">Kolkata</option>    
      <option value="Chennai, in">Chennai</option>    
      <option value="Indore, in">Indore</option>    
      <option value="Ahemdabad, in">Ahemdabad</option>    
      <option value="Jaipur, in">Jaipur</option>    
      <option value="Bengluru, in">Bengluru</option> 
      <option value="Hyderabad, in">Hyderabad</option>    
      <option value="Pune, in">Pune</option>    
      <option value="Bhopal, in">Bhopal</option>       
    </select>    
    </div>    
    <div id="map"></div>    