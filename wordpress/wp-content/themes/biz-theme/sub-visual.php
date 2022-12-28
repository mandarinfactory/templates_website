<script src="<?php bloginfo('template_directory'); ?>/js/sub-visual.js"></script>
<section class="sub-visual">
  <!-- particles.js container -->
  <script src="<?php bloginfo('template_directory'); ?>/js/particles.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/app_particle_default.js"></script>
  <div id="particles-js"></div>
  <!-- particles.js container -->
  <div id="noise"></div>
</section>
<script>
  menuArr.forEach(function(v) {
    $('.sub-visual').append(`
    <figure class="visual${v.pageID}">
      <img class="bg" src="<?php bloginfo('template_directory'); ?>/img/sub/sub_img${v.pageID}.jpg" alt="">
      <figcaption>
        <h5>
          <span>${v.title}</span>
        </h5>
        <p> 
          <span>${v.desc}</span>
        </p>
      </figcaption>
    </figure>
    `) //append
  }) //forEach
</script>
