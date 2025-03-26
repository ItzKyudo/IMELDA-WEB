$(document).ready(function() {
    $('#loginBtn').click(function() {
        $(".cred-overlay").css({"display": "flex"});
        $(".cred-overlay-win").css({"height": "320px"});
        $(".cred-overlay-login").css({"display": "flex"});
        $(".cred-overlay-signup").css({"display": "none"});
    });

    $('#signupBtn').click(function() {
        $(".cred-overlay").css({"display": "flex"});
        $(".cred-overlay-win").css({"height": "490px"});
        $(".cred-overlay-login").css({"display": "none"});
        $(".cred-overlay-signup").css({"display": "flex"});
    });

    $('#cred-overlay-close img').click(function() {
        $(".cred-overlay").css({
            "display": "none"
        });
    });
});

