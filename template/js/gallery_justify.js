$(function () {
    $(window).load(function () {
        $('.justify_gallery').justifiedGallery({
            rowHeight : 150,
            lastRow : 'nojustify',
            margins : 3,
        });
    })//load
    /* justify_plugin -------------------------------------- */

    $(window).scroll (function () {

    }).resize (function () {

    })//window_event
})//document.ready