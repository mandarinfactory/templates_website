<?php include "header.php" ?>
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
      <li class="linkbox"><a href="./biz-intro.php">오시는길</a></li>
    </div>
  </ul>
</section>
<section class="home_section home_section2"></section>
<section class="home_section home_section3"></section>
<section class="home_section home_section4">
  <h2>공지사항</h2>
  <div>더보기</div>
  <script>
    $('.home_section4').append(`<table class="sm_board"><table>`)
  </script>
</section>
<?php include "footer.php" ?>