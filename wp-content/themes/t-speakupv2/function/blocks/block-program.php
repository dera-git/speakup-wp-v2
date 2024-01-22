<?php
$featured_programs = get_field('featured_programs');
if ($featured_programs) :
    $link = get_field('link_featured_programs');
?>
    <section class="kl-section-program">
        <div class="container kl-container-xl-1164">
            <div class="d-flex justify-content-between align-items-center kl-mb-50 kl-mb-lg-40">
                <?php if (get_field('title_featured_programs')) : ?>
                    <div class="kl-text-102 kl-ff-secondary kl-fw-regular kl-color-black">
                        <h2><?php the_field('title_featured_programs') ?></h2>
                    </div>
                <?php endif ?>
                <?php
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                ?>
                    <div class="d-none d-lg-block">
                        <a href="<?= esc_url($link_url); ?>" class="kl-btn-theme02 kl-min-w-240 kl-bg-orange-fourth">
                            <?= esc_html($link_title); ?>
                            <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.08594 0.5625L4.4375 4.125C4.53125 4.24219 4.60156 4.38281 4.60156 4.5C4.60156 4.64062 4.53125 4.78125 4.4375 4.89844L1.08594 8.46094C0.875 8.69531 0.523438 8.69531 0.289062 8.48438C0.0546875 8.27344 0.0546875 7.92188 0.265625 7.6875L3.26562 4.5L0.265625 1.33594C0.0546875 1.10156 0.0546875 0.75 0.289062 0.539062C0.523438 0.328125 0.875 0.328125 1.08594 0.5625Z" fill="white" />
                            </svg>
                        </a>
                    </div>
                <?php endif ?>
            </div>
            <div class="row kl-gy-50 kl-gx-lg-40 kl-gx-xl-80">
                <?php $i = 0;
                foreach ($featured_programs as $featured_program) :
                    $permalink = get_permalink($featured_program->ID);
                    $thumbnail = get_the_post_thumbnail($featured_program->ID, 'large', ['class' => 'img-fluid']);
                    $terms = get_the_terms($featured_program->ID, 'thematique');
                    $title = get_the_title($featured_program->ID);
                    $excerpt = get_the_excerpt($featured_program->ID);
                    if ($i === 0) {
                        $animation_class = "animate__fadeInLeft";
                        $color_btn = "orange-fifth";
                    } elseif ($i === 1) {
                        $animation_class = "animate__fadeInUp";
                        $color_btn = "green-tertiary";
                    } else {
                        $animation_class = "animate__fadeInRight";
                        $color_btn = "purple";
                    }
                ?>
                    <div class="col-lg-4 kl-item-program kl-animate-scroll" data-animation="<?= $animation_class ?>">
                        <div class="h-100 kl-max-w-380 mx-auto">
                            <a href="<?php echo esc_url($permalink); ?>" class="kl-card-theme kl-color-black text-center h-100 kl-hover-card-<?= $color_btn ?>">
                                <div data-mh="img-card-header" class="kl-img-card-header">
                                    <?php if ($thumbnail) {
                                        echo $thumbnail;
                                    } else {
                                        echo '<span class="kl-replace-empty-img"></span>';
                                    } ?>
                                </div>
                                <div data-mh="title-card" class="kl-group-title-card kl-mb-10">
                                    <?php if ($terms && !is_wp_error($terms)) : ?>
                                        <div class="kl-text-10 kl-color-orange-fourth kl-fw-bold text-uppercase kl-mb-10">
                                            <?php foreach ($terms as $term) {
                                                echo $term->name;
                                                break;
                                            } ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="kl-text-20 kl-fw-bold kl-title-card">
                                        <h3><?php echo esc_html($title); ?></h3>
                                    </div>
                                </div>
                                <?php if (!empty($excerpt)) : ?>
                                    <div class="kl-mb-20">
                                        <p><?= $excerpt; ?></p>
                                    </div>
                                <?php endif; ?>
                                <div class="kl-fw-bold d-flex align-items-center justify-content-center mt-auto kl-color-<?= $color_btn ?>">
                                    <span class="kl-icon-eye">
                                        <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.375 6.75C12.375 8.69141 10.7891 10.25 8.875 10.25C6.93359 10.25 5.375 8.69141 5.375 6.75C5.375 4.83594 6.93359 3.25 8.875 3.25C10.7891 3.25 12.375 4.83594 12.375 6.75ZM8.875 4.125C7.39844 4.125 6.25 5.30078 6.25 6.75C6.25 8.19922 7.39844 9.375 8.875 9.375C10.3242 9.375 11.5 8.19922 11.5 6.75C11.5 5.30078 10.3242 4.125 8.875 4.125ZM14.125 2.83984C15.4102 4.01562 16.2578 5.4375 16.668 6.42188C16.75 6.64062 16.75 6.88672 16.668 7.10547C16.2578 8.0625 15.4102 9.48438 14.125 10.6875C12.8398 11.8906 11.0625 12.875 8.875 12.875C6.66016 12.875 4.88281 11.8906 3.59766 10.6875C2.3125 9.48438 1.46484 8.0625 1.05469 7.10547C0.972656 6.88672 0.972656 6.64062 1.05469 6.42188C1.46484 5.4375 2.3125 4.01562 3.59766 2.83984C4.88281 1.63672 6.66016 0.625 8.875 0.625C11.0625 0.625 12.8398 1.63672 14.125 2.83984ZM1.875 6.75C2.23047 7.625 3.02344 8.9375 4.19922 10.0312C5.375 11.125 6.93359 12 8.875 12C10.7891 12 12.3477 11.125 13.5234 10.0312C14.6992 8.9375 15.4922 7.625 15.875 6.75C15.4922 5.875 14.6992 4.5625 13.5234 3.46875C12.3477 2.375 10.7891 1.5 8.875 1.5C6.93359 1.5 5.375 2.375 4.19922 3.46875C3.02344 4.5625 2.23047 5.875 1.875 6.75Z" fill="#7BB8BF" />
                                        </svg>
                                    </span>
                                    Découvrir le projet
                                </div>
                            </a>
                        </div>
                    </div>
                <?php $i++;
                endforeach; ?>
            </div>
            <?php
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
            ?>
                <div class="d-lg-none kl-mt-50 text-center">
                    <a href="<?= esc_url($link_url); ?>" class="kl-btn-theme02 kl-min-w-240 kl-bg-orange-fourth">
                        <?= esc_html($link_title); ?>
                        <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.08594 0.5625L4.4375 4.125C4.53125 4.24219 4.60156 4.38281 4.60156 4.5C4.60156 4.64062 4.53125 4.78125 4.4375 4.89844L1.08594 8.46094C0.875 8.69531 0.523438 8.69531 0.289062 8.48438C0.0546875 8.27344 0.0546875 7.92188 0.265625 7.6875L3.26562 4.5L0.265625 1.33594C0.0546875 1.10156 0.0546875 0.75 0.289062 0.539062C0.523438 0.328125 0.875 0.328125 1.08594 0.5625Z" fill="white" />
                        </svg>
                    </a>
                </div>
            <?php endif ?>
        </div>
    </section>
<?php endif; ?>