$(function(){
  /* gnb-sm -----------------------------------------------------*/
  $('.mbtn').click(function(){
    $(this).toggleClass('active')
    $('.gnb-sm').stop().fadeToggle().toggleClass('active')
    $('.gnb-sm>ul>li>ul').stop().slideUp()
    $('.gnb-sm>ul>li>a').removeClass('active')
  })
  $('.gnb-sm>ul>li>a').click(function(e){
    e.preventDefault()
    $('.gnb-sm>ul>li>ul').stop().slideUp()
    $(this).siblings('ul').stop().slideToggle()
    $('.gnb-sm>ul>li>a').not($(this)).removeClass('active')
    $(this).toggleClass('active')
  })
  /* gnb-lg -----------------------------------------------------*/
  $('.gnb-lg>ul').mouseenter(function(){
    $('.gnb-lg>ul>li>ul').stop().slideDown()
  })
  $('.gnb-lg').mouseleave(function(){
    $('.gnb-lg>ul>li>ul').stop().slideUp()
  })
})//ready