<section class="kl-sect-contact-partenaire-programme">
    <div class="container kl-container-xl-1164">
        <div class="row">
            <div class="col-md-4 kl-animate-scroll" data-animation="animate__fadeInLeft">
                <div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black kl-mb-40 text-md-start text-center">
                    <h2><?php
                        if (get_field('titre_contact_detail_programme')) :
                            echo get_field('titre_contact_detail_programme');
                        endif;
                        ?>
                    </h2>
                </div>
                <div class="kl-max-w-270 text-center kl-content-contact">
                    <?php
                    $membres = get_field('membre_tax');

                    if ($membres) :

                        foreach ($membres as $membre) :
                            $permalink = get_permalink($membre->ID);
                            $title = get_the_title($membre->ID);
                            $thumbnail = get_the_post_thumbnail($membre->ID, 'large', ['class' => 'img-fluid', 'alt' => $title]);
                            $excerpt = get_the_excerpt($membre->ID);
                    ?>
                        <div class="kl-img-profile">
                            <?= $thumbnail; ?>
                        </div>
                        <h4><?= $title; ?></h4>
                        <p><?= $excerpt; ?></p>
                        <div class="kl-fw-bold kl-color-purple-tertiary d-flex align-items-center justify-content-center mt-auto mb-5">
                            <a href="<?php echo esc_url($permalink); ?>" class="kl-hover-eye-purple-tertiary d-flex align-items-center">
                                <span class="kl-icon-eye kl-icon-eye-purple-tertiary">
                                    <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.375 6.75C12.375 8.69141 10.7891 10.25 8.875 10.25C6.93359 10.25 5.375 8.69141 5.375 6.75C5.375 4.83594 6.93359 3.25 8.875 3.25C10.7891 3.25 12.375 4.83594 12.375 6.75ZM8.875 4.125C7.39844 4.125 6.25 5.30078 6.25 6.75C6.25 8.19922 7.39844 9.375 8.875 9.375C10.3242 9.375 11.5 8.19922 11.5 6.75C11.5 5.30078 10.3242 4.125 8.875 4.125ZM14.125 2.83984C15.4102 4.01562 16.2578 5.4375 16.668 6.42188C16.75 6.64062 16.75 6.88672 16.668 7.10547C16.2578 8.0625 15.4102 9.48438 14.125 10.6875C12.8398 11.8906 11.0625 12.875 8.875 12.875C6.66016 12.875 4.88281 11.8906 3.59766 10.6875C2.3125 9.48438 1.46484 8.0625 1.05469 7.10547C0.972656 6.88672 0.972656 6.64062 1.05469 6.42188C1.46484 5.4375 2.3125 4.01562 3.59766 2.83984C4.88281 1.63672 6.66016 0.625 8.875 0.625C11.0625 0.625 12.8398 1.63672 14.125 2.83984ZM1.875 6.75C2.23047 7.625 3.02344 8.9375 4.19922 10.0312C5.375 11.125 6.93359 12 8.875 12C10.7891 12 12.3477 11.125 13.5234 10.0312C14.6992 8.9375 15.4922 7.625 15.875 6.75C15.4922 5.875 14.6992 4.5625 13.5234 3.46875C12.3477 2.375 10.7891 1.5 8.875 1.5C6.93359 1.5 5.375 2.375 4.19922 3.46875C3.02344 4.5625 2.23047 5.875 1.875 6.75Z" fill="#925C26" />
                                    </svg>
                                </span>
                                Voir le profil
                            </a>
                        </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-md-8 kl-content-list-partener kl-animate-scroll" data-animation="animate__fadeInRight">
                <div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black kl-mb-30 text-md-start text-center">
                    <h2><?php
                        if (get_field('titre_partenaire_detail_programme')) :
                            echo get_field('titre_partenaire_detail_programme');
                        endif;
                        ?>
                    </h2>
                </div>
                <div class="row g-0">
                    <?php
                    $parteners = get_field('liste_des_partenaires_tax');
                    if ($parteners) :
                        foreach ($parteners as $partener) :
                            $permalink = get_permalink($partener->ID);
                            $thumbnail = get_the_post_thumbnail($partener->ID, 'large', ['class' => 'img-fluid', 'alt' => $title]);
                    ?>
                            <div class="col-md-6 col-lg-6 col-xl-4 kl-mb-30">
                                <a href="<?php echo esc_url($permalink); ?>" class="kl-partener-programme mx-h-132">
                                    <?= $thumbnail; ?>
                                </a>
                            </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>