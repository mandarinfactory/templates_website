$(function () {

  function fnSubMotion() {
    var t = $('.sub-title').offset().top
    if(scrY >= t - 50 ){//
      $('.sub-title').removeClass('active')//사라진다
    }else{
      $('.sub-title').addClass('active')//나타난다
    }
  }//fn

  fnSubMotion()
  $(window).scroll(function () {
    fnSubMotion()
  }).resize(function () {
    fnSubMotion()
  })//win event

  $('.theme-guide button').click(function(){
    $('.theme-guide').addClass('active')

  })
})//ready