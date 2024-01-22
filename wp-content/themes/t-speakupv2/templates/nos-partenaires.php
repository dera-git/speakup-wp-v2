<?php
/*
    Template Name: Nos partenaires
*/
get_header();
$terms = get_terms('type-partenaire', array('hide_empty' => false));
?>
<section class="kl-hero-single-page kl-hero--page" style="--before-color: #826C5F;">
    <div class="container kl-container-xl-1164">
        <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row kl-animate-scroll" data-animation="animate__fadeInUp">
            <div class="kl-text-130 kl-color-white kl-ff-secondary text-center text-sm-start kl-lh-0_8">
                <h1><?php the_title() ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="kl-section-filter kl-section-filter-partener">
    <div class="container kl-container-xl-1164">

        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
            <div class="kl-form-bloc-team">
                <div class="d-flex justify-content-lg-center kl-list-role">
                    <div class="form-check kl-form-check p-0">
                        <input type="radio" id="show_all" name="partenaire[]" value="all" checked class="form-check-input kl-input-radio js-input-radio" />
                        <label for="show_all" class="form-check-label kl-input-label">Tous les Partenaires</label>
                    </div>

                    <?php
                    if ($terms) :
                        foreach ($terms as $size) :
                            echo '<div class="form-check kl-form-check p-0 js-pole">';
                            echo '<input class="form-check-input kl-input-radio js-input-radio" type="radio" id="size_' . $size->term_id . '" name="partenaire[]" value="' . $size->term_id . '" />';
                            echo '<label class="form-check-label kl-input-label" for="size_' . $size->term_id . '">' . $size->name . '</label>';
                            echo '</div>';
                        endforeach;
                    endif;
                    ?>

                    <button class="d-none">Apply filter</button>
                    <input type="hidden" name="action" value="myfilter">
                </div>
            </div>
        </form>
    </div>
</section>

<section class="kl-sect-page-partenaire">
    <div class="container kl-container-xl-1164">
        <div class="kl-content-partenaire" id="id-filtered-results-container">
            <?php
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
            } else {
                echo '<p>Aucun terme trouvé dans la taxonomie.</p>';
            }
            ?>
        </div>
    </div>
</section>
<?php the_content() ?>
<div class="kl-h-150"></div>

<?php get_footer() ?>