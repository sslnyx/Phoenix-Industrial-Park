// console.log("map");

const mapstyle = require("./map-style.json");

// console.log(mapstyle);

// Initialize and add the map
function initMap() {
  // The location of Uluru
  var site = { lat: 49.122930, lng: -122.733511 };

  var siteLogo = {
    url: '/img/contact/04_pin.svg',
    scaledSize: new google.maps.Size(70, 70)
  };


  // The map, centered at Uluru
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 15,
    center: site,
    styles: mapstyle
  });

  var marker = new google.maps.Marker({
    position: site,
    icon: siteLogo,
    map: map
  });

  // The marker, positioned at Uluru
//   var marker = new google.maps.Marker({ position: uluru, map: map });
}

window.addEventListener("load", () => {
  initMap();
});
