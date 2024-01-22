<?php 
/**
 * Template Name: Notre équipe
 */

 get_header();

 $poles = get_terms('pole', array('hide_empty' => false));

 $data = new WP_Query(array(
    'post_type'=>'membre',
    'posts_per_page' => -1,
    'post_status' => ' publish',
    'orderby' => 'title',
    'order'   => 'ASC',
));
?>

<section class="kl-hero-single-page kl-hero--page" style="--before-color: #DA7021;">
    <div class="container kl-container-xl-1164">
        <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row kl-animate-scroll" data-animation="animate__fadeInUp">
            <div class="kl-text-130 kl-color-white kl-ff-secondary text-center text-sm-start kl-lh-0_8">
                <h1><?php the_title() ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="kl-section-filter">
    <div class="container kl-container-xl-1164">
        <form action="" method="POST" id="id-form-filter-team">
            <div class="kl-form-bloc-team">
                <div class="d-flex justify-content-lg-center kl-list-role">
                    <div class="form-check kl-form-check p-0">
                        <input class="form-check-input kl-input-radio js-input-radio" type="radio" value="All" id="id-all" name="all" checked>
                        <label class="form-check-label kl-input-label kl-btn-theme03 kl-btn-theme-orange-secondary" for="id-all">
                            <span>Tous les départements</span>
                        </label>
                    </div>
                    <?php if ( $poles ) :
                        foreach ( $poles as $pole ) : ?>
                            <div class="form-check kl-form-check p-0 js-pole">
                                <input class="form-check-input kl-input-radio js-input-radio" type="radio" value="<?php echo $pole->term_id; ?>" id="id-pole-<?= $pole->term_id; ?>" name="poles[]">
                                <label class="form-check-label kl-input-label kl-btn-theme03 kl-btn-theme-orange-secondary" for="id-pole-<?= $pole->term_id; ?>">
                                    <span><?php echo $pole->name; ?></span>
                                </label>
                            </div>
                        <?php endforeach; 
                    endif; ?>
                </div>
            </div>
        </form>
        <div class="kl-pt-50 kl-pt-sm-80 kl-filtered-content">
            <?php if($data->have_posts()) : ?>
                <div class="kl-grid-team">
                    <?php while($data->have_posts()) : $data->the_post();
                        $role = get_field('role', get_the_ID()) ?>
                        <div class="kl-grid-team-item">
                            <a href="<?php the_permalink() ?>" class="d-flex flex-column text-center">
                                <div class="kl-thumb-team">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid kl-img-cover')) ?>
                                </div>
                                <div data-mh="name-team" class="kl-ff-secondary kl-color-black mb-2 kl-name-team">
                                    <h3><?php the_title() ?></h3>
                                </div>
                                <?php if($role) : ?>
                                    <div class="kl-fw-bold kl-color-orange-secondary mt-auto kl-role-team"><?= $role ?></div>
                                <?php endif ?>
                            </a>
                        </div>
                    <?php endwhile ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>

<?php get_footer() ?>