<?php include "header.php" ?>
<script src="./js/store.js"></script>
<section class="home_visual">
  <div class="slider">
    <div class="col_width">
      <!-- ul
              li
                img-->
    </div>
    <div class="indicator">
      <button></button>
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
  </div>
</section>
<script>
  $('.home_visual .col_width').append(`<ul class="img_container"></ul>`)
  mainSliderArr.forEach(function(v) {
    $('.home_visual .col_width ul').append(`
    <li> 
        <img src="./img/museum/main_slider/${v.pic}" alt>
    </li>
    `) //append
  }) //forEach
</script>
<section class="home_section home_section1">
  <ul>
    <i class="fa-solid fa-clock"></i>
    <li class="title">관람시간</li>
    <li>월 / 화 / 목 / 금 / 일</li>
    <li>10:00 ~ 18:00</li>
    <li>수 / 토</li>
    <li>10:00 ~ 21:00</li>
    <li class="title">* 입장 마감은 폐관30분 전까지</li>
  </ul>
  <ul>
    <div>
      <i class="fa-solid fa-ticket"></i>
      <li class="title">관람료</li>
      <li>무료</li>
      <li>특별전시는 유료</li>
    </div>
    <div>
      <li class="linkbox"><a href="./exhib_permanent.php">전시안내</a></li>
      <li class="linkbox"><a href="./location.php">오시는길</a></li>
    </div>
  </ul>
</section>
<section class="home_section home_section2">
  <h2>기타 전시</h2>
  <div class="slider">
    <div class="col_width">
    </div>
  </div>
</section>
<script>
  $('.home_section2 .col_width').append(`<ul class="img_container"></ul>`)
  section2SliderArr.forEach(function(v) {
    $('.home_section2 .col_width .img_container').append(`
      <li> 
        <figure>
          <img src="./img/museum/section2_slider/${v.pic}" alt>
          <span>${v.museum}</span>
          <figcaption>
            <p>${v.now}</p>
            <p>${v.location}</p>
            <h3>${v.title}</h3>
            <p>${v.date}</p>
          </figcaption>
        </figure>
      </li>
    `) //append
  }) //forEach
</script>
<section class="home_section home_section3">
  <div>
    <h2>
      <i class="fa-solid fa-microphone-lines"></i>
      <a href="./notice.php">공지사항</a>
    </h2>
  </div>
  <div class="slider">
    <div class="col_height">
      <!-- ul
              li
                img-->
    </div>
    <div class="indicator">
      <button></button>
      <button></button>
      <button></button>
    </div>
</section>
<script>
  $('.home_section3 > div:first-child').append(`<table class="sm_board">
    <tbody></tbody>
    <table>`)
  noticeArrCopy = [...noticeArr]
  noticeArrCopy.reverse().forEach(function(v) {
    $('.home_section3 > div:first-child .sm_board tbody').append(` 
      <tr>
      <td>${v.title}</td>
      <td>${v.date}</td>
      </tr>
      `) //append
  }) //forEach
</script>
<script>
  $('.home_section3 .col_height').append(`<ul class="img_container"></ul>`)
  section3SliderArr.forEach(function(v) {
    $('.home_section3 .col_height ul').append(`
    <li> 
        <img src="./img/museum/section3_slider/${v.pic}" alt>
    </li>
    `) //append
  }) //forEach
</script>
<?php include "footer.php" ?>