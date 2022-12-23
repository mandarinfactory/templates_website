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
        parallaxBox();
    }).scroll(function () {
        parallaxBox();
    })//window_event
    $(window).load(function () {
        var $container = $('.list_container');
        var filterSelect = "*"
        fn_isotope()
        $('.list_container li img').children('img').css({ 'transform': `scale(1.3) translateY(0)` })
        function fn_isotope() {
            $container.isotope({
                filter: filterSelect,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }//animationOptions
            })//isotope
        }//fn
        $('.btns button').click(function () {
            filterSelect = $(this).val()
            fn_isotope()
        })//click	
        $(window).resize(function () {
            fn_isotope()
        })//resize
    })//load

})//document.ready