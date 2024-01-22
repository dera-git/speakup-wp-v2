<?php get_header();

$current = get_queried_object();
$thumb = get_field('thumbnail_image_taxonomies_blanc', $current);
$color = get_field('couleur_taxonomie_thematiques', $current);
$urlReturn = getTplPageURL('templates/ressource.php');
$terms = get_terms('format', array('hide_empty' => false));

?>
<section class="kl-hero-single-page" style="--before-color: <?= $color ?>;">
    <div class="container-fluid">
        <a href="<?= $urlReturn ?>" class="d-flex align-items-center justify-content-center kl-link-return">
            <div>
                <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.2227 5.75C12.2227 6.13281 11.9219 6.43359 11.5664 6.43359H2.26953L5.90625 9.87891C6.17969 10.125 6.17969 10.5625 5.93359 10.8086C5.6875 11.082 5.27734 11.082 5.00391 10.8359L0.191406 6.24219C0.0546875 6.10547 0 5.94141 0 5.75C0 5.58594 0.0546875 5.42188 0.191406 5.28516L5.00391 0.691406C5.27734 0.445312 5.6875 0.445312 5.93359 0.71875C6.17969 0.964844 6.17969 1.40234 5.90625 1.64844L2.26953 5.09375H11.5664C11.9492 5.09375 12.2227 5.39453 12.2227 5.75Z" fill="#F1EDE9" />
                </svg>
            </div>
            <div class="kl-color-beige kl-ms-10">
                Retour à la liste des thémathiques
            </div>
        </a>
        <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row kl-mt-50 kl-animate-scroll" data-animation="animate__fadeInUp">
            <?php if ($thumb) : ?>
                <div class="kl-img-thumb-thematique">
                    <img src="<?= $thumb ?>" class="img-fluid kl-img-contain" alt="">
                </div>
            <?php endif ?>
            <div class="kl-text-130 kl-color-white kl-ff-secondary kl-mt-30 kl-mt-sm-0 kl-ms-sm-20 text-center text-sm-start kl-lh-0_8">
                <h1><?= $current->name ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="kl-section-filter kl-section-filter-ressource-thematique" style="--thematique-ressource-color: <?= $color ?>;">
    <div class="container kl-container-xl-1164">

        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="id-filter-ressource">
            <div class="kl-form-bloc-team">
                <div class="d-flex justify-content-lg-center kl-list-role">
                    <div class="form-check kl-form-check p-0">
                        <input type="radio" id="show_all_ressource" name="ressource[]" value="all-ressource" checked class="form-check-input kl-input-radio js-input-radio" />
                        <label for="show_all_ressource" class="form-check-label kl-input-label">Tous les contenus</label>
                    </div>

                    <?php
                    if ($terms) :
                        foreach ($terms as $size) :
                            echo '<div class="form-check kl-form-check p-0 js-pole">';
                            echo '<input class="form-check-input kl-input-radio js-input-radio" type="radio" id="size_' . $size->term_id . '" name="ressource[]" value="' . $size->term_id . '" />';
                            echo '<label class="form-check-label kl-input-label" for="size_' . $size->term_id . '">' . $size->name . '</label>';
                            echo '</div>';
                        endforeach;
                    endif;
                    ?>
                    <input type="number" value="<?= $current->term_id; ?>" name="current_them" class="d-none" id="id-current-them">
                    <button class="d-none">Apply filter</button>
                    <input type="hidden" name="action" value="ressource">
                </div>
            </div>
        </form>
    </div>
</section>
<section class="kl-sect-page-partenaire">
    <div class="container kl-container-xl-1164">
        <div class="kl-content-partenaire" id="id-filtered-ressource-container">
            <?php
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
                                'terms' => $current->term_id,
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
                            $excerpt = get_the_excerpt(get_the_ID());
                            $file = get_field('file_ressource', get_the_ID());
                    ?>
                    <div class="col-md-3 kl-card-resources mb-5 kl-animate-scroll" data-animation="animate__fadeInLeft">
                        <a href="<?php echo esc_url($permalink); ?>" class="kl-content-recourse">
                            <div class="kl-img-resource">
                                <?php if($thumbnail): echo $thumbnail; endif; ?>
                            </div>
                            <p><?= $title; ?></p>
                        </a>
                        <a href="<?php if($file) : echo esc_html(wp_get_attachment_url($file)); else: echo "#"; endif; ?>" class="kl-down-src-file" download style="color: <?= $color ?>;">Télécharger</a>
                    </div>
                    <?php
                        }
                        wp_reset_postdata();
                    } else {
                        echo '<p>Aucun ressource trouvé pour ce terme.</p>';
                    }
                    echo "</div>";
                }
            } else {
                echo '<p>Aucun terme trouvé dans la taxonomie.</p>';
            }
            ?>
        </div>
    </div>
</section>
<div class="kl-h-150"></div>

<?php get_footer() ?>