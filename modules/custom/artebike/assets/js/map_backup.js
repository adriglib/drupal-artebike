let locationsArray = [];

axios
    .get('http://cms.localhost/api/locations')
    .then(({data:locations}) => {
        locationsArray.push(locations)
    })
    .catch(({message: error}) => {
        console.info(error)
    })

window.onload = function() {
    let mymap = L.map('mapid').setView([51.061836, 3.712511], 12.45);

    L.tileLayer('https://api.mapbox.com/styles/v1/adriglib/cj9ire1o635ak2qpar3gow3sy/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYWRyaWdsaWIiLCJhIjoiY2l3bHVxYm1wMDAwMjJ0bnE2MWp3azhmdiJ9.E3Udm-vhUj4CEWJuCC_big', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoiYWRyaWdsaWIiLCJhIjoiY2l3bHVxYm1wMDAwMjJ0bnE2MWp3azhmdiJ9.E3Udm-vhUj4CEWJuCC_big'
    }).addTo(mymap);

    for ( let i = 0; i < locationsArray.length; i++ ) {
        addMarkers(locationsArray[i].field_latitude[0].value, locationsArray[i].field_longitude[0].value)
    }

    function addMarkers(latitude, longitude){
        L.marker([latitude,longitude]).addTo(mymap)
    }

}
// var mariakerke = L.marker([51.087144, 3.6702904]).addTo(mymap);
// var gentSintPieters = L.marker([51.0361237, 3.7087479]).addTo(mymap);
// var korenmarkt = L.marker([51.054633,3.7197544]).addTo(mymap);
