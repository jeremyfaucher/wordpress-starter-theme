<?php
/* The search results template. Used when a search is performed. */
?>

<?php get_header(); ?>

<h2><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- This is the code that will run if you have any posts -->
    <?php
        the_title();
        the_author();
        the_date();
        the_excerpt();
    ?>
<?php endwhile; else : ?>
    <!-- If no posts are found, run this code -->
    <p>I'm sorry, your search did not return any results.</p>
<?php endif; ?>

<?php get_footer(); ?>