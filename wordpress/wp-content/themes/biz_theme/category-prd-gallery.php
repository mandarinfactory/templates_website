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
        디자인 수정은 category-prd-gallery.php와 category-prd-gallery.scss에서
        수정편집 하실 수 있습니다.
        <button>
            <i class="fa-solid fa-xmark"></i>
        </button>
    </p>

    <ul class="list_container">
        <!--카테고리 설명 출력-->
        <div class="category_desc">
            <?php echo category_description(); ?>
        </div>

</section>
<?php include "sub_footer.php" ?>