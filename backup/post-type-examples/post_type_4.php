<?php

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
        //'has_archive' => 'buzz',
        //'capability_type' => 'post',
        'taxonomies'          => array( 'categories', ),
        'supports' => array('title', 'editor'),
        'menu_icon' => 'dashicons-format-gallery',
        )
    );

// register_taxonomy('categories', array('buzz'), array(
// 'hierarchical' => true,
// )
// );

    //  register_taxonomy( 'speakers', array('buzz'), array(
    //         'label' => __( 'Speakers' ),
    //         //'rewrite' => array( 'slug' => 'speakers' ),
    //         'hierarchical' => true,
    //         'with_front' => false,
    //         'update_count_callback' => '_update_post_term_count',
    //     )
    // );

/*https://wordpress.stackexchange.com/questions/57493/custom-taxonomy-specific-to-a-custom-post-type*/
// register_taxonomy(
//         'themes_categories',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
//         'buzz',             // post type name
//         array(
//             'hierarchical' => true,
//             'label' => 'Themes store', // display name
//             'query_var' => true,
//             'rewrite' => array(
//                 'slug' => 'buzz',    // This controls the base slug that will display before each term
//                 'with_front' => false  // Don't display the category base before
//             )
//         )
//     );


// register_taxonomy('speakers', 'buzz', array(
//             'hierarchical' => true,
//             'labels' => array(
//                 'name' => _x( 'Buzz Categories', 'taxonomy general name' ),

//             ),

//             'rewrite' => array(
//                 'slug' => 'speakers', 
//                 'with_front' => true, 
//                 'hierarchical' => true 
//             ),
//         ));




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