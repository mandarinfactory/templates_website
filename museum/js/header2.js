$(function(){
  /* gnb-sm -----------------------------------------------------*/
  $('.mbtn').click(function(){
    $(this).toggleClass('active')
    $('.gnb-sm').stop().slideToggle()
    $('.gnb-sm>ul>li>a').removeClass('active')
    $('.gnb-sm>ul>li>ul').stop().slideUp()
  })//click

  $('.gnb-sm>ul>li>a').click(function(e){//
    e.preventDefault()
    $(this).parent().siblings('li').children('a').removeClass('active')
    $(this).toggleClass('active')
    $('.gnb-sm>ul>li>ul').stop().slideUp()
    $(this).siblings('ul').stop().slideToggle()
  })//click

  /* gnb-lg -----------------------------------------------------*/
  $('.gnb-lg>ul>li').mouseenter(function(){
    $(this).children('ul').stop().slideDown()
  })//mouseenter

  $('.gnb-lg>ul>li').mouseleave(function(){
    $(this).children('ul').stop().slideUp()
  })//mouseenter

})//ready