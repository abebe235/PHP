<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>
<div class="wrapper " id="wrapper-footer">
  <a href="#" class="scrollToTop">
  <i class="totop-icon-size fa fa-arrow-circle-up">
  </i></a>

  <!-- social links -->
    <?php if (get_theme_mod('wabc_footer_social_media_enabled')) {
      get_template_part('template-parts/social','footer');
    }?>
  <!-- end of social links -->

  <?php if (get_theme_mod('show_footer_sidebar')):
    get_template_part('template-parts/sidebar-area/sidebar', 'footer2');
  endif;
   ?>
</div><!-- wrapper end -->
<?php get_template_part('template-parts/sidebar-area/sidebar', 'footer3'); ?>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
