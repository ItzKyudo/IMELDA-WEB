$(document).ready(function() {
    $("#overlay-close img").click(function() {
        $(".overlay-div").css({"display": "none"});
    });
    $("#add-app").click(function() {
        $(".overlay-div").css({"display": "flex"});
    });
});