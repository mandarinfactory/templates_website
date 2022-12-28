<?php include "sub-header.php" ?>

<section class="category-prd-gallery">
  <!--카테고리 전체 제목 출력-->
  <h2 class="sub-title">
    <em data-title="<?php single_cat_title(''); ?>">
      <!--before 인사말-->
      <span class="hidden"><?php single_cat_title(''); ?></span>
      <!--after 인사말-->
    </em>
  </h2>
  <!--안내문-->
  <p class="theme-guide">
    상품목록은 관리자/글메뉴에서 관리할 수 있습니다. <br>
    테마폴더의 category-prd-gallery.php와 category-prd-gallery.scss에서
    디자인 및 구성내용을 편집 하실 수 있습니다.
    <button><i class="fa-solid fa-circle-xmark"></i></button>
  </p>

  <!--카테고리 설명 출력-->
  <div class="theme-desc">
    <?php echo category_description(); ?>
  </div>

  <!-- 태그클라우드 -->
  <ul class="tag-cloud">
    <?php
    if (is_active_sidebar('tags')) {
      dynamic_sidebar('tags');
    }
    ?>
  </ul>
  <ul class="list-container">
    <!--카테고리 리스트 출력----------------------------------->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <li>
          <!--리스트 한개 출력-->
          <div class="inner">
            <figure>
              <!--글 이미지-->
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail('thumbnail');
              } ?>
            </figure>
            <div class="textbox">
              <!--글 제목-->
              <h3><?php the_title(); ?></h3>
              <!-- 메타박스출력 -->
              <dl>
                <dt>제작사</dt>
                <dd><?php echo rwmb_meta('producer');  ?></dd>
                <dt>모델명</dt>
                <dd><?php echo rwmb_meta('model-id');  ?></dd>
                <dt>가격</dt>
                <dd><?php echo rwmb_meta('price');  ?></dd>
                <dt>설명</dt>
                <dd><?php echo rwmb_meta('desc');  ?></dd>
              </dl>
              <!--해당글 링크-->
              <a href="<?php the_permalink(); ?>">해당글 보기</a>
            </div><!-- textbox -->
          </div><!-- inner -->
        </li>
        <!--리스트 한개 끝-->
      <?php endwhile;
    else : ?>
      <!--카테고리 글이 없는 경우-->
    <?php endif; ?>
  </ul>
  <!--카테고리 리스트 출력끝-->
  <!--페이징출력시작-->
  <?php
  global $wp_query;
  $big = 999999999;
  echo paginate_links(array(
    'type'        => 'list',
    'base'        => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format'      => '?paged=%#%',
    'current'     => max(1, get_query_var('paged')),
    'total'       => $wp_query->max_num_pages,
    'prev_text'   => __('<'),
    'next_text'   => __('>'),
  ));
  ?>
  <!--페이징출력끝-->



</section>
<?php include "sub-footer.php" ?>