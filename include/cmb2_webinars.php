<?php

function _webinarpost_hide_if_not( $field ) {
    // Don't show this field if not in the cats category.
    if ( ! has_category( 'webinars', $field->object_id ) ) {
        return false;
    }
    return true;
}
/**
 * Define the metabox for Webinars Posts.
 */
add_action( 'cmb2_init', '_webinarpost_cmb2_metaboxes' );
function _webinarpost_cmb2_metaboxes() {
    // admin
    $cmb = new_cmb2_box( array(
        'id'           =>  '_webinarpost_metabox',
        // Field Group in admin
        'title'        => __( 'Webinars Post', 'cmb2' ),
        'object_types' => array( 'post' ),
        'show_on_cb'   => '_webinarpost_hide_if_not', // function should return a bool value
        'context'      => 'normal',
        'priority'     => 'default',
    ) );
    // field - Featured Image
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'Featured Image', 'cmb2' ),
        'desc'       => __( 'Featured Image here', 'cmb2' ),
        // Name to use in php files
        'id'         => '_webinarpost_feature_image',
        'type'       => 'file',
    ) );
    // field - Date
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'Date', 'cmb2' ),
        'desc'       => __( 'Date here', 'cmb2' ),
        // Name to use in php files
        'id'         => '_webinarpost_date',
        'type'       => 'text_date',
        'date_format' => 'M d, Y',
    ) );
    // field - Title comes from the post title
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'Title', 'cmb2' ),
        'desc'       => __( 'Title comes from the Post Title', 'cmb2' ),
        // Name to use in php files
        'id'         => '_webinarpost_title',
        'type'       => 'title',
    ) );
    // field - Video
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'Video', 'cmb2' ),
        'desc'       => __( 'Video here', 'cmb2' ),
        // Name to use in php files
        'id'         => '_webinarpost_video',
        'type'       => 'oembed',
    ) );
     // field - Heading
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'Heading', 'cmb2' ),
        'desc'       => __( 'Heading here', 'cmb2' ),
        // Name to use in php files
        'id'         => '_webinarpost_heading',
        'type'       => 'textarea_small',
    ) );
    // field - Intro
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'Into', 'cmb2' ),
        'desc'       => __( 'Introduction here', 'cmb2' ),
        // Name to use in php files
        'id'         => '_webinarpost_intro',
        'type'       => 'textarea',
    ) );
    // field - Copy
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'Copy', 'cmb2' ),
        'desc'       => __( 'Copy here', 'cmb2' ),
        // Name to use in php files
        'id'         => '_webinarpost_copy',
        'type'       => 'textarea',
    ) );
}
