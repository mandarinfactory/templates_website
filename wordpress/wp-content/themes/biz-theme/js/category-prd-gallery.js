$(function () {
    function popupBox() {

        $('list-contatiner figure, .list-container .textbox').each(function () {
            var Y = $(this).offset().top
            if (scrY >= Y - winH * 0.8) {
                $(this).addClass('active')
            } else {
                $(this).removeClass('active')
            }//if-else
        })//each
    }//function_popupBox
    popupBox();
    $(window).scroll(function () {
        popupBox();
    }).resize(function () {
        popupBox();
    })//window_event
})//document.ready