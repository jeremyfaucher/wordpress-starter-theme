<?php 
$current_category = get_queried_object(); ////getting current category
$args = array(
        //'post_type' => 'our-services',// your post type,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'cat' => $current_category->cat_ID // current category ID
);
$the_query = new WP_Query($args);
if($the_query->have_posts()):
   while($the_query->have_posts()): $the_query->the_post(); ?>

   <?php
endwhile;
endif;
?>