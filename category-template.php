<?php
get_header(); ?>
This is category-template.php
<?php 
the_archive_description(); 
?>
<?php
// Grab the metadata from the database
$text = get_term_meta( get_queried_object_id(), 'yourprefix_text', true );
// Echo the metadata
echo esc_html( $text );
?>
<br>
<?php get_footer(); ?>
