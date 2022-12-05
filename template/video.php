<?php include "sub-header.php" ?>
<h2 class="sub_title"> 홍보비디오</h2>
<section class="video_section">
    <div class="video_container">
        <iframe src="https://www.youtube.com/embed/DGiokV8zl-4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>

<script>
    $('.video_section').append('<ul></ul>')
    videoArr.forEach(function(v) {
        $('.video_section ul').append(`
        <li>
        <button value="${v}">
        <img src="https://img.youtube.com/vi/${v}/hqdefault.jpg" alt="">
        </button>
        </li>
        `)
    })
</script>
<?php include "sub-footer.php" ?>