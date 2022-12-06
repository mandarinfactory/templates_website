$('.preloader').bind('mousewheel',function () {
    return false
})
$(window).load(function () {
    $('.preloader').fadeOut();
    $('body').css({'overflow':'auto'})
})