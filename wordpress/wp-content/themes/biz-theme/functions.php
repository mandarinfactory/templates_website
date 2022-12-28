<?php
//대표이미지기능추가
add_theme_support('post-thumbnails');

//메뉴기능추가
register_nav_menus(array(
  'menu' => 'menu',
));

//위젯추가
register_sidebar(array(
  'name' => __('검색위젯'),
  'id' => 'search',  // 위젯 영역의 고유한 ID
));

register_sidebar(array(
  'name' => __('태그클라우드'),
  'id' => 'tags',  // 위젯 영역의 고유한 ID
));

//메타박스설정
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
        'type' => 'date',
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
// 카테고리별 next, prev 탐색 기능 추가!
add_filter('get_next_post_join', 'navigate_in_same_taxonomy_join', 20);
add_filter('get_previous_post_join', 'navigate_in_same_taxonomy_join', 20);
function navigate_in_same_taxonomy_join()
{
  global $wpdb;
  return " INNER JOIN $wpdb->term_relationships AS tr ON p.ID = tr.object_id INNER JOIN $wpdb->term_taxonomy tt ON tr.term_taxonomy_id = tt.term_taxonomy_id";
}
add_filter('get_next_post_where', 'navigate_in_same_taxonomy_where');
add_filter('get_previous_post_where', 'navigate_in_same_taxonomy_where');
function navigate_in_same_taxonomy_where($original)
{
  global $wpdb, $post;
  $where   = '';
  $taxonomy   = 'category';
  $op   = ('get_previous_post_where' == current_filter()) ? '<' : '>';
  $where   = $wpdb->prepare("AND tt.taxonomy = %s", $taxonomy);
  if (!is_object_in_taxonomy($post->post_type, $taxonomy))
    return $original;
  $term_array = wp_get_object_terms($post->ID, $taxonomy, array('fields' => 'ids'));
  $term_array = array_map('intval', $term_array);
  if (!$term_array || is_wp_error($term_array))
    return $original;
  $where   = " AND tt.term_id IN (" . implode(',', $term_array) . ")";
  return $wpdb->prepare("WHERE p.post_date $op %s AND p.post_type = %s AND p.post_status = 'publish' $where", $post->post_date, $post->post_type);
}
