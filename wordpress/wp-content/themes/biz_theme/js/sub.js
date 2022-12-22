$(function () {
    function subMotion() {
        var t = $('.sub_title').offset().top
        if (scrY >= t - 50) {
            $('.sub_title').removeClass('active')
        } else {
            $('.sub_title').addClass('active')
        }
    }//subMotion_function
    subMotion()
    $(window).resize(function () {
        subMotion()
    }).scroll(function () {
        subMotion()
    })//window_event

    $('.theme_guide button').click(function () {
        $('.theme_guide').slideUp();
    })//click_event
})//document.ready