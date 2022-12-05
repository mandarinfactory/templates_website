$(function () {
    responsive_carousel_horz('.home-visual', false, 3000, 10000)
        /* '해당classs', '마우스스크롤', '넘어가는 시간', 'silder가 멈추는 시간' */
    bubble('.bubble', './img/bubble')
/* carousel -------------------------------------------------------------------- */
    var type1 = new Type_effect('#type1',50)
    type1.play()
/* Type_effect ----------------------------------------------------------------- */
    function popupBox() {
        $('.home_section1 li').each(function() {
            var t = $(this).offset().top
            if(scrY >= t - winH * 0.8){
                $(this).addClass('active')
            } else {
                $(this).removeClass('active')
            }//if-else
        })//each
    }//function-popupBox

    popupBox();

    $(window).scroll(function() {
        popupBox()
    }).resize(function() {
        popupBox()
    })//window-event
})//document.ready