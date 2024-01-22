<section class="kl-section-detail-offre position-relative">
    <div class="container kl-container-xl-1164">
        <div class="row kl-gx-30">
            <div class="col-lg-3">
                <?php if(get_field('contrat')) : ?>
                    <div class="kl-mb-25 pb-2">
                        <div class="kl-text-12 kl-fw-bold text-uppercase kl-mb-10">Contrat</div>
                        <div class="kl-fw-medium">
                            <svg class="me-2 kl-icon-svg-offre" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.1875 3.6875C2.1875 3.22266 2.57031 2.8125 3.0625 2.8125C3.52734 2.8125 3.9375 3.22266 3.9375 3.6875C3.9375 4.17969 3.52734 4.5625 3.0625 4.5625C2.57031 4.5625 2.1875 4.17969 2.1875 3.6875ZM5.38672 0.625C5.85156 0.625 6.28906 0.816406 6.61719 1.14453L11.4297 5.95703C12.1133 6.64062 12.1133 7.76172 11.4297 8.44531L7.79297 12.082C7.10938 12.7656 5.98828 12.7656 5.30469 12.082L0.492188 7.26953C0.164062 6.94141 0 6.50391 0 6.03906V1.9375C0 1.22656 0.574219 0.625 1.3125 0.625H5.38672ZM1.42188 6.33984L6.23438 11.1523C6.39844 11.3438 6.69922 11.3438 6.86328 11.1523L10.5 7.51562C10.6914 7.35156 10.6914 7.05078 10.5 6.88672L5.6875 2.07422C5.60547 1.99219 5.49609 1.9375 5.38672 1.9375H1.3125V6.03906C1.3125 6.14844 1.33984 6.25781 1.42188 6.33984Z" fill="#D6924E"/>
                            </svg>
                            <?php the_field('contrat') ?>
                        </div>
                    </div>
                <?php endif ?>
                <?php if(get_field('lieu_offre')) : ?>
                    <div class="kl-mb-25 pb-2">
                        <div class="kl-text-12 kl-fw-bold text-uppercase kl-mb-10">Lieu</div>
                        <div class="kl-fw-medium">
                            <svg class="me-2 kl-icon-svg-offre" width="11" height="15" viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.4375 6C7.4375 7.23047 6.45312 8.1875 5.25 8.1875C4.01953 8.1875 3.0625 7.23047 3.0625 6C3.0625 4.79688 4.01953 3.8125 5.25 3.8125C6.45312 3.8125 7.4375 4.79688 7.4375 6ZM5.25 5.125C4.75781 5.125 4.375 5.53516 4.375 6C4.375 6.49219 4.75781 6.875 5.25 6.875C5.71484 6.875 6.125 6.49219 6.125 6C6.125 5.53516 5.71484 5.125 5.25 5.125ZM10.5 6C10.5 8.40625 7.30078 12.6445 5.87891 14.4219C5.55078 14.832 4.92188 14.832 4.59375 14.4219C3.17188 12.6445 0 8.40625 0 6C0 3.10156 2.32422 0.75 5.25 0.75C8.14844 0.75 10.5 3.10156 10.5 6ZM5.25 2.0625C3.0625 2.0625 1.3125 3.83984 1.3125 6C1.3125 6.35547 1.42188 6.875 1.72266 7.58594C1.99609 8.24219 2.40625 9.00781 2.87109 9.77344C3.66406 11.0312 4.56641 12.2344 5.25 13.1094C5.90625 12.2344 6.80859 11.0312 7.60156 9.77344C8.06641 9.00781 8.47656 8.24219 8.75 7.58594C9.05078 6.875 9.1875 6.35547 9.1875 6C9.1875 3.83984 7.41016 2.0625 5.25 2.0625Z" fill="#D6924E"/>
                            </svg>
                            <?php the_field('lieu_offre') ?>
                        </div>
                    </div>
                <?php endif ?>
                <?php if(get_field('date_cloture')) : ?>
                    <div class="kl-mb-25 pb-2">
                        <div class="kl-text-12 kl-fw-bold text-uppercase kl-mb-10">Clôture des candidatures</div>
                        <div class="kl-fw-medium">
                            <svg class="me-2 kl-icon-svg-offre" width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.15625 2.5H8.09375V1.40625C8.09375 1.05078 8.36719 0.75 8.75 0.75C9.10547 0.75 9.40625 1.05078 9.40625 1.40625V2.5H10.5C11.457 2.5 12.25 3.29297 12.25 4.25V13C12.25 13.9844 11.457 14.75 10.5 14.75H1.75C0.765625 14.75 0 13.9844 0 13V4.25C0 3.29297 0.765625 2.5 1.75 2.5H2.84375V1.40625C2.84375 1.05078 3.11719 0.75 3.5 0.75C3.85547 0.75 4.15625 1.05078 4.15625 1.40625V2.5ZM1.3125 13C1.3125 13.2461 1.50391 13.4375 1.75 13.4375H10.5C10.7188 13.4375 10.9375 13.2461 10.9375 13V6H1.3125V13Z" fill="#D6924E"/>
                            </svg>
                            <?php the_field('date_cloture') ?>
                        </div>
                    </div>
                <?php endif ?>
                <?php if(get_field('description_comment_postuler')) : ?>
                    <div class="kl-mb-25 pb-2">
                        <div class="kl-text-12 kl-fw-bold text-uppercase kl-mb-10">Comment postuler</div>
                        <div class="kl-text-12 kl-p-strong-500 kl-mt-between-p kl-desc-detail-offer kl-pe-lg-30">
                            <?php the_field('description_comment_postuler') ?>
                        </div>
                    </div>
                <?php endif ?>
                <?php if(get_field('libelle_du_bouton_postuler')) : ?>
                    <div class="kl-mb-25 pb-2">
                        <a href="#id-section-form-offer" class="kl-btn-theme02 kl-btn-to-apply kl-min-w-230 kl-bg-orange-seventh"><?php the_field('libelle_du_bouton_postuler') ?></a>
                    </div>
                <?php endif ?>
            </div>
            <div class="col-lg-9">
                <?php if(have_rows('contenu_details_offre')) : ?>
                    <div class="kl-content-details-offer kl-bg-white">
                        <?php while(have_rows('contenu_details_offre')) : the_row() ?>
                            <div class="kl-details-offer-item">
                                <?php if(get_sub_field('titre_detail_offre')) : ?>
                                    <div class="kl-text-24 kl-fw-bold kl-color-orange-seventh kl-mb-25 pb-2">
                                        <h3><?php the_sub_field('titre_detail_offre') ?></h3>
                                    </div>
                                <?php endif ?>
                                <?php if(get_sub_field('description_details_offre')) : ?>
                                    <div class="kl-text-16 kl-mt-between-p kl-mt-between-li kl-lh-1_4">
                                        <?php the_sub_field('description_details_offre') ?>
                                    </div>
                                <?php endif ?>
                            </div>
                        <?php endwhile ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>