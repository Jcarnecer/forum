switch(window.location.origin){
    case 'http://forum.payakapps.com': var baseUrl = 'http://forum.payakapps.com/'; break;
    case 'http://stage.payakapps.com': var baseUrl = 'http://stage.payakapps.com/'; break;
    default: var baseUrl = 'http://localhost/forum/'; break;
}

var apiUrl = baseUrl + "/api/dev";

$(function() {
    function init() {
        var hide = true;

        $(".custom-toggle").click(function() {
            if (hide) {
                $("#sidebar").css({"margin-left": "-210px"});
                $(".main-content").addClass("animation");
                $(".main-content").removeClass("reverse-animation");
                $(".hidden-toggle").css({"display": "block"});
                hide = false;
            } else {
                $("#sidebar").css({"margin-left": "0px"});
                $(".main-content").removeClass("animation");
                $(".main-content").addClass("reverse-animation");
                $(".hidden-toggle").css({"display": "none"});
                hide = true;
            }
        });
    }

    init();
});