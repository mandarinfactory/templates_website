$(function () {

    var popupHideTime = parseInt(localStorage.getItem('popupHideTime'));
    if(popupHideTime){
        var now = Date.now()
        var resultDayGap = now - popupHideTime
        if (resultDayGap > 60 * 60 * 24 * 1000){
            localStorage.removeItem('popupHideTime')
        }
        $('.popup').hide();
    }
    $('.popup button').click(function () {
        if($('.popup input').prop('checked')){
            localStorage.setItem('popupHideTime',Date.now())
        }
        $('.popup').fadeOut();
    })//click-event
})//document.ready