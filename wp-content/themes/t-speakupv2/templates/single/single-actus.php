<?php get_header(); ?>
    <section class="kl-section-article-intro py-4 mb-3">
        <div class="container kl-max-w-lg-966">
            <div class="kl-text-30 text-center kl-color-beige mb-lg-4 pb-lg-2">
                <h1 class="kl-fw-bold"><?= the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="kl-section-article-wrapper pb-4 pb-lg-5 mb-5">
        <div class="container kl-container-xl-1164">
            <div class="row kl-gy-40 kl-gx-lg-30">
                <div class="col-lg order-lg-1">
                    <div class="kl-article-block kl-bg-white">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('large', ['class' => 'img-fluid w-100', 'alt' => get_the_title()]);
                        }
                        ?>
                        <div class="kl-article-block-content kl-gutenberg-content">
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg order-lg-0 kl-max-w-lg-260">
                    <div class="row kl-gy-39 kl-article-sidebar">
                        <div class="col-sm-6 col-lg-12">
                            <h6 class="kl-text-12 kl-fw-bold text-uppercase">Date de publication</h6>
                            <div class="kl-text-14">
                                <i class="fa-light fa-pen-clip kl-color-orange-primary me-1"></i> <?= get_the_date(); ?>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <h6 class="kl-text-12 kl-fw-bold text-uppercase">Catégorie</h6>

                            <form class="d-flex align-items-center js-form-select-actus" action="">
                                <div class="kl-form-select flex-grow-1">
                                    <select name="category" id="id-category" class="js-select-category-default">
                                        <option value="<?= get_site_url() . '/actualites' ?>">Toutes les actualités</option>
                                        <?php
                                        $categories = get_categories();
                                        $current_page_url = get_permalink();
                                        $current_category = get_query_var('category_name');

                                        $selected_cat = get_the_terms(get_the_ID(), 'category');
                                        $selected_id = $selected_cat[0]->slug;

                                        foreach ($categories as $category) {
                                            $cat_name = esc_attr($category->name);
                                            $category_link = get_category_link($category);
                                            $cat_slug = $category->slug;
                                            $selected = ($cat_slug === $selected_id) ? 'selected' : '';
                                            echo '<option  '. $selected . ' value="'. get_site_url() . '/actualites/' . '?category_name=' . $cat_slug  .'">' . esc_html($category->name) . '</a></option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button class="btn kl-btn-next-to-select kl-text-14" type="submit">
                                    <i class="fa-light fa-eye"></i>
                                </button>
                            </form>
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <h6 class="kl-text-12 kl-fw-bold text-uppercase mb-0">Programme</h6>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/single-article/Logo-VE.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <h6 class="kl-text-12 kl-fw-bold text-uppercase mb-3">Partagez cet article :</h6>
                            <div >

                            </div>
                            <ul class="kl-social-share list-group py-1">
                                <?php echo do_shortcode('[addtoany]'); ?>
                                <li class="list-group-item kl-text-14">
                                    <a class="kl-color-orange-primary" href="#">
                                        <i class="fa-solid fa-envelope"></i> par e-mail
                                    </a>
                                </li>

                                <li class="list-group-item kl-text-14">
                                    <a class="kl-color-orange-primary js-share-btn-fb" href="#">
                                        <i class="fa-brands fa-facebook-f"></i> sur Facebook
                                    </a>
                                </li>
                                <li class="list-group-item kl-text-14">
                                    <a class="kl-color-orange-primary js-share-btn-twitter" href="#">
                                        <i class="fa-brands fa-twitter"></i> sur Twitter
                                    </a>
                                </li>
                                <li class="list-group-item kl-text-14">
                                    <a class="kl-color-orange-primary js-share-btn-whatsapp" href="#">
                                        <i class="fa-brands fa-whatsapp"></i> sur WhatsApp
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        $args_actus = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post_status'    => 'publish',
            'post__not_in' => array( get_the_ID() ),
            'orderby'        => 'DESC',
            'ignore_sticky_posts' => 1
        );

        $learn_more_actus = new WP_Query($args_actus);
    ?>

    <?php if($learn_more_actus->have_posts()): $i = 1;?>
    <section class="kl-section-article-related pb-3 pb-lg-5 mb-xxl-5 overflow-hidden">
        <div class="container kl-container-xl-1164">
            <div class="kl-text-82 kl-color-black kl-ff-secondary kl-fw-regular text-center mb-4 pb-4">
                <h2>Lire plus d’articles</h2>
            </div>
            <div class="row kl-gy-48 kl-gx-lg-30 justify-content-center kl-custom-animate-list-actus">
                <?php while( $learn_more_actus->have_posts() ): $learn_more_actus->the_post();
                    $terms = get_the_terms(get_the_ID(), 'category');
                    $date = get_the_date();
                    $i++;
                    $data_animation = "";
                    if($i == 1) {
                        $data_animation = "animate__fadeInLeft";
                    }elseif ($i % 3  === 0){
                        $data_animation = "animate__fadeInUp";
                    }elseif ($i % 2 === 0){
                        $data_animation = "animate__fadeInRight";
                    }
                ?>
                <div class="col-md-6 col-lg-4 kl-animate-scroll" data-animation="<?=$data_animation?>">
                    <div class="h-100 kl-max-w-380 mx-auto">
                        <a href="<?php the_permalink(); ?>" class="kl-card-theme02 kl-hover-card-orange kl-hover-eye-orange h-100">
                            <div class="kl-mb-25 kl-img-card-header02">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('large', ['class' => 'img-fluid kl-img-cover', 'alt' => get_the_title()]);
                                }
                                ?>
                            </div>
                            <div class="kl-mb-35">
                                <div data-mh="title-card-theme02" class="kl-text-12 kl-mb-10">
                                    <span class="kl-fw-bold kl-color-orange-primary text-uppercase"><?= $terms[0]->name; ?></span>
                                    <span class="kl-fw-medium kl-color-black"> -  <?= $date; ?></span>
                                </div>
                                <div class="kl-text-18 kl-fw-bold kl-color-black kl-title-card">
                                    <h3 class="kl-lh-1_1"><?php the_title(); ?></h3>
                                </div>
                            </div>
                            <div class="kl-fw-bold kl-color-orange-primary d-flex align-items-center justify-content-start mt-auto">
                                    <span class="kl-icon-eye">
                                        <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.375 6.75C12.375 8.69141 10.7891 10.25 8.875 10.25C6.93359 10.25 5.375 8.69141 5.375 6.75C5.375 4.83594 6.93359 3.25 8.875 3.25C10.7891 3.25 12.375 4.83594 12.375 6.75ZM8.875 4.125C7.39844 4.125 6.25 5.30078 6.25 6.75C6.25 8.19922 7.39844 9.375 8.875 9.375C10.3242 9.375 11.5 8.19922 11.5 6.75C11.5 5.30078 10.3242 4.125 8.875 4.125ZM14.125 2.83984C15.4102 4.01562 16.2578 5.4375 16.668 6.42188C16.75 6.64062 16.75 6.88672 16.668 7.10547C16.2578 8.0625 15.4102 9.48438 14.125 10.6875C12.8398 11.8906 11.0625 12.875 8.875 12.875C6.66016 12.875 4.88281 11.8906 3.59766 10.6875C2.3125 9.48438 1.46484 8.0625 1.05469 7.10547C0.972656 6.88672 0.972656 6.64062 1.05469 6.42188C1.46484 5.4375 2.3125 4.01562 3.59766 2.83984C4.88281 1.63672 6.66016 0.625 8.875 0.625C11.0625 0.625 12.8398 1.63672 14.125 2.83984ZM1.875 6.75C2.23047 7.625 3.02344 8.9375 4.19922 10.0312C5.375 11.125 6.93359 12 8.875 12C10.7891 12 12.3477 11.125 13.5234 10.0312C14.6992 8.9375 15.4922 7.625 15.875 6.75C15.4922 5.875 14.6992 4.5625 13.5234 3.46875C12.3477 2.375 10.7891 1.5 8.875 1.5C6.93359 1.5 5.375 2.375 4.19922 3.46875C3.02344 4.5625 2.23047 5.875 1.875 6.75Z" fill="#925C26"/>
                                        </svg>
                                    </span>
                                Lire l’article
                            </div>
                        </a>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

<?php get_footer(); ?>