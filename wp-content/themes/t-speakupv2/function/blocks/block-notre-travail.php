<section class="kl-section-works position-relative">
    <div class="container-fluid px-0">
        <div class="row flex-column-reverse flex-lg-row kl-gy-45">
            <div class="col-lg-6 pt-xl-3">
                <div class="kl-desc-works kl-max-w-lg-555">
                    <?php if(get_field('titre_notre_travail')): ?>
                        <div class="kl-text-130 kl-color-white kl-ff-secondary kl-mb-25 kl-animate-scroll kl-animation__delay-02" data-animation="animate__fadeInLeft">
                            <h1><?php the_field('titre_notre_travail') ?></h1>
                        </div>
                    <?php endif ?>
                    <?php if(get_field('description_notre_travail')): ?>
                        <div class="kl-text-16 kl-color-black kl-ff-primary kl-mt-between-p kl-p-strong-600 kl-animate-scroll kl-animation__delay-04" data-animation="animate__fadeInLeft">
                            <?php the_field('description_notre_travail') ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php if(get_field('image_notre_travail')): ?>
                    <div class="kl-image-works kl-animate-scroll" data-animation="animate__fadeInRight">
                        <img src="<?php the_field('image_notre_travail') ?>" class="img-fluid kl-img-cover" alt="">
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>