<?php
function themes_taxonomy() {
    register_taxonomy(
        'themes_categories',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'themes',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'Themes store', // display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'themes',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );
}
add_action( 'init', 'themes_taxonomy');

function filter_post_type_link( $link, $post ) {
    if ( $post->post_type !== 'themes' )
        return $link;

    if ( $cats = get_the_terms($post->ID, 'themes_categories') )
        $link = str_replace('%themes_categories%', array_pop($cats)->slug, $link);

    return $link;
}
add_filter('post_type_link', 'filter_post_type_link', 10, 2);





// Registering Custom Post Type Themes
add_action( 'init', 'register_themepost', 20 );
function register_themepost() {
    $labels = array(
        'name' => _x( 'Themes', 'my_custom_post','custom' ),
        'singular_name' => _x( 'Theme', 'my_custom_post', 'custom' ),
        'add_new' => _x( 'Add New', 'my_custom_post', 'custom' ),
        'add_new_item' => _x( 'Add New ThemePost', 'my_custom_post', 'custom' ),
        'edit_item' => _x( 'Edit ThemePost', 'my_custom_post', 'custom' ),
        'new_item' => _x( 'New ThemePost', 'my_custom_post', 'custom' ),
        'view_item' => _x( 'View ThemePost', 'my_custom_post', 'custom' ),
        'search_items' => _x( 'Search ThemePosts', 'my_custom_post', 'custom' ),
        'not_found' => _x( 'No ThemePosts found', 'my_custom_post', 'custom' ),
        'not_found_in_trash' => _x( 'No ThemePosts found in Trash', 'my_custom_post', 'custom' ),
        'parent_item_colon' => _x( 'Parent ThemePost:', 'my_custom_post', 'custom' ),
        'menu_name' => _x( 'Themes Posts', 'my_custom_post', 'custom' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Custom Theme Posts',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'post-formats', 'custom-fields' ),
        'taxonomies' => array( 'post_tag','themes_categories'),
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri() . '/functions/panel/images/catchinternet-small.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'themes/%themes_categories%', 'with_front' => FALSE ),
        'public' => true,
        'has_archive' => 'themes',
        'capability_type' => 'post'
    );
    register_post_type( 'themes', $args ); // max 20 character cannot contain capital letters and spaces
}


function default_taxonomy_term( $post_id, $post ) {
    if ( 'publish' === $post->post_status ) {
        $defaults = array(
            'themes_categories' => array('other'),
        );
        $taxonomies = get_object_taxonomies( $post->post_type );
        foreach ( (array) $taxonomies as $taxonomy ) {
            $terms = wp_get_post_terms( $post_id, $taxonomy );
            if ( empty($terms) && array_key_exists( $taxonomy, $defaults ) ) {
                wp_set_object_terms( $post_id, $defaults[$taxonomy], $taxonomy );
            }
        }
    }
}
add_action( 'save_post', 'default_taxonomy_term', 100, 2 );