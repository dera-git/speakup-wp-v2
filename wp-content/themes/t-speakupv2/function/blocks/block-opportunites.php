<?php
$args = array(
    'post_type' => 'offre-emploi',
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'DESC'
);
$query = new WP_Query($args);

if ($query->have_posts()) :
?>
    <section class="kl-section-opportunity">
        <div class="container kl-container-xl-1164">
            <div class="d-flex justify-content-between align-items-end kl-mb-50 kl-mb-md-40">
                <?php if (get_field('title_featured_offres')) : ?>
                    <div class="kl-text-82 kl-ff-secondary kl-fw-regular">
                        <h2><?php the_field('title_featured_offres') ?></h2>
                        <?php if (get_field('subtitle_featured_offres')) : ?>
                            <span class="kl-text-60"><?php the_field('subtitle_featured_offres') ?></span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php $link = get_field('link_featured_offres');
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                ?>
                    <div class="d-none d-lg-block">
                        <a href="<?= esc_url($link_url); ?>" class="kl-btn-theme02 kl-min-w-240 kl-bg-orange-seventh">
                            <?= esc_html($link_title); ?>
                            <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.08594 0.5625L4.4375 4.125C4.53125 4.24219 4.60156 4.38281 4.60156 4.5C4.60156 4.64062 4.53125 4.78125 4.4375 4.89844L1.08594 8.46094C0.875 8.69531 0.523438 8.69531 0.289062 8.48438C0.0546875 8.27344 0.0546875 7.92188 0.265625 7.6875L3.26562 4.5L0.265625 1.33594C0.0546875 1.10156 0.0546875 0.75 0.289062 0.539062C0.523438 0.328125 0.875 0.328125 1.08594 0.5625Z" fill="white"></path>
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row kl-gy-20 kl-gx-30 kl-gx-lg-35">
                <?php while ($query->have_posts()) {
                    $query->the_post();
                    $terms = get_the_terms($query->the_id, 'categorie_offre');
                ?>
                    <div class="col-lg-6 kl-animate-scroll" data-animation="animate__fadeInUp">
                        <a href="<?php the_permalink(); ?>" class="d-flex align-items-center justify-content-between kl-card-jobs">
                            <div class="flex-grow-1 kl-pe-35">
                                <div class="kl-text-20 kl-fw-bold kl-color-black">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="d-flex align-items-center kl-mt-10">
                                    <?php if ($terms && !is_wp_error($terms)) : ?>
                                        <div class="kl-text-12 kl-fw-medium kl-color-orange-seventh text-uppercase kl-text-jobs">
                                            <?php foreach ($terms as $term) {
                                                echo $term->name;
                                                break;
                                            } ?>
                                        </div>
                                    <?php
                                    endif;

                                    $location = get_field('location_details_offre', get_the_ID());
                                    if ($location) :
                                    ?>
                                        <div class="kl-text-16 kl-fw-medium kl-color-orange-seventh">
                                            <i class="fa-light fa-location-dot me-1"></i> <?= $location ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div>
                                <svg width="19" height="33" viewBox="0 0 19 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.640625 32.1011C0.5 31.9604 0.5 31.8198 0.5 31.6792C0.5 31.5386 0.5 31.3979 0.640625 31.3276L17.0938 16.4917L0.640625 1.72607C0.429688 1.58545 0.429688 1.16357 0.640625 0.952637C0.851562 0.741699 1.20312 0.741699 1.41406 0.952637L18.2891 16.1401C18.5 16.3511 18.5 16.7026 18.2891 16.9136L1.41406 32.1011C1.20312 32.312 0.851562 32.312 0.640625 32.1011Z" fill="#D6924E" />
                                </svg>
                            </div>
                        </a>
                    </div>

                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
<?php endif ?>