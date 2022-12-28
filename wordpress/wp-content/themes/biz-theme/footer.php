<script src="<?php bloginfo('template_directory'); ?>/js/footer.js"></script>
<div class="footer-height"></div>
<footer>
  <div class="footer-top">
    <div class="company">
      <h6>
        <?php include "logo.php" ?>
      </h6>
      <address>
        <p>
          경기도 성남시 중원구 양현로 405번길 12 티엘아이 빌딩
        </p>
        <p>
          <a href="tel:000-0000-0000"><i class="fa-solid fa-headset"></i>010-000-0000</a>
        </p>
        <p>
          <i class="fa-solid fa-fax"></i> 000-000-000
        </p>
      </address>
    </div><!-- company -->
    <nav class="sitemap">
      <?php wp_nav_menu( array('theme_location' => 'menu'));?>
    </nav><!-- sitemap -->
  </div><!-- footer-top -->
  <div class="footer-bottom">
    <nav class="terms">
      <a href="#">이용약관</a>
      <a href="#">개인정보처리방침</a>
    </nav>
    <ul class="search-widjet">
      <?php
      if (is_active_sidebar('search')) {
        dynamic_sidebar('search');
      } ?>
    </ul>
    <p class="copy">
      Copyright &copy; Company All Right Reserved
    </p>
  </div><!-- footer-bottom -->
</footer>
<!--site-footer -->
<?php wp_footer(); ?>
</body>

</html>