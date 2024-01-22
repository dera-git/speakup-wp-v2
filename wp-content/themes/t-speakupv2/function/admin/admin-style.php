<?php
function admin_style(){
    wp_enqueue_style('admin-bootstrap', get_template_directory_uri() . '/assets/css/admin/bootstrap-grid.rtl.css');
    wp_enqueue_style('admin-styles', get_template_directory_uri() . '/assets/css/admin/panel.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

add_theme_support(
    'editor-color-palette',
    array(
        array(
            'name'  => 'Bleu',
            'slug'  => 'bleu',
            'color' => '#1A95C2',
        ),
        array(
            'name'  => 'Orange',
            'slug'  => 'orange',
            'color' => '#F19101',
        ),
        array(
            'name'  => 'Vert',
            'slug'  => 'vert',
            'color' => '#24ACAC',
        ),
        array(
            'name'  => 'Rouge',
            'slug'  => 'rouge',
            'color' => '#D63D61',
        ),
        array(
            'name'  => 'Noir',
            'slug'  => 'noir',
            'color' => '#000',
        ),
    )
);