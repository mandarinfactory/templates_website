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
</section>
<section class="home_section home_section1">
  <div class="main_desc">
    <h2 id="type1">quick menu</h2>
    <p>메뉴를 클릭하시면 해당 메뉴로 이동합니다.</p>
  </div>
</section>
<script>
  $('.home_section1').append(`<ul></ul>`)
  window.quickMenuArr.forEach(function(v) {
    $('.home_section1 ul').append(`
      <li>
        <a href="${v.url}">
          <figure>
            <img src="${v.path}" alt>
            <svg viewBox="0 0 300 300">
            <path pathLength="1" d="M224 21.8 76 21.8 2 150 76 278.2 224 278.2 298 150z" />
            </svg>
          </figure>
          <h3>${v.title}</h3>
          <p>${v.desc}</p>
        </a>
      </li>
    `)
  }) //forEach
</script>
<section class="home_section home_section2">
  <div class="inner">
    <div class="main_desc">
      <h2>CS CENTER</h2>
      <p>고객의 목소리에 귀 기울이는 션샤인이 되겠습니다.</p>
    </div>
  </div>
</section>
<script>
  $('.home_section2 .inner').append(`<ul></ul>`)
  window.customerArr.forEach(function(v) {
    $('.home_section2 ul').append(`<li>
      <a href="${v.url}">
      <div class="textbox">
        ${v.icon}
        <h3>${v.title}</h3>
        <p>${v.desc}</p>
        </div>
      </a>
    </li>`)

  })
</script>
</main>
<?php include "footer.php" ?>