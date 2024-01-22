<?php
/**
 * Template Name: Contact
 */

 get_header()
?>

<section class="kl-hero-single-page kl-hero--page" style="--before-color: #DA7021;">
    <div class="container kl-container-xl-1164">
        <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row kl-animate-scroll" data-animation="animate__fadeInUp">
            <div class="kl-text-120 kl-color-white kl-ff-secondary text-center text-sm-start kl-lh-0_8">
                <h1><?php the_title() ?></h1>
            </div>
        </div>
    </div>
</section>
<div class="kl-contact-wrapper position-relative">
    <?php if(get_field('image_fond_contact')): ?>
        <img src="<?= get_field('image_fond_contact')['url']; ?>" alt="<?= get_field('image_fond_contact')['title']; ?>" class="kl-img-fond-contact kl-animate-scroll" data-animation="animate__fadeInRight">
    <?php endif; ?>
    <?php the_content() ?>
</div>
<div class="kl-h-150"></div>

<?php get_footer() ?>