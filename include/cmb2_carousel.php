<?php
/**
 * Define the metaboxes for Homepage Slider.
 */
add_action( 'cmb2_init', 'cmb2_home_slides_metaboxes' );
/**
 * Define the metaboxes for page.
 */
function cmb2_home_slides_metaboxes() {
    // admin setup
    $cmb = new_cmb2_box( array(
        'id'           =>  'slide_metabox',
        // Field Group in admin
        'title'        => __( 'Slides', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on' => array( 'page' => array( 'home', ) ),
        'context'      => 'normal',
        'priority'     => 'default',
    ) );
    // field - slide 1
    $cmb->add_field( array(
        'name' => esc_html__( 'Slide One', 'cmb2' ),
        'desc' => esc_html__( 'Upload slide image here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'slide_one',
        'type' => 'file',
    ) );
    // field - slide 2
    $cmb->add_field( array(
        'name' => esc_html__( 'Slide Two', 'cmb2' ),
        'desc' => esc_html__( 'Upload slide image here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'slide_two',
        'type' => 'file',
    ) );
    // field - slide 3
    $cmb->add_field( array(
        'name' => esc_html__( 'Slide Three', 'cmb2' ),
        'desc' => esc_html__( 'Upload slide image here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'slide_three',
        'type' => 'file',
    ) );
    // field - slide 4
    $cmb->add_field( array(
        'name' => esc_html__( 'Slide Four', 'cmb2' ),
        'desc' => esc_html__( 'Upload slide image here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'slide_four',
        'type' => 'file',
    ) );
    // field - slide 5
    $cmb->add_field( array(
        'name' => esc_html__( 'Slide Five', 'cmb2' ),
        'desc' => esc_html__( 'Upload slide image here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'slide_five',
        'type' => 'file',
    ) );

}
