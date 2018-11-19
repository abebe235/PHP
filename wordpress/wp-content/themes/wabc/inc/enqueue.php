<?php

function wabc_scripts()
{
  //main style
  wp_enqueue_style('wabc-theme', get_stylesheet_uri(), array(), '0.2.8', false);
  
  wp_enqueue_script('wabc-navigation', get_template_directory_uri().'/js/bootstrap.min.js', array(), '20120206', true);
  //add to matchHeight  script
  wp_enqueue_script('matchHeight', get_template_directory_uri().'/js/jquery.matchHeight.js', array(), '20120206', true);
  //waypoints
  wp_enqueue_script('waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js', array(), '20120206', true);
  // animateCss
  wp_enqueue_style('animateCss', get_stylesheet_directory_uri().'/css/animatecss/animate.min.css', array(), '0.2.8', false);
  // add google fonts
  wp_enqueue_style('wabc-google-fonts','http://fonts.googleapis.com/css?family=Raleway:300,400,700', array(), false);
  //add wabc script
  wp_enqueue_script('wabc-script', get_template_directory_uri().'/js/wabc.js', array(), '20120206', true);
    wp_enqueue_script('wabc-skip-link-focus-fix', get_template_directory_uri().'/js/skip-link-focus-fix.js', array(), '20130115', true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

}
add_action('wp_enqueue_scripts', 'wabc_scripts');
