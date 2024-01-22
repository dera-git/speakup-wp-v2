<?php 
 get_header();
?>

<section class="kl-hero-single-page kl-hero--page" style="--before-color: #D6924E;">
    <div class="container kl-container-xl-1164">
        <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row kl-animate-scroll" data-animation="animate__fadeInUp">
            <div class="kl-text-30 kl-color-beige kl-fw-bold text-center">
                <h1><?php the_title() ?></h1>
            </div>
        </div>
    </div>
</section>

<?php the_content() ?>

<?php get_footer() ?>