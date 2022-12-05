<?php include "sub-header.php" ?>
<script src="./js/store.js"></script>
<h2 class="sub_title"> 갤러리(viewbox)</h2>
<section class="viewbox_gallery_section">

</section>
<script>
    $('.viewbox_gallery_section').prepend(`<ul></ul>`)
    galleryArr1.forEach(function(v) {
        $('.viewbox_gallery_section ul').append(`
        <li>
            <figure>
                <a href="${v.path}">
                    <img src="${v.path}" alt="">
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