<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php echo get_theme_mod('wabc_theme_script_code_setting'); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">


    <!-- ******************* The Navbar Area ******************* -->

    <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">


       <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'wabc'); ?></a>

        <nav class="site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

                        <div class="navbar navbar-inverse navbar-fixed-top">
                             <div class="container">

                               <?php if(get_theme_mod('custom_logo')){
                                 $custom_logo_id = get_theme_mod('custom_logo');
                                 $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
                                 <div class="cols-xs-12">
                                  <img src="<?php echo $image[0];?>" alt="<?php bloginfo('blogname');?>"  class="site-logo">
                                 </div>
                              <?php }?><!-- end of custom logo -->



                                <div class="col-xs-12">

                                <div class="navbar-header">

                                    <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                      <span class="sr-only"><?php _e('Toggle navigation','wabc') ?>'</span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                    </button>

                                    <!-- Your site title as branding in the menu -->
                                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>

                                </div><!-- end of navbar geader -->

                                <!-- The WordPress Menu goes here -->
                                <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
                                        'menu_class' => 'nav navbar-nav',
                                        'fallback_cb' => '',
                                        'depth' => 4,
                                        'menu_id' => 'main-menu',
                                        'walker' => new wp_bootstrap_navwalker(),
                                    )
                                ); ?>

                        </div>
                    </div>
                    <div id="tkSocTest" class="container">
                    <div id="bloginfo-socialrow" class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="navbar-blog-description">
                    <p>
                      <?php bloginfo('description');?>
                    </p>
                  </div><!-- end of blog description -->
                </div>
                  <div class="col-xs-12 col-md-6">
                  <!-- social links -->
                    <?php if (get_theme_mod('wabc_header_social_media_enabled')) {
                      get_template_part('template-parts/social','header');
                    }?>
                  </div>
                  <!-- end of social links -->
                </div><!-- end of class row -->
              </div><!-- end of class container -->

            </div><!-- .navbar -->

        </nav><!-- .site-navigation -->

    </div><!-- .wrapper-navbar end -->
