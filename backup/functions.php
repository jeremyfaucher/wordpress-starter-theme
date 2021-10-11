<?php

/*https://wpquestions.com/Show_custom_posts_by_category_but_sort_by_subcategory/926
// register custom post types and taxonomies*/
// function register_custom_post_types() {

// // register custom post type
// $labels = array(
// 'name' => 'Products',
// 'singular_name' => 'Product'
// );

// $args = array(
// 'labels' => $labels,
// 'public' => true,
// 'capability_type' => 'post',
// );

// register_post_type('products', $args);

// // register taxonomy
// $labels = array(
// 'name' => 'Catalogs',
// 'singular_name' => 'Catalog',
// );

// register_taxonomy('catalog', array('products'), array(
// 'hierarchical' => true,
// 'labels' => $labels,
// 'public' => true
// )
// );

// }
// add_action('init', 'register_custom_post_types');







/**
 * Cafe Faucher Slider Post Type
 *
 * @since Cafe Faucher 1.0
 */
function tech_buzz_postType() {
    register_post_type('buzz', array(
        'labels' => array(
            'name' => _x('Buzz', 'Post Type General Name', 'harvard'),
            'singular_name' => _x('Buzz', 'Post Type Singular Name', 'harvard')
            ),
        'public' => true,
        'has_archive' => true,
        'taxonomies'          => array( 'category' ),
        'supports' => array('title', 'editor'),
        'menu_icon' => 'dashicons-format-gallery',
        )
    );

    //  register_taxonomy( 'speakers', 'buzz', array(
    //         'label' => __( 'Speakers' ),
    //         'rewrite' => array( 'slug' => 'speakers' ),
    //         'hierarchical' => true,
    //     )
    // );

register_taxonomy('tag','buzz',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));


}
add_action('init', 'tech_buzz_postType');
//add_action('cf_carousel', 'do_carousel');
//add_shortcode('cf_carousel', 'do_carousel');
//[cf_carousel]

 global $menu;
    $menu[6] = $menu[5]; //move post from post 5 to 6
    unset($menu[5]); //free the position 5 so you can use it!



// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

require get_template_directory() . '/include/disable_srcset_img.php';