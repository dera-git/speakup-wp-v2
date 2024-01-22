<?php
/*
    Template Name: Actualités
*/
?>

<?php
$is_actualites_template = true;
get_header();

$displayed_pinned_id = null;
$category_name = isset($_GET['category_name']) ? sanitize_text_field($_GET['category_name']) : '';
$activeAll = isset($_GET['category_name']) ? '' : 'active';
?>

<section class="kl-section-actus-intro mt-3">
    <div class="container kl-max-w-lg-966">
        <div class="kl-text-130 kl-ff-secondary kl-fw-regular text-center kl-color-beige mb-4 pb-lg-2">
            <h1><?php the_title() ?></h1>
        </div>
        <div class="kl-filter-actus d-none d-lg-flex row kl-gx-17 py-3 mb-4 align-items-end">
            <div class="col">
                <a class="kl-filter-actus-link kl-all-categories <?= $activeAll ?>" href="<?php the_permalink() ?>">Toutes les actualités</a>
            </div>

            <?php
            class Custom_Category_Walker extends Walker_Category {
                function start_el(&$output, $category, $depth = 0, $args = null, $id = 0) {
                    extract($args);
            
                    $cat_name = esc_attr($category->name);
                    $cat_id = esc_attr($category->term_id);
                    $cat_slug = esc_attr($category->slug);
                    $current_category = get_query_var('category_name');
            
                    $output .= "<div class='col' data-category-id='{$cat_id}'>";
                    $output .= "<a class='kl-filter-actus-link kl-category-element";
            
                    if ($cat_slug === $current_category) {
                        $output .= " active";
                    }
            
                    $output .= "' href='?category_name=" . $cat_slug . "'>$cat_name</a>";
                    if ($show_count)
                        $output .= ' (' . number_format_i18n($category->count) . ')';
                    $output .= "</div>";
                }
            }
            
            $args = array(
                'title_li' => '',
                'style' => 'list',
                'show_count' => false,
                'walker' => new Custom_Category_Walker()
            );
            
            wp_list_categories($args);            
            ?>
        </div>
        <div class="kl-filter-actus-mobile dropdown-center d-lg-none text-center py-3 mb-3">
            <button class="kl-btn-theme02 kl-min-w-240 kl-bg-orange-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Filtrer par catégorie
                <svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5625 3.91406L4.125 0.5625C4.24219 0.46875 4.38281 0.398438 4.5 0.398438C4.64062 0.398438 4.78125 0.46875 4.89844 0.5625L8.46094 3.91406C8.69531 4.125 8.69531 4.47656 8.48438 4.71094C8.27344 4.94531 7.92188 4.94531 7.6875 4.73438L4.5 1.73438L1.33594 4.73438C1.10156 4.94531 0.75 4.94531 0.539062 4.71094C0.328125 4.47656 0.328125 4.125 0.5625 3.91406Z" fill="white" />
                </svg>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item kl-all-categories <?= $activeAll ?>" href="<?php the_permalink() ?>">Toutes les actualités</a></li>
                <?php
                $categories = get_categories();
                $current_page_url = get_permalink();
                $current_category = get_query_var('category_name');
                foreach ($categories as $category) {
                    $category_link = get_category_link($category);
                    $category_slug = esc_url(add_query_arg('category_name', $category->slug, $current_page_url));
                    $active_class = ($category->slug === $current_category) ? 'active' : '';
                    echo '<li><a class="dropdown-item kl-category-element ' . $active_class . '" href="' . esc_url($category_slug) . '">' . esc_html($category->name) . '</a></li>';
                }
                ?>
            </ul>
        </div>

        <?php
        $args_sticky = array(
            'post__in' => get_option('sticky_posts'),
            'posts_per_page' => 1,
            'category_name' => $category_name,
            'ignore_sticky_posts' => 1,
        );

        $query_sticky = new WP_Query($args_sticky);

        if ($query_sticky->have_posts()) {
            while ($query_sticky->have_posts()) {
                $query_sticky->the_post();
                $terms = get_the_terms(get_the_ID(), 'category');
                $excerpt = get_the_excerpt(get_the_ID());
                $displayed_pinned_id = get_the_ID();
        ?>
                <div class="kl-actus-featured">
                    <div class="kl-text-82 kl-color-black kl-ff-secondary kl-fw-regular mb-4">
                        <h2>A la Une</h2>
                    </div>
                    <div class="row kl-gy-20 mb-5 pb-3 pb-lg-4">
                        <div class="col-xl-7 col-md-6 kl-max-w-xl-520">
                            <?php the_post_thumbnail('large', array('class' => 'kl-img-cover', 'alt' => get_the_title())); ?>
                        </div>
                        <div class="col-xl col-md-6">
                            <div class="d-flex flex-column h-100 ps-xl-3">
                                <div class="kl-text-12 mb-2">
                                    <span class="kl-fw-bold kl-color-orange-primary text-uppercase"><?= $terms[0]->name; ?></span>
                                    <span class="kl-fw-medium kl-color-black"> - <?php the_date(); ?></span>
                                </div>
                                <div class="kl-text-18 kl-fw-bold kl-color-black kl-title-card mb-3 pb-lg-1">
                                    <h3 class="kl-lh-1_1"><?php the_title(); ?></h3>
                                </div>
                                <div class="kl-text-14 kl-lh-1_1 mb-3">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="mt-auto">
                                    <a class="kl-fw-bold kl-color-orange-primary d-inline-flex align-items-center justify-content-start kl-hover-card-orange kl-hover-eye-orange" href="<?php the_permalink(); ?>">
                                        <span class="kl-icon-eye">
                                            <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.375 6.75C12.375 8.69141 10.7891 10.25 8.875 10.25C6.93359 10.25 5.375 8.69141 5.375 6.75C5.375 4.83594 6.93359 3.25 8.875 3.25C10.7891 3.25 12.375 4.83594 12.375 6.75ZM8.875 4.125C7.39844 4.125 6.25 5.30078 6.25 6.75C6.25 8.19922 7.39844 9.375 8.875 9.375C10.3242 9.375 11.5 8.19922 11.5 6.75C11.5 5.30078 10.3242 4.125 8.875 4.125ZM14.125 2.83984C15.4102 4.01562 16.2578 5.4375 16.668 6.42188C16.75 6.64062 16.75 6.88672 16.668 7.10547C16.2578 8.0625 15.4102 9.48438 14.125 10.6875C12.8398 11.8906 11.0625 12.875 8.875 12.875C6.66016 12.875 4.88281 11.8906 3.59766 10.6875C2.3125 9.48438 1.46484 8.0625 1.05469 7.10547C0.972656 6.88672 0.972656 6.64062 1.05469 6.42188C1.46484 5.4375 2.3125 4.01562 3.59766 2.83984C4.88281 1.63672 6.66016 0.625 8.875 0.625C11.0625 0.625 12.8398 1.63672 14.125 2.83984ZM1.875 6.75C2.23047 7.625 3.02344 8.9375 4.19922 10.0312C5.375 11.125 6.93359 12 8.875 12C10.7891 12 12.3477 11.125 13.5234 10.0312C14.6992 8.9375 15.4922 7.625 15.875 6.75C15.4922 5.875 14.6992 4.5625 13.5234 3.46875C12.3477 2.375 10.7891 1.5 8.875 1.5C6.93359 1.5 5.375 2.375 4.19922 3.46875C3.02344 4.5625 2.23047 5.875 1.875 6.75Z" fill="#925C26" />
                                            </svg>
                                        </span>
                                        Lire l’article
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php  }
            wp_reset_postdata();
        } ?>
    </div>
</section>


<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'category_name' => $category_name,
    'ignore_sticky_posts' => 1
);
$query = new WP_Query($args);
if ($query->have_posts()) :
    $i = 1;
    $showMore = false;
?>
    <section class="kl-section-actus-list overflow-hidden">
        <div class="container kl-container-xl-1164">
            <div id="id-list-actus" class="row kl-gy-48 kl-gx-lg-30 kl-custom-animate-list-actus">
                <?php while ($query->have_posts()) : $query->the_post();
                    $terms = get_the_terms(get_the_ID(), 'category');
                    $date = get_the_date();
                    $dnone = ($i > 12) ? "none" : "";
                    $i++;
                    if($i >= 12){
                        $showMore = true;
                    }
                    if (get_the_ID() !== $displayed_pinned_id) {
                ?>
                        <div class="col-md-6 col-lg-4 kl-animate-scroll kl-box-actus" data-animation="animate__fadeInLeft" style="display:<?= $dnone ?>">
                            <div class="h-100 kl-max-w-380 mx-auto">
                                <a href="<?php the_permalink(); ?>" class="kl-card-theme02 kl-hover-card-orange kl-hover-eye-orange h-100">
                                    <div class="kl-mb-25 kl-img-card-header02">
                                        <?php the_post_thumbnail('large', array('class' => 'img-fluid kl-img-cover', 'alt' => get_the_title())); ?>
                                    </div>
                                    <div class="kl-mb-35">
                                        <div data-mh="title-card-theme02" class="kl-text-12 kl-mb-10">
                                            <span class="kl-fw-bold kl-color-orange-primary text-uppercase"><?= $terms[0]->name; ?></span>
                                            <span class="kl-fw-medium kl-color-black"> - <?= $date; ?></span>
                                        </div>
                                        <div class="kl-text-18 kl-fw-bold kl-color-black kl-title-card">
                                            <h3 class="kl-lh-1_1"><?php the_title(); ?></h3>
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
                <?php }
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <?php if($showMore) : ?>
            <div class="text-center kl-mt-50 py-4 mb-5">
                <a id="id-load-more-button" href="#" class="kl-btn-theme02 kl-min-w-240 kl-bg-orange-primary">
                    Charger plus d’articles
                    <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.08594 0.5625L4.4375 4.125C4.53125 4.24219 4.60156 4.38281 4.60156 4.5C4.60156 4.64062 4.53125 4.78125 4.4375 4.89844L1.08594 8.46094C0.875 8.69531 0.523438 8.69531 0.289062 8.48438C0.0546875 8.27344 0.0546875 7.92188 0.265625 7.6875L3.26562 4.5L0.265625 1.33594C0.0546875 1.10156 0.0546875 0.75 0.289062 0.539062C0.523438 0.328125 0.875 0.328125 1.08594 0.5625Z" fill="white" />
                    </svg>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </section>

<?php
endif;
get_footer();
?>