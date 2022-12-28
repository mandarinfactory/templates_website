<?php get_header(); ?>
<script src="<?php bloginfo('template_directory');?>/js/snb.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/sub.js"></script>
<div class="body-wrap">
  <?php include "sub-visual.php" ?>
  <nav class="snb scroll-style4"> 
    <?php wp_nav_menu( array('theme_location' => 'menu'));?>
  </nav>
  <main class="sub-content">
    <article>