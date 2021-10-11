<?php
/**
 * Define the metaboxes for Homepage About.
 */
add_action( 'cmb2_init', 'homepage_about_metaboxes' );
/**
 * Define the metaboxes for page.
 */
function homepage_about_metaboxes() {
    // admin setup
    $cmb = new_cmb2_box( array(
        'id'           =>  'homepage_about_metabox',
        // Field Group in admin
        'title'        => __( 'About', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on' => array( 'page' => array( 'home', ) ),
        'context'      => 'normal',
        'priority'     => 'default',
    ) );
    // field - About Heading
    $cmb->add_field( array(
        'name' => esc_html__( 'About Heading', 'cmb2' ),
        'desc' => esc_html__( 'About heading here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'homepage_about_heading',
        'type' => 'text',
    ) );
    // field - About Sub Heading
    $cmb->add_field( array(
        'name' => esc_html__( 'About Sub Heading', 'cmb2' ),
        'desc' => esc_html__( 'About sub heading here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'homepage_about_sub_heading',
        'type' => 'textarea_small',
    ) );
    // field - About Copy
    $cmb->add_field( array(
        'name' => esc_html__( 'About Copy', 'cmb2' ),
        'desc' => esc_html__( 'About copy here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'homepage_about_copy',
        'type' => 'textarea',
    ) );
    // field - About Photo
    $cmb->add_field( array(
        'name' => esc_html__( 'About Photo', 'cmb2' ),
        'desc' => esc_html__( 'About photo here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'homepage_about_photo',
        'type' => 'file',
    ) );

}
/**
 * Define the metaboxes for Homepage Webinar.
 */
add_action( 'cmb2_init', 'homepage_webinar_metaboxes' );
/**
 * Define the metaboxes for page.
 */
function homepage_webinar_metaboxes() {
    // admin setup
    $cmb = new_cmb2_box( array(
        'id'           =>  'webinar_metabox',
        // Field Group in admin
        'title'        => __( 'Webinar', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on' => array( 'page' => array( 'home', ) ),
        'context'      => 'normal',
        'priority'     => 'default',
    ) );
    // field - Webinar Heading
    $cmb->add_field( array(
        'name' => esc_html__( 'Webinar Heading', 'cmb2' ),
        'desc' => esc_html__( 'Webinar heading here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'homepage_webinar_heading',
        'type' => 'text',
    ) );
    // field - Webinar Sub Heading
    $cmb->add_field( array(
        'name' => esc_html__( 'Webinar Sub Heading', 'cmb2' ),
        'desc' => esc_html__( 'Webinar sub heading here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'homepage_webinar_sub_heading',
        'type' => 'textarea_small',
    ) );
    // field - Webinar Copy
    $cmb->add_field( array(
        'name' => esc_html__( 'Webinar Copy', 'cmb2' ),
        'desc' => esc_html__( 'Webinar copy here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'homepage_webinar_copy',
        'type' => 'textarea',
    ) );

}

/**
 * Define the metaboxes for Homepage Podcast.
 */
add_action( 'cmb2_init', 'homepage_podcast_metaboxes' );
/**
 * Define the metaboxes for page.
 */
function homepage_podcast_metaboxes() {
    // admin setup
    $cmb = new_cmb2_box( array(
        'id'           =>  'homepage_podcast_metabox',
        // Field Group in admin
        'title'        => __( 'Podcast', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on' => array( 'page' => array( 'home', ) ),
        'context'      => 'normal',
        'priority'     => 'default',
    ) );
    // field - Podcast Heading
    $cmb->add_field( array(
        'name' => esc_html__( 'Podcast Heading', 'cmb2' ),
        'desc' => esc_html__( 'Podcast heading here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'homepage_podcast_heading',
        'type' => 'text',
    ) );
    // field - Podcast Sub Heading
    $cmb->add_field( array(
        'name' => esc_html__( 'Podcast Sub Heading', 'cmb2' ),
        'desc' => esc_html__( 'Podcast sub heading here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'homepage_podcast_sub_heading',
        'type' => 'textarea_small',
    ) );
    // field - Podcast Copy
    $cmb->add_field( array(
        'name' => esc_html__( 'Podcast Copy', 'cmb2' ),
        'desc' => esc_html__( 'Podcast copy here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'homepage_podcast_copy',
        'type' => 'textarea',
    ) );
}
/**
 * Define the metaboxes for Homepage Buzz.
 */
add_action( 'cmb2_init', 'homepage_buzz_metaboxes' );
/**
 * Define the metaboxes for page.
 */
function homepage_buzz_metaboxes() {
    // admin setup
    $cmb = new_cmb2_box( array(
        'id'           =>  'homepage_buzz_metabox',
        // Field Group in admin
        'title'        => __( 'Buzz', 'cmb2' ),
        'object_types' => array( 'page' ),
        'show_on' => array( 'page' => array( 'home', ) ),
        'context'      => 'normal',
        'priority'     => 'default',
    ) );
    // field - Podcast Heading
    $cmb->add_field( array(
        'name' => esc_html__( 'Buzz Heading', 'cmb2' ),
        'desc' => esc_html__( 'Buzz heading here.', 'cmb2' ),
        // Name to use in php files
        'id'   => 'homepage_buzz_heading',
        'type' => 'text',
    ) );
}
