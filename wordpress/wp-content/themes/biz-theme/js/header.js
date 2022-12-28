$(function(){
  /* menu-btn---------------------------- */
  $('.menu-btn').click(function(){
    $('.gnb').toggleClass('active')
    $(this).toggleClass('active')
    $('.gnb>div>ul>li>ul').stop().slideUp()
    $('.gnb>div>ul>li>a').removeClass('active')
  })//click
  /* gnb 1dep a---------------------------- */
  $('.gnb>div>ul>li>a').click(function(e){
    e.preventDefault()
    $('.gnb>div>ul>li>ul').stop().slideUp()
    $(this).siblings('ul').stop().slideToggle()
    $('.gnb>div>ul>li>a').not($(this)).removeClass('active')
    $(this).toggleClass('active')
  }) 


})//ready