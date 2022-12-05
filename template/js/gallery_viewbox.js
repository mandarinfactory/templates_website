$(function () {
    $(window).load(function () {
        $('.viewbox_gallery_section ul li figure a').viewbox();
    })//load
    /* viewbox_plugin -------------------------------------- */
    function callMotion () {
        $('.viewbox_gallery_section ul li').each(function () {
            var offsetTop = $(this).offset().top
            if (scrY >= offsetTop - winH * 0.9) {
                $(this).addClass('active')
            } else {
                $(this).removeClass('active')
            }
        })//each
    }//callMotion_function
    callMotion();
    $(window).scroll (function () {

    }).resize (function () {

    })//window_event
    /* scroll_motion ------------------- ------------------- */
})//document.ready