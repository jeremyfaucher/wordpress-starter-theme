<?php
// taxonomy-catalog.php

// set variables
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$tax = get_query_var( 'taxonomy' );

get_header(); ?>

<div id="container">
<div id="content" role="main">

<h1 class="page-title"><?php echo $term->name; ?></h1>
<?php

// if term has children
if (get_term_children($term->term_id, $tax) != null) {

// get child terms
$term_children = get_terms(
$tax,
array(
'child_of' => $term->term_id,
)
);

// loop through them
foreach ($term_children as $term_child) {

// print title
echo '<h2>' . $term_child->name . '</h2>';

// change query
query_posts(array(
'catalog' => $term_child->slug,
)
);

// loop through posts
if (have_posts()) : ?>

<ul>

<?php while (have_posts()) : the_post(); ?>

<li <?php post_class(); ?>>

<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

</li>

<?php endwhile; ?>

</ul>

<?php endif;

}

// if term has no chilren
} else {

// loop through posts
if (have_posts()) : ?>

<ul>

<?php while (have_posts()) : the_post(); ?>

<li <?php post_class(); ?>>

<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

</li>

<?php endwhile; ?>

</ul>

<?php endif;

}

?>

</div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>