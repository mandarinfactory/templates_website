$(function () {
    function snbActive() {
        var offsetT = $('.snb').offset().top
        if (scrY >= offsetT) {
            $('.snb').addClass('active')
        } else {
            $('.snb').removeClass('active')
        }//if
    }//snbActive_function
    snbActive();
    $(window).resize(function () {
        snbActive();
    }).scroll(function () {
        snbActive();
    })//window_event
})//document.ready