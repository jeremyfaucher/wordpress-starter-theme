<?php
/**
 * Register a book post type.
 */
function wpdocs_codex_custom_init() {
    $args = array(
        'public' => true,
        'label'  => __( 'Books', 'textdomain' ),
        //'rewrite' => false,
    );
    register_post_type( 'book', $args );
}
add_action( 'init', 'wpdocs_codex_custom_init' );
/**
 * Create two taxonomies, genres and writers for the post type "book".
 *
 * @see register_post_type() for registering custom post types.
 */
function wpdocs_create_book_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Genres', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Genres', 'textdomain' ),
        'all_items'         => __( 'All Genres', 'textdomain' ),
        'parent_item'       => __( 'Parent Genre', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Genre:', 'textdomain' ),
        'edit_item'         => __( 'Edit Genre', 'textdomain' ),
        'update_item'       => __( 'Update Genre', 'textdomain' ),
        'add_new_item'      => __( 'Add New Genre', 'textdomain' ),
        'new_item_name'     => __( 'New Genre Name', 'textdomain' ),
        'menu_name'         => __( 'Genre', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'genre' ),
    );
 
    register_taxonomy( 'genre', array( 'book' ), $args );
 
    unset( $args );
    unset( $labels );
 
  
}
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'wpdocs_create_book_taxonomies', 0 );
