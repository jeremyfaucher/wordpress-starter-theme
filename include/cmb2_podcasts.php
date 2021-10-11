<?php

function podcastpost_hide_if_not( $field ) {
    // Don't show this field if not in the cats category.
    if ( ! has_category( 'podcasts', $field->object_id ) ) {
        return false;
    }
    return true;
}
/**
 * Define the metabox for Podcasts Posts.
 */
add_action( 'cmb2_init', 'podcastpost_cmb2_metaboxes' );
function podcastpost_cmb2_metaboxes() {
    // admin
    $cmb = new_cmb2_box( array(
        'id'           =>  'podcastpost_metabox',
        // Field Group in admin
        'title'        => __( 'Podcasts Post', 'cmb2' ),
        'object_types' => array( 'post' ),
        'show_on_cb'   => 'podcastpost_hide_if_not', // function should return a bool value
        'context'      => 'normal',
        'priority'     => 'default',
    ) );
    // field - Featured Image
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'Featured Image', 'cmb2' ),
        'desc'       => __( 'Featured Image here', 'cmb2' ),
        // Name to use in php files
        'id'         => 'podcastpost_feature_image',
        'type'       => 'file',
    ) );
     // field - Heading
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'Heading', 'cmb2' ),
        'desc'       => __( 'Heading here', 'cmb2' ),
        // Name to use in php files
        'id'         => 'podcastpost_heading',
        'type'       => 'textarea_small',
    ) );
         // field - Copy
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'Copy', 'cmb2' ),
        'desc'       => __( 'Copy here', 'cmb2' ),
        // Name to use in php files
        'id'         => 'podcastpost_copy',
        'type'       => 'textarea',
    ) );
}
