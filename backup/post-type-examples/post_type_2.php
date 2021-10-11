<?php
 add_action( 'init', 'create_post_type' );
        function create_post_type() {
register_taxonomy('car', 'cars', array(
            'hierarchical' => true,
            'labels' => array(
                'name' => _x( 'Car Category', 'taxonomy general name' ),
                'singular_name' => _x( 'Car -Category', 'Car Category' ),
                'search_items' =>  __( 'Search Car Categories' ),
                'all_items' => __( 'All Car Categories' ),
                'parent_item' => __( 'Parent Car Category' ),
                'parent_item_colon' => __( 'Parent Car Category:' ),
                'edit_item' => __( 'Edit Car Category' ),
                'update_item' => __( 'Update Car Category' ),
                'add_new_item' => __( 'Add New Car Category' ),
                'new_item_name' => __( 'New Car Category Name' ),
                'menu_name' => __( 'Car Categories' ),
            ),

            'rewrite' => array(
                'slug' => 'car', 
                'with_front' => false, 
                'hierarchical' => true 
            ),
        ));

    register_post_type( 'cars',
            array(
            'labels' => array(
            'name' => __( 'Cars' ),
            'singular_name' => __( 'Cars' ),
            'menu_name' => __( 'Cars' ),
            'name_admin_bar' => __( 'Cars' ),
            'all_items' => __( 'Group of Companies' ),
            'add_new' => __( 'Add New Car' ),
            'new_item' => __( 'Add New Car' ),
            'add_new_item' => __( 'Add New Car' ),
            'edit_item' => __( 'Edit Car' ),
            'view_item' => __( 'View Car' ),
            ),
            'public' => true,
            'taxonomies'          => array( 'category', ),
            'has_archive' => true,
            'supports' => array("title", "editor", "thumbnail")
            )
            );

}