
<footer class="l-content-expanded footer">
  <div class="footer-content">
    <div class="footer-info">
		<a href="https://lifeperformance.jp/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="ロゴ"/></a>
      <p>"Design For Better Performance"</p>
    </div>
	  <div class="footer-bana">
		  <a href="https://store.lifeperformance.jp/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lpstore.jpg" alt="ロゴ"/></a>
      <p>生活雑貨を扱っています</p>
	  </div>
  </div>
  <div class="footer-menu">
    <nav class="footer-nav">
      <?php wp_nav_menu(
array(
'theme_location' => 'place_footer',
'container' => false,
)
);
		?>
    </nav>
    <nav class="footer-menu-social">
      <ul>
        <li><a href="https://twitter.com/performanceherb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Icon - Twitter.svg" alt=""/></a></li>
        <!-- <li><a href="#"><img src="assets/img/Icon - Facebook.svg" alt=""/></a></li> -->
      </ul>
    </nav>
	  <p class="copyright">
        <small class="copyright-text">&#169; 2021 liperformance.</small>
      </p>
    <div id="page-top"></div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
