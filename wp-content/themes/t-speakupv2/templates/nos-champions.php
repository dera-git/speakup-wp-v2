<?php 
/**
 * Template Name: Nos Champions
 */

 get_header();

 $data = new WP_Query(array(
    'post_type'=>'champion',
    'posts_per_page' => -1,
    'post_status' => ' publish',
    'order' => 'DESC'
));
?>

<section class="kl-hero-single-page kl-hero--page kl-hero-champions" style="--before-color: #A48A67;">
    <div class="container kl-container-xl-1164">
        <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row kl-animate-scroll" data-animation="animate__fadeInUp">
            <div class="kl-text-130 kl-color-beige kl-ff-secondary text-center text-sm-start kl-lh-0_8">
                <h1><?php the_title() ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="kl-section-list-champions">
    <div class="container kl-container-xl-1164">
        <div class="kl-text-16 kl-fw-semi-bold kl-color-brown-tertiary kl-max-w-735 mx-auto text-center kl-lh-1_3 kl-mb-60 kl-mb-md-95 kl-animate-scroll" data-animation="animate__fadeInUp">
            <?php the_content() ?>
        </div>
        <?php $i = 1; if($data->have_posts()) : ?>
            <div class="row kl-gx-30 kl-gx-xl-60 kl-gy-50">
                <?php while($data->have_posts()) : $data->the_post();
                $role = get_field('role_champion', get_the_ID());
                $data_animation = $i % 2 == 0 ? 'animate__fadeInRight' : 'animate__fadeInLeft'; ?>
                    <div class="col-lg-6">
                        <div class="d-sm-flex kl-animate-scroll" data-animation="<?= $data_animation ?>">
                            <div class="kl-thumb-champions me-3">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid kl-img-cover')) ?>
                            </div>
                            <div>
                                <div class="kl-text-38 kl-ff-secondary kl-mb-10 kl-name-champions">
                                    <?php the_title() ?>
                                </div>
                                <?php if($role) : ?>
                                    <div class="kl-text-12 kl-fw-bold kl-color-brown-fourth kl-mb-10">
                                        <?= $role  ?>
                                    </div>
                                <?php endif ?>
                                <div class="kl-desc-champions">
                                    <svg class="kl-svg-quote" xmlns="http://www.w3.org/2000/svg" width="8" height="7" viewBox="0 0 8 7" fill="none">
                                        <path d="M6.30197 6.89716C5.77681 6.89716 5.345 6.72794 5.00656 6.3895C4.6798 6.05106 4.51641 5.55507 4.51641 4.90153C4.51641 4.07294 4.77316 3.19767 5.28665 2.27571C5.80015 1.35376 6.42451 0.595187 7.15974 0L7.75492 0.54267C7.55653 0.764407 7.37564 1.04449 7.21225 1.38293C7.04887 1.72137 6.90883 2.08315 6.79212 2.46827C6.68709 2.85339 6.6229 3.24435 6.59956 3.64114C7.01969 3.71116 7.35813 3.89789 7.61488 4.20132C7.87163 4.49307 8 4.84318 8 5.25164C8 5.73013 7.84245 6.12692 7.52735 6.44201C7.21225 6.74544 6.80379 6.89716 6.30197 6.89716ZM1.78556 6.89716C1.24872 6.89716 0.816922 6.72794 0.490153 6.3895C0.163384 6.05106 0 5.55507 0 4.90153C0 4.07294 0.250912 3.19767 0.752735 2.27571C1.26623 1.35376 1.89643 0.595187 2.64333 0L3.23851 0.54267C3.05179 0.764407 2.8709 1.04449 2.69584 1.38293C2.53246 1.72137 2.39241 2.08315 2.27571 2.46827C2.17068 2.85339 2.10649 3.24435 2.08315 3.64114C2.50328 3.71116 2.84172 3.89789 3.09847 4.20132C3.35522 4.49307 3.48359 4.84318 3.48359 5.25164C3.48359 5.73013 3.32604 6.12692 3.01094 6.44201C2.70751 6.74544 2.29905 6.89716 1.78556 6.89716Z" fill="#A48A67"/>
                                    </svg>
                                    <?php the_content() ?>
                                    <svg class="kl-svg-quote" xmlns="http://www.w3.org/2000/svg" width="8" height="7" viewBox="0 0 8 7" fill="none">
                                        <path d="M1.69803 -0.00018461C2.22319 -0.000184564 2.655 0.169035 2.99344 0.507473C3.3202 0.845913 3.48359 1.3419 3.48359 1.99544C3.48359 2.82403 3.22684 3.6993 2.71335 4.62126C2.19985 5.54321 1.57549 6.30178 0.840262 6.89697L0.245077 6.3543C0.443471 6.13257 0.624361 5.85248 0.787746 5.51404C0.95113 5.1756 1.09117 4.81382 1.20788 4.4287C1.31291 4.04358 1.3771 3.65262 1.40044 3.25583C0.980307 3.18581 0.641867 2.99909 0.38512 2.69566C0.128374 2.4039 4.23404e-07 2.05379 4.59113e-07 1.64533C5.00943e-07 1.16685 0.157549 0.770056 0.472648 0.454958C0.787746 0.15153 1.19621 -0.000184654 1.69803 -0.00018461ZM6.21444 -0.000184215C6.75128 -0.000184168 7.18308 0.169035 7.50985 0.507473C7.83662 0.845913 8 1.3419 8 1.99544C8 2.82403 7.74909 3.6993 7.24727 4.62126C6.73377 5.54321 6.10357 6.30179 5.35667 6.89697L4.76149 6.3543C4.94821 6.13257 5.1291 5.85248 5.30416 5.51404C5.46754 5.1756 5.60759 4.81382 5.72429 4.4287C5.82932 4.04358 5.89351 3.65262 5.91685 3.25583C5.49672 3.18581 5.15828 2.99909 4.90153 2.69566C4.64479 2.4039 4.51641 2.05379 4.51641 1.64533C4.51641 1.16685 4.67396 0.770056 4.98906 0.454959C5.29249 0.15153 5.70095 -0.00018426 6.21444 -0.000184215Z" fill="#A48A67"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $i++;
                 endwhile ?>
            </div>
        <?php endif ?>
    </div>
</section>

<?php get_footer() ?>