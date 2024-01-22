<?php
$post_slider_actus = get_field('listing_slider_actus_banner');
if( $post_slider_actus ):
?>

<section class="kl-section-banner">
    <div class="position-relative kl-swiper-home kl-z-index-2">
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <?php  $i = 1;
            foreach( $post_slider_actus as $post ):
                setup_postdata($post); ?>
                <div class="swiper-slide slide-<?=$i?>"
                     data-cat="ACTUALITÉ - <?= get_the_date('d F Y', $post->ID)?>"
                     data-title="<?=$post->post_title?>"
                     data-link="<?php echo esc_url(get_permalink($post->ID))?>"
                     data-txt-btn="En savoir plus">
                    <?php if (has_post_thumbnail($post->ID)) : ?>
                        <?php echo get_the_post_thumbnail($post->ID, 'post-image',array('class' => 'img-fluid kl-img-cover'))?>
                    <?php endif; ?>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="container kl-container-xl-1164 position-relative">
            <div class="swiper-pagination text-start kl-swiper-pagination"></div>
        </div>
        <div class="slide-captions"></div>
    </div>
</section>
<?php endif; ?>