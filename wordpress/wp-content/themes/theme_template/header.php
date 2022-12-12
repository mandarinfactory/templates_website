<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> //테마 url/css/style.css">
  <title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <h1><a href="<?php bloginfo('url'); ?>">wordpress연습!</a></h1>
  </header>
  <hr>
  <nav class="gnb">
    <b>GNB_메뉴</b>
    <?php wp_nav_menu(array('theme_location' => 'sitemap')); ?>
  </nav>