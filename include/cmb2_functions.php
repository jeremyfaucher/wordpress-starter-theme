<?php
add_action( 'cmb2_admin_init', 'cmb2_cat_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_cat_metaboxes() {

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'test_metabox',
        'title'         => __( 'Test Metabox', 'cmb2' ),
        'object_types'  => array( 'term', ), // Post type
        'taxonomies'       => array( 'category', 'post_Tag' ),
        //'show_on' => array( 'id' => array( 4, ) ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Test Text', 'cmb2' ),
        'desc'       => __( 'field description (optional)', 'cmb2' ),
        'id'         => 'yourprefix_text',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );

    // Add other metaboxes as needed

}

add_action( 'cmb2_init', 'cmb2_add_metabox' );
function cmb2_add_metabox() {

    $prefix = '_cmb_';

    $cmb = new_cmb2_box( array(
        'id'           => $prefix . '',
        'title'        => __( 'Metabox Title', 'cmb2' ),
        'object_types' => array( 'post' ),
        'context'      => 'normal',
        'priority'     => 'default',
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Test Text', 'cmb2' ),
        'desc'       => __( 'field description (optional)', 'cmb2' ),
        'id'         => 'yourprefix_text',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );

}
