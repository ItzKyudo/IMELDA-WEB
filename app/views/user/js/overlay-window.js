$(document).ready(function() {
    $('#change-email-btn').click(function() {
        $(".change-cred-overlay").css({"display": "flex"});
        $(".cred-overlay-win").css({"height": "400px"});
        $("#change-email-overlay").css({"display": "flex"});
        $("#change-passwd-overlay").css({"display": "none"});
    });

    $('#change-passwd-btn').click(function() {
        $(".change-cred-overlay").css({"display": "flex"});
        $(".cred-overlay-win").css({"height": "350px"});
        $("#change-email-overlay").css({"display": "none"});
        $("#change-passwd-overlay").css({"display": "flex"});
    });

    $('#cred-overlay-close img').click(function() {
        $(".change-cred-overlay").css({
            "display": "none"
        });
    })
});