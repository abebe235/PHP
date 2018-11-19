<?php
/**
 * wabc Theme Customizer.
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wabc_customize_register($wp_customize)
{
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
  $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
  $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
}
add_action('customize_register', 'wabc_customize_register');

function wabc_theme_customize_register($wp_customize)
{

  //Custom control class

  //Categories dropdown control.
  class Wabc_Categories_Dropdown extends WP_Customize_Control {
    public function render_content() {
      $dropdown = wp_dropdown_categories(
      array(
        'name'              => '_customize-dropdown-categories-' . $this->id,
        'echo'              => 0,
        'show_option_none'  => __( '&mdash; Select &mdash;', 'wabc' ),
        'option_none_value' => '0',
        'selected'          => $this->value(),
        )
      );

      $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );

      printf(
      '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
      $this->label,
      $dropdown
      );
      }
    }
    // End custom Categories dropdown control


    $wp_customize->add_setting('wabc_nav_bkg_color_setting', array(
      'default' => '#466675',
      'type' => 'theme_mod',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wabc_nav_bkg_color_control', array(
      'label' => __('Navigation & Footer Background Color', 'wabc'),
      'section' => 'colors',
      'settings' => 'wabc_nav_bkg_color_setting',
    )));
    $wp_customize->add_setting('wabc_footer_bkg_color_setting', array(
      'default' => '#6a8d9d',
      'type' => 'theme_mod',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wabc_footer_bkg_color_control', array(
      'label' => __('Upper Footer Background Color ', 'wabc'),
      'section' => 'colors',
      'settings' => 'wabc_footer_bkg_color_setting',
    )));

    //  =============================
    //  ==   Sidebars Panel
    //  =============================

    $wp_customize->add_panel( 'panel_sidebars', array(
	    'priority' => 105,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Sidebars Settings', 'wabc' ),
	    'description' => __( 'Which sidebars on which pages', 'wabc' ),
	  ));
    //======  Front Page Sidebars Section ======================

    $wp_customize->add_section( 'fp_sidebars', array(
      'title'          => __( 'Front Page', 'wabc' ),
      'description' => __( 'This section adds several sidebar options to the front page view.', 'wabc'),
      'panel' => 'panel_sidebars',
    ));
    //======  Slider sidebar front page setting and control ======================
    $wp_customize->add_setting('show_fp_slider_sidebar', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'           => 'theme_mod',
    ));
    $wp_customize->add_control( 'show_fp_slider_sidebar_ctrl', array(
      'label'    => __('Activate sidebar for slider.', 'wabc'),
      'section'  => 'fp_sidebars',
      'settings' => 'show_fp_slider_sidebar',
      'type' => 'checkbox',
    ));

    //======  Top sidebars front page setting and control ======================
    $wp_customize->add_setting('show_fp_top_sidebars', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'           => 'theme_mod',
    ));
    $wp_customize->add_control( 'show_fp_top_sidebars_ctrl', array(
      'label'    => __('Activate top sidebars.', 'wabc'),
      'section'  => 'fp_sidebars',
      'settings' => 'show_fp_top_sidebars',
      'type' => 'checkbox',
    ));

    //======  Bottom sidebars front page setting and control ======================
    $wp_customize->add_setting('show_fp_bottom_sidebars', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'           => 'theme_mod',
    ));
    $wp_customize->add_control( 'show_fp_bottom_sidebars_ctrl', array(
      'label'    => __('Activate bottom sidebars.', 'wabc'),
      'section'  => 'fp_sidebars',
      'settings' => 'show_fp_bottom_sidebars',
      'type' => 'checkbox',
    ));
    //======  Blog index/archives Sidebars Section ======================
    $wp_customize->add_section( 'bl_sidebars', array(
      'title'          => __( 'Blog index/archives/etc', 'wabc' ),
      'description' => __( 'This section adds several sidebar options to blog index/archive/etc view.', 'wabc'),
      'panel' => 'panel_sidebars',
    ));
    //======  Slider sidebar blog index/archives setting and control ======================
    $wp_customize->add_setting('show_bl_slider_sidebar', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'              => 'theme_mod',
    ));

    $wp_customize->add_control( 'show_bl_slider_sidebar_ctrl', array(
      'label'    => __('Activate for slider.', 'wabc'),
      'section'  => 'bl_sidebars',
      'settings' => 'show_bl_slider_sidebar',
      'type' => 'checkbox',
    ));

    //======  Top sidebars blog index/archives setting and control ======================
    $wp_customize->add_setting('show_bl_top_sidebars', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'              => 'theme_mod',
    ));

    $wp_customize->add_control( 'show_bl_top_sidebars_ctrl', array(
      'label'    => __('Activate top sidebars.', 'wabc'),
      'section'  => 'bl_sidebars',
      'settings' => 'show_bl_top_sidebars',
      'type' => 'checkbox',
    ));
    //======  Bottom sidebars blog index/archivess setting and control ======================
    $wp_customize->add_setting('show_bl_bottom_sidebars', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'           => 'theme_mod',
    ));

    $wp_customize->add_control( 'show_bl_bottom_sidebars_ctrl', array(
      'label'    => __('Activate bottom sidebars.', 'wabc'),
      'section'  => 'bl_sidebars',
      'settings' => 'show_bl_bottom_sidebars',
      'type' => 'checkbox',
    ));
    //======  Pages and Posts Sidebars Section ======================
    $wp_customize->add_section( 'pp_sidebars', array(
      'title'          => __( 'Pages and Posts', 'wabc' ),
      'description' => __( 'This section adds several sidebar options to page and post view.', 'wabc'),
      'panel' => 'panel_sidebars',
    ));
    //======  Slider sidebar Pages and Posts setting and control ======================
    $wp_customize->add_setting('show_pp_slider_sidebar', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'           => 'theme_mod',
    ));

    $wp_customize->add_control( 'show_pp_slider_sidebar_ctrl', array(
      'label'    => __('Activate sidebar for slider.', 'wabc'),
      'section'  => 'pp_sidebars',
      'settings' => 'show_pp_slider_sidebar',
      'type' => 'checkbox',
    ));

    //======  Top sidebars Pages and Posts setting and control ======================
    $wp_customize->add_setting('show_pp_top_sidebars', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'           => 'theme_mod',
    ));

    $wp_customize->add_control( 'show_pp_top_sidebars_ctrl', array(
      'label'    => __('Activate top sidebars.', 'wabc'),
      'section'  => 'pp_sidebars',
      'settings' => 'show_pp_top_sidebars',
      'type' => 'checkbox',
    ));
    //======  Bottom sidebars Pages and Posts setting and control ======================
    $wp_customize->add_setting('show_pp_bottom_sidebars', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'           => 'theme_mod',
    ));

    $wp_customize->add_control( 'show_pp_bottom_sidebars_ctrl', array(
      'label'    => __('Activate bottom sidebars.', 'wabc'),
      'section'  => 'pp_sidebars',
      'settings' => 'show_pp_bottom_sidebars',
      'type' => 'checkbox',
    ));
    //======  Footer Sidebars Section ======================
    $wp_customize->add_section( 'footer_sidebars', array(
      'title'          => __( 'Footer sidebars', 'wabc' ),
      'description'    => __( 'This section adds sidebar options to footer.', 'wabc'),
      'panel'          => 'panel_sidebars',
    ));
    //======  Footer sidebar  setting and control ======================
    $wp_customize->add_setting('show_footer_sidebar', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'              => 'theme_mod',
    ));

    $wp_customize->add_control( 'show_footer_sidebar_ctrl', array(
      'label'    => __('Activate footer sidebars.', 'wabc'),
      'section'  => 'footer_sidebars',
      'settings' => 'show_footer_sidebar',
      'type' => 'checkbox',
    ));
    //  =============================
    //  ==   ADDITIONAL PAGES
    //  =============================

    //========= Add  showcase page selector to customizer ==============

    $wp_customize->add_section( 'showcase' , array(
      'title'       => __( 'Showcase Page', 'wabc' ),
      'description' => __( 'This section adds showcase page above main content', 'wabc'),
      'priority'    => 130,
    ));

		// Add showcase page setting and control.
    // Display it on the static front page setting and control
    $wp_customize->add_setting('show_fp_showcase_page', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'           => 'theme_mod',
    ));

    $wp_customize->add_control( 'show_fp_showcase_page_ctrl', array(
      'label'    => __('Show on Front Page.', 'wabc'),
      'section'  => 'showcase',
      'settings' => 'show_fp_showcase_page',
      'type' => 'checkbox',
    ));
    // Display it on the BLOG page setting and control
    $wp_customize->add_setting('show_bl_showcase_page', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'           => 'theme_mod',
    ));

    $wp_customize->add_control( 'show_bl_showcase_page_ctrl', array(
      'label'    => __('Show on Blog Page.', 'wabc'),
      'section'  => 'showcase',
      'settings' => 'show_bl_showcase_page',
      'type' => 'checkbox',
    ));

		$wp_customize->add_setting( 'showcase-page', array(
			'default'           => '',
			'sanitize_callback' => 'absint'
    ));

		$wp_customize->add_control( 'showcase-page', array(
			'label'    => __( 'Select Page', 'wabc' ),
			'section'  => 'showcase',
			'type'     => 'dropdown-pages'
		));
    // What  to display excerpt or full content
    $wp_customize-> add_setting('showcase-full-page', array(
      'default'           => '',
      'sanitize_callback' => 'wabc_sanitize_choices'
    ));
    $wp_customize -> add_control('showcase-full-page', array(
      'label'    => __( 'Select Excerpt of Full', 'wabc' ),
      'section'  => 'showcase',
      'type'           => 'radio',
      'choices'        => array(
        'excerpt'   => __( 'Excerpt','wabc' ),
        'full'  => __( 'Full Content','wabc' ),
        )
    ));



    //========= Add secondary page selector to customizer ==============

    $wp_customize->add_section( 'secondary' , array(
      'title'      => __( 'Secondary Pages', 'wabc' ),
      'description' => __( 'This section adds up to 2 pages below main content', 'wabc'),
      'priority'   => 140,
    ));
    // Display it on the static front page setting and control
    $wp_customize->add_setting('show_fp_secondary_page', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'           => 'theme_mod',
    ));

    $wp_customize->add_control( 'show_fp_secondary_page_ctrl', array(
      'label'    => __('Show on Front Page.', 'wabc'),
      'section'  => 'secondary',
      'settings' => 'show_fp_secondary_page',
      'type' => 'checkbox',
    ));
    // Display it on the BLOG page setting and control
    $wp_customize->add_setting('show_bl_secondary_page', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'           => 'theme_mod',
    ));

    $wp_customize->add_control( 'show_bl_secondary_page_ctrl', array(
      'label'    => __('Show on Blog Page.', 'wabc'),
      'section'  => 'secondary',
      'settings' => 'show_bl_secondary_page',
      'type' => 'checkbox',
    ));

    // loop for adding pages settings
    for ( $count = 1; $count <= 2; $count++ ) {

		// Add secondary pages setting and control.
    $wp_customize->add_setting( 'secondary-page-' . $count, array(
      'default'           => '',
			'sanitize_callback' => 'absint'
    ));

		$wp_customize->add_control( 'secondary-page-' . $count, array(
			'label'    => __( 'Select Page', 'wabc' ),
			'section'  => 'secondary',
			'type'     => 'dropdown-pages'
		));

    // What  to display excerpt or full content
    $wp_customize-> add_setting('sec-full-page-'. $count, array(
			'default'           => '',
			'sanitize_callback' => 'wabc_sanitize_choices'
    ));
    $wp_customize -> add_control('sec-full-page-' . $count, array(
			'label'    => __( 'Select Excerpt of Full', 'wabc' ),
			'section'  => 'secondary',
      'type'     => 'radio',
      'choices'  => array(
        'excerpt'   => __( 'Excerpt','wabc' ),
        'full'  => __( 'Full Content','wabc' ),
        )
      ));
    }
    //========= Add TOP page selector to customizer ==============

    $wp_customize->add_section( 'top' , array(
      'title'      => __( 'Top Pages', 'wabc' ),
      'description' => __( 'This section adds up to 3 pages above below main content', 'wabc'),
      'priority'   => 135,
    ));
    // Display it on the static front page setting and control
    $wp_customize->add_setting('show_fp_top_page', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'           => 'theme_mod',
    ));

    $wp_customize->add_control( 'show_fp_top_page_ctrl', array(
      'label'    => __('Show on Front Page.', 'wabc'),
      'section'  => 'top',
      'settings' => 'show_fp_top_page',
      'type' => 'checkbox',
    ));
    // Display it on the BLOG page setting and control
    $wp_customize->add_setting('show_bl_top_page', array(
      'default'           => 0,
      'sanitize_callback' => 'absint',
      'capability'        => 'edit_theme_options',
      'type'           => 'theme_mod',
    ));

    $wp_customize->add_control( 'show_bl_top_page_ctrl', array(
      'label'    => __('Show on Blog Page.', 'wabc'),
      'section'  => 'top',
      'settings' => 'show_bl_top_page',
      'type' => 'checkbox',
    ));

    // loop for pages
    for ( $count = 1; $count <= 3; $count++ ) {

      // Add color scheme setting and control.
      $wp_customize->add_setting( 'top-page-' . $count, array(
        'default'           => '',
        'sanitize_callback' => 'absint'
      ));

      $wp_customize->add_control( 'top-page-' . $count, array(
        'label'    => __( 'Select Page', 'wabc' ),
        'section'  => 'top',
        'type'     => 'dropdown-pages'
      ));
      $wp_customize-> add_setting('top-full-page-'. $count, array(
        'default'           => '',
        'sanitize_callback' => 'wabc_sanitize_choices'
      ));
      $wp_customize -> add_control('top-full-page-' . $count, array(
        'label'    => __( 'Select Excerpt of Full', 'wabc' ),
        'section'  => 'top',
        'type'           => 'radio',
        'choices'        => array(
          'excerpt'   => __( 'Excerpt','wabc' ),
          'full'  => __( 'Full Content','wabc' ),
          )
        ));
    }
    //  Carousel  //thats carousel
    $wp_customize->add_section('wabc_carousel',array(
      'title' => __('Carousel', 'wabc'),
      )
    );
    //Display: Front page
    $wp_customize->add_setting(
      'carousel_display_front',
      array(
        'sanitize_callback' => 'wabc_sanitize_checkbox',
        'default' => 0,
      )
    );
    $wp_customize->add_control(
      'carousel_display_front',
      array(
        'type' => 'checkbox',
        'label' => __('Show carousel on front page?', 'wabc'),
        'section' => 'wabc_carousel',
        'priority' => 8,
      )
    );
    //Display: Home and archives
    $wp_customize->add_setting(
      'carousel_display_archives',
      array(
        'sanitize_callback' => 'wabc_sanitize_checkbox',
        'default' => 1,
      )
    );
    $wp_customize->add_control(
      'carousel_display_archives',
      array(
        'type' => 'checkbox',
        'label' => __('Show carousel on blog index/archives/etc?', 'wabc'),
        'section' => 'wabc_carousel',
        'priority' => 9,
      )
    );
    //Display: Singular
    $wp_customize->add_setting(
      'carousel_display_singular',
      array(
        'sanitize_callback' => 'wabc_sanitize_checkbox',
        'default' => 0,
      )
    );
    $wp_customize->add_control(
      'carousel_display_singular',
      array(
        'type' => 'checkbox',
        'label' => __('Show carousel on single posts and pages?', 'wabc'),
        'section' => 'wabc_carousel',
        'priority' => 10,
      )
    );
    //Category
    $wp_customize->add_setting( 'carousel_cat', array(
      'default'           => '',
      'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control( new wabc_Categories_Dropdown( $wp_customize, 'carousel_cat', array(
      'label'     => __('Select which category to show in the carousel', 'wabc'),
      'section'   => 'wabc_carousel',
      'settings'  => 'carousel_cat',
      'priority'  => 11
    )));
    //Autoplay speed
    $wp_customize->add_setting(
      'carousel_speed',
      array(
        'default'           => '4000',
        'sanitize_callback' => 'absint',
      )
    );
    $wp_customize->add_control(
      'carousel_speed',
      array(
        'label'     => __('Enter the carousel speed in miliseconds [Default: 4000]', 'wabc'),
        'section'   => 'wabc_carousel',
        'type'      => 'text',
        'priority'  => 13
      )
    );
    //Number of posts to loop
    $wp_customize->add_setting(
      'carousel_number',
      array(
        'default'           => '6',
        'sanitize_callback' => 'absint',
      )
    );
    $wp_customize->add_control(
      'carousel_number',
      array(
        'label'     => __('Enter the number of posts you want to use', 'wabc'),
        'section'   => 'wabc_carousel',
        'type'      => 'text',
        'priority'  => 12
      )
    );
    //Number of posts to display on page
    $wp_customize->add_setting(
      'carousel_posts_to_display',
      array(
        'default'           => '2',
        'sanitize_callback' => 'absint',
      )
    );
    $wp_customize->add_control(
      'carousel_posts_to_display',
      array(
        'label'     => __('Enter the number of posts you want to display on page', 'wabc'),
        'section'   => 'wabc_carousel',
        'type'      => 'text',
        'priority'  => 11
      )
    );
    //  =============================
    //  ==   SOCIAL LINKS
    //  =============================

    	//Header social Icon

    	$wp_customize->add_section(
            'social_icon',
            array(
                'title' => __('Social Links','wabc'),
               'priority'    => 400,

            )
        );

    	//Show and hide Header Social Icons
    	$wp_customize->add_setting(
    	'wabc_header_social_media_enabled'
        ,
        array(
            'default' => 0,
    		'capability'     => 'edit_theme_options',
    		'sanitize_callback' => 'absint',
    		'type' => 'theme_mod',
        )
    	);
    	$wp_customize->add_control(
        'wabc_header_social_media_enabled_ctrl',
        array(
            'label' => __('Enable social media links on header section','wabc'),
            'settings' => 'wabc_header_social_media_enabled',
            'section' => 'social_icon',
            'type' => 'checkbox',
        )
    	);
    	//Footer enable/disable social icon
    	$wp_customize->add_setting(
    	'wabc_footer_social_media_enabled'
        ,
        array(
            'default' => 0,
    		'capability'     => 'edit_theme_options',
    		'sanitize_callback' => 'absint',
    		'type' => 'theme_mod',
        )
    	);
    	$wp_customize->add_control(
        'wabc_footer_social_media_enabled_ctrl',
        array(
            'label' => __('Enable social media links on footer section','wabc'),
            'settings' => 'wabc_footer_social_media_enabled',
            'section' => 'social_icon',
            'type' => 'checkbox',
        )
    	);


    	//twitter link

    	$wp_customize->add_setting(
        'wabc_social_media_twitter_link',
        array(
            'default' => '#',
    		'type' => 'theme_mod',
    		'sanitize_callback' => 'esc_url_raw',
    		'type' => 'theme_mod',
        )

    	);
    	$wp_customize->add_control(
        'wabc_social_media_twitter_link_ctrl',
        array(
            'label' => __('Twitter URL','wabc'),
            'settings' => 'wabc_social_media_twitter_link',
            'section' => 'social_icon',
            'type' => 'text',
        )
    	);

    	// Facebook link
    	$wp_customize->add_setting(
        'wabc_social_media_facebook_link',
        array(
            'default' => '#',
    		'sanitize_callback' => 'esc_url_raw',
    		'type' => 'theme_mod',
        )

    	);
    	$wp_customize->add_control(
        'wabc_social_media_facebook_link_ctrl',
        array(
            'label' => __('Facebook URL','wabc'),
            'settings' => 'wabc_social_media_facebook_link',
            'section' => 'social_icon',
            'type' => 'text',
        )
    	);

    	//Google plus

    	$wp_customize->add_setting(
    	'wabc_social_media_googleplus_link' ,
        array(
            'default' => '#',
    		'sanitize_callback' => 'esc_url_raw',
    		'type' => 'theme_mod',
        )

    	);
    	$wp_customize->add_control(
        'wabc_social_media_googleplus_link_ctrl',
        array(
            'label' => __('GooglePlus URL','wabc'),
            'settings' => 'wabc_social_media_googleplus_link' ,
            'section' => 'social_icon',
            'type' => 'text',
        )
    	);


    	//Linkdin link

    	$wp_customize->add_setting(
    	'wabc_social_media_linkedin_link',
        array(
            'default' => '#',
    		'sanitize_callback' => 'esc_url_raw',
    		'type' => 'theme_mod',
        )

    	);
    	$wp_customize->add_control(
        'wabc_social_media_linkedin_link_ctrl',
        array(
            'label' => __('LinkedIn URL','wabc'),
            'settings' => 'wabc_social_media_linkedin_link',
            'section' => 'social_icon',
            'type' => 'text',
        )
    	);

    	//Youtube Profile Link:

    	$wp_customize->add_setting(
    	'wabc_social_media_youtube_link',
        array(
            'default' => '#',
    		'sanitize_callback' => 'esc_url_raw',
    		'type' => 'theme_mod',
        )

    	);
    	$wp_customize->add_control(
        'wabc_social_media_youtube_link_ctrl',
        array(
            'label' => __('YouTube URL','wabc'),
            'settings' => 'wabc_social_media_youtube_link',
            'section' => 'social_icon',
            'type' => 'text',
        )
    	);
    }
    add_action('customize_register', 'wabc_theme_customize_register');
    /**
    * Sanitize
    */
    // Radio buttons

    function wabc_sanitize_choices( $input, $setting ) {
      global $wp_customize;
      $control = $wp_customize->get_control( $setting->id );
      if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
      } else {
        return $setting->default;
      }
    }
    //Checkboxes
    function wabc_sanitize_checkbox( $input ) {
      return ( 1 === absint( $input ) ) ? 1 : 0;
    }
    // Logo style
    function wabc_sanitize_logo_style( $input ) {
      $valid = array(
        'hide-title'  => __( 'Only logo', 'wabc' ),
        'show-title'  => __( 'Logo plus site title&amp;description', 'wabc' ),
      );
      if ( array_key_exists( $input, $valid ) ) {
        return $input;
      } else {
        return '';
      }
    }




    /**
    * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
    */
    function wabc_customize_preview_js()
    {
      wp_enqueue_script('wabc_customizer', get_template_directory_uri().'/js/customizer.js', array('customize-preview'), '20130508', true);
    }
    add_action('customize_preview_init', 'wabc_customize_preview_js');
