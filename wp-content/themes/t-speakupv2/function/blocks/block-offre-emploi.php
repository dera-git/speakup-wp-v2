<section class="kl-sect-offre-emploi">
    <div class="container kl-container-xl-1164 py-5">
        <?php if (get_field('contenu_de_la_description')) : ?>
            <div class="kl-desc-offre-page kl-color-orange-seventh text-center">
                <?= get_field('contenu_de_la_description'); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <?php
            $title_team = get_field('titre_rejoignez_notre_equipe');
            $content_team = get_field('contenu_rejoignez_notre_equipe');
            $link_team = get_field('lien_vers_rejoignez_notre_equipe');
            $btn_team = get_field('titre_du_bouton_rejoignez_notre_equipe');
            $offres = get_field('offre_demploi');

            if (acf_is_empty($title_team, $content_team, $link_team, $btn_team)) {
            ?>
                <?php
                foreach ($offres as $offre) {
                    $localisation = get_field('location_details_offre', $offre->ID);
                    $terms = get_the_terms($offre->ID, 'categorie_offre');
                    echo '<div class="col-md-6">';
                    echo '<a class="kl-card-offre" href="' . get_permalink($offre->ID) . '">';
                    echo '<p>' . $offre->post_title . '</p>';
                    echo '<div class="flex">';
                    foreach ($terms as $term) {
                        echo '<span class="kl-type-offre">' . esc_html($term->name) . '</span>';
                    }
                    echo '<span class="kl-localisation-offre">' . $localisation . '</span>';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                }
                ?>
            <?php
            } else {
            ?>
                <div class="col-md-6 kl-order-md-2">
                    <?php
                    $i = 1;
                    foreach ($offres as $offre) {
                        if ($i < 3) {
                            $localisation = get_field('location_details_offre', $offre->ID);
                            $terms = get_the_terms($offre->ID, 'categorie_offre');
                            echo '<a class="kl-card-offre" href="' . get_permalink($offre->ID) . '">';
                            echo '<p>' . $offre->post_title . '</p>';
                            echo '<div class="flex">';
                            foreach ($terms as $term) {
                                echo '<span class="kl-type-offre">' . esc_html($term->name) . '</span>';
                            }
                            echo '<span class="kl-localisation-offre">' . $localisation . '</span>';
                            echo '</div>';
                            echo '</a>';
                        } else {
                            echo "";
                        }

                        $i++;
                    }
                    ?>
                </div>
                <div class="col-md-6 kl-order-md-1">
                    <div class="kl-our-team-offre">
                        <div class="kl-title kl-text-56 kl-color-white kl-ff-secondary text-center">
                            <?php if (get_field('titre_rejoignez_notre_equipe')) : ?>
                                <h2><?= get_field('titre_rejoignez_notre_equipe'); ?></h2>
                            <?php endif; ?>
                        </div>
                        <div class="kl-content">
                            <?php if (get_field('contenu_rejoignez_notre_equipe')) :
                                echo get_field('contenu_rejoignez_notre_equipe');
                            endif; ?>
                        </div>
                        <div class="text-center">
                            <?php if (get_field('lien_vers_rejoignez_notre_equipe')) : ?>
                                <a href="<?= get_field('lien_vers_rejoignez_notre_equipe')['url']; ?>" class="kl-btn-theme02 kl-min-w-238 kl-bg-white kl-color-orange-seventh">
                                    <?= get_field('lien_vers_rejoignez_notre_equipe')['title']; ?>
                                    <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.08594 0.5625L4.4375 4.125C4.53125 4.24219 4.60156 4.38281 4.60156 4.5C4.60156 4.64062 4.53125 4.78125 4.4375 4.89844L1.08594 8.46094C0.875 8.69531 0.523438 8.69531 0.289062 8.48438C0.0546875 8.27344 0.0546875 7.92188 0.265625 7.6875L3.26562 4.5L0.265625 1.33594C0.0546875 1.10156 0.0546875 0.75 0.289062 0.539062C0.523438 0.328125 0.875 0.328125 1.08594 0.5625Z" fill="#D6924E" />
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
                $i = 1;
                foreach ($offres as $offre) {
                    if ($i > 2) {
                        $localisation = get_field('location_details_offre', $offre->ID);
                        $terms = get_the_terms($offre->ID, 'categorie_offre');
                        echo '<div class="col-md-6 kl-order-md-2">';
                        echo '<a class="kl-card-offre" href="' . get_permalink($offre->ID) . '">';
                        echo '<p>' . $offre->post_title . '</p>';
                        echo '<div class="flex">';
                        if($terms): 
                        foreach ($terms as $term) {
                            echo '<span class="kl-type-offre">' . esc_html($term->name) . '</span>';
                        }
                        endif;
                        if($localisation):
                        echo '<span class="kl-localisation-offre">' . $localisation . '</span>';
                        endif;
                        echo '</div>';
                        echo '</a>';
                        echo '</div>';
                    } else {
                        echo "";
                    }

                    $i++;
                }
                ?>
            <?php
            }
            ?>
        </div>
    </div>
</section>