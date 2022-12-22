<?php include "sub_header.php" ?>
<section class="category_prd_list">
    <h2 class="sub_title">
        <em data-title="<?php single_cat_title(' '); ?>">
            <!-- before -->
            <span class="hidden">
                <?php single_cat_title(' '); ?>
            </span>
            <!-- after -->
        </em>
    </h2>
    <!-- 안내문 -->
    <p class="theme_guide">
        상품목록은 관리자 / 글메뉴에서 관리할 수 있습니다. <br>
        디자인 수정은 category-prd_list.php와 category-prd_list.scss에서
        수정편집 하실 수 있습니다.
    </p>
    <!--카테고리 설명 출력-->
    <?php echo category_description(); ?>
    <!--카테고리 리스트 출력-->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!--리스트 한개 출력-->
            <!--글 이미지-->
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('thumbnail');
            } ?>
            <!--글 제목-->
            <?php the_title(); ?>
            <!--작성자-->
            <?php echo get_the_author(); ?>
            <!--작성일-->
            <?php echo get_the_date(); ?> <?php echo get_the_time(); ?>
            <!--요약글 출력-->
            <?php the_excerpt(); ?>
            <!--해당글 링크-->
            <a href="<?php the_permalink(); ?>">해당글 보기</a>
            <!--리스트 한개 끝-->
        <?php endwhile;
    else : ?>
        <!--카테고리 글이 없는 경우-->
    <?php endif; ?>
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
<?php include "sub_footer.php" ?>