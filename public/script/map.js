
var mymap = L.map('mapid').setView([47.2817, -0.732], 10);

var knightMarker = L.icon({
    iconUrl: 'img/mapMarker.png',
    //shadowUrl: 'leaf-shadow.png',

    iconSize:     [24, 61], // size of the icon
    //shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [12,61], // point of the icon which will correspond to marker's location
    //shadowAnchor: [4, 62],  // the same for the shadow
    //popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);

L.marker([47.2817, -0.732], {icon: knightMarker}).addTo(mymap)


var popup = L.popup();