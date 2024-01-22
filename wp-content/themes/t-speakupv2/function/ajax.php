<?php

function ajax_filterposts_handler()
{
    $poles = (isset($_POST['poles'])) ? $_POST['poles'] : false;
    $all = (isset($_POST['all'])) ? $_POST['all'] : false;

    $tax_query = [];
    if ($poles) :
        $_POST['all'] == '';
        $tax_query[] = array(
            array(
                'taxonomy' => 'pole',
                'field' => 'id',
                'terms' => $_POST['poles']
            )
        );
    endif;

    $args = array(
        'post_type' => 'membre',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'tax_query' => $tax_query,
        'orderby' => 'title',
        'order'   => 'ASC',
    );

    if ($all) :
        $_POST['poles'] == '';
        $args = array(
            'post_type' => 'membre',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order'   => 'ASC',
        );
    endif;

    $posts = '<div class="nopostfound mb-5 pb-2 text-center kl-text-16 kl-fw-medium">Aucun résultat trouvé.</div>';

    $data = new WP_Query($args);
    if ($data->have_posts()) {

        ob_start(); ?>
        <div class="kl-grid-team">
            <?php while ($data->have_posts()) : $data->the_post();
                $role = get_field('role', get_the_ID()) ?>
                <div class="kl-grid-team-item">
                    <a href="<?php the_permalink() ?>" class="d-flex flex-column text-center">
                        <div class="kl-thumb-team">
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid kl-img-cover')) ?>
                        </div>
                        <div data-mh="name-team" class="kl-ff-secondary kl-color-black mb-2 kl-name-team">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <?php if ($role) : ?>
                            <div class="kl-fw-bold kl-color-orange-secondary mt-auto kl-role-team"><?= $role ?></div>
                        <?php endif ?>
                    </a>
                </div>
            <?php endwhile ?>
        </div>

        <?php

        $posts = ob_get_clean();
    }

    // Reset Post Data
    wp_reset_postdata();

    $return = array(
        'posts' => $posts
    );

    wp_send_json($return);
}

add_action('wp_ajax_filterposts', 'ajax_filterposts_handler');
add_action('wp_ajax_nopriv_filterposts', 'ajax_filterposts_handler');


function filter_partener()
{
    $term_id = isset($_POST['partenaire']) ? $_POST['partenaire'][0] : '';

    if ($term_id === 'all') {
        $terms = get_terms('type-partenaire', array('hide_empty' => false));
        if ($terms) {
            foreach ($terms as $term) {
                echo '<div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black kl-mb-40 text-md-start text-center">';
                echo '<h2 id="' . $term->taxonomy . '">' . $term->name . '</h2>';
                echo '</div>';
                echo '<div class="row kl-mb-80">';
                $args = array(
                    'post_type' => 'partenaire',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => $term->taxonomy,
                            'field' => 'id',
                            'terms' => $term->term_id,
                        ),
                    ),
                );

                $partenaires = new WP_Query($args);

                if ($partenaires->have_posts()) {
                    while ($partenaires->have_posts()) {
                        $partenaires->the_post();
                        $thumbnail = get_the_post_thumbnail(get_the_ID(), 'full');
                        $permalink = get_permalink();

                        echo '<div class="kl-custom-col-20">';
                        echo '<a href="' . $permalink . '" class="kl-partener-programme">';
                        echo '<div>' . $thumbnail . '</div>';
                        echo '</a>';
                        echo '</div>';
                    }

                    // Réinitialiser la requête
                    wp_reset_postdata();
                } else {
                    echo '<p>Aucun partenaire trouvé pour ce terme.</p>';
                }
                echo "</div>";
            }
        } else {
            echo '<p>Aucun terme trouvé dans la taxonomie.</p>';
        }
    } else {
        $term = get_term($term_id, 'type-partenaire');
        $args = array(
            'post_type' => 'partenaire',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'type-partenaire',
                    'field' => 'id',
                    'terms' => $term_id,
                ),
            ),
        );
        $term_name = $term->name;
        echo '<div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black kl-mb-40 text-md-start text-center">';
        echo '<h2>' . $term_name . '</h2>';
        echo '</div>';
        echo '<div class="row kl-mb-80">';

        $partenaires = new WP_Query($args);

        if ($partenaires->have_posts()) {
            while ($partenaires->have_posts()) {
                $partenaires->the_post();
                $thumbnail = get_the_post_thumbnail(get_the_ID(), 'full');
                $permalink = get_permalink();

                echo '<div class="kl-custom-col-20">';
                echo '<a href="' . $permalink . '" class="kl-partener-programme mx-h-108 mb-4">';
                echo '<div>' . $thumbnail . '</div>';
                echo '</a>';
                echo '</div>';
            }

            // Réinitialiser la requête
            wp_reset_postdata();
        } else {
            echo '<p>Aucun partenaire trouvé pour ce terme.</p>';
        }

        echo "</div>";
    }

    die();
}
add_action('wp_ajax_myfilter', 'filter_partener');
add_action('wp_ajax_nopriv_myfilter', 'filter_partener');

//ressource thematique
function filter_ressource_thematique()
{
    $term_id = isset($_POST['ressource']) ? $_POST['ressource'][0] : '';
    $current_them = $_POST['current_them'];
    $current = get_queried_object();
    $color = get_field('couleur_taxonomie_thematiques', $current);
    if ($term_id === 'all-ressource') {
        $terms = get_terms('format', array('hide_empty' => false));
        if ($terms) {
            foreach ($terms as $term) {
                echo '<div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black kl-mb-40 text-md-start text-center">';
                echo '<h2 id="' . $term->taxonomy . '">' . $term->name . '</h2>';
                echo '</div>';
                echo '<div class="row kl-mb-80">';
                $args = array(
                    'post_type' => 'ressource',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'thematique-ressource',
                            'field' => 'id',
                            'terms' => $current_them,
                        ),
                        array(
                            'taxonomy' => $term->taxonomy,
                            'field' => 'id',
                            'terms' => $term->term_id,
                        ),
                    ),
                );

                $ressources = new WP_Query($args);

                if ($ressources->have_posts()) {
                    while ($ressources->have_posts()) {
                        $ressources->the_post();
                        $permalink = get_permalink(get_the_ID());
                        $title = get_the_title(get_the_ID());
                        $thumbnail = get_the_post_thumbnail(get_the_ID(), 'large', ['class' => 'img-fluid', 'alt' => $title]);
                        $file = get_field('file_ressource', get_the_ID());
        ?>
                        <div class="col-md-3 kl-card-resources mb-5 kl-animate-scroll animate__animated animate__fadeInLeft" data-animation="animate__fadeInLeft">
                            <a href="<?php echo esc_url($permalink); ?>" class="kl-content-recourse">
                                <div class="kl-img-resource">
                                    <?php if ($thumbnail) : echo $thumbnail;
                                    endif; ?>
                                </div>
                                <p><?= $title; ?></p>
                            </a>
                            <a href="<?php if ($file) : echo esc_html(wp_get_attachment_url($file));
                                        else : echo "#";
                                        endif; ?>" class="kl-down-src-file" download style="color: <?= $color ?>;">Télécharger</a>
                        </div>
                <?php
                    }
                    // Réinitialiser la requête
                    wp_reset_postdata();
                } else {
                    echo '<p>Aucun ressource trouvé pour ce terme.</p>';
                }
                echo "</div>";
            }
        } else {
            echo '<p>Aucun terme trouvé dans la taxonomie.</p>';
        }
    } else {
        $term = get_term($term_id, 'format');
        $args = array(
            'post_type' => 'ressource',
            'posts_per_page' => -1,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'thematique-ressource',
                    'field' => 'id',
                    'terms' => $current_them,
                ),
                array(
                    'taxonomy' => 'format',
                    'field' => 'id',
                    'terms' => $term_id,
                ),
            ),
        );
        $term_name = $term->name;
        echo '<div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black kl-mb-40 text-md-start text-center">';
        echo '<h2>' . $term_name . '</h2>';
        echo '</div>';
        echo '<div class="row kl-mb-80">';

        $ressources = new WP_Query($args);

        if ($ressources->have_posts()) {
            while ($ressources->have_posts()) {
                $ressources->the_post();
                $permalink = get_permalink(get_the_ID());
                $title = get_the_title(get_the_ID());
                $thumbnail = get_the_post_thumbnail(get_the_ID(), 'large', ['class' => 'img-fluid', 'alt' => $title]);
                $file = get_field('file_ressource', get_the_ID());
                ?>
                <div class="col-md-3 kl-card-resources mb-5 kl-animate-scroll animate__animated animate__fadeInLeft" data-animation="animate__fadeInLeft">
                    <a href="<?php echo esc_url($permalink); ?>" class="kl-content-recourse">
                        <div class="kl-img-resource">
                            <?php if ($thumbnail) : echo $thumbnail;
                            endif; ?>
                        </div>
                        <p><?= $title; ?></p>
                    </a>
                    <a href="<?php if ($file) : echo esc_html(wp_get_attachment_url($file));
                                else : echo "#";
                                endif; ?>" class="kl-down-src-file" download style="color: <?= $color ?>;">Télécharger</a>
                </div>
<?php
            }

            // Réinitialiser la requête
            wp_reset_postdata();
        } else {
            echo '<p>Aucun ressource trouvé pour ce terme.</p>';
        }

        echo "</div>";
    }

    die();
}
add_action('wp_ajax_ressource', 'filter_ressource_thematique');
add_action('wp_ajax_nopriv_ressource', 'filter_ressource_thematique');

// Filter ressource single type

function ajax_filter_ressource_type()
{
    $thematiqueR = (isset($_POST['thematique_ressource'])) ? $_POST['thematique_ressource'] : '';
    $id_format = (isset($_POST['id_format'])) ? $_POST['id_format'] : '';

    $term = get_term_by('term_id', $thematiqueR, 'thematique-ressource'); 
    $thematiqueName = $term->name; 

    $tax_query = [];
    if ($thematiqueR === 'all') :
        $tax_query[] = array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'format',
                'field'    => 'id',
                'terms'    => $id_format,
            ),
        );
    else:
        $tax_query[] = array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'format',
                'field'    => 'id',
                'terms'    => $id_format,
            ),
            array(
                'taxonomy' => 'thematique-ressource',
                'field'    => 'id',
                'terms'    => $_POST['thematique_ressource'],
            ),
        );
    endif;

    $args = array(
        'post_type' => 'ressource',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'order'   => 'DSC',
        'tax_query' => $tax_query,
    );

    $posts = '<div class="nopostfound kl-mt-60 mb-5 pb-2 text-center kl-text-16 kl-fw-medium">Aucun résultat trouvé.</div>';

    $ressourceByType = new WP_Query($args);
    if ($ressourceByType->have_posts()) {

        ob_start(); ?>
            <div class="d-flex justify-content-md-between align-items-center justify-content-center kl-mb-50 kl-mb-md-40 kl-mt-80">
                <div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black text-md-start text-center kl-title-in-filter">
                    <?php if ($thematiqueR === 'all'): ?>
                        <h2>Toutes</h2>
                    <?php else: ?>
                        <h2><?php echo $thematiqueName ?></h2>
                    <?php endif ?>
                </div>
            </div>
            <div class="row kl-gx-20 kl-gx-xl-60 kl-gy-40">
                <?php
                    while($ressourceByType->have_posts()) : 
                        $ressourceByType->the_post();

                        $permalink = get_permalink();
                        $title = get_the_title();
                        $thumbnail = get_the_post_thumbnail('', 'large', ['class' => 'img-fluid kl-img-cover', 'alt' => $title]);
                        $file = get_field('file_ressource');
                    ?>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="text-center kl-card-theme03 kl-modif-card-theme">
                                <a href="<?php echo esc_url($permalink); ?>" class="kl-mb-20 kl-img-card-header03">
                                    <?php if($thumbnail): echo $thumbnail; endif; ?>
                                </a>
                                <a href="<?php echo esc_url($permalink); ?>" data-mh="title-resources" class="kl-text-12 kl-fw-medium kl-color-black kl-mb-15" style="min-height: 55px;">
                                    <p><?= $title; ?></p>
                                </a>
                                <div class="kl-color-orange-sixth kl-fw-bold text-uppercase mt-auto">
                                    <a href="<?php if($file) : echo esc_html(wp_get_attachment_url($file)); else: echo "#"; endif; ?>" class="kl-down-src-file kl-color-orange-fifth" download>Télécharger</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
            </div>

        <?php

        $posts = ob_get_clean();
    }

    // Reset Post Data
    wp_reset_postdata();

    $return = array(
        'posts' => $posts
    );

    wp_send_json($return);
}

add_action('wp_ajax_ressourceType', 'ajax_filter_ressource_type');
add_action('wp_ajax_nopriv_ressourceType', 'ajax_filter_ressource_type');
