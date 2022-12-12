$(function () {
    responsive_carousel_horz(".home_visual", false, 5000, 7000)
    responsive_carousel_horz(".sub-visual", false, 5000, 7000)
    responsive_carousel_horz(".home_section2 .slider", false, 2400, 4000)
    responsive_carousel_vert(".home_section3 .slider", false, 3000, 5000)

    $('.home_section2 .slider .col_width .img_container li figure img').mouseenter(function () {
        $(this).addClass('active');
        $(this).siblings('span').addClass('active');
    })//mouseenter
    $('.home_section2 .slider .col_width .img_container li figure img').mouseleave(function () {
        $(this).removeClass('active')
        $(this).siblings('span').removeClass('active');
    })//mouseleave
})//document.ready
