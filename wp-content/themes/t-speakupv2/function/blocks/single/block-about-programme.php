<section class="kl-sect-about-programme">
    <div class="container kl-container-xl-1164">
        <div class="row">
            <div class="col-md-6 kl-animate-scroll"  data-animation="animate__fadeInLeft">
                <div class="kl-text-82 kl-ff-secondary kl-fw-regular kl-color-black text-md-start text-center">
                    <h2>
                        <?php
                        if (get_field('titre_a_propos_detail_programme')) :
                            echo get_field('titre_a_propos_detail_programme');
                        endif;
                        ?>
                    </h2>
                </div>
                <div class="kl-ff-primary kl-fw-regular kl-color-black kl-max-w-488 kl-content-text-about">
                    <?php
                    if (get_field('contenu_a_propos_detail_programme')) :
                        echo get_field('contenu_a_propos_detail_programme');
                    endif;
                    ?>
                </div>
                <div class="kl-max-w-180 mb-5">
                    <a id="id-view-more" class="kl-btn-theme kl-btn-hover-blue js-btn kl-btn-view-more" href="<?= get_field('lien_en_savoir_plus_a_propos_detail_programme'); ?>" style="border: 1px solid <?= get_field('couleur_bouton_a_propos_detail_programme'); ?>;  color: <?= get_field('couleur_bouton_a_propos_detail_programme'); ?>;">
                        <svg class="kl-me-10" width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path 
                                d="M12.375 6.75C12.375 8.69141 10.7891 10.25 8.875 10.25C6.93359 10.25 5.375 8.69141 5.375 6.75C5.375 4.83594 6.93359 3.25 8.875 3.25C10.7891 3.25 12.375 4.83594 12.375 6.75ZM8.875 4.125C7.39844 4.125 6.25 5.30078 6.25 6.75C6.25 8.19922 7.39844 9.375 8.875 9.375C10.3242 9.375 11.5 8.19922 11.5 6.75C11.5 5.30078 10.3242 4.125 8.875 4.125ZM14.125 2.83984C15.4102 4.01562 16.2578 5.4375 16.668 6.42188C16.75 6.64062 16.75 6.88672 16.668 7.10547C16.2578 8.0625 15.4102 9.48438 14.125 10.6875C12.8398 11.8906 11.0625 12.875 8.875 12.875C6.66016 12.875 4.88281 11.8906 3.59766 10.6875C2.3125 9.48438 1.46484 8.0625 1.05469 7.10547C0.972656 6.88672 0.972656 6.64062 1.05469 6.42188C1.46484 5.4375 2.3125 4.01562 3.59766 2.83984C4.88281 1.63672 6.66016 0.625 8.875 0.625C11.0625 0.625 12.8398 1.63672 14.125 2.83984ZM1.875 6.75C2.23047 7.625 3.02344 8.9375 4.19922 10.0312C5.375 11.125 6.93359 12 8.875 12C10.7891 12 12.3477 11.125 13.5234 10.0312C14.6992 8.9375 15.4922 7.625 15.875 6.75C15.4922 5.875 14.6992 4.5625 13.5234 3.46875C12.3477 2.375 10.7891 1.5 8.875 1.5C6.93359 1.5 5.375 2.375 4.19922 3.46875C3.02344 4.5625 2.23047 5.875 1.875 6.75Z" 
                                fill="<?= get_field('couleur_bouton_a_propos_detail_programme'); ?>" />
                        </svg>
                        En savoir plus
                        <span></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 kl-animate-scroll" data-animation="animate__fadeInRight">
                <?php if(get_field('image_a_propos_detail_programme')): ?>
                    <img class="img-fluid" src="<?= get_field('image_a_propos_detail_programme')['url']; ?>" alt="<?= get_field('image_a_propos_detail_programme')['title']; ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>