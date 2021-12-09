function iniciarMap(){
    var coord = {lat:26.035025096679593 ,lng: -98.23262000318313};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}
