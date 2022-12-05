$(function (){
  $('.register .adult, .child').click(function() {
    $('.container_register').stop().fadeIn()
    $('.popcard').addClass('active')
  })
  $('.register .foreigner').click(function() {
    $('.container_register_global').stop().fadeIn()
    $('.popcard').addClass('active')
  })
  $('.popcard .close').click(function() {
    $('.container_register, .container_register_global').stop().fadeOut()
    $('.popcard').removeClass('active')

  })
})

/* 회원가입 양식이 나오는게 active! ==> 
display:fixed를 none로 바꾸고 
active하면 다시 fixed로 변경해준다! */