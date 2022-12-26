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
        <button>
            <i class="fa-solid fa-xmark"></i>
        </button>
    </p>
    <div class="btns">
        <button class="active" value=".*"></button>
        <button value=".상품분류1">상품분류1</button>
        <button value=".상품분류2">상품분류2</button>
        <button value=".상품분류3">상품분류3</button>
        <button value=".상품분류4">상품분류4</button>
    </div>
    <ul class="list_container">
        <!--카테고리 설명 출력-->
        <div class="category_desc">
            <?php echo category_description(); ?>
        </div>

</section>
<?php include "sub_footer.php" ?>