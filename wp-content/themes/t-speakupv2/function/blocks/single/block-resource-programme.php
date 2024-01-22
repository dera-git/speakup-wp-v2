<section class="kl-sect-resource-programme">
    <div class="container kl-container-xl-1164">
        <div class="d-flex justify-content-md-between align-items-center justify-content-center kl-mb-50 kl-mb-md-40">
            <div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black text-md-start text-center">
                <h2><?php
                    if (get_field('titre_ressource_detail_programme')) :
                        echo get_field('titre_ressource_detail_programme');
                    endif;
                    ?>
                </h2>
            </div>
            <div class="d-none d-lg-block">
                <?php if (get_field('lien_du_bouton_detail_programme')) : ?>
                    <a href="<?= get_field('lien_du_bouton_detail_programme')['url']; ?>" class="kl-btn-theme02 kl-min-w-365 <?= get_field('couleur_du_bouton_ressource'); ?>">
                        <?= get_field('lien_du_bouton_detail_programme')['title']; ?>
                        <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.08594 0.5625L4.4375 4.125C4.53125 4.24219 4.60156 4.38281 4.60156 4.5C4.60156 4.64062 4.53125 4.78125 4.4375 4.89844L1.08594 8.46094C0.875 8.69531 0.523438 8.69531 0.289062 8.48438C0.0546875 8.27344 0.0546875 7.92188 0.265625 7.6875L3.26562 4.5L0.265625 1.33594C0.0546875 1.10156 0.0546875 0.75 0.289062 0.539062C0.523438 0.328125 0.875 0.328125 1.08594 0.5625Z" fill="white" />
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <?php
                $resources = get_field('liste_des_ressoucres_tax');
                if($resources):
                    foreach ($resources as $resource) :
                        $permalink = get_permalink($resource->ID);
                        $title = get_the_title($resource->ID);
                        $thumbnail = get_the_post_thumbnail($resource->ID, 'large', ['class' => 'img-fluid', 'alt' => $title]);
                        $file = get_field('file_ressource', $resource->ID)['url'];
                ?>
                    <div class="col-md-3 kl-card-resources mb-5 kl-animate-scroll" data-animation="animate__fadeInLeft">
                        <a href="<?php echo esc_url($permalink); ?>" class="kl-content-recourse">
                            <div class="kl-img-resource">
                                <?php if($thumbnail): echo $thumbnail; endif; ?>
                            </div>
                            <p><?= $title; ?></p>
                        </a>
                        <a href="<?php if($file) : echo esc_html(wp_get_attachment_url($file)); else: echo "#"; endif; ?>" class="kl-down-src-file" download style="color: <?= get_field('couleur_lien_telecharger'); ?>;">Télécharger</a>
                    </div>
                <?php
                    endforeach;
                endif;
            ?>
        </div>
        <div class="d-lg-none text-center text-lg-start kl-mt-10">
            <?php if (get_field('lien_du_bouton_detail_programme')) : ?>
                <a href="<?= get_field('lien_du_bouton_detail_programme')['url']; ?>" class="kl-btn-theme02 kl-btn-custom-mw <?= get_field('couleur_du_bouton_ressource'); ?>">
                    <?= get_field('lien_du_bouton_detail_programme')['title']; ?>
                    <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.08594 0.5625L4.4375 4.125C4.53125 4.24219 4.60156 4.38281 4.60156 4.5C4.60156 4.64062 4.53125 4.78125 4.4375 4.89844L1.08594 8.46094C0.875 8.69531 0.523438 8.69531 0.289062 8.48438C0.0546875 8.27344 0.0546875 7.92188 0.265625 7.6875L3.26562 4.5L0.265625 1.33594C0.0546875 1.10156 0.0546875 0.75 0.289062 0.539062C0.523438 0.328125 0.875 0.328125 1.08594 0.5625Z" fill="white" />
                    </svg>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>