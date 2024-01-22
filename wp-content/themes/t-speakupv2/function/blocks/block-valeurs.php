<?php
if (have_rows('list_our_values')) :
?>
    <section class="kl-section-value">
        <div class="container kl-container-xl-1164">
            <?php if (get_field('title_our_values')) : ?>
                <div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black kl-mb-40 kl-mb-md-85 text-center">
                    <h2><?php the_field('title_our_values') ?></h2>
                </div>
            <?php endif; ?>
            <div class="kl-grid-value js-wrap-parallax">
                <?php
                while (have_rows('list_our_values')) : the_row();
                    $title = get_sub_field('title_item_values');
                    $subtitle = get_sub_field('subtitle_item_values');
                    $color = get_sub_field('color_item_values');
                    $image = get_sub_field('image_item_values');
                ?>
                    <div class="kl-item-value text-center kl-color-a kl-animate-items-scroll" style="color: <?= $color; ?> !important;">
                        <div class="js-hover-parallax">
                            <div data-mh="item-ideas" class="position-relative h-100">
                                <?php if ($title) : 
                                    $firstLetter = substr($title, 0, 1); 
                                ?>
                                    <div class="kl-ff-secondary text-uppercase kl-bg-text js-text-prallax"><?= $firstLetter; ?></div>
                                <?php endif; ?>
                                <div class="js-img-prallax">
                                    <?php if ($image) :
                                        echo wp_get_attachment_image($image, 'large', false, array('class' => 'img-fluid'));
                                    endif; ?>
                                </div>
                            </div>
                            <?php if ($title) : ?>
                                <div data-mh="title-ideas" class="kl-text-22 kl-fw-bold kl-ff-primary-mb kl-mt-20">
                                    <h3><?= $title ?></h3>
                                </div>
                            <?php endif; ?>
                            <?php if ($subtitle) : ?>
                                <div class="kl-text-20 kl-ff-primary-mb"><?= $subtitle; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>