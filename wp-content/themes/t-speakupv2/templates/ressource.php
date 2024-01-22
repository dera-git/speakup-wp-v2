<?php
/*
    Template Name: Ressource
*/
get_header();
?>

    <section class="kl-section-resource-hero">
        <div class="container kl-max-w-lg-966">
            <div class="kl-text-130 kl-ff-secondary kl-fw-regular text-center kl-color-beige kl-title-resource">
                <h1><?php the_title() ?></h1>
            </div>
        </div>
    </section>
<?php the_content() ?>
<div class="kl-h-150"></div>

<?php get_footer() ?>