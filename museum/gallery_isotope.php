<?php include "sub-header.php" ?>
<h2 class="sub_title"> 조각 / 공예</h2>
<section class="isotope_gallery_section">
    <div class="btn_grp">
        <button value="*" class="active">모두</button>
        <button value=".c1">갑</button>
        <button value=".c2">을</button>
        <button value=".c3">병</button>
    </div>
</section>
<script>
    $('.isotope_gallery_section').append(`<ul></ul>`)
    galleryIsotopeArr.forEach(function(v) {
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