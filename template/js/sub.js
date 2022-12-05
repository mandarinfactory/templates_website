$(function () {
  var addr = location.href
  var category
  var menu

  if (addr.match('greet')) {
    category = 1; menu = 1
  } else if (addr.match('location')) {
    category = 1; menu = 2
  } else if (addr.match('video')) {
    category = 1; menu = 3
  } else if (addr.match('biz-intro')) {
    category = 2; menu = 1
  } else if (addr.match('biz-area')) {
    category = 2; menu = 2
  } else if (addr.match('gallery_isotope')) {
    category = 3; menu = 1
  } else if (addr.match('gallery_justify')) {
    category = 3; menu = 2
  } else if (addr.match('gallery_masonry')) {
    category = 3; menu = 3
  } else if (addr.match('gallery_viewbox')) {
    category = 3; menu = 4  
  } else if (addr.match('contact')) {
    category = 4; menu = 1
  } else if (addr.match('notice')) {
    category = 5; menu = 1
  } else if (addr.match('freeboard')) {
    category = 5; menu = 2
  } else if (addr.match('faq')) {
    category = 5; menu = 3
  }

  $('.snb .category' + category).show()
  $(`.snb .menu${category}-${menu}`).addClass('active')

  var categoryLabel = $(`.snb .category${category} em`).text()
  $('.breadcrumb .category-label').text(categoryLabel)
  var menuLabel = $(`.snb .menu${category}-${menu}`).text()
  $('.breadcrumb .menu-label').text(menuLabel)

  $('.sub-visual .visual' + category).fadeIn().addClass('active')
    setTimeout(function(){
      $('.sub-visual .visual' + category).addClass('active')
    },1)
  /* sub-visual-category 형태

  $('.sub-visual .visual' + category).fadeIn().addClass('active')
  setTimeout(function(){
    $('.sub-visual .visual' + category).addClass('active')
  },1)  
 */

  /* fadeIn 형태의 slider */
  var n = 1;
  var isClick = true;
  var intervalID;
  var timeoutID;

  intervalID = setInterval(function () {
    n ++;
    changePic();
  },3000)//setInterval

  function changePic () {
    if(n > 5) n = 1
    if(n < 1) n = 5
    $('.sub-visual figure').stop().fadeOut().removeClass('active');
    $(`.sub-visual .visual${n}`).stop().fadeIn().addClass('active');
    $(`.sub-visual .controls button`).removeClass('active');
    $(`.sub-visual .controls .btn${n}`).addClass('active');
  }//funtion-changePic

  function controlClick () {
    isClick = false; /* true이면 false로 변경! */
    setTimeout(function () {
      isClick = true;
    },1000)//setTimeout
  }//function-controlClick
  
  function autoPlay () {
    clearInterval(intervalID);
    clearTimeout(timeoutID);
    timeoutID = setTimeout(function () {
      intervalID = setInterval(function () {
        n ++;
        changePic();
      },3000); // setInterval
    },5000); /* setTimeout 총8초 후에! */
  }//autoPlay

  $('.sub-visual .prev').click(function () {
    n --;
    changePic();
    autoPlay();
  })//click
  
  $('.sub-visual .next').click(function () {
    if(isClick === false)return false; /* function으로 가져가면 false를 중지할 수가 없다! */
    n ++;
    changePic();
    autoPlay();
  })//click
  
  $('.sub-visual .controls button').click(function () {
    n = parseInt($(this).val());
    changePic();
    autoPlay();
  })//click


  function videoResize () {
    var imgWidth = $('.sub-visual .bgvideo img').innerWidth();
    $('.sub-visual .bgvideo iframe').width(imgWidth);
  }//function
  $(window).load(function() {
      videoResize();
  })//모든 binary-data(이미지등)가 다 다운 받아야(load) 출력가능!

  $(window).resize(function() {
      videoResize();
  })/* resize되면 함수실행 시키기 위해서! */
  })//ready 