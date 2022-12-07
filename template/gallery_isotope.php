<?php include "sub-header.php" ?>
<h2 class="sub_title"> 갤러리(isotope)</h2>
<section class="isotope_gallery_section">
    <div class="btn_grp">
        <button value="*" class="active">all</button>
        <button value=".category1">ONE</button>
        <button value=".category2">TWO</button>
        <button value=".category3">THREE</button>
    </div>
</section>
<script>
    $('.isotope_gallery_section').append(`<ul></ul>`)
    galleryArr1.forEach(function(v) {
        $('.isotope_gallery_section ul').append(`
        <li class="${v.class}">
            <a href="#">
                <h3>${v.title}</h3>
                <figure>
                    <img src="${v.path}" alt="">
                </figure>
                <p>${v.desc}</p>
            </a>
        </li>
        `) //append
    }) //forEach
</script>
<?php include "sub-footer.php" ?>