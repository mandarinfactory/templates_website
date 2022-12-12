<?php

/* thumbnail */
add_theme_support('post-thumbnails');

/* navigation */
register_nav_menus(array(
    'sitemap' => 'sitemap',
));

/* widget */
register_sidebar(array(
    'name' => __('searchWidget'),
    'id' => 'searchWidget',  // 위젯 영역의 고유한 ID
));
