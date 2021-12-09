<?php
/**
 * Sets up theme defaults and registers support for various WordPress features
 * 
 * By Jeremy Faucher - https://github.com/jeremyfaucher/wordpress-starter-theme
 *
 * @since starter 1.0
 */
function starter_setup() {
    // Register Menu Locations.
	register_nav_menus( array(
		'main' => __( 'Main Menu', 'starter' ),
	) );
}
add_action( 'after_setup_theme', 'starter_setup' );

/*
* Enqueue css and js
*/
function starter_styles() {
}
add_action('wp_enqueue_scripts', 'starter_styles');

/* 
* Include cleanup functions
*/
// Disable Media duplicates - https://perishablepress.com/disable-wordpress-generated-images/
require get_template_directory() . '/inc/disable_media_duplicates.php';
// Disable srcset
require get_template_directory() . '/inc/disable_srcset_img.php';
// Remove the WordPress Block Styles
require get_template_directory() . '/inc/remove_blocks.php';
// Remove the "category" slug
require get_template_directory() . '/inc/remove_cat_slug.php';
// Disable comments
require get_template_directory() . '/inc/remove_comments.php';
// Remove the WordPress admin editors
require get_template_directory() . '/inc/remove_editors.php';
// Disable emojis
require get_template_directory() . '/inc/remove_emojis.php';

