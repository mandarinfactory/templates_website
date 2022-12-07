$(function () {
    responsive_carousel_horz('.home-visual', false, 3000, 10000)
        /* '해당classs', '마우스스크롤', '넘어가는 시간', 'silder가 멈추는 시간' */
    bubble('.bubble', './img/bubble')
/* carousel -------------------------------------------------------------------- */ 
function popupBox() {
    $('.home_section1 li, .home_section2 li').each(function() {
        var t = $(this).offset().top
        if(scrY >= t - winH * 0.7){
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
    /* ----------------------------------------------------------------------------- */
    $('.home_section3 li').each(function () {
        var t = $(this).offset().top
        var h = $(this).innerHeight()
        var meta = 0 + (scrY - (t - winH * 0.5 + h * 0.5)) * 0.1
        $(this).find('img').css({'transform':`scale(1.4), translateY(${meta}px)`})
    })//each(parallex)
/* popupBox, parallex ----------------------------------------------------------------- */
})//document.ready