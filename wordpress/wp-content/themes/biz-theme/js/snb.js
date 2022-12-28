$(function(){

  function fnSnbActive(){
    var offset = $('.snb').offset().top
    if(scrY >= offset){
      $('.snb').addClass('active')
    }else{
      $('.snb').removeClass('active')
    }//if else
  }//fn
  fnSnbActive()
  $(window).resize(function(){
    fnSnbActive()
  }).scroll(function(){
    fnSnbActive()
  })//ready

  /*
  $('li.current-post-parent').parent().parent().show()
  $('li.current-post-parent > a').addClass('active')  
  */
  
  var addr = location.href 
  $(`.snb > div > ul > li > ul > li > a`).each(function(){
    var href = $(this).attr('href')
    if(addr.match(href)) {
      $(this).parent().parent().parent().show() 
      $(this).addClass('active')
    }
  })
  if(addr.match('/tag/') || addr.match('/?s=')){
    $(`.snb > div > ul > li:nth-child(3)`).show()
  }
})//ready