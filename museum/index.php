<?php include "header.php" ?>
<script src="./js/store.js"></script>
<section class="home_visual">
  홈비주얼
</section>
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
      <li class="linkbox"><a href="./biz-intro.php">관람안내</a></li>
      <li class="linkbox"><a href="./location.php">오시는길</a></li>
    </div>
  </ul>
</section>
<section class="home_section home_section2"></section>
<section class="home_section home_section3">
  <div>
    <h2>
      <i class="fa-solid fa-microphone-lines"></i>
      <a href="./notice.php">공지사항</a>
    </h2>
  </div>
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
  <div>

  </div>
</section>
<?php include "footer.php" ?>