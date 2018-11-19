<?php
/**
 * Template Name: Front Page Template.
 */
get_header(); ?>
<?php
  $activeSidebarA;
  $activeSidebarB;
  if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else{

  if ((get_theme_mod('show_fp_slider_sidebar') && is_front_page())) :
    get_template_part('template-parts/sidebar-area/sidebar', 'slider');
  endif;
  if ((get_theme_mod('show_fp_top_sidebars') && is_front_page())) :
    get_template_part('template-parts/sidebar-area/sidebar', 'top');
  endif;
  if ((get_theme_mod('top-page-1') || get_theme_mod('top-page-2') || get_theme_mod('top-page-3')) && get_theme_mod('show_fp_top_page')):
    get_template_part('template-parts/content', 'top');
  endif;
  if (get_theme_mod('showcase-page')&& get_theme_mod('show_fp_showcase_page')):
    get_template_part('template-parts/content', 'showcase');
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
  <div class="wrapper FRONT_PAGE" id="page-wrapper">
    <div class="container">
      <?php if ( !is_active_sidebar( 'sidebar-a' ) &  !is_active_sidebar( 'sidebar-b' ) ){?>
        <div id="primary" class="col-md-12 content-area">
      <?php $activeSidebarB = false;
             $activeSidebarA = false;
           } elseif (!is_active_sidebar( 'sidebar-a' ) &  is_active_sidebar( 'sidebar-b' )) {?>
         <div id="primary" class="col-md-8 content-area">
           <?php $activeSidebarB = true;
                 $activeSidebarA = false;
         } elseif (is_active_sidebar( 'sidebar-a' ) &  !is_active_sidebar( 'sidebar-b' )) {?>
              <div id="primary" class="col-md-8 content-area">
                <?php $activeSidebarA = true;
                       $activeSidebarB = false;

                } elseif (is_active_sidebar( 'sidebar-a' ) &  is_active_sidebar( 'sidebar-b' )) {?>
                     <div id="primary" class="col-md-6 content-area">
                       <?php $activeSidebarA = true;
                       $activeSidebarB = true;
                       }?>

                      <main id="main" class="site-main" role="main">
                        <?php while (have_posts()) : the_post(); ?>
                          <?php get_template_part('template-parts/content', 'page-front'); ?>
                          <?php // If comments are open or we have at least one comment, load up the comment template
                          if (comments_open() || get_comments_number()) :
                            comments_template();
                          endif;
                          ?>
                        <?php endwhile; // end of the loop.?>
                      </main><!-- #main -->
                    </div><!-- #primary -->
                    <?php if(($activeSidebarB && !$activeSidebarA)){?>
                      <div class="col-md-4 columns animation-element">
                        <div class="tk-block">
                          <?php dynamic_sidebar("sidebar-b"); ?>
                        </div>
                      </div>
                    <?php } elseif (($activeSidebarA && !$activeSidebarB)) {?>
                      <div class="col-md-4 columns box2 animation-element">
                        <div class="tk-block">
                          <?php dynamic_sidebar("sidebar-a"); ?>
                        </div>
                      </div>
                    <?php } elseif (($activeSidebarA && $activeSidebarB)) {?>
                      <div class="col-md-3 columns box2 animation-element">
                        <div class="tk-block">
                          <?php dynamic_sidebar("sidebar-a"); ?>
                        </div>
                      </div>
                      <div class="col-md-3 columns animation-element">
                        <div class="tk-block ">
                          <?php dynamic_sidebar("sidebar-b"); ?>
                        </div>
                      </div>
                    <?php } ?>
                  </div><!-- Container end -->
                  </div><!-- Wrapper end -->
                      <?php if ((get_theme_mod('secondary-page-1') || get_theme_mod('secondary-page-2')) && get_theme_mod('show_fp_secondary_page')):
                        get_template_part('template-parts/content', 'secondary');
                      endif;
                      if ((get_theme_mod('show_fp_bottom_sidebars') && is_front_page())) :
                        get_template_part('template-parts/sidebar-area/sidebar', 'bottom');
                      endif; ?>

                      <?php }; ?>
                    <?php get_footer(); ?>
