$(function () {
    hover_box('section.category_prd_list ul.list_container li figure', 'a');
    function parallaxBox() {
        $('.list_container li div').each(function () {
            var y = $(this).offset().top
            var h = $(this).innerHeight();
            var meta = 0 + (scrY - (y - winH * 0.5 + h * 0.5)) * 0.1
            $(this).children('img').css({ 'transform': `scale(1.1) translateY(${meta}px)` })
        })//each
    }//function_parallaxBox
    parallaxBox();

    $(window).resize(function () {

    }).scroll(function () {

    })//window_event
})//document.ready