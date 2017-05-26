$(window).ready(function(e){
    //     var id = $('#id-student').val();

    // $.ajax({
    //   url: 'http://localhost/project/public/getlatlng/' + id,
    //   method: 'POST',
    //   dataType: 'json',
      
    //   success: function(data){
    //                 lat = data.data.lat;
    //                 lng = data.data.lng;
    //                 initialize(lat,lng);
         
    //   }
    // });

        initialize();
});
function initialize() {
        var mapOptions = {
            center: new google.maps.LatLng(48.8347891, 2.314417), 
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('js-map-container'), mapOptions);
        map.setZoom(9);
}


$(window).ready(function(e) {

  $.ajax({
      url: 'getallproducts',
      method: 'POST',
      dataType: 'json',
      
      success: function(data){
          
         var result = data;
         
          
          $.each(data.data,function(index, value){
                    
                    var i =0;
                    lat = data.data[index].lat;
                    lng = data.data[index].lng;
                    name = data.data[index].name;
                    description = data.data[index].description;
                    streetnumber = data.data[index].streetnumber;
                    address = data.data [index].address;
                    city = data.data[index].city;
                    postcode = data.data[index].postcode;

                    // rating = data.data[index].price;
                    //avatar = '../../public/assets/' + data.data[index].avatar;
                    //id = data.data[index].id;
                    addMarker(i, lat, lng, name, description, streetnumber, address, city, postcode);
                    i++;
                });

         
      }
    });






function addMarker(i, lat, lng, name, description, streetnumber, address, city, postcode) {
    if (lat != null && lng != null) {
        var markersArray = [];
        myLatLng = new google.maps.LatLng(lat, lng);
        bounds = new google.maps.LatLngBounds();
        //var img = $('#img-maps').val();
        ////icon: img
        eval('var marker' + i + ' = new google.maps.Marker({ position: myLatLng,  map: map,animation: google.maps.Animation.DROP, zIndex: i});');
        
        var marker_obj = eval('marker' + i);
        bounds.extend(marker_obj.position);
        markersArray.push(eval('marker' + i));
        marker_obj.title = name;
        var li_obj = '.js-map-num' + i;
        image = '';
        var content = '<div class=""><h4 class="text-center">' + name + ' ' + description + '</h4><p>'+ streetnumber + ' ' + address + ' ' + city + ' ' + postcode + '</div>';
        eval('var infowindow' + i + ' = new google.maps.InfoWindow({ content: content,  maxWidth: 400});');
        var infowindow_obj = eval('infowindow' + i);
        var marker_obj = eval('marker' + i);
        google.maps.event.addListener(marker_obj, 'click', function () {
            infowindow_obj.open(map, marker_obj);
        });
    }
}



});