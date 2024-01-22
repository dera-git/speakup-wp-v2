<section id="id-section-form-offer" class="kl-section-form-offer">
    <div class="container kl-container-xl-1164">
        <?php if(get_field('titre_postuler_en_ligne')) : ?>
            <div class="kl-ff-secondary kl-text-92 kl-mb-30 text-center">
                <h2><?php the_field('titre_postuler_en_ligne') ?></h2>
            </div>
        <?php endif ?>
        <?php if(get_field('formulaire_postuler')) : ?>
            <div class="kl-form-single-offer">
                <?php the_field('formulaire_postuler') ?>
            </div>
        <?php endif ?>
    </div>
</section>