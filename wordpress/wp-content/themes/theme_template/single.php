<?php include 'sub_header.php' ?>
<!--블로그 글 출력 시작-->
<!--포스트의 해당 카테고리 정보가져오기-->
<?php
$category = get_the_category();
$categoryID = $category[0]->cat_ID;
$categoryName = $category[0]->cat_name;
$categoryUrl = get_category_link($category[0]);
$categoryDesc = category_description($category[0]);
?>
<!--포스트의 해당 카테고리 제목 출력-->
<?php echo $categoryName ?>
<!--포스트의 해당 카테고리 설명 출력-->
<?php echo category_description($categoryID) ?>
<!--포스트의 해당 카테고리 태그 출력-->
<?php the_tags('이 포스트의 태그: ', ' · ', ''); ?>
<!--post(글) 출력시작-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!--제목-->
        <?php the_title(); ?>
        <!--작성자-->
        <?php echo get_the_author(); ?>
        <!--작성 시간-->
        <?php echo get_the_date(); ?>
        <?php echo get_the_time(); ?>
        <!--post 본문-->
        <?php the_content(); ?>
        <!--이전글 다음글-->
        <?php previous_post_link('%link', 'prev'); ?>
        <?php next_post_link('%link', 'next'); ?>
        <a href="<?php echo $categoryUrl; ?>">목록</a>
        <!--해당 카테고리 정보를 가져와야 함-->
        <!--댓글 출력-->
        <?php
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>
    <?php endwhile;
else : ?>
    <!--글 내용이 없을 경우-->
<?php endif; ?>
<!--post(글) 출력 끝-->
<!--블로그 글 출력 끝-->
<?php include 'sub_footer.php' ?>