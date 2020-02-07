<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts()
{
    wp_enqueue_style('accelerate-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));

    wp_enqueue_style( 'accelerate-child-google-fonts', '//fonts.googleapis.com/css?family=Londrina+Solid&display=swap" rel="stylesheet"' );
}

add_action('wp_enqueue_scripts', 'accelerate_child_scripts');

function create_custom_post_types(){
  // Custom post type for case studies
  register_post_type(
    'case_studies', array(
      'labels' => array(
        'name' => __('Case Studies'),
        'singular_name' => __('Case Study')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'case-studies' ),
    )
  ); // End register_post_type case studies

  // Custom post type for service offers
  register_post_type(
    'service_offers', array(
      'labels' => array(
        'name' => __('Service Offers'),
        'singular_name' => __('Service Offer')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'services' ),
    )
  ); // End register_post_type service offers

  // Custom post type for banners
  register_post_type(
    'banners', array(
      'labels' => array(
        'name' => __('Banners'),
        'singular_name' => __('Banner')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'banners' ),
    )
  ); // End register_post_type banners
} // End function create_custom_post_types

// Hook the custom post type function into the theme
add_action('init', 'create_custom_post_types');

// Create a new dymanic sidebar
function accelerate_theme_child_widget_init() {

	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );

}

// Hook the accelerate_theme_child_widget_init function into the theme
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );


// Allow for Tab to indent in WordPress HTML editor.
/* Source = https://rudrastyh.com/wordpress/tab-to-indent.html */
if (!function_exists('mr_tab_to_indent_in_textarea')) {
    function mr_tab_to_indent_in_textarea()
    {
        $tabindent = '<script>
		jQuery(function($) {
			$("textarea#content, textarea#wp_mce_fullscreen").keydown(function(e){
				if( e.keyCode != 9 ) return;
				e.preventDefault();
				var textarea = $(this)[0], start = textarea.selectionStart, before = textarea.value.substring(0, start), after = textarea.value.substring(start, textarea.value.length);
				textarea.value = before + "\t" + after; textarea.setSelectionRange(start+1,start+1);
			});
		});</script>';
        echo $tabindent;
    }

    add_action('admin_footer-post-new.php', 'mr_tab_to_indent_in_textarea');
    add_action('admin_footer-post.php', 'mr_tab_to_indent_in_textarea');
}
