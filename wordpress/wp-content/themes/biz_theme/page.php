<?php include "sub_header.php" ?>
<!--페이지 제목 출력-->
<h2 class="sub_title">
    <em data-title="<?php the_title(); ?>">
        <!-- before -->
        <span class="hidden">
            <?php the_title(); ?>
        </span>
        <!-- after -->
    </em>
</h2>
<!--페이지 출력 시작-->
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!--페이지 본문 출력-->
        <?php the_content(); ?>
    <?php endwhile;
else : ?>
    <!--페이지가 없을 경우 출력될 내용-->
<?php endif; ?>
<!--페이지 출력 끝-->
<?php include "sub_footer.php" ?>