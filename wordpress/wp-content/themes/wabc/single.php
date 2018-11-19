<?php
/**
 * The template for displaying all single posts.
 */
get_header(); ?>
<?php if ((get_theme_mod('show_fp_slider_sidebar') && is_front_page()) || (get_theme_mod('show_bl_slider_sidebar', '1') && (is_home() || is_archive())) || ((get_theme_mod('show_pp_slider_sidebar') && is_singular()))) : ?>
  <?php get_template_part('template-parts/sidebar-area/sidebar', 'slider'); ?>
  <?php endif; ?>
<?php if ((get_theme_mod('show_fp_top_sidebars') && is_front_page())|| (get_theme_mod('show_bl_top_sidebars', '1') && (is_home() || is_archive())) || ((get_theme_mod('show_pp_top_sidebars') && is_singular()))) : ?>
  <?php get_template_part('template-parts/sidebar-area/sidebar', 'top'); ?>
<?php endif; ?>
<?php if((get_theme_mod( 'top-page-1') || get_theme_mod( 'top-page-2') || get_theme_mod('top-page-3')) && get_theme_mod('show_pp_top_page')):?>
  <?php get_template_part('template-parts/content','top');?>
  <?php endif; ?>
<?php if ( ( get_theme_mod('carousel_display_front') && is_front_page() ) || ( get_theme_mod('carousel_display_archives', '1') && ( is_home() || is_archive() ) ) || ( ( get_theme_mod('carousel_display_singular') && is_singular() ) ) ) : ?>
  <div class="wrapper" id="wrapper-owl">
    <div class="container">
        <div class="col-md-12">
            <?php wabc_slider_template(); ?>
        </div>
    </div>
  </div>
<?php endif; ?>
<div class="wrapper" id="single-wrapper">
  <div class="container">

        <div id="primary" class="<?php if (is_active_sidebar('sidebar-1')) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">

            <main id="main" class="site-main" role="main">

                <?php while (have_posts()) : the_post(); ?>

                    <?php get_template_part('template-parts/content', 'single'); ?>

                    <?php the_post_navigation(); ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                ?>
                <?php endwhile; // end of the loop. ?>

            </main><!-- #main -->

        </div><!-- #primary -->

        <?php get_template_part('sidebar'); ?>

    </div>
  </div>
    <?php if((get_theme_mod( 'secondary-page-1') || get_theme_mod( 'secondary-page-2')) && get_theme_mod('show_pp_secondary_page')):?>
      <?php get_template_part('template-parts/content','secondary');?>
      <?php endif; ?>
      <?php if ((get_theme_mod('show_fp_bottom_sidebars') && is_front_page())|| (get_theme_mod('show_bl_bottom_sidebars', '1') && (is_home() || is_archive())) || ((get_theme_mod('show_pp_bottom_sidebars') && is_singular()))) : ?>
        <?php get_template_part('template-parts/sidebar-area/sidebar', 'bottom'); ?>
      <?php endif; ?>


<!-- </div> Wrapper end -->

<?php get_footer(); ?>
