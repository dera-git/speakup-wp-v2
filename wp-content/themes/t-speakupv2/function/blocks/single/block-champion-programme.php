<section class="kl-sect-champion-programme">
    <div class="container kl-container-xl-1164 overflow-hidden">
        <div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black kl-mb-30 pt-2">
            <h2>
                <?php
                if (get_field('titre_champion_detail_programme')) :
                    echo get_field('titre_champion_detail_programme');
                endif;
                ?>
            </h2>
        </div>
        <div id="id-champion-items" class="kl-champion-items position-relative kl-animate-scroll" data-animation="animate__fadeInUp">

            <div class="kl-swiper-navigation-champion">
                <div class="kl-swiper-button-prev kl-me-20">
                    <svg width="13" height="23" viewBox="0 0 13 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.73828 0.6875L12.0312 10.3867C12.2344 10.6406 12.3867 10.9453 12.3867 11.25C12.3867 11.5547 12.2344 11.8594 12.0312 12.0625L2.73828 21.7617C2.28125 22.2695 1.46875 22.2695 1.01172 21.8125C0.503906 21.3555 0.503906 20.5938 0.960938 20.0859L9.49219 11.1992L0.960938 2.36328C0.503906 1.90625 0.503906 1.09375 1.01172 0.636719C1.46875 0.179688 2.28125 0.179688 2.73828 0.6875Z" fill="white" />
                    </svg>
                </div>
                <div class="kl-swiper-button-next kl-ms-20">
                    <svg width="13" height="23" viewBox="0 0 13 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.73828 0.6875L12.0312 10.3867C12.2344 10.6406 12.3867 10.9453 12.3867 11.25C12.3867 11.5547 12.2344 11.8594 12.0312 12.0625L2.73828 21.7617C2.28125 22.2695 1.46875 22.2695 1.01172 21.8125C0.503906 21.3555 0.503906 20.5938 0.960938 20.0859L9.49219 11.1992L0.960938 2.36328C0.503906 1.90625 0.503906 1.09375 1.01172 0.636719C1.46875 0.179688 2.28125 0.179688 2.73828 0.6875Z" fill="white" />
                    </svg>
                </div>
            </div>
            <div class="swiper-wrapper">
                <?php
                $champions = get_field('liste_des_champion_tax');

                if ($champions) :

                    foreach ($champions as $champion) :
                        $permalink = get_permalink($champion->ID);
                        $terms = get_the_terms($champion->ID, 'category');
                        $date = get_the_date('d F Y', $champion->ID);
                        $title = get_the_title($champion->ID);
                        $thumbnail = get_the_post_thumbnail($champion->ID, 'large', ['class' => 'img-fluid', 'alt' => $title]);
                        $excerpt = get_the_excerpt($champion->ID);
                ?>
                        <div class="kl-champion-item swiper-slide">
                            <?= $thumbnail; ?>
                            <div class="kl-detail-user-champion">
                                <div>
                                    <h4><?= $title; ?></h4>
                                    <p><?= $excerpt; ?></p>
                                </div>
                                <div class="kl-fw-bold kl-color-black d-flex align-items-center justify-content-start">
                                    <a href="<?php echo esc_url($permalink); ?>" class="kl-hover-eye-black d-flex align-items-center">
                                        <span class="kl-icon-eye kl-icon-eye-black">
                                            <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.5 7.75049C4.55859 7.75049 3 6.19189 3 4.25049C3 2.33643 4.55859 0.750488 6.5 0.750488C8.41406 0.750488 10 2.33643 10 4.25049C10 6.19189 8.41406 7.75049 6.5 7.75049ZM6.5 1.62549C5.05078 1.62549 3.875 2.82861 3.875 4.25049C3.875 5.69971 5.05078 6.87549 6.5 6.87549C7.92188 6.87549 9.125 5.69971 9.125 4.25049C9.125 2.82861 7.92188 1.62549 6.5 1.62549ZM7.86719 9.06299C10.4922 9.06299 12.625 11.1958 12.625 13.8208C12.625 14.3403 12.1875 14.7505 11.668 14.7505H1.30469C0.785156 14.7505 0.375 14.3403 0.375 13.8208C0.375 11.1958 2.48047 9.06299 5.10547 9.06299H7.86719ZM11.668 13.8755C11.6953 13.8755 11.75 13.8481 11.75 13.8208C11.75 11.688 10 9.93799 7.86719 9.93799H5.10547C2.97266 9.93799 1.25 11.688 1.25 13.8208C1.25 13.8481 1.27734 13.8755 1.30469 13.8755H11.668Z" fill="black" />
                                            </svg>
                                        </span>
                                        <?php if ($title_btn) : echo $title_btn;
                                        else : echo "Voir le profil";
                                        endif; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>