<?php
/*
gist.github.com/amboutwe/1c847f9c706ff6f8c9eca76abea23fb6
 */
add_action( 'template_redirect', 'remove_wpseo' );
function remove_wpseo() {
    if ( is_single () || is_category () ) {
        global $wpseo_front;
        
        if ( defined( $wpseo_front ) ) {
            remove_action( 'wp_head', array ($wpseo_front, 'head' ), 1 );
        } else {
            $wp_thing = WPSEO_Frontend::get_instance();
            remove_action( 'wp_head', array( $wp_thing, 'head' ), 1 );
        }
    }
}