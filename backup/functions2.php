<?php


  add_action( 'init', 'create_post_type' );
        function create_post_type() {
register_taxonomy('car', 'cars', array(
            'hierarchical' => true,
            'labels' => array(
                'name' => _x( 'Car Category', 'taxonomy general name' ),
                'singular_name' => _x( 'Car -Category', 'Car Category' ),
                'search_items' =>  __( 'Search Car Categories' ),
                'all_items' => __( 'All Car Categories' ),
                'parent_item' => __( 'Parent Car Category' ),
                'parent_item_colon' => __( 'Parent Car Category:' ),
                'edit_item' => __( 'Edit Car Category' ),
                'update_item' => __( 'Update Car Category' ),
                'add_new_item' => __( 'Add New Car Category' ),
                'new_item_name' => __( 'New Car Category Name' ),
                'menu_name' => __( 'Car Categories' ),
            ),

            'rewrite' => array(
                'slug' => 'car', 
                'with_front' => false, 
                'hierarchical' => true 
            ),
        ));

    register_post_type( 'cars',
            array(
            'labels' => array(
            'name' => __( 'Cars' ),
            'singular_name' => __( 'Cars' ),
            'menu_name' => __( 'Cars' ),
            'name_admin_bar' => __( 'Cars' ),
            'all_items' => __( 'Group of Companies' ),
            'add_new' => __( 'Add New Car' ),
            'new_item' => __( 'Add New Car' ),
            'add_new_item' => __( 'Add New Car' ),
            'edit_item' => __( 'Edit Car' ),
            'view_item' => __( 'View Car' ),
            ),
            'public' => true,
            'taxonomies'          => array( 'category', ),
            'has_archive' => true,
            'supports' => array("title", "editor", "thumbnail")
            )
            );

}








/*https://wpquestions.com/Show_custom_posts_by_category_but_sort_by_subcategory/926
// register custom post types and taxonomies*/
function register_custom_post_types() {

// register custom post type
$labels = array(
'name' => 'Products',
'singular_name' => 'Product'
);

$args = array(
'labels' => $labels,
'public' => true,
'capability_type' => 'post',
);

register_post_type('products', $args);

// register taxonomy
$labels = array(
'name' => 'Catalogs',
'singular_name' => 'Catalog',
);

register_taxonomy('catalog', array('products'), array(
'hierarchical' => true,
'labels' => $labels,
'public' => true
)
);

}
add_action('init', 'register_custom_post_types');







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
        'taxonomies'          => array( 'category', ),
        'supports' => array('title', 'editor'),
        'menu_icon' => 'dashicons-format-gallery',
        )
    );

// register_taxonomy('speakers', array('buzz'), array(
// 'hierarchical' => true,
// )
// );

     register_taxonomy( 'speakers', array('buzz'), array(
            'label' => __( 'Speakers' ),
            //'rewrite' => array( 'slug' => 'speakers' ),
            'hierarchical' => true,
            'with_front' => false,
            'update_count_callback' => '_update_post_term_count',
        )
    );


     // register taxonomy
// $labels = array(
// 'name' => 'Speakers',
// 'singular_name' => 'Speakers',
// );












// register_taxonomy('tag','buzz', array(
//     'hierarchical' => false,
//     'labels' => $labels,
//     'show_ui' => true,
//     'update_count_callback' => '_update_post_term_count',
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'tag' ),
//   ));


}
add_action('init', 'tech_buzz_postType');
//add_action('cf_carousel', 'do_carousel');
//add_shortcode('cf_carousel', 'do_carousel');
//[cf_carousel]


// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

require get_template_directory() . '/include/disable_srcset_img.php';