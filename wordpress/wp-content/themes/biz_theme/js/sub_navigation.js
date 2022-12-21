$(function () {
    function snbActive() {
        var offsetT = $('.snb').offset().top
        if (scrY >= offsetT) {
            $('.snb').addClass('active')
        } else {
            $('.snb').removeClass('active')
        }//if
    }//snbActive_function
    snbActive();
    $(window).resize(function () {
        snbActive();
    }).scroll(function () {
        snbActive();
    })//window_event



    /*  $('li.current-post-parent').parent().parent().show();
     $('.snb>div>ul>li>ul>li.current-post-parent a').addClass('active'); */

    var address = location.href
    $(`.snb > div > ul > li > ul > li > a[href*=${address}]`)
})//document.ready