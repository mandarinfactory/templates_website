$(function () {
    $(window).load(function () {
        $('.masonry_gallery_section ul').masonry({itemSelector:'.masonry_gallery_section ul li'});
    })//load
    /* motion --------------------------------- */
    function motionBox () {
        $('.masonry_gallery_section ul li').each(function () {
            var offsetTop = $(this).offset().top
            var h = $(this).innerHeight();
            var meta = 0 + (scrY - (offsetTop - winH * 0.5 + h * 0.5)) * 0.1
            $(this).find('img').css({'transform':`translateY(${meta}px)`})
        })
    }
    motionBox();
    $(window).scroll(function () {
        motionBox();
    }).resize(function () {
        motionBox();
    })//window_event
})//document.ready