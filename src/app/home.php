
<!DOCTYPE html>

<?php include "top.php"; ?>

<html lang="en">
<head>
<h1> LOST AND FOUND 
    <img src="uvmimage.png" alt="Mountain View">
</h1>

<div class="sitetitlebottom">

                   <ul>
    <li><a href="Lost ">lost</a></li>
    <li><a href="">found</a></li>
    <li><a href="about.php">about</a></li>
  </ul>


                </div>

  <title>litterBox</title>
  <meta charset="utf-8">
  <meta name="author" content="Codefest Team 7">
  <meta name="description" content="A home page for the codefest project">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.44.1/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.44.1/mapbox-gl.css' rel='stylesheet' />
</head>
<body>
 
  

  <div class="container">
     
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Lost</button>
    <button type="button2" class="btn btn-info btn-lg" data-toggle="modal"
    data-target="#myModal2">Found</button>

    
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
         
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Lost</h4>
          </div>
          <div class="modal-body">
            <p>Enter Lost Item.</p>
            <?php include "lost.php"?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
    <div class="modal fade" id="myModal2" role="dialog">
      <div class="modal-dialog">
      
         
        <div class="modal-content">
          <div class="modal-header">
            <button type="button2" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Found</h4>
          </div>
          <div class="modal-body">
            <p>Enter Found Item.</p>
            <?php include "found.php"?>
          </div>
          <div class="modal-footer">
            <button type="button2" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
    
  </div>
  
  
  <div id='map' style='width: 960px; height: 600px ; margin-top: 0%; margin-left: 10%;'></div>
        <pre id='info'></pre>
<script>
mapboxgl.accessToken = 'pk.eyJ1Ijoiam9uYXRoYW4tbGV2ZW50aGFsIiwiYSI6ImNqZm9sZjdzYzA3Y3gzMnNibGpxM3BueDMifQ.1JFSsOoXxKPQoQbbfrVYAA';
var map = new mapboxgl.Map({
   container: 'map',
   style: 'mapbox://styles/mapbox/light-v9',
   center: [-73.201059,44.478076], // starting position
   zoom: 12 // starting zoom
   
});
map.addControl(new mapboxgl.NavigationControl());
map.on('load', function () {

   map.addLayer({
       "id": "points",
       "type": "symbol",
       "source": {
           "type": "geojson",
           "data": {
               "type": "FeatureCollection",
               "features": [{
                   "type": "Feature",
                   "geometry": {
                       "type": "Point",
                       "coordinates": [-77.03238901390978, 38.913188059745586]
                   },
                   "properties": {
                       "title": "Mapbox DC",
                       "icon": "monument"
                   }
               }, {
                   "type": "Feature",
                   "geometry": {
                       "type": "Point",
                       "coordinates": [-122.414, 37.776]
                   },
                   "properties": {
                       "title": "Mapbox SF",
                       "icon": "harbor"
                   }
               }]
           }
       },
       "layout": {
           "icon-image": "{icon}-15",
           "text-field": "{title}",
           "text-font": ["Open Sans Semibold", "Arial Unicode MS Bold"],
           "text-offset": [0, 0.6],
           "text-anchor": "top"
       }
   });
});
map.on('mousemove', function (e) {
   document.getElementById('info').innerHTML =
       // e.point is the x, y coordinates of the mousemove event relative
       // to the top-left corner of the map
       JSON.stringify(e.point) + '<br />' +
       // e.lngLat is the longitude, latitude geographical position of the event
       JSON.stringify(e.lngLat);
   });
   
 

</script>


</body>
</html>
