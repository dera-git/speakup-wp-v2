<?php
$templatepath = get_template_directory();
include( $templatepath . '/function/ajax.php' );
if ( defined( 'DOING_AJAX' ) && DOING_AJAX && is_admin() ) {
	// include( $templatepath . '/function/ajax.php' );
} elseif ( is_admin() ) {
	include( $templatepath . '/function/admin.php' );
} elseif ( ! defined( 'XMLRPC_REQUEST' ) && ! defined( 'DOING_CRON' ) ) {
	include( $templatepath . '/function/front.php' );
}
include( $templatepath . '/function/all.php' );
/*//////////////////////////// Baltazare //////////////////////////////*/

function my_theme_setup(){
    add_theme_support('post-thumbnails');

    register_nav_menus(array('primary' => 'Principal'));
    register_nav_menus(array('footer' => 'Menu footer'));
}

add_action('after_setup_theme', 'my_theme_setup');

function custom_class( $classes ) {
    if(is_page_template('templates/notre-travail.php')){
        $classes[] = 'kl-bg-beige kl-body-notre-travail';
    }elseif(is_singular('membre')){
        $classes[] = 'kl-bg-beige kl-body-single-team';
    }else{
        $classes[] = 'kl-bg-beige';
    }
	
	return $classes;
}
add_filter( 'body_class', 'custom_class' );


add_filter( 'gform_required_legend', '__return_empty_string' );


function custom_excerpt_length($length) {
    return 45; 
}
add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');


function enqueue_additionnal_script() {
    $template_data       = wp_get_theme();
    $template_version    = $template_data['Version'];

    if ( is_page_template( 'templates/actus.php' ) ) {
        wp_enqueue_script('events-journee', get_template_directory_uri().'/assets/js/actus.js', array(), $template_version, true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_additionnal_script');

// get url page by template name
function getTplPageURL( $TEMPLATE_NAME ) {
    $pages = query_posts( [
        'post_type'  => 'page',
        'meta_key'   => '_wp_page_template',
        'meta_value' => $TEMPLATE_NAME
    ] );
    $url   = '';
    if ( isset( $pages[0] ) ) {
        $array = (array) $pages[0];
        $url   = get_page_link( $array['ID'] );
    }

    return $url;
}