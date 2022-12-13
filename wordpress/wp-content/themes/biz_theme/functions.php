<?php
add_theme_support('post-thumbnails'); // 대표이미지추가
register_nav_menus(array(
    'menu' => 'menu',
)); // 메뉴기능추가
register_sidebar(array(
    'name' => __('위젯이름'),
    'id' => 'widjet1',  // 위젯 영역의 고유한 ID
)); // 위젯추가
