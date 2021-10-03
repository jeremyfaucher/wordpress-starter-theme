<?php
/*
* Enqueue css and js
*/
function admin_style() {
// Update CSS within in Admin
    wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

/* 
* Include features
*/
// Disable srcset
require get_template_directory() . '/include/disable_srcset_img.php';
// Disable srcset
require get_template_directory() . '/include/remove_emojis.php';
// Hide Yoast
require get_template_directory() . '/include/hide_yoast.php';
// CMB2 functions - use in place of plugin
//require get_template_directory() . '/include/cmb2_example_functions.php';
// CMB2 fields
require get_template_directory() . '/include/cmb2_functions.php';

function remove_editor() {
  remove_post_type_support('page', 'editor');
  remove_post_type_support('post', 'editor');
}
add_action('admin_init', 'remove_editor');
