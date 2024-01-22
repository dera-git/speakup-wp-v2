<?php get_header();

$current = get_queried_object();
$thumb = get_field('thumbnail_image_taxonomies_blanc', $current);
$color = get_field('couleur_taxonomie_thematiques', $current);
$urlReturn = getTplPageURL( 'templates/notre-travail.php' );
 ?>
    <section class="kl-hero-single-page" style="--before-color: <?= $color ?>;">
        <div class="container-fluid">
            <a href="<?= $urlReturn ?>" class="d-flex align-items-center justify-content-center kl-link-return">
                <div>
                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.2227 5.75C12.2227 6.13281 11.9219 6.43359 11.5664 6.43359H2.26953L5.90625 9.87891C6.17969 10.125 6.17969 10.5625 5.93359 10.8086C5.6875 11.082 5.27734 11.082 5.00391 10.8359L0.191406 6.24219C0.0546875 6.10547 0 5.94141 0 5.75C0 5.58594 0.0546875 5.42188 0.191406 5.28516L5.00391 0.691406C5.27734 0.445312 5.6875 0.445312 5.93359 0.71875C6.17969 0.964844 6.17969 1.40234 5.90625 1.64844L2.26953 5.09375H11.5664C11.9492 5.09375 12.2227 5.39453 12.2227 5.75Z" fill="#F1EDE9"/>
                    </svg>
                </div>
                <div class="kl-color-beige kl-ms-10">
                    Retour à la liste des thémathiques
                </div>
            </a>
            <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row kl-mt-50 kl-animate-scroll" data-animation="animate__fadeInUp">
                <?php if($thumb): ?>
                    <div class="kl-img-thumb-thematique">
                        <img src="<?= $thumb ?>" class="img-fluid kl-img-contain" alt="">
                    </div>
                <?php endif ?>
                <div class="kl-text-130 kl-color-white kl-ff-secondary kl-mt-30 kl-mt-sm-0 kl-ms-sm-20 text-center text-sm-start kl-lh-0_8">
                    <h1><?= $current->name ?></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-2 kl-section-list-program">
        <?php 
            $args = array(
                'post_type' => 'programme',
                'post_status' => 'publish',
                'order' => 'DESC',
                'tax_query' => array(
                    array(
                        'taxonomy' => $current->taxonomy,
                        'field'    => 'slug',
                        'terms'    => $current->slug,
                    ),
                ),
            );
            
            $custom_query = new WP_Query( $args );
        ?>
        <div class="container kl-container-xl-1164">
            <div class="kl-text-16 kl-fw-semi-bold kl-max-w-735 mx-auto text-center kl-lh-1_3 kl-mb-60 kl-mb-sm-95 kl-animate-scroll" data-animation="animate__fadeInUp" style="color: <?= $color ?>;">
                <p><?= $current->description ?></p>
            </div>
            <?php $i = 0; if( $custom_query->have_posts() ) : ?>
                <div class="row justify-content-center kl-gy-50 kl-gx-lg-40 kl-gx-xl-80">
                    <?php while ( $custom_query->have_posts() ) :
                        $custom_query->the_post();
                        
                        $thumbnail = get_the_post_thumbnail('', 'large', ['class' => 'img-fluid']);
                        $excerpt = get_the_excerpt();

                        if($i == 3) $i = 0;
                        if ($i === 0) {
                            $animation_class = "animate__fadeInLeft";
                        } elseif ($i === 1) {
                            $animation_class = "animate__fadeInUp";
                        } elseif ($i === 2) {
                            $animation_class = "animate__fadeInRight";
                        }
                    ?>

                        <div class="col-lg-4 kl-item-program kl-animate-scroll" data-animation="<?= $animation_class ?>">
                            <div class="h-100 kl-max-w-380 mx-auto">
                                <a href="<?php the_permalink() ?>" class="kl-card-theme kl-hover-card-orange-sixth kl-color-black text-center h-100">
                                    <div data-mh="img-card-header" class="kl-img-card-header">
                                        <?php if ($thumbnail) {
                                            echo $thumbnail;
                                        } else {
                                            echo '<span class="kl-replace-empty-img"></span>';
                                        } ?>
                                    </div>
                                    <div data-mh="title-card" class="kl-group-title-card kl-mb-sm-25">
                                        <div class="kl-text-20 kl-fw-bold kl-title-card">
                                            <h3><?php the_title() ?></h3>
                                        </div>
                                    </div>
                                    <?php if (!empty($excerpt)) : ?>
                                        <div class="kl-mb-30 kl-mb-sm-55">
                                            <p><?= $excerpt; ?></p>
                                        </div>
                                    <?php endif; ?>
                                    <div class="kl-fw-bold d-flex align-items-center justify-content-center mt-auto kl-color-orange-sixth">
                                        <span class="kl-icon-eye">
                                            <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.375 6.75C12.375 8.69141 10.7891 10.25 8.875 10.25C6.93359 10.25 5.375 8.69141 5.375 6.75C5.375 4.83594 6.93359 3.25 8.875 3.25C10.7891 3.25 12.375 4.83594 12.375 6.75ZM8.875 4.125C7.39844 4.125 6.25 5.30078 6.25 6.75C6.25 8.19922 7.39844 9.375 8.875 9.375C10.3242 9.375 11.5 8.19922 11.5 6.75C11.5 5.30078 10.3242 4.125 8.875 4.125ZM14.125 2.83984C15.4102 4.01562 16.2578 5.4375 16.668 6.42188C16.75 6.64062 16.75 6.88672 16.668 7.10547C16.2578 8.0625 15.4102 9.48438 14.125 10.6875C12.8398 11.8906 11.0625 12.875 8.875 12.875C6.66016 12.875 4.88281 11.8906 3.59766 10.6875C2.3125 9.48438 1.46484 8.0625 1.05469 7.10547C0.972656 6.88672 0.972656 6.64062 1.05469 6.42188C1.46484 5.4375 2.3125 4.01562 3.59766 2.83984C4.88281 1.63672 6.66016 0.625 8.875 0.625C11.0625 0.625 12.8398 1.63672 14.125 2.83984ZM1.875 6.75C2.23047 7.625 3.02344 8.9375 4.19922 10.0312C5.375 11.125 6.93359 12 8.875 12C10.7891 12 12.3477 11.125 13.5234 10.0312C14.6992 8.9375 15.4922 7.625 15.875 6.75C15.4922 5.875 14.6992 4.5625 13.5234 3.46875C12.3477 2.375 10.7891 1.5 8.875 1.5C6.93359 1.5 5.375 2.375 4.19922 3.46875C3.02344 4.5625 2.23047 5.875 1.875 6.75Z" fill="#D08719" />
                                            </svg>
                                        </span>
                                        Découvrir le projet
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php if($i === 2){
                        echo '</div><div class="row kl-gy-50 kl-gx-lg-40 kl-gx-xl-80 kl-pt-50 kl-pt-lg-60">';
                    } ?>

                    <?php $i++;
                     endwhile ?>
                </div>
            <?php else: ?>
                <div>Aucun article trouvé</div>
            <?php endif;
            wp_reset_postdata() ?>
        </div>
    </section>

<?php get_footer() ?>