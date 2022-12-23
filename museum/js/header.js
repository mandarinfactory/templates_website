$(function () {
  /* gnb-sm -----------------------------------------------------*/
  $('.mbtn').click(function () {
    $(this).toggleClass('active')
    $('.gnb-sm').stop().slideToggle()
    $('.gnb-sm>ul>li>a').removeClass('active')
    $('.gnb-sm>ul>li>ul').stop().slideUp()
    $('.upper_header').toggleClass('active')
  })//click

  $('.gnb-sm>ul>li>a').click(function (e) {//
    e.preventDefault()
    $(this).parent().siblings('li').children('a').removeClass('active')
    $(this).toggleClass('active')
    $('.gnb-sm>ul>li>ul').stop().slideUp()
    $(this).siblings('ul').stop().slideToggle()
  })//click

  /* gnb-lg -----------------------------------------------------*/
  $('.gnb-lg>ul>li').mouseenter(function () {
    $(this).children('ul').stop().slideDown()
  })//mouseenter

  $('.gnb-lg>ul>li').mouseleave(function () {
    $(this).children('ul').stop().slideUp()
  })//mouseenter


  if (scrY >= 400) {
    $('.top-btn').fadeIn()
  } else {
    $('.top-btn').fadeOut()
  }//if-else(top-btn)
  $('.top-btn').click(function () {
    $('body,html').stop().animate({ 'scrollTop': 0 }) /* vanila가 아닌 jQuery로 써야한다! */
    /*   window.scrollTo({top:0,behavior:'smooth'}) => 이미 scroll에서 vanila로 쓰이고 있어서 충돌나서 없에야한다! */
  })//click.top-btn
})//ready