<?php
function wabc_widgets_init()
{
    /*
        * WABC WIDGETS AREAS
        */
        // sidebar a, sidebar b these sidebars next to content area
        register_sidebar(array(
        'name'          => __('Sidebar A', 'wabc'),
        'id'            => 'sidebar-a',
        'description'   => __('The first content sidebar.', 'wabc'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
        ));
        register_sidebar(array(
        'name'          => __('Sidebar B', 'wabc'),
        'id'            => 'sidebar-b',
        'description'   => __('The second content sidebar.', 'wabc'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
        ));

        // slideshow sidebar
				register_sidebar(array(
					'id'            => 'sidebarslideshow',
					'name'          => __('slideshow', 'wabc'),
					'description'   => __('The slideshow sidebar.', 'wabc'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widgettitle">',
					'after_title'   => '</h2>',
        ));
        // top sidebars TOP A, TOP B, TOP C
				register_sidebar(array(
					'id'            => 'sidebara',
					'name'          => __('Top A', 'wabc'),
					'description'   => __('The first top sidebar.', 'wabc'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widgettitle">',
					'after_title'   => '</h2>',
            ));
				register_sidebar(array(
					'id'            => 'sidebarb',
					'name'          => __('Top B', 'wabc'),
					'description'   => __('The second top sidebar.', 'wabc'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widgettitle">',
					'after_title'   => '</h2>',
            ));
				register_sidebar(array(
					'id'            => 'sidebarc',
					'name'          => __('Top C', 'wabc'),
					'description'   => __('The third top sidebar.', 'wabc'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widgettitle">',
					'after_title'   => '</h2>',
            ));

            //bottom sidebars
				register_sidebar(array(
					'id'            => 'sidebarfa',
					'name'          => __('Bottom A', 'wabc'),
					'description'   => __('The first bottom sidebar.', 'wabc'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widgettitle">',
					'after_title'   => '</h2>',
            ));
				register_sidebar(array(
					'id'            => 'sidebarfb',
					'name'          => __('Bottom B', 'wabc'),
					'description'   => __('The second bottom sidebar.', 'wabc'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widgettitle">',
					'after_title'   => '</h2>',
            ));
				register_sidebar(array(
					'id'            => 'sidebarfc',
					'name'          => __('Bottom C', 'wabc'),
					'description'   => __('The third bottom sidebar.', 'wabc'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widgettitle">',
					'after_title'   => '</h2>',
            ));

				register_sidebar(array(
					'id'            => 'sidebarf2a',
					'name'          => __('Footer A', 'wabc'),
					'description'   => __('The first footer sidebar.', 'wabc'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widgettitle">',
					'after_title'   => '</h2>',
						));
				register_sidebar(array(
					'id'            => 'sidebarf2b',
					'name'          => __('Footer B', 'wabc'),
					'description'   => __('The second footer sidebar.', 'wabc'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widgettitle">',
					'after_title'   => '</h2>',
						));
				register_sidebar(array(
					'id'            => 'sidebarf2c',
					'name'          => __('Footer C', 'wabc'),
					'description'   => __('The third footer sidebar.', 'wabc'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widgettitle">',
					'after_title'   => '</h2>',
						));
						// Contact Page widgets
				register_sidebar(array(
					'id'            => 'sidebarcfa',
					'name'          => __('Contact A', 'wabc'),
					'description'   => __('The fisrt sidebar in contact us page.', 'wabc'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widgettitle">',
					'after_title'   => '</h2>',
						));
				register_sidebar(array(
					'id'            => 'sidebarcfb',
					'name'          => __('Contact B', 'wabc'),
					'description'   => __('The second sidebar in contacty us page.', 'wabc'),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widgettitle">',
					'after_title'   => '</h2>',
						));

}
add_action('widgets_init', 'wabc_widgets_init');
