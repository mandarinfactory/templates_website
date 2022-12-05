<?php include "sub-header.php" ?>
<h2 class="sub_title"> 갤러리(masonry)</h2>
<script src="./js/gallery_masonry.js"></script>
<script src="./js/store.js"></script>
<section class="masonry_gallery_section">

</section>
<script>
    $('.masonry_gallery_section').prepend(`<ul></ul>`)
    galleryArr1.forEach(function(v) {
        $('.masonry_gallery_section ul').append(`
        <li>
            <figure>
                <a href="#">
                    <div>
                        <img src="${v.path2}" alt="">
                    </div>
                    <figcaption>
                        <h3>${v.title}</h3>
                        <p>${v.desc}</p>
                    </figcaption>
                </a>
            </figure>
        </li>
        `) //append
    }) //forEach
</script>
<?php include "sub-footer.php" ?>