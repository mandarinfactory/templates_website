$(function () {
    responsive_carousel_horz('.home-visual', false, 3000, 10000)
        /* '해당classs', '마우스스크롤', '넘어가는 시간', 'silder가 멈추는 시간' */
    bubble('.bubble', './img/bubble')
/* carousel -------------------------------------------------------------------- */
var type1 = new Type_effect('.home_section1 h2',100)
var type2 = new Type_effect('.home_section2 h2',100)
var type3 = new Type_effect('.home_section3 h2',100)
type1.play();
/* scroll_title ----------------------------------------------------------------- */
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
$(window).scroll(function () {

    var t2 = $('.home_section2 h2').offset().top
    var t3 = $('.home_section3 h2').offset().top
    if (scrY > t2 - winH * 0.8){
        type2.play()
    } else {
        type2.reverse()
    }//if-else
    if (scrY > t3 - winH * 0.8){
        type3.play()
    } else {
        type3.reverse()
    }//if-else
})
/* scroll_title ------------------------------------------------------------------- */
})//document.ready