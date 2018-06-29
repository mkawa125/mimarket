/**
 * Created by mkawa on 6/26/2018.
 */
$(function() {
    window.onload = getLocation;
    var geo = navigator.geolocation;
    function getLocation() {
        if (geo) {
            geo.getCurrentPosition(displayLocation);
        } else {
            alert("Oops, Geolocation API is not supported");
        }
    }
    function displayLocation(position) {
        var lat = position.coords.latitude;
        var lang = position.coords.longitude;
        document.getElementById('txtlat').value = lat;
        document.getElementById('txtlang').value = lang;
    }
});