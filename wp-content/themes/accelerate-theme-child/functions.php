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
}

add_action('wp_enqueue_scripts', 'accelerate_child_scripts');

function create_custom_post_types(){
    register_post_type(
      'case_studies',
      array(
      'labels' => array(
      'name' => __('Case Studies'),
      'singular_name' => __('Case Study')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'case-studies' ),
    )
  );

  register_post_type(
    'services',
    array(
    'labels' => array(
    'name' => __('Services'),
    'singular_name' => __('Service')
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array( 'slug' => 'services' ),
  )
);
}
add_action('init', 'create_custom_post_types');


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
