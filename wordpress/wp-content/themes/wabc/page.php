<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */
get_header(); ?>
<?php
  if ((get_theme_mod('show_fp_slider_sidebar') && is_front_page()) || (get_theme_mod('show_bl_slider_sidebar', '1') && (is_home() || is_archive())) || ((get_theme_mod('show_pp_slider_sidebar') && is_singular()))) :
    get_template_part('template-parts/sidebar-area/sidebar', 'slider');
  endif;
  if ((get_theme_mod('show_fp_top_sidebars') && is_front_page())|| (get_theme_mod('show_bl_top_sidebars', '1') && (is_home() || is_archive())) || ((get_theme_mod('show_pp_top_sidebars') && is_singular()))) :
    get_template_part('template-parts/sidebar-area/sidebar', 'top');
  endif; ?>
<?php if ((get_theme_mod('carousel_display_front') && is_front_page()) || (get_theme_mod('carousel_display_archives', '1') && (is_home() || is_archive())) || ((get_theme_mod('carousel_display_singular') && is_singular()))) : ?>
  <div class="wrapper" id="wrapper-owl">
    <div class="container">
      <div class="col-md-12">
        <?php wabc_slider_template(); ?>
      </div>
    </div>
  </div>
<?php endif; ?>
<div class="wrapper" id="page-wrapper">
  <div class="container">
    <div id="primary" class="<?php if (is_active_sidebar('sidebar-1')) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
      <main id="main" class="site-main" role="main">
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('template-parts/content', 'page'); ?>
          <?php // If comments are open or we have at least one comment, load up the comment template
          if (comments_open() || get_comments_number()) :
            comments_template();
          endif;
          ?>
        <?php endwhile; // end of the loop.?>
      </main><!-- #main -->
    </div><!-- #primary -->
  </div>
</div>
<?php
  if ((get_theme_mod('show_fp_bottom_sidebars') && is_front_page())|| (get_theme_mod('show_bl_bottom_sidebars', '1') && (is_home() || is_archive())) || ((get_theme_mod('show_pp_bottom_sidebars') && is_singular()))) :
    get_template_part('template-parts/sidebar-area/sidebar', 'bottom');
  endif;
  get_footer();
  ?>
