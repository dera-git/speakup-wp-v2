<?php
function add_theme_scripts() {
    $template_data       = wp_get_theme();
    $template_version    = $template_data['Version'];

    wp_enqueue_style('select.min', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css', null);
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/./node_modules/bootstrap/dist/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/./fonts/fontawesome-pro-6.2.1-web/css/all.min.css', array(), null);
    wp_enqueue_style('swiper', get_template_directory_uri().'/assets/./node_modules/swiper/swiper-bundle.min.css', array(), null);
    wp_enqueue_style('anime-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), null);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), $template_version);

    wp_enqueue_script('bootstrap.bundle.min', get_template_directory_uri().'/assets/./node_modules/bootstrap/dist/js/bootstrap.bundle.js', array(), null, true);
    wp_enqueue_script('gsap.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js', array(), null, true);
    wp_enqueue_script('ScrollToPlugin.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollToPlugin.min.js', array(), null, true);
    wp_enqueue_script('ScrollTrigger.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js', array(), null, true);
    wp_enqueue_script('waypoint', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js', array('jquery'), null, true);
    wp_enqueue_script('select.min.js', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', array(), null, true);
    wp_enqueue_script('swiper.min.js', get_template_directory_uri().'/assets/./node_modules/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('matchHeight-min', get_template_directory_uri().'/assets/./node_modules/matchheight/dist/MatchHeight.min.js', array(), null, true);
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), $template_version, true);

    if(is_tax('format')){
        wp_enqueue_script('ressource-single-type', get_template_directory_uri().'/assets/js/ressource-single-type.js', array('jquery'), $template_version, true);
    }
    if( is_page_template(array('templates/nos-partenaires.php'))){
        wp_enqueue_script('partenaire', get_template_directory_uri().'/assets/js/partenaire.js', array('jquery'), $template_version, true);
    }
    if( is_page_template(array('templates/notre-equipe.php'))){
        wp_enqueue_script('team', get_template_directory_uri().'/assets/js/team.js', array('jquery'), $template_version, true);
    }
    if(is_tax(array('thematique-ressource'))){
        wp_enqueue_script('ressource', get_template_directory_uri().'/assets/js/ressource.js', array('jquery'), $template_version, true);
    }

    wp_localize_script('team', 'wpAjax',
        array( 'ajaxUrl' => admin_url('admin-ajax.php'))
    );
    wp_localize_script('ressource-single-type', 'urlAjaxRessourceType',
        array( 'ajaxUrl' => admin_url('admin-ajax.php'))
    );
    wp_localize_script('partenaire', 'url_ajax', array('ajaxUrl' => admin_url('admin-ajax.php')));
    wp_localize_script('ressource', 'url_ajax_ressource', array('ajaxUrl' => admin_url('admin-ajax.php')));
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );