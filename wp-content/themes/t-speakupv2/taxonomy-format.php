<?php get_header();

$current = get_queried_object();
$thematique_ressource = get_terms('thematique-ressource', array('hide_empty' => false));
$urlReturn = getTplPageURL( 'templates/ressource.php' );
 ?>

<section class="kl-hero-single-page kl-hero-single-thematiqueR" style="--before-color: #DA7021;">
    <div class="container kl-container-xl-1164">
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
        <div class="kl-text-130 kl-color-beige kl-ff-secondary kl-mt-55 kl-animate-scroll text-center kl-lh-0_8" data-animation="animate__fadeInUp">
            <h1><?= $current->name ?></h1>
        </div>
    </div>
</section>

<section class="kl-section-ressouce-single-type position-relative">
    <?php 
        $args = array(
            'post_type' => 'ressource',
            'post_status' => 'publish',
            'order' => 'DESC',
            'tax_query' => array(
                array(
                    'taxonomy' => $current->taxonomy,
                    'field'    => 'id',
                    'terms'    => $current->term_id,
                ),
            ),
        );
        
        $custom_query = new WP_Query( $args );
    ?>
    <div class="container kl-container-xl-1164">
        <form action="" method="POST" id="id-form-filter-thematiqueR" class="kl-form-filter-thematiqueR">
            <input type="hidden" name="id_format" value="<?php echo $current->term_id ?>">
            <div class="d-flex justify-content-center align-items-center flex-column flex-sm-row kl-bloc-filter-select">
                <div class="kl-fw-bold kl-color-orange-secondary mb-3 mb-sm-0 me-sm-2 pe-sm-1">
                    Filtrer par thématiques :
                </div>
                <?php if ( $thematique_ressource ) : ?>
                    <select name="thematique_ressource" class="form-select kl-select-thematiqueR js-select-thematiqueR">
                        <option value="all">Toutes</option>
                        <?php foreach ( $thematique_ressource as $thematique ) : ?>
                            <option value="<?php echo $thematique->term_id; ?>"><?php echo $thematique->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                <?php endif; ?>
            </div>
        </form>
        
        <div class="kl-content-filter-ressourceType">
            <div class="d-flex justify-content-md-between align-items-center justify-content-center kl-mb-50 kl-mb-md-40 kl-mt-80">
                <div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black text-md-start text-center">
                    <h2>Toutes</h2>
                </div>
            </div>
            <?php if($custom_query->have_posts()) : ?>
                <div class="row kl-gx-20 kl-gx-xl-60 kl-gy-40">
                    <?php
                        while($custom_query->have_posts()) : 
                            $custom_query->the_post();

                            $permalink = get_permalink();
                            $title = get_the_title();
                            $thumbnail = get_the_post_thumbnail('', 'large', ['class' => 'img-fluid kl-img-cover', 'alt' => $title]);
                            $file = get_field('file_ressource');
                        ?>
                            <div class="col-sm-6 col-md-4 col-lg-3 kl-animate-scroll" data-animation="animate__fadeInLeft">
                                <div class="text-center kl-card-theme03 kl-modif-card-theme">
                                    <a href="<?php echo esc_url($permalink); ?>" class="kl-mb-20 kl-img-card-header03">
                                        <?php if($thumbnail): echo $thumbnail; endif; ?>
                                    </a>
                                    <a href="<?php echo esc_url($permalink); ?>" data-mh="title-resources" class="kl-text-12 kl-fw-medium kl-color-black kl-mb-15" style="min-height: 55px;">
                                        <p><?= $title; ?></p>
                                    </a>
                                    <div class="kl-color-orange-sixth kl-fw-bold text-uppercase mt-auto">
                                        <a href="<?php if($file) : echo esc_html(wp_get_attachment_url($file)); else: echo "#"; endif; ?>" class="kl-down-src-file kl-color-orange-fifth" download>Télécharger</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile ?>
                </div>
            <?php endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<?php get_footer() ?>