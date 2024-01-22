<section class="kl-section-actus">
    <?php
    $featured_actus = get_field('featured_actus');
    if ($featured_actus) :
        $link = get_field('link_featured_actus');
    ?>
        <div class="container kl-container-xl-1164">
            <div class="d-flex justify-content-between align-items-center kl-mb-50 kl-mb-md-40">
                <?php if (get_field('title_featured_actus')) : ?>
                    <div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black">
                        <h2><?php the_field('title_featured_actus') ?></h2>
                    </div>
                <?php endif ?>
                <?php
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                ?>
                    <div class="d-none d-lg-block">
                        <a href="<?= esc_url($link_url); ?>" class="kl-btn-theme02 kl-min-w-240 kl-bg-orange-primary">
                            <?= esc_html($link_title); ?>
                            <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.08594 0.5625L4.4375 4.125C4.53125 4.24219 4.60156 4.38281 4.60156 4.5C4.60156 4.64062 4.53125 4.78125 4.4375 4.89844L1.08594 8.46094C0.875 8.69531 0.523438 8.69531 0.289062 8.48438C0.0546875 8.27344 0.0546875 7.92188 0.265625 7.6875L3.26562 4.5L0.265625 1.33594C0.0546875 1.10156 0.0546875 0.75 0.289062 0.539062C0.523438 0.328125 0.875 0.328125 1.08594 0.5625Z" fill="white" />
                            </svg>
                        </a>
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
                            <a href="<?php echo esc_url($permalink); ?>" class="kl-card-theme02 kl-hover-card-orange-primary h-100">
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
                                            <span class="kl-fw-bold kl-color-orange-primary text-uppercase">
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
                                <div class="kl-fw-bold kl-color-orange-primary d-flex align-items-center justify-content-start mt-auto">
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
            <?php
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
            ?>
                <div class="d-lg-none text-center text-lg-start kl-mt-50">
                    <a href="<?= esc_url($link_url); ?>" class="kl-btn-theme02 kl-min-w-240 kl-bg-orange-primary">
                        <?= esc_html($link_title); ?>
                        <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.08594 0.5625L4.4375 4.125C4.53125 4.24219 4.60156 4.38281 4.60156 4.5C4.60156 4.64062 4.53125 4.78125 4.4375 4.89844L1.08594 8.46094C0.875 8.69531 0.523438 8.69531 0.289062 8.48438C0.0546875 8.27344 0.0546875 7.92188 0.265625 7.6875L3.26562 4.5L0.265625 1.33594C0.0546875 1.10156 0.0546875 0.75 0.289062 0.539062C0.523438 0.328125 0.875 0.328125 1.08594 0.5625Z" fill="white" />
                        </svg>
                    </a>
                </div>
            <?php endif ?>
        </div>
    <?php endif ?>
</section>