<?php get_header(); ?>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/js/sub_navigation.js"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/js/sub.js"></script>
<!-- website center!!!! start -->
<div class="body_wrap">
    <?php include "sub_visual.php" ?>
    <nav class="snb scroll_style4">
        <?php wp_nav_menu(array('theme_location' => 'menu')); ?>
    </nav>
    <main class="sub_content">
        <article>