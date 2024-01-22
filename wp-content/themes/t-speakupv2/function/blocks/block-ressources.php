<section class="kl-section-group <?php if (get_page_template_slug() == "templates/ressource.php") : echo 'kl-page-resource'; endif; ?>">
    <?php
    $args = array(
        'post_type' => 'ressource',
        'posts_per_page' => 8,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        $link = get_field('link_featured_ressource');
    ?>
        <?php
        if (get_page_template_slug() == "templates/ressource.php") :
        ?>
            <div class="kl-title-last-resource">
                <div class="container kl-container-xl-1164 position-relative">
                    <div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black kl-mb-40 kl-mb-md-10 kl-title-last-resource-item">
                        <h2><?php the_field('title_featured_ressource') ?></h2>
                    </div>
                </div>
            </div>
        <?php
        endif;
        ?>
        <div class="kl-section-resources">
            <div class="container kl-container-xl-1164 d-none d-md-block position-relative">
                <div class="kl-swiper-navigation">
                    <div class="kl-swiper-button-prev kl-me-20">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.8945 19.5391C11.2461 19.8906 11.2461 20.4766 10.8359 20.8281C10.4844 21.1797 9.89844 21.1797 9.54688 20.7695L1.10938 11.3945C0.757812 11.043 0.757812 10.5156 1.10938 10.1641L9.54688 0.847656C9.89844 0.4375 10.4844 0.4375 10.8359 0.730469C11.2461 1.14062 11.2461 1.72656 10.8945 2.07812L3.04297 10.75L10.8945 19.5391Z" fill="#DA7021" />
                        </svg>
                    </div>
                    <span class="kl-separator-nav"></span>
                    <div class="kl-swiper-button-next kl-ms-20">
                        <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.10547 19.5391C0.753906 19.8906 0.753906 20.4766 1.16406 20.8281C1.51562 21.1797 2.10156 21.1797 2.45312 20.7695L10.8906 11.3945C11.2422 11.043 11.2422 10.5156 10.8906 10.1641L2.45312 0.847656C2.10156 0.4375 1.51562 0.4375 1.16406 0.730469C0.753906 1.14062 0.753906 1.72656 1.10547 2.07812L8.95703 10.75L1.10547 19.5391Z" fill="#DA7021" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row kl-content-resources">
                <div class="kl-max-w-md-270 kl-me-md-65 kl-desc-resources kl-transform-in-mobile kl-animate-scroll
                <?php if (get_page_template_slug() == "templates/ressource.php") : echo 'd-none';
                endif; ?>
                " data-animation="animate__fadeInLeft">
                    <?php if (get_field('title_featured_ressource')) : ?>
                        <div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black kl-mb-40 kl-mb-md-10">
                            <h2><?php the_field('title_featured_ressource') ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('description_featured_ressource')) : ?>
                        <div>
                            <p><?php the_field('description_featured_ressource') ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                    ?>
                        <div class="d-none d-md-block kl-mt-35">
                            <a href="<?= esc_url($link_url); ?>" class="kl-btn-theme02 kl-min-w-240 kl-bg-black">
                                <?= esc_html($link_title); ?>
                                <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.08594 0.5625L4.4375 4.125C4.53125 4.24219 4.60156 4.38281 4.60156 4.5C4.60156 4.64062 4.53125 4.78125 4.4375 4.89844L1.08594 8.46094C0.875 8.69531 0.523438 8.69531 0.289062 8.48438C0.0546875 8.27344 0.0546875 7.92188 0.265625 7.6875L3.26562 4.5L0.265625 1.33594C0.0546875 1.10156 0.0546875 0.75 0.289062 0.539062C0.523438 0.328125 0.875 0.328125 1.08594 0.5625Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="container kl-container-xl-1164 d-md-none position-relative">
                    <div class="kl-swiper-navigation">
                        <div class="kl-swiper-button-prev kl-me-20">
                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8945 19.5391C11.2461 19.8906 11.2461 20.4766 10.8359 20.8281C10.4844 21.1797 9.89844 21.1797 9.54688 20.7695L1.10938 11.3945C0.757812 11.043 0.757812 10.5156 1.10938 10.1641L9.54688 0.847656C9.89844 0.4375 10.4844 0.4375 10.8359 0.730469C11.2461 1.14062 11.2461 1.72656 10.8945 2.07812L3.04297 10.75L10.8945 19.5391Z" fill="#DA7021" />
                            </svg>
                        </div>
                        <span class="kl-separator-nav"></span>
                        <div class="kl-swiper-button-next kl-ms-20">
                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.10547 19.5391C0.753906 19.8906 0.753906 20.4766 1.16406 20.8281C1.51562 21.1797 2.10156 21.1797 2.45312 20.7695L10.8906 11.3945C11.2422 11.043 11.2422 10.5156 10.8906 10.1641L2.45312 0.847656C2.10156 0.4375 1.51562 0.4375 1.16406 0.730469C0.753906 1.14062 0.753906 1.72656 1.10547 2.07812L8.95703 10.75L1.10547 19.5391Z" fill="#DA7021" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="js-swiper-resources kl-swiper-resources kl-animate-scroll" data-animation="animate__fadeInRight">
                    <div class="swiper-wrapper">
                        <?php while ($query->have_posts()) {
                            $query->the_post();
                        ?>
                            <div class="swiper-slide">
                                <div class="text-center kl-card-theme03">
                                    <div class="kl-mb-20 kl-img-card-header03">
                                        <?php the_post_thumbnail('large', array('class' => 'img-fluid kl-img-cover', 'alt' => get_the_title())); ?>
                                    </div>
                                    <div data-mh="title-resources" class="kl-text-12 kl-fw-medium kl-mb-15">
                                        <p><?php the_title(); ?></p>
                                    </div>
                                    <?php
                                    $file = get_field('file_ressource', get_the_ID());
                                    if ($file) :
                                        $url = wp_get_attachment_url($file); ?>
                                        <div class="kl-color-orange-sixth kl-fw-bold text-uppercase mt-auto">
                                            <a href="<?php echo esc_html($url); ?>" class="kl-color-orange-sixth" download>Télécharger</a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                    <?php
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                    ?>
                        <div class="d-md-none kl-mt-20 kl-transform-in-mobile">
                            <a href="<?= esc_url($link_url); ?>" class="kl-btn-theme02 kl-min-w-240 kl-bg-black">
                                <?= esc_html($link_title); ?>
                                <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.08594 0.5625L4.4375 4.125C4.53125 4.24219 4.60156 4.38281 4.60156 4.5C4.60156 4.64062 4.53125 4.78125 4.4375 4.89844L1.08594 8.46094C0.875 8.69531 0.523438 8.69531 0.289062 8.48438C0.0546875 8.27344 0.0546875 7.92188 0.265625 7.6875L3.26562 4.5L0.265625 1.33594C0.0546875 1.10156 0.0546875 0.75 0.289062 0.539062C0.523438 0.328125 0.875 0.328125 1.08594 0.5625Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif ?>
</section>