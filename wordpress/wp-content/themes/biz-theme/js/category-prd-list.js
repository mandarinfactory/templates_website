$(function(){
  hover_box('section.category-prd-list ul.list-container li figure','a')

  function fnParallax(){
    $('.list-container li div').each(function(){
      var y = $(this).offset().top
      var h = $(this).innerHeight()
      var meta = 0 + (scrY - (y - winH * 0.5 + h * 0.5)) * 0.2
      $(this).children('img').css({'transform':`scale(1.3) translateY(${meta}px)`})
    })//each
  }//fn
  fnParallax()
  $(window).resize(function(){
    fnParallax()
  }).scroll(function(){
    fnParallax()
  })//win event

	$(window).load(function(){
		var $container = $('.list-container');
		var filterSelect ="*"
		fn_isotope()
		function fn_isotope(){
			$container.isotope({
				filter: filterSelect,
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}//animationOptions
			})//isotope
		}//fn

		$('.btns button').click(function(){
			filterSelect = $(this).val()
			fn_isotope()
      $('.list-container li img').css({'transform':`scale(1.3) translateY(0)`})
			$('.btns button').removeClass('active')
			$(this).addClass('active') 
		})//click	

		$(window).resize(function(){
			fn_isotope()
		})//resize
	})//load

})//ready