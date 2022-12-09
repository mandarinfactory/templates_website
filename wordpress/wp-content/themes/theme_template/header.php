<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" .css>
  <title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <h1><a href="<?php bloginfo('url'); ?>">사이트제목</a></h1>
    <nav>
      <?php wp_nav_menu(array('theme_location' => 'menu')); ?>
    </nav>
    <nav>
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </nav>
  </header>