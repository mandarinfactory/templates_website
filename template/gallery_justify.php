<?php include "sub-header.php" ?>
<h2 class="sub_title"> 갤러리(justify)</h2>
<script src="./js/common.js"></script>
<script src="./js/gallery_justify.js"></script>
<section class="justify_gallery_section">

</section>
<script>
    $('.justify_gallery_section').prepend(`<div class="justify_gallery"></div>`)
    galleryArr1.forEach(function(v) {
        $('.justify_gallery_section .justify_gallery').append(`
                <a href="#">
                    <img src="${v.path2}" alt="">
                    <div>${v.desc}</div>
                </a>
        `) //append
    }) //forEach
</script>
<?php include "sub-footer.php" ?>