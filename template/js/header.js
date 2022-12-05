/* header_motion && .top-btn ---------------------------------------------------- */
$(function(){
  function headerMotion () {
    if (winW <= 1000) {
    if (scrY >= 35) {
      $('header').addClass('active')
    } else {
      $('header').removeClass('active')
    }//if-else(sm)_one
  }
  else {
    if (scrY >= 105) {
      $('header').addClass('active')
    } else {
      $('header').removeClass('active')
    }//if-else(lg)_one
  }//if-else_two

  if (scrY >= 400) {
    $('.top-btn').fadeIn()
  } else {
    $('.top-btn').fadeOut()
  }//if-else(top-btn)
  }//function
  $('.top-btn').click(function () {
    $('body,html').stop().animate({'scrollTop' : 0}) /* vanila가 아닌 jQuery로 써야한다! */
  /*   window.scrollTo({top:0,behavior:'smooth'}) => 이미 scroll에서 vanila로 쓰이고 있어서 충돌나서 없에야한다! */
  })//click.top-btn

  headerMotion();
  $(window).resize(function(){
    headerMotion();
  }).scroll(function () {
    headerMotion();
  })

  /* gnb-sm -----------------------------------------------------*/
  $('.mbtn').click(function(){
    $(this).toggleClass('active')
    $('.gnb-sm').stop().fadeToggle().toggleClass('active')
    $('.gnb-sm .inner>ul>li>ul').stop().slideUp()
    $('.gnb-sm .inner>ul>li>a').removeClass('active')
    TweenMax.to(".gnb-sm.active .bar",0.9,{morphSVG:".gnb-sm .triangle",ease:Linear.easeNone})
    TweenMax.to(".gnb-sm:not(.active) .bar",0.3,{morphSVG:".gnb-sm .bar_copy",ease:Linear.easeNone})
  })//click
  $('.gnb-sm .inner>ul>li>a').click(function(e){
    e.preventDefault()
    $('.gnb-sm .inner>ul>li>ul').stop().slideUp()
    $(this).siblings('ul').stop().slideToggle()
    $('.gnb-sm .inner>ul>li>a').not($(this)).removeClass('active')
    $(this).toggleClass('active')
  })//click
  /* gnb-lg -----------------------------------------------------*/
  $('.gnb-lg>ul').mouseenter(function(){
    $('.gnb-lg>ul>li>ul').stop().slideDown()
    TweenMax.to(".gnb-lg .bar",0.5,{morphSVG:".gnb-lg .triangle",ease:Linear.easeNone})
  })//mouseenter
  $('.gnb-lg').mouseleave(function(){
    $('.gnb-lg>ul>li>ul').stop().slideUp()
    TweenMax.to(".gnb-lg .bar",0.3,{morphSVG:".gnb-lg .bar_copy",ease:Linear.easeNone})
  })//mouseleave
})//ready