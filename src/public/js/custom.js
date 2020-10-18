/** GENERALS */
/** ===================== */

var win = $(window);

// viewport dimensions
var ww = win.width();
var wh = win.height();

function myFunction() {
    var x = document.getElementById("nav");
    if (x.className === "row nav") {
        x.className += " responsive";
    } else {
        x.className = "row nav";
    }
}

$(document).ready(function () {
    extFormElement();
});

win.on('load', function () {

    setTimeout(function () {
        $('#preloader').addClass('hide');
    }, 1000);


});

function extFormElement() {
    $("#add-item").click(function () {
        var itm = document.getElementById("form-item-clone");
        var cln = itm.cloneNode(true);
        $(".col-append").append(cln);
    });
}