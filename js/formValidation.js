function upperCase() {
    var oganization = document.forms['register']['ogname'].value;
    oganization = oganization[0].toUpperCase().concat(oganization.substring(1));
    return oganization;

}