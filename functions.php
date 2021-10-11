<?php
/**
 * Sets up theme defaults and registers support for various WordPress features
 * 
 * By Jeremy Faucher - https://github.com/jeremyfaucher/wordpress-starter-theme
 *
 * @since harvard 1.0
 */
function harvard_setup() {
    // Register Menu Locations.
  register_nav_menus( array(
    'main' => __( 'Main Menu', 'harvard' ),
    'footer' => __( 'Footer Menu', 'harvard' ),
    'sitemap' => __( 'Sitemap Menu', 'harvard' )
  ) );
}
add_action( 'after_setup_theme', 'harvard_setup' );

// Main menu added Styles
require get_template_directory() . '/include/main_menu_styling.php';

/*
* Enqueue admin css and js
*/
function admin_styles() {
// Update CSS within in Admin
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_styles');

/*
* Enqueue css and js
*/
function harvard_styles() {

// Main Styles
 wp_enqueue_style( 'main-style',get_template_directory_uri() . '/css/main.css', 1);

 // If is the Webinars Category
 if (is_category('webinars')) {
  wp_enqueue_style( 'webinar-style',get_template_directory_uri() . '/css/webinars.css', 1);
  // Bootstrap
  wp_enqueue_script( 'webinar-script',get_template_directory_uri() . '/js/webinars.js', array(), '1.0.0', 'true' );
// Ajax for Light Box
  wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/cf-ajax.js', array('jquery'), '1.0.0', 'true' );
// Run WordPress core Ajax
  wp_localize_script( 'ajax-script', 'cf_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
// Add Jquery 
  wp_enqueue_script( 'custom-jquery', get_template_directory_uri() . '/js/jquery-1.12.3.min.js', array( 'jquery' ), '1.12.3', true ); 
}

// If is the Buzz Category
if (is_category('buzz')) {
  wp_enqueue_style( 'buzz-style', get_template_directory_uri() . '/css/buzz.css', 1);
}

}
add_action('wp_enqueue_scripts', 'harvard_styles');

/* 
* Include cleanup functions
*/
// Disable Media duplicates - https://perishablepress.com/disable-wordpress-generated-images/
require get_template_directory() . '/include/disable_media_duplicates.php';
// Disable srcset
require get_template_directory() . '/include/disable_srcset_img.php';
// Disable comments
require get_template_directory() . '/include/remove_comments.php';
// Disable emojis
require get_template_directory() . '/include/remove_emojis.php';
// Remove the "category" slug
require get_template_directory() . '/include/remove_cat_slug.php';
// Remove the WordPress admin editors
require get_template_directory() . '/include/remove_editors.php';
// Remove the WordPress Block Styles
require get_template_directory() . '/include/remove_blocks.php';

/* 
* Include custom fields functions
*/
// CMB2 Carousel fields
require get_template_directory() . '/include/cmb2_carousel.php';
// CMB2 Homepage fields
require get_template_directory() . '/include/cmb2_home.php';
// CMB2 Webinars page fields
require get_template_directory() . '/include/cmb2_webinars.php';
// CMB2 Webinars page fields
require get_template_directory() . '/include/cmb2_podcasts.php';
// CMB2 Buzz page fields
require get_template_directory() . '/include/cmb2_buzz.php';
// CMB2 example fields
//require get_template_directory() . '/include/cmb2_example_functions.php';

/* 
* Include utility functions
*/
// Custom Single based on category
require get_template_directory() . '/include/single_cat.php';
// Media Categorization with tags
require get_template_directory() . '/include/media_tags.php';
// Media file upload limits
require get_template_directory() . '/include/upload_limits.php';
