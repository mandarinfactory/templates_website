<?php include 'sub_header.php' ?>
<!--블로그 글 출력 시작-->
<b>page출력 본문입니다!!!!!!!</b>
<!--페이지 제목 출력-->
<h2><?php the_title(); ?></h2>
<!--페이지 출력 시작-->
<section>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<!--페이지 본문 출력-->
			<?php the_content(); ?>
		<?php endwhile;
	else : ?>
</section>
<!--페이지가 없을 경우 출력될 내용-->
<?php endif; ?>
<!--페이지 출력 끝-->
<!--블로그 글 출력 끝-->
<?php include 'sub_footer.php' ?>