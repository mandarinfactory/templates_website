$(function () {
    function setFooterHeight() {
        var footerH = $('footer').innerHeight();
        $('.footer_height').height(footerH)
    }//setFooterHeight_function
    setFooterHeight();
    $(window).resize(function () {
        setFooterHeight();
    }).scroll(function () {
        setFooterHeight();
    })//window_event
})//document.ready