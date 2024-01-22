<?php
function tax_init() {
    // nomdelaTAX
    // register_taxonomy(
    //     'categorie_ressource',
    //     'nomdelaTAX',
    //     array(
    //         'show_in_rest'              => true,
    //         'label'                     => 'nomdelaTAX',
    //         'rewrite' => array('slug'   => 'categorie-nomdelaTAX'),
    //         'hierarchical'              => true
    //     )
    // );

    // register_taxonomy(
    //     'category_program',
    //     'programme',
    //     array(
    //         'show_in_rest'              => true,
    //         'label'                     => 'Thématiques',
    //         'rewrite' => array('slug'   => 'thematiques'),
    //         'hierarchical'              => true
    //     )
    // );
}
add_action('init', 'tax_init');