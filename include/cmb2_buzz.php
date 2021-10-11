<?php
/**
 * Define the metaboxes for Categories.
 */
add_action( 'cmb2_admin_init', '_buzzcat_cmb_metaboxes' );
function _buzzcat_cmb_metaboxes() {
    /**
     * Initiate the metabox for Banner Buzz, 
     */
    $cmb = new_cmb2_box( array(
        'id'            => '_buzzcat_metabox',
        'title'         => __( 'Test Metabox', 'cmb2' ),
        'object_types'  => array( 'term' ), // Post type
        'taxonomies'       => array( 'category', 'post_Tag' ),
        'show_on' => array( 'id' => array( 35, ) ),
        //'show_on_cb' => 'buzzcat_hide_if_not', // function should return a bool value
        //'show_on' => array( 'key' => 'category', 'value' => 35, ),
        //'show_on' => array( 'category' => array( 41, ) ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );
    // Field - Banner Heading
    $cmb->add_field( array(
        'name'       => __( 'Banner Heading', 'cmb2' ),
        'desc'       => __( 'Banner heading here', 'cmb2' ),
        // Name to use in php files
        'id'         => '_buzzcat_banner_heading',
        'type'       => 'text',
    ) );

    // Add other metaboxes as needed

}

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field $field Field object.
 *
 * @return bool              True if metabox should show
 */
function _speakerpost_hide_if_not( $field ) {
    // Don't show this field if not in the cats category.
    if ( ! has_category( 'speakers', $field->object_id ) ) {
        return false;
    }
    return true;
}
/**
 * Define the metabox for Buzz Posts.
 */
add_action( 'cmb2_init', '_speakerpost_cmb2_metaboxes' );
/**
 * Define the metabox for posts.
 */
function _speakerpost_cmb2_metaboxes() {
    // admin
    $cmb = new_cmb2_box( array(
        'id'           =>  '_speakerpost_review_metabox',
        // Field Group in admin
        'title'        => __( 'Buzz Post', 'cmb2' ),
        'object_types' => array( 'post' ),
        'show_on_cb' => '_speakerpost_hide_if_not', // function should return a bool value
        'context'      => 'normal',
        'priority'     => 'default',
    ) );
    // Field - Buzz Speaker photo
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'Photo', 'cmb2' ),
        'desc'       => __( 'Photo text here', 'cmb2' ),
        // Name to use in php files
        'id'         => '_speakerpost_photo',
        'type'       => 'file',
    ) );
    // Field - Buzz Speaker Review
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'Review', 'cmb2' ),
        'desc'       => __( 'Review text here', 'cmb2' ),
        // Name to use in php files
        'id'         => '_speakerpost_review',
        'type'       => 'textarea',
    ) );
    // Field - Buzz Speaker Review
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'Date', 'cmb2' ),
        'desc'       => __( 'Date here', 'cmb2' ),
        // Name to use in php files
        'id'         => '_speakerpost_date',
        'type'       => 'text_date',
        'date_format' => 'M d, Y',
    ) );
    // Field - Buzz Speakers Name
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'Name', 'cmb2' ),
        'desc'       => __( 'Name comes from the Post Title above.', 'cmb2' ),
        // Name to use in php files
        'id'         => '_speakerpost_name',
        'type'       => 'title',
    ) );
        // Field - Buzz Speakers CV
    $cmb->add_field( array(
        // Label of the field in admin
        'name'       => __( 'CV', 'cmb2' ),
        'desc'       => __( 'CV here', 'cmb2' ),
        // Name to use in php files
        'id'         => '_speakerpost_cv',
        'type'       => 'textarea_small',
    ) );
}
