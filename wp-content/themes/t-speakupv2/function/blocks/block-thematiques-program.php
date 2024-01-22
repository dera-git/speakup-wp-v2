<?php 
$thematiques = get_terms(
    array(
        'taxonomy'   => 'thematique',
        'hide_empty' => false,
    )
);

?>
<section class="kl-section-thematiques-pro">
    <div class="container kl-container-xl-1164">
        <?php if (get_field('titre_thematiques_pro')) : ?>
            <div class="kl-text-102 kl-ff-secondary kl-fw-regular kl-color-black kl-mb-50 kl-mb-md-70">
                <h2><?php the_field('titre_thematiques_pro') ?></h2>
            </div>
        <?php endif ?>
        <?php if ( ! empty( $thematiques ) && is_array( $thematiques ) ): ?>
            <div class="row justify-content-center kl-gy-60">
                <?php foreach ( $thematiques as $thematique ): ?>
                    <?php $thumb = get_field('thumbnail_image_taxonomies', $thematique);
                    $color_thematique = get_field('couleur_taxonomie_thematiques', $thematique); ?>
                    <div class="col-lg-4">
                        <a href="<?php echo esc_url( get_term_link( $thematique ) ) ?>" class="d-flex flex-column text-center kl-max-w-345 mx-auto kl-animate-items-scroll kl-card-res-cat">
                            <?php if($thumb): ?>
                                <div data-mh="thum-img-thematique" class="d-flex justify-content-center align-items-center">
                                    <img src="<?php echo $thumb ?>" class="img-fluid" alt="">
                                </div>
                            <?php endif ?>
                            <div data-mh="title-thematique" class="kl-text-20 kl-fw-bold kl-mt-30" style="color: <?= $color_thematique ?>;">
                                <h3><?php echo $thematique->name; ?></h3>
                            </div>
                            <div class="kl-color-black kl-mt-30">
                                <p><?php echo $thematique->description; ?></p>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endif ?>
    </div>
</section>