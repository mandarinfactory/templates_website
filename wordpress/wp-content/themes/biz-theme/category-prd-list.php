<?php include "sub-header.php" ?>
  <script src="<?php bloginfo('template_directory'); ?>/js/category-prd-list.js"></script>
  <section class="category-prd-list">
  <!--카테고리 전체 제목 출력-->
  <h2 class="sub-title">
    <em data-title="<?php single_cat_title(''); ?>">
      <!--before 인사말-->
      <span class="hidden"><?php single_cat_title(''); ?></span > 
      <!--after 인사말-->
    </em>
  </h2>
  <!--안내문-->
  <p class="theme-guide">
    상품목록은 관리자/글메뉴에서 관리할 수 있습니다. <br>
    테마폴더의 category-prd-list.php와 category-prd-list.scss에서 
    디자인 및 구성내용을 편집 하실 수 있습니다
    <button><i class="fa-solid fa-circle-xmark"></i></button>
  </p>

  <!--카테고리 설명 출력-->
  <div class="category-desc">
    <?php echo category_description(); ?>
  </div>

  <!-- 카테고리 버튼 -->
  <div class="btns">
    <button class="active" value="*">전체보기</button>
    <button value=".상품분류1">상품분류1</button>
    <button value=".상품분류2">상품분류2</button>
    <button value=".상품분류3">상품분류3</button>
    <button value=".상품분류4">상품분류4</button>
  </div><!-- btns --> 

  <ul class="list-container"><!--카테고리 리스트 출력-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
      <?php
        echo '<li';
        $posttags = get_the_tags();
        if ($posttags) {
        echo ' class="';
        foreach($posttags as $tag) { echo $tag->name." "; }
        echo '"';
        }
        echo '>';
      ?>
      <figure>
        <!--글 이미지-->
        <div><?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); } ?></div>
        <a href="<?php the_permalink(); ?>">
          <figcaption>
            <!--글 제목-->
            <h3><?php the_title(); ?></h3>
            <!--요약글 출력-->
            <?php the_excerpt(); ?>
          </figcaption>
        </a>
      </figure>
    </li><!--리스트 한개 끝-->
    <?php endwhile; else: ?>
    <!--카테고리 글이 없는 경우-->
    <?php endif; ?>
  </ul><!--카테고리 리스트 출력끝-->
  <!--페이징출력시작--> 
  <?php
    global $wp_query;
    $big = 999999999;
    echo paginate_links( array(
      'type'        => 'list',
      'base'        => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format'      => '?paged=%#%',
      'current'     => max( 1, get_query_var('paged') ),
      'total'       => $wp_query->max_num_pages,
      'prev_text'   => __('<i class="fa-solid fa-arrow-left"></i>'),
      'next_text'   => __('<i class="fa-solid fa-arrow-right"></i>'),
    ) );
  ?>
  <!--페이징출력끝--> 
  </section>
<?php include "sub-footer.php" ?>