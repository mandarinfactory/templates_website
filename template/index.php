<?php include "header.php" ?>
<script src="./js/store.js"></script>
<section class="home-visual">
  <div class="slider">
    <img class="slider_bg" src="./img/backsky.jpg" alt="">
    <div class="bubble bubble-particle"></div>
    <div class="col_width">
    </div><!-- slider내 한칸의 block -->
    <div class="indicator">
      <button></button>
      <button></button>
      <button></button>
      <button></button>
      <button></button>
    </div>
    <button class="prev">
      <i class="fa-solid fa-chevron-left"></i>
    </button>
    <button class="next">
      <i class="fa-solid fa-chevron-right"></i>
    </button>
  </div><!-- slider -->
</section>
<script>
  $('.home-visual .col_width').append('<ul class="img_container"></ul>')
  subSliderArr.forEach(function(v) {
    $('.home-visual .col_width ul').append(`
      <li>
        <figure class="inner">
          <img src="./img/sub/${v.path}" alt>
          <figcaption>
            <em><span>${v.title}</span></em>
            <p><span>${v.desc}</span></p>
          </figcaption>
        </figure>
      </li>
    `) //append
  }) //forEach}append)
</script>
<main>
  첫페이지 본문
</main>
<?php include "footer.php" ?>