<?php
add_theme_support('post-thumbnails'); // 대표이미지추가
register_nav_menus(array(
    'menu' => 'menu',
)); // 메뉴기능추가
register_sidebar(array(
    'name' => __('search'),
    'id' => 'search',  // 위젯 영역의 고유한 ID
)); // 위젯추가
add_filter('rwmb_meta_boxes', 'your_prefix_meta_boxes');
function your_prefix_meta_boxes($meta_boxes)
{
    $meta_boxes[] = array(
        'title'      => '상품세부정보',
        'post_types' => 'post',
        'fields'     => array(
            array(
                'id'   => 'producer',
                'name' => '제작사',
                'type' => 'text',
            ),
            array(
                'id'   => 'model-id',
                'name' => '모델명',
                'type' => 'text',
            ),
            array(
                'id'   => 'date',
                'name' => '제작일자',
                'type' => 'text',
            ),
            array(
                'id'   => 'price',
                'name' => '가격',
                'type' => 'number',
            ),
            array(
                'id'   => 'desc',
                'name' => '상품설명',
                'type' => 'text',
            ),
        ),
    );
    return $meta_boxes;
}
