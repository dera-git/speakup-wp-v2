<?php
$title = get_field('title_about');
$subtitle = get_field('subtitle_about');
$iframe = get_field('video_embed_about');
$image_cover = get_field('img_cover_embed_about');
$paragraph = get_field('paragraph_about');
$link = get_field('link_about');

preg_match('/src="(.+?)"/', $iframe, $matches);
$src = $matches[1];

$array_src = explode("embed/", $src);
$array_src2 = explode("?", $array_src[1]);
$video_id = $array_src2[0];
$thumbnail_video = "https://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";

?>
<section class="kl-bg-orange-tertiary kl-section-video">
    <div class="kl-group-waves">
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <div class="container kl-container-xl-1164 position-relative kl-z-index-1">
        <?php if ($title) : ?>
            <div class="kl-text-120 kl-ff-secondary kl-fw-regular kl-color-white kl-mb-40 kl-mb-md-40 text-center">
                <h2><?= $title; ?></h2>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-7 kl-mb-60 kl-animate-scroll" data-animation="animate__fadeInLeft">
                <div class="kl-parent-video overflow-hidden position-relative kl-max-w-lg-650">
                    <?php if ($thumbnail_video) : ?>
                        <div class="kl-cover-image position-relative h-100">
                            <img src="<?= $thumbnail_video ?>" class="img-fluid kl-img-cover" alt="">
                            <button type="button" class="btn kl-btn-play js-btn-play">
                                <svg width="91" height="91" viewBox="0 0 91 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="45.5" cy="45.5" r="44.8592" stroke="#F1EDE9" stroke-width="1.28169" />
                                    <circle cx="45.5" cy="45.5" r="37.8099" fill="white" />
                                    <path d="M55.1127 44.8592L39.7324 53.739L39.7324 35.9794L55.1127 44.8592Z" fill="#73A842" />
                                </svg>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php
                    if ($iframe) :
                        preg_match('/src="(.+?)"/', $iframe, $matches);
                        $src = $matches[1];

                        $params = array(
                            'controls'  => 0,
                            'hd'        => 1,
                            'autohide'  => 1
                        );

                        $new_src = add_query_arg($params, $src);
                        $iframe = str_replace($src, $new_src, $iframe);

                        $attributes = 'frameborder="0" allowfullscreen';
                        $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
                    ?>
                        <div class="position-relative h-100">
                            <?= $iframe; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-5 kl-ps-lg-55 kl-animate-scroll" data-animation="animate__fadeInRight">
                <?php if ($subtitle) : ?>
                    <div class="kl-text-18 kl-fw-bold kl-color-white kl-mb-20">
                        <h3><?= $subtitle ?></h3>
                    </div>
                <?php endif; ?>
                <?php if ($paragraph) : ?>
                    <div class="kl-color-white kl-mt-between-p">
                        <?= $paragraph ?>
                    </div>
                <?php endif; ?>
                <?php
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                ?>
                    <div class="kl-mt-35">
                        <a href="<?= esc_url($link_url); ?>" class="kl-btn-theme02 kl-min-w-305 kl-bg-black">
                            <?= esc_html($link_title); ?>
                            <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.08594 0.5625L4.4375 4.125C4.53125 4.24219 4.60156 4.38281 4.60156 4.5C4.60156 4.64062 4.53125 4.78125 4.4375 4.89844L1.08594 8.46094C0.875 8.69531 0.523438 8.69531 0.289062 8.48438C0.0546875 8.27344 0.0546875 7.92188 0.265625 7.6875L3.26562 4.5L0.265625 1.33594C0.0546875 1.10156 0.0546875 0.75 0.289062 0.539062C0.523438 0.328125 0.875 0.328125 1.08594 0.5625Z" fill="white"></path>
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="kl-ellipse">
        <img src="<?= get_template_directory_uri() ?>/assets/img/home/Ellipse.svg" class="img-fluid kl-img-cover" alt="">
    </div>
</section>