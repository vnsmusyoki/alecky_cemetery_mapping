<!DOCTYPE html>
<html>
<head>
	<title>Cemetery Mapping System</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>


  	<style type="text/css">
    	#mymap {
      		border:1px solid red;
      		width: 800px;
      		height: 500px;
    	}
  	</style>


</head>
<body>


  <h1>Laravel 5 - Multiple markers in google map using gmaps.js</h1>


  <div id="mymap"></div>


  <script type="text/javascript">


    var locations = <?php print_r(json_encode($locations)) ?>;


    var mymap = new GMaps({
      el: '#mymap',
      lat: 21.170240,
      lng: 72.831061,
      zoom:3
    });


    $.each( locations, function( index, value ){
	    mymap.addMarker({
	      lat: value.latitude,
	      lng: value.longitude,
	      title: value.city,
	      click: function(e) {
	        alert('This is '+value.city+', gujarat from India.');
	      }
	    });
   });


  </script>


</body>
</html>
