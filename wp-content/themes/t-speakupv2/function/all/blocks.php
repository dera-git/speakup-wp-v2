<?php
function my_acf_init_block_types(){

    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(
            array(
                'name'              => 'slider_actus',
                'title'             => 'slider actus',
                'description'       => 'Bloc slider actualites',
                'render_template'   => 'function/blocks/block-slider-actus.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('slider', 'actus', 'Actualité'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'programme-a-la-une',
                'title'             => 'Programmes à la une',
                'description'       => 'Bloc Liste programme (maximum 3 programmes)',
                'render_template'   => 'function/blocks/block-program.php',
                'category'          => 'formatting',
                'icon'              => 'schedule',
                'keywords'          => array('programme', 'Programme à la une'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'actus',
                'title'             => 'Actualités',
                'description'       => 'Bloc liste actualités',
                'render_template'   => 'function/blocks/block-actus.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('actus', 'Actualité'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'ressources',
                'title'             => 'Ressources',
                'description'       => 'Bloc liste ressources',
                'render_template'   => 'function/blocks/block-ressources.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('ressources', 'ressources'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'valeurs',
                'title'             => 'Nos valeurs',
                'description'       => 'Bloc Liste de nos valeurs',
                'render_template'   => 'function/blocks/block-valeurs.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('valeurs', 'Nos valeurs'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'a-propos',
                'title'             => 'À propos',
                'description'       => 'Protéger - Impulser - Engager',
                'render_template'   => 'function/blocks/block-a-propos.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('à propos', 'À propos', 'Protéger', 'Impulser', 'Engager'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'newsletter',
                'title'             => 'Newsletter',
                'description'       => 'Bloc Newsletter',
                'render_template'   => 'function/blocks/block-newsletter.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('newsletter', 'Inscription newsletter'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'opportunites',
                'title'             => 'Opportunités',
                'description'       => 'Bloc Opportunités d\'emplois et de stages',
                'render_template'   => 'function/blocks/block-opportunites.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('opportunité', 'offre d\'emplois'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'notre-travail',
                'title'             => 'Notre travail',
                'description'       => 'Bloc Notre travail',
                'render_template'   => 'function/blocks/block-notre-travail.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('notre-travail', 'Notre travail'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'thematiques-program',
                'title'             => 'Thématiques (programme)',
                'description'       => 'Bloc Thématiques (programme)',
                'render_template'   => 'function/blocks/block-thematiques-program.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('thematiques-program', 'thématiques', 'programme'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'banner-programme',
                'title'             => 'Bannière détail programme',
                'description'       => 'Bloc bannière détail programme',
                'render_template'   => 'function/blocks/single/block-banner-programme.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('bannière', 'détail programme'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'about-programme',
                'title'             => 'À propos détail programme',
                'description'       => 'Bloc à propos détail programme',
                'render_template'   => 'function/blocks/single/block-about-programme.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('a propos', 'détail programme'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'resource-programme',
                'title'             => 'Ressource détail programme',
                'description'       => 'Bloc ressource détail programme',
                'render_template'   => 'function/blocks/single/block-resource-programme.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('ressource', 'détail programme'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'contact-partenaire-programme',
                'title'             => 'Conatct & partenaire détail programme',
                'description'       => 'Bloc conatct & partenaire détail programme',
                'render_template'   => 'function/blocks/single/block-contact-partenaire-programme.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('conatct & partenaire', 'détail programme'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'champion-programme',
                'title'             => 'Champion détail programme',
                'description'       => 'Bloc champion détail programme',
                'render_template'   => 'function/blocks/single/block-champion-programme.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('champion', 'détail programme'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'thematiques-resource',
                'title'             => 'Thématiques (ressource)',
                'description'       => 'Bloc Thématiques (ressource)',
                'render_template'   => 'function/blocks/block-thematiques-resource.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('thematiques-resource', 'thématiques', 'ressource'),
            )
        );
        
        acf_register_block_type(
            array(
                'name'              => 'resource-type',
                'title'             => 'Ressource par type de contenu',
                'description'       => 'Bloc Ressource par type de contenu',
                'render_template'   => 'function/blocks/block-ressource-type.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('resource-type', 'type', 'contenu'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'offre-emploi',
                'title'             => 'Offre d\'emploi',
                'description'       => 'Bloc Offre d\'emploi',
                'render_template'   => 'function/blocks/block-offre-emploi.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('offre', 'emploi'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'details-offre',
                'title'             => 'Détails offre',
                'description'       => 'Bloc Détail offre',
                'render_template'   => 'function/blocks/single/block-detail-offre.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('détails offre', 'postuler', 'emploi', 'offre'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'postuler-ligne',
                'title'             => 'Postuler en ligne',
                'description'       => 'Bloc formulaire Postuler en ligne',
                'render_template'   => 'function/blocks/single/block-postuler-ligne.php',
                'category'          => 'formatting',
                'icon'              => 'admin-post',
                'keywords'          => array('fomulaire postuler en ligne', 'fomulaire', 'postuler', 'emploi', 'offre'),
            )
        );
    }

}
add_action('acf/init', 'my_acf_init_block_types');