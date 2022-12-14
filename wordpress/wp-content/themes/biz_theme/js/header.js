$(function () {
    /* menu_btn ------------------------------------------------- */
    $('.menu_btn').click(function () {
        $(this).addClass('active')
    })//click
    /* gnb_1dep ------------------------------------------------- */
    $('.gnb > div > ul > li > a').click(function (e) {
        e.preventDefault();
        $('.gnb > div > ul > li > ul').stop().slideUp()
        $(this).siblings('ul').stop().slideDown()
    })//click
})//document.ready