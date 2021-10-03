<?php
/**
 * Single Post Template: Buzz Single
 */
get_header(); ?>
This is the single-buzz.php
<?php
// Grab the metadata from the database
$text = get_post_meta( get_the_ID(), 'yourprefix_text', true );

// Echo the metadata
echo esc_html( $text );
?>
<?php get_footer(); ?>
