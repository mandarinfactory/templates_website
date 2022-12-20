<script src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/js/sub_visual.js"></script>
<section class="sub_visual">
    <!-- particles.js container -->
    <script src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/js/particles.js"></script>
    <script src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/js/app_particle_default.js"></script>
    <div id="particles-js"></div>
    <!-- particles.js container -->
</section>
<script>
    menuCateArr.forEach(function(v) {
        $('.sub_visual').append(`
            <figure class="sub_visual_img${v.pageID}">
                <img class="bg_img" src="<?php bloginfo('url'); ?>/wp-content/themes/biz_theme/img/img/sub/sub_img${v.pageID}.jpg" alt />
                <figcaption>
                    <h5>
                        <span>${v.pageTitle}</span>
                    </h5>
                    <p>
                        <span>${v.pageDesc}</span>
                    </p>
                </figcaption>
            </figure>
        `) //append
    }) //forEach
</script>