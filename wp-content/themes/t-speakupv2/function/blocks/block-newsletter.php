<section class="kl-bg-brown-secondary kl-section-newsletter">
    <div class="container kl-container-xl-1164">
        <div class="row">
            <div class="col-lg-6 position-relative d-none d-lg-block">
                <?php $image = get_field('image_newsletter');
                if ($image) :
                    echo wp_get_attachment_image($image, 'large', false, array('class' => 'kl-img-news'));
                ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 kl-pt-50 kl-pt-md-70 kl-pt-lg-0 kl-color-white kl-animate-scroll" data-animation="animate__fadeInRight">
                <?php if (get_field('title_newsletter')) : ?>
                    <div class="kl-text-92 kl-ff-secondary kl-fw-regular kl-mb-40 kl-mb-md-20 text-center">
                        <h2><?php the_field('title_newsletter') ?></h2>
                    </div>
                <?php endif; ?>

                <?php if (get_field('text_under_title_newsletter')) : ?>
                    <div class="text-center kl-mb-30 kl-color-white">
                        <p><?php the_field('text_under_title_newsletter') ?></p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('form_newsletter')) : ?>
                    <div class="kl-newsletter-form">
                        <?php the_field('form_newsletter') ?>
                        <div class="text-center kl-text-10 kl-mt-20 kl-ps-lg-45 kl-pe-lg-45 kl-color-white">
                            <p>
                                <?php if (get_field('text_unregister_newsletter')) : ?>
                                    <?php the_field('text_unregister_newsletter') ?>
                                <?php endif; ?>

                                <?php $link = get_field('link_policy_newsletter');
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                ?>
                                    <a href="<?= esc_url($link_url); ?>" class="text-decoration-underline"><?= esc_html($link_title); ?></a>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>