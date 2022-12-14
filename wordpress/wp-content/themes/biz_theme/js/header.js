$(function () {
    /* menu_btn ------------------------------------------------- */
    $('.menu_btn').click(function () {
        $(this).addClass('active')
        $('.gnb').toggleClass('active')
        $('.gnb > div > ul > li > ul').stop().slideUp()
        $('.gnb > div > ul > li > a').removeClass('active')

    })//click
    /* gnb_1dep ------------------------------------------------- */
    $('.gnb > div > ul > li > a').click(function (e) {
        e.preventDefault();
        $('.gnb > div > ul > li > ul').stop().slideUp()
        $(this).siblings('ul').stop().slideToggle()
        $('.gnb > div > ul > li > a').not($(this)).removeClass('active')
        $(this).toggleClass('active')
    })//click
})//document.ready