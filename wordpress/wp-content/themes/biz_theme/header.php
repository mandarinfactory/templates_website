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
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/animation_template.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/scrollbar.css">
  <!-- root_CSS -->
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/header.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/footer.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/category.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/category-prd_list.css">
  <!-- layout_CSS -->
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/logo.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/menu_btn.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/sub_visual.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/sub_layout.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/gnb.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/gnb_lg.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/snb.css">
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/css/lang_menu.css">
  <!-- etc(mark,button,logo)_CSS -->
  <script src="https://kit.fontawesome.com/7d1f9ca95d.js" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/js/store.js"></script>
  <script src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/js/common.js"></script>
  <script src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/js/header.js"></script>
  <script src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/js/footer.js"></script>
  <script src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/js/type_effect.js"></script><!-- plugin_01.default -->
  <script src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/js/grained.min.js"></script><!-- plugin_06. noise -->
  <script src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/js/hoverBox.js"></script><!-- plugin_hoverBox -->
</head>

<body <?php body_class(); ?>>
  <h1>
    <?php include "logo.php" ?>
  </h1>
  <header>
    <nav class="gnb_lg">
      <?php wp_nav_menu(array('theme_location' => 'menu')); ?>
    </nav>
    <button class="menu_btn">
      <i class="bar1"></i>
      <i class="bar2"></i>
      <i class="bar3"></i>
      <b>menu</b>
    </button>
    <?php include "lang_menu.php" ?>
  </header>
  <nav class="gnb">
    <?php include "img/img/icon&logo/logo.php" ?>
    <?php wp_nav_menu(array('theme_location' => 'menu')); ?>
    <?php include "lang_menu.php" ?>
  </nav>