$(function(){
  function setFooterHeihgt(){
    var footerH = $('footer').innerHeight()
    $('.footer-height').height(footerH)
  }//fn

  setFooterHeihgt()
  $(window).resize(function(){
    setFooterHeihgt()
  }).scroll(function(){
    setFooterHeihgt()
  })
  
})//ready