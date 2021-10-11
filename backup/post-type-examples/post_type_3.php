<?php
/*https://wpquestions.com/Show_custom_posts_by_category_but_sort_by_subcategory/926
// register custom post types and taxonomies*/
function register_custom_post_types() {

// register custom post type
$labels = array(
'name' => 'Products',
'singular_name' => 'Product'
);

$args = array(
'labels' => $labels,
'public' => true,
'capability_type' => 'post',
);

register_post_type('products', $args);

// register taxonomy
$labels = array(
'name' => 'Catalogs',
'singular_name' => 'Catalog',
);

register_taxonomy('catalog', array('products'), array(
'hierarchical' => true,
'labels' => $labels,
'public' => true
)
);

}
add_action('init', 'register_custom_post_types');