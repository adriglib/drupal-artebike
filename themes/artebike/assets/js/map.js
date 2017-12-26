(function ($, Drupal) {

    let mymap = L.map('mapid').setView([51.061836, 3.712511], 12.45);

    L.tileLayer('https://api.mapbox.com/styles/v1/adriglib/cj9ire1o635ak2qpar3gow3sy/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYWRyaWdsaWIiLCJhIjoiY2l3bHVxYm1wMDAwMjJ0bnE2MWp3azhmdiJ9.E3Udm-vhUj4CEWJuCC_big', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoiYWRyaWdsaWIiLCJhIjoiY2l3bHVxYm1wMDAwMjJ0bnE2MWp3azhmdiJ9.E3Udm-vhUj4CEWJuCC_big'
    }).addTo(mymap);

    let locationsArray = [];
    axios
        .get('http://cms.localhost/api/locations')
        .then(({data:locations}) => {
            console.log(locations)
            locationsArray.push(locations)
            mymap.whenReady(
                function () {
                    for ( let i = 0; i < locationsArray[0].length; i++ ) {
                        addMarkers(locationsArray[0][i].field_latitude, locationsArray[0][i].field_longitude)
                    }
                }
            );

            function addMarkers(latitude, longitude){
                L.marker([latitude,longitude]).addTo(mymap)
            }
        })
        .catch(({message: error}) => {
            console.info(error)
        });

})(window.jQuery, window.Drupal);