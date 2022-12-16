<div class="footer_height">

</div>
<footer>
  <div class="footer_top">
    <div class="company">
      <h6>
        <?php include "logo.php" ?>
      </h6>
      <address>
        <p>경기도 성남시 중앙구 용성로 123 메가시티플러스 빌딩</p>
        <p>
          <a href="070-123-4567"><i class="fa-solid fa-phone"></i> : 070-123-4567</a>
        </p>
        <p>
          <a href="070-789-1234"><i class="fa-solid fa-fax"></i> : 070-789-1234</a>
        </p>
      </address>
    </div>
    <nav class="sitemap">
      <?php wp_nav_menu(array('theme_location' => 'menu')); ?>
    </nav>
  </div><!-- footer_top -->
  <div class="footer_bottom">
    <nav class="terms">
      <a href="#">이용약관</a>
      <a href="#">개인정보처리방침</a>
    </nav>
    <ul class="search_widget">
      <?php
      if (is_active_sidebar('search')) {
        dynamic_sidebar('search');
      }
      ?>
    </ul>
    <p class="copyright">Copyright &copy; web-site wordpress.</p>
  </div><!-- footer_bottom -->
</footer>
<!--site-footer -->
<?php wp_footer(); ?>
</body>

</html>