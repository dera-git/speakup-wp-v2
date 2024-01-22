<?php
function codex_custom_init() {

    // nomduCPT
    // $labels_program = array(
    //     'name'                  => 'programme',
    //     'singular_name'         => 'programme',
    //     'add_new'               => 'Ajouter une programme',
    //     'add_new_item'          => 'Ajouter une nouvelle programme',
    //     'edit_item'             => 'Editer une programme',
    //     'new_item'              => 'Nouvelle programme',
    //     'all_items'             => 'Toutes les programmes',
    //     'view_item'             => 'Voir programme',
    //     'search_items'          => 'Chercher une programme',
    //     'not_found'             =>  'Aucune programme trouvée',
    //     'not_found_in_trash'    => 'Aucune programme trouvée dans la corbeille',
    //     'parent_item_colon'     => '',
    //     'menu_name'             => 'Programme',
    // );
    // $args = array(
    //     'labels'                => $labels_program,
    //     'public'                => false,
    //     'publicly_queryable'    => false,
    //     'show_ui'               => true,
    //     'show_in_menu'          => true,
    //     'query_var'             => true,
    //     'rewrite'               => array('slug' => 'programme'),
    //     'capability_type'       => 'post',
    //     'has_archive'           => true,
    //     'hierarchical'          => false,
    //     'show_in_rest'          => false,
    //     'menu_position'         => null,
    //     //'taxonomies'    => ['thematiques'],
    //     'menu_icon'             => 'dashicons-media-document',
    //     'supports'              => array('title', 'editor', 'thumbnail', 'revisions')
    // );
    // register_post_type('programme', $args);

    // nomduCPT
//    $labels = array(
//        'name'                  => 'nomduCPT',
//        'singular_name'         => 'nomduCPT',
//        'add_new'               => 'Ajouter une nomduCPT',
//        'add_new_item'          => 'Ajouter une nouvelle nomduCPT',
//        'edit_item'             => 'Editer une nomduCPT',
//        'new_item'              => 'Nouvelle nomduCPT',
//        'all_items'             => 'Toutes les nomduCPTs',
//        'view_item'             => 'Voir nomduCPT',
//        'search_items'          => 'Chercher nomduCPT',
//        'not_found'             =>  'Aucune nomduCPT trouvée',
//        'not_found_in_trash'    => 'Aucune nomduCPT trouvée dans la corbeille',
//        'parent_item_colon'     => '',
//        'menu_name'             => 'nomduCPTs',
//    );
//    $args = array(
//        'labels'                => $labels,
//        'public'                => false,
//        'publicly_queryable'    => false,
//        'show_ui'               => true,
//        'show_in_menu'          => true,
//        'query_var'             => true,
//        'rewrite'               => array('slug' => 'nomduCPT'),
//        'capability_type'       => 'post',
//        'has_archive'           => true,
//        'hierarchical'          => false,
//        'show_in_rest'          => false,
//        'menu_position'         => null,
//        'menu_icon'             => 'dashicons-megaphone',
//        'supports'              => array('title', 'editor', 'thumbnail', 'revisions')
//    );
//    register_post_type('nomduCPT', $args);

}
add_action('init', 'codex_custom_init');
