<?php $terms = get_terms('format', array('hide_empty' => false)); ?>
<section class="kl-sect-ressource-type">
    <div class="container kl-container-xl-1164">
        <div class="d-flex justify-content-md-between align-items-center justify-content-center kl-mb-50 kl-mb-md-40">
            <div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black text-md-start text-center">
                <h2>
                    <?php
                    if (get_field('titre_ressource_par_type_de_contenu')) :
                        echo get_field('titre_ressource_par_type_de_contenu');
                    endif;
                    ?>
                </h2>
            </div>
        </div>
        <div class="row">
            <?php

            if ($terms) :
                foreach ($terms as $term) {
                    $img = get_field('image_du_ressource_type', $term);
                    $term_url = esc_url(get_term_link($term));
            ?>

                    <div class="col-md-4 mb-5">
                        <a href="<?= $term_url;
                                    ?>" class="kl-resource-type-contenu mx-auto">
                            <div class="kl-img-type-resource">
                                <?php if ($img) : ?>
                                    <img src="<?= $img['url'];
                                                ?>" alt="<?= $img['alt'];
                                                        ?>">
                                <?php endif; ?>
                            </div>
                            <p><?= $term->name; ?></p>
                        </a>
                    </div>
            <?php
                }

            endif;
            ?>
        </div>
    </div>
</section>