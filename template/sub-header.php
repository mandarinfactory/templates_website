<?php include "header.php" ?>
<script src="./js/sub.js"></script>
<section class="sub-visual">
  <script src="./js/store.js"></script><!-- 배열만들기! -->
  <script>
    subSliderArr.forEach(function(v, i) {
      document.write(`
      <figure class="visual${i + 1}">
        <img src="./img/sub/${v.path}" alt="">
        <figcaption>
          <em>${v.title}</em>
          <p>${v.desc}</p>
        </figcaption>
      </figure>
      `) //document.write
    }) //forEach
  </script><!-- 먼저 여기서 image를 출력하고 => pre-load를 실행시킨다! 반대로 하면 image가 버벅되면서 upload 되니까! -->
  <div class="bgvideo">
    <iframe src="https://www.youtube.com/embed/RhlQvbvMg-0?controls=0&autoplay=1&mute=1 " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
      </iframe>
      <img src="./img/sub/01.jpg" alt="" draggable="false">
  </div>
  <button class="indicator prev">
    <i class="fa-solid fa-left-long"></i>
  </button>
  <button class="indicator next">
    <i class="fa-solid fa-right-long"></i>
  </button>
  <div class="controls">
    <button class="btn1 active" value="1"></button>
    <button class="btn2" value="2"></button>
    <button class="btn3" value="3"></button>
    <button class="btn4" value="4"></button>
    <button class="btn5" value="5"></button>
  </div>
</section>
<div class="sub-center">
  <aside class="sidebar">
    <nav class="snb">
      <?php include "menu.php" ?>
    </nav>
    <a href="tel:000-000-0000" class="sub_customer">
      <img src="./img/sub/sub_customer.gif" alt="">
    </a>
    <!--sub_customer-->
  </aside>
  <main class="sub-content">
    <ul class="breadcrumb">
      <li><i class="fa-solid fa-house-chimney"></i></li>
      <li class="category-label"></li>
      <li class="menu-label"></li>
    </ul>