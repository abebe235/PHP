<footer>
  <div class="footer-inner">
    <p>footer.php</p>
    <div class="footer-nav-area">
      <?php wp_nav_menu( array(
            'theme_location' => 'footer-nav',
            'container' => 'nav',
            'container_class' => 'footer-nav',
            'container_id' => 'footer-nav',
            'fallback_cb' => ''
            ) ); ?>
    </div>

    <div class="copyright">
      <p>copyright ©<?php bloginfo( 'name' ); ?> All Rights Reserved.</p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>