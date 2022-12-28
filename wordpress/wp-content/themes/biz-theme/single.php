<?php include "sub-header.php" ?>
<section class="section-single">
  <!--포스트의 해당 카테고리 정보가져오기-->
  <?php
  $category = get_the_category();
  $categoryID = $category[0]->cat_ID;
  $categoryName = $category[0]->cat_name;
  $categoryUrl = get_category_link($category[0]);
  $categoryDesc = category_description($category[0]);
  ?>
  <!--포스트의 해당 카테고리 제목 출력-->
  <h2 class="sub-title">
    <em data-title="<?php echo $categoryName ?>">
      <!--before 인사말-->
      <span class="hidden"><?php echo $categoryName ?></span>
      <!--after 인사말-->
    </em>
  </h2>
  <!--테마안내문-->
  <p class="theme-guide">
    상품목록은 관리자/글메뉴에서 관리할 수 있습니다. <br>
    테마폴더의 single.php와 single.scss에서
    디자인 및 구성내용을 편집 하실 수 있습니다.
    <button><i class="fa-solid fa-circle-xmark"></i></button>
  </p>
  <!--post(글) 출력시작-->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <dl class="post-meta">
        <dt>상품명</dt>
        <dd>
          <?php the_title(); ?>
        </dd>
        <dt>제작사</dt>
        <dd><?php echo rwmb_meta('producer');  ?></dd>
        <dt>모델명</dt>
        <dd><?php echo rwmb_meta('model-id');  ?></dd>
        <dt>제작일자</dt>
        <dd><?php echo rwmb_meta('date');  ?></dd>
        <dt>가격</dt>
        <dd><?php echo rwmb_meta('price');  ?></dd>
        <dt>상품설명</dt>
        <dd><?php echo rwmb_meta('desc');  ?></dd>
        <dt>관련태그</dt>
        <dd>
          <?php the_tags('', '', ''); ?>
        </dd>
      </dl>

      <!--post 본문-->
      <div class="post">
        <?php the_content(); ?>
      </div><!-- post -->

      <ul class="post-nav">
        <li class="indicator">
          <!--이전글 썸네일-->
          <?php $prevPost = get_previous_post(true);
          if ($prevPost) { ?>
            <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID); ?>
            <?php previous_post_link('%link', "$prevthumbnail  <i class="fa-solid fa-arrow-left"></i>", TRUE); ?>
          <?php } ?>
        </li>

        <li>
          <!--현재글 썸네일-->
          <?php if (has_post_thumbnail()) {
            the_post_thumbnail('full');
          } ?>
        </li>

        <li class="indicator">
          <!--다음글 썸네일-->
          <?php $nextPost = get_next_post(true);
          if ($nextPost) { ?>
            <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID); ?>
            <?php next_post_link('%link', "$nextthumbnail <i class="fa-solid fa-arrow-right"></i>", TRUE); ?>
          <?php } ?>
        </li>

        <li class="gogo-list">
          <!-- 목록 -->
          <a href="<?php echo $categoryUrl; ?>"><i class="fa-solid fa-list"></i></a>
        </li>
      </ul><!-- post-nav -->

    <?php endwhile;
  else : ?>
    <!--글 내용이 없을 경우-->
  <?php endif; ?>
  <!--post(글) 출력 끝-->
</section>
<?php include "sub-footer.php" ?>