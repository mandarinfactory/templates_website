<?php include "header.php" ?>
<script src="./js/sub.js"></script>
<section class="sub-visual">
  <div class="slider">
    <h2>
      <li>국립</li>
      <li>중앙</li>
      <li>박물관</li>
    </h2>
    <h2>
      <li>National</li>
      <li>Museum</li>
      <li>of Korea</li>
    </h2>
    <div class="col_width">
    </div>
  </div>
</section>
<script>
  $('.sub-visual .slider .col_width').append(`<ul class="img_container"></ul>`)
  subVisualArr.forEach(function(v) {
    $('.sub-visual .slider .col_width .img_container').append(`
      <li>      
      <figure>
        <img src="./img/museum/sub_visual/${v.pic}" alt>
        <figcaption>
          작품명 : ${v.title}
          작가 : ${v.artist}
        </figcaption>
      </figure>
      </li>
      `) //append
  }) //forEach
</script>
<div class="sub-center">
  <aside class="sidebar">
    <nav class="snb">
      <?php include "menu.php" ?>
    </nav>
  </aside>
  <main class="sub-content">
    <ul class="breadcrumb">
      <li><i class="fa-solid fa-house-chimney"></i></li>
      <li class="category-label"></li>
      <li class="menu-label"></li>
    </ul>