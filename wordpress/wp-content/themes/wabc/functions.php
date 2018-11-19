<?php
/**
 * wabc functions and definitions.
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory().'/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory().'/inc/custom-sidebars.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory().'/inc/enqueue.php';



/**
 * Custom template tags for this theme.
 */
require get_template_directory().'/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory().'/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory().'/inc/customizer.php';

/**
 * Load the slider
 */
require get_template_directory() . '/inc/slider.php';

/**
 * Customizer additions.
 */
require get_template_directory().'/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory().'/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory().'/inc/bootstrap-wp-navwalker.php';
