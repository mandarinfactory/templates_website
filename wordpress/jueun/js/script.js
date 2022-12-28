$(function () {
   $(`.sidebar .toggle-btn`).click(function () {
      $('.sidebar,body').toggleClass('active')
   })//click
   function fnResize() {
      if(winW <= 1000 && winW > 600){
         $('.sidebar,body').addClass('active')
      }else{
         $('.sidebar,body').removeClass('active')
      }
   }
   fnResize()
   $(window).resize(function () {
      fnResize()
   })

   $('.section-web .imgbox a').viewbox()

   $('.section2 .textbox .color b').each(function(){
      $(this).css({'color':$(this).text()})
   })
})//ready