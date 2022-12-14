<!DOCTYPE html>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>
  <html <?php language_attributes(); ?> class="no-js">
  <?php wp_head(); ?>
  <!-- wp_head 아래에 link, script를 모아둔다! 위에 두면 wordpress source보다 먼저 나오게 되서 충돌됨! -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Song+Myung&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/img/img/icon&logo/favicon.ico">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/reset.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/mixin.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/header.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/logo.css">
  <script src="https://kit.fontawesome.com/7d1f9ca95d.js" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/js/common.js"></script>
</head>

<body <?php body_class(); ?>>
  <h1>
    <a href="<?php bloginfo('url'); ?>">
      <div class="logo">
        <figure class="cube">
          <img class="front" src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/img/img/icon&logo/logo-front-back.png" alt>
          <img class="back" src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/img/img/icon&logo/logo-front-back.png" alt>
          <img class="left" src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/img/img/icon&logo/logo-left-right.png" alt>
          <img class="right" src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/img/img/icon&logo/logo-left-right.png" alt>
          <img class="top" src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/img/img/icon&logo/logo-top-bottom.png" alt>
          <img class="bottom" src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/img/img/icon&logo/logo-top-bottom.png" alt>
        </figure>
        <b>Website_Logo</b>
      </div>
    </a>
  </h1>
  <header>
    header
  </header>