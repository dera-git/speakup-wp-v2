<?php 
 get_header();
 $urlReturn = getTplPageURL( 'templates/notre-equipe.php' );
?>

<section class="kl-hero-single-team">
    <div class="container kl-container-xl-1164 kl-z-index-1 position-relative">
        <a href="<?= $urlReturn ?>" class="d-flex align-items-center justify-content-center kl-link-return">
            <div>
                <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.2227 5.75C12.2227 6.13281 11.9219 6.43359 11.5664 6.43359H2.26953L5.90625 9.87891C6.17969 10.125 6.17969 10.5625 5.93359 10.8086C5.6875 11.082 5.27734 11.082 5.00391 10.8359L0.191406 6.24219C0.0546875 6.10547 0 5.94141 0 5.75C0 5.58594 0.0546875 5.42188 0.191406 5.28516L5.00391 0.691406C5.27734 0.445312 5.6875 0.445312 5.93359 0.71875C6.17969 0.964844 6.17969 1.40234 5.90625 1.64844L2.26953 5.09375H11.5664C11.9492 5.09375 12.2227 5.39453 12.2227 5.75Z" fill="#F1EDE9"/>
                </svg>
            </div>
            <div class="kl-color-beige kl-ms-10">
                Retour à la liste des membres de l’équipe
            </div>
        </a>
        <div class="row kl-pt-60 kl-pt-lg-80">
            <div class="col-lg-7">
                <div class="kl-text-130 kl-color-white kl-ff-secondary text-center text-lg-start kl-lh-0_8 kl-animate-scroll" data-animation="animate__fadeInUp">
                    <h1><?php the_title() ?></h1>
                </div>
                <div class="kl-thumb-single-team d-lg-none kl-animate-scroll kl-animation__delay-01" data-animation="animate__fadeInLeft">
                    <?php the_post_thumbnail('full', array('class' => 'img-fluid kl-img-cover')) ?>
                </div>
                <?php if(get_field('role', get_the_ID())) : ?>
                    <div class="kl-text-20 kl-color-orange-secondary kl-fw-bold kl-mt-50 kl-mt-md-70 kl-mb-20 kl-animate-scroll" data-animation="animate__fadeInLeft">
                        <?php the_field('role', get_the_ID()) ?>
                    </div>
                <?php endif ?>
                <div class="kl-text-16 kl-mt-between-p kl-animate-scroll" data-animation="animate__fadeInLeft">
                    <?php the_content() ?>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block kl-animate-scroll" data-animation="animate__fadeInRight">
                <div class="kl-thumb-single-team">
                    <?php the_post_thumbnail('full', array('class' => 'img-fluid kl-img-cover')) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="kl-section-actus-team">
    <?php
    $featured_actus = get_field('featured_actus_in_team');
    if ($featured_actus) :
    ?>
        <div class="container kl-container-xl-1164">
            <div class="d-flex justify-content-between align-items-center kl-mb-50 kl-mb-md-40">
                <?php if (get_field('title_featured_actus_in_team')) : ?>
                    <div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black">
                        <h2><?php the_field('title_featured_actus_in_team') ?></h2>
                    </div>
                <?php endif ?>
            </div>
            <div class="row kl-gy-40 kl-gx-lg-30">
                <?php $i = 0;
                foreach ($featured_actus as $featured_actu) :
                    $permalink = get_permalink($featured_actu->ID);
                    $terms = get_the_terms($featured_actu->ID, 'category');
                    $date = get_the_date('d F Y', $featured_actu->ID);
                    $title = get_the_title($featured_actu->ID);
                    $thumbnail = get_the_post_thumbnail($featured_actu->ID, 'large', ['class' => 'img-fluid kl-img-cover', 'alt' => $title]);
                    $excerpt = get_the_excerpt($featured_actu->ID);
                    if ($i === 0) {
                        $animation_class = "animate__fadeInLeft";
                    } elseif ($i === 1) {
                        $animation_class = "animate__fadeInUp";
                    } else {
                        $animation_class = "animate__fadeInRight";
                    }
                ?>
                    <div class="col-lg-4 kl-animate-scroll" data-animation="<?= $animation_class ?>">
                        <div class="h-100 kl-max-w-380 mx-auto">
                            <a href="<?php echo esc_url($permalink); ?>" class="kl-card-theme02 kl-hover-card-orange-secondary h-100">
                                <div class="kl-mb-25 kl-img-card-header02">
                                    <?php if ($thumbnail) {
                                        echo $thumbnail;
                                    } else {
                                        echo '<span class="kl-replace-empty-img"></span>';
                                    } ?>
                                </div>
                                <div class="kl-mb-35">
                                    <div data-mh="title-card-theme02" class="kl-text-12 kl-mb-10">
                                        <?php if ($terms && !is_wp_error($terms)) : ?>
                                            <span class="kl-fw-bold kl-color-orange-secondary text-uppercase">
                                                <?php foreach ($terms as $term) {
                                                    echo $term->name;
                                                    break;
                                                } ?>
                                            </span>
                                        <?php endif; ?>
                                        <span class="kl-fw-medium kl-color-black"> - <?= $date ?></span>
                                    </div>
                                    <div class="kl-text-18 kl-fw-bold kl-color-black kl-title-card">
                                        <h3><?php echo esc_html($title); ?></h3>
                                    </div>
                                </div>
                                <div class="kl-fw-bold kl-color-orange-secondary d-flex align-items-center justify-content-start mt-auto">
                                    <span class="kl-icon-eye">
                                        <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.375 6.75C12.375 8.69141 10.7891 10.25 8.875 10.25C6.93359 10.25 5.375 8.69141 5.375 6.75C5.375 4.83594 6.93359 3.25 8.875 3.25C10.7891 3.25 12.375 4.83594 12.375 6.75ZM8.875 4.125C7.39844 4.125 6.25 5.30078 6.25 6.75C6.25 8.19922 7.39844 9.375 8.875 9.375C10.3242 9.375 11.5 8.19922 11.5 6.75C11.5 5.30078 10.3242 4.125 8.875 4.125ZM14.125 2.83984C15.4102 4.01562 16.2578 5.4375 16.668 6.42188C16.75 6.64062 16.75 6.88672 16.668 7.10547C16.2578 8.0625 15.4102 9.48438 14.125 10.6875C12.8398 11.8906 11.0625 12.875 8.875 12.875C6.66016 12.875 4.88281 11.8906 3.59766 10.6875C2.3125 9.48438 1.46484 8.0625 1.05469 7.10547C0.972656 6.88672 0.972656 6.64062 1.05469 6.42188C1.46484 5.4375 2.3125 4.01562 3.59766 2.83984C4.88281 1.63672 6.66016 0.625 8.875 0.625C11.0625 0.625 12.8398 1.63672 14.125 2.83984ZM1.875 6.75C2.23047 7.625 3.02344 8.9375 4.19922 10.0312C5.375 11.125 6.93359 12 8.875 12C10.7891 12 12.3477 11.125 13.5234 10.0312C14.6992 8.9375 15.4922 7.625 15.875 6.75C15.4922 5.875 14.6992 4.5625 13.5234 3.46875C12.3477 2.375 10.7891 1.5 8.875 1.5C6.93359 1.5 5.375 2.375 4.19922 3.46875C3.02344 4.5625 2.23047 5.875 1.875 6.75Z" fill="#925C26" />
                                        </svg>
                                    </span>
                                    Lire l’article
                                </div>
                            </a>
                        </div>
                    </div>
                <?php $i++;
                endforeach; ?>
            </div>
        </div>
    <?php endif ?>
</section>

<?php get_footer() ?>