<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      #map
      {
          width: 350px;
          height: 250px;
      }
    </style>
  </head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  

  <body>


    <div class="container">
        <div class="col-sm-4">
            <h1> ADD ban đồ </h1>
            <form action="#">
                <div class="form-group">
                    <label for=""> Title </label>
                    <input type="text" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <label for=""> MAP </label>
                    <input type="text" class="form-control" id="timkiem">
                    <br>
                    {{-- bản đồ --}}
                    <div id="map"> 

                    </div>
                </div>

                <div class="form-group">
                    <label for=""> Lat </label>
                    <input type="text" class="form-control" name="lat" id="lat">
                </div>

                <div class="form-group">
                    <label for=""> Lng </label>
                    <input type="text" class="form-control" name="lng" id="lng">
                </div>
            </form>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script async defer 
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&&amp;libraries=places%2Cgeometry&amp;callback=initMap&amp;ver=1">
    </script>


        <script>
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {   lat: 10.0299337, 
                                lng: 105.7706153
                            },
                    zoom: 15
                });

                var marker = new google.maps.Marker({
                    position:{
                        lat: 10.0299337, 
                        lng: 105.7706153
                    },
                    map : map,
                    draggable: true
                });

                var searchBox = new google.maps.places.SearchBox(document.getElementById('timkiem'));

                google.maps.event.addListener(searchBox,'places_changed',function(){
                    var places = searchBox.getPlaces();
                    var bounds = new google.maps.LatLngBounds();
                    var i, place;

                    for(i = 0; place=places[i]; i++)
                    {
                        bounds.extend(place.geometry.location);
                        marker.setPosition(place.geometry.location);
                    }
                    map.fitBounds(bounds);
                    map.setZoom(15);
                });

                google.maps.event.addListener(marker,'position_changed',function(){
                    var lat = marker.getPosition().lat();
                    var lng = marker.getPosition().lng();

                    $('#lat').val(lat);
                    $('#lng').val(lng);

                });
            }
        </script>

   
  </body>

    
</html>