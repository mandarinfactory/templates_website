/* common.js => 필요한 function이나 그외 method를 저장하기 위해 만든 file! */
/* window infomation ------------------------------------------ */
function winInfo() {
  window.scrY = $(window).scrollTop();
  window.scrX = $(window).scrollLeft();
  window.winH = $(window).innerHeight();
  window.winW = $(window).innerWidth(); /* 나중에 어떤 JS에서 쓰일수 있으니! 전역변수로 한다! $(window)는 아님! 그냥 window로 쓰자! */
}//function

winInfo();
$(window).resize(function () {
  winInfo();
}).scroll(function () {
  winInfo();
})//resize, scroll(window-event)
/* smooth_wheel_effet -------------------------------------------------------------- */
var scrollSpeed = 0

/*  window.addEventListener('mousewheel',function (e) {
     e.preventDefault();/* browser에서 자동적으로 되는것들을 방지한다.(새로고침등) */
/*  delta = e.wheelDeltaY / -120;
 scrollSpeed += 15 * delta; */
/*  },{passive:false}) jQuery에서는 안되서 무조건 vanila에서만! */
/*
<<vanila JS>>
addEventListener => event(click, mouseenter...)를 추가!
wheelDeltaY = 마우스의 휠의 방향을 알수 있다. 위로 하면 +120, 아래로 하면 -120 의 값으로 출력된다.
*/
/*  setInterval (function () {
     window.scrollTo({
         top :  scrY + scrollSpeed/* scrollSpeed 속도만큼 굴러간다! */
/*   })//setInterval */
/*   scrollSpeed *= 0.975 */
/*
곱하는 숫자가 1초과하면 가속도가 붙는다!
0 ~ 1까지가 감속하는 숫자고 1과 가까워질수록 천천히 한다. (0.8 ~ 1이 제일 보기 좋다.)
*/
/*  },30)  */