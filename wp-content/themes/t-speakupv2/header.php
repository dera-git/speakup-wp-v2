<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon.png">
    <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon.png" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php global $image_logo_head_color, $image_logo_head, $image_banner_head, $social_network_fb, $social_network_tw,
             $social_network_insta, $social_network_youtube, $email_contact_site, $phone_number_contact_site,
             $live_adress_contact_site; ?>

<?php
    $image_logo_head_color = get_field('logo_default_black_site','option');
    $image_logo_head = get_field('logo_default_site','option');
    $social_network_fb = get_field('social_network_link_facebook','option');
    $social_network_tw = get_field('social_network_link_twitter' ,'option');
    $social_network_insta = get_field('social_network_link_instagram','option');
    $social_network_youtube = get_field('social_network_link_youtube' ,'option');
    $image_banner_head = get_field('image_banner_header_background','option');
    $email_contact_site = get_field('email_option_contact', 'option');
    $phone_number_contact_site = get_field('number_phone_option_contact', 'option');
    $live_adress_contact_site = get_field('live_adress_option_contact', 'option');
?>

<header class="kl-header">
    <nav class="navbar kl-navbar position-relative">
        <div class="container kl-container-xl-1164 kl-container-header position-relative">
            <div class="kl-if-menu-show d-none">
                <a class="navbar-brand kl-logo-header d-inline-block p-0 me-0" href="<?= esc_url(home_url())?>">
                   <?php if($image_logo_head_color):?>
                       <img src="<?php echo esc_url($image_logo_head_color['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image_logo_head_color['alt']); ?>" />
                    <?php  else : ?>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/logo/logo-header-color.svg" class="img-fluid" alt="logo">
                    <?php  endif; ?>
                </a>
            </div>
            <div class="d-flex kl-z-index-12 kl-flex-md-w">
                <button class="navbar-toggler kl-navbar-toggler" id="desktopToggler" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <div>
                        <span class="kl-toggler-icon"></span>
                        <span class="kl-toggler-icon"></span>
                        <span class="kl-toggler-icon"></span>
                    </div>
                    <span class="kl-text-toggler">MENU</span>
                </button>
                <form class="d-none d-md-flex kl-form-search">
                    <button class="btn p-0" type="submit">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M14.6719 12.8906L11.3906 9.60938C12.1289 8.51562 12.5117 7.14844 12.3203 5.67188C11.9648 3.15625 9.91406 1.13281 7.42578 0.804688C3.70703 0.339844 0.5625 3.48438 1.02734 7.20312C1.35547 9.69141 3.37891 11.7422 5.89453 12.0977C7.37109 12.2891 8.73828 11.9062 9.85938 11.168L13.1133 14.4492C13.5508 14.8594 14.2344 14.8594 14.6719 14.4492C15.082 14.0117 15.082 13.3281 14.6719 12.8906ZM3.16016 6.4375C3.16016 4.52344 4.71875 2.9375 6.66016 2.9375C8.57422 2.9375 10.1602 4.52344 10.1602 6.4375C10.1602 8.37891 8.57422 9.9375 6.66016 9.9375C4.71875 9.9375 3.16016 8.37891 3.16016 6.4375Z"
                                    fill="white" />
                        </svg>
                    </button>
                    <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                </form>
            </div>
            <a class="navbar-brand kl-logo-header p-0 me-0 kl-logo-white" href="<?= esc_url(home_url())?>">
                <?php if($image_logo_head):?>
                    <img src="<?php echo esc_url($image_logo_head['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image_logo_head['alt']); ?>" />
                <?php  else : ?>
                    <img src="<?= get_template_directory_uri() ?>/assets/img/logo/logo-white.svg" class="img-fluid" alt="logo">
                <?php  endif; ?>
            </a>
            <a class="navbar-brand kl-logo-header p-0 me-0 kl-logo-color" href="<?= esc_url(home_url())?>">
                <?php if($image_logo_head_color):?>
                    <img src="<?php echo esc_url($image_logo_head_color['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image_logo_head_color['alt']); ?>" />
                <?php  else : ?>
                    <img src="<?= get_template_directory_uri() ?>/assets/img/logo/logo-header-color.svg" class="img-fluid" alt="logo">
                <?php  endif; ?>
            </a>
            <div class="d-none d-md-flex justify-content-end align-items-end kl-flex-md-w">
                <div class="dropdown kl-dropdown-translate">
                    <div class="kl-icon-world">
                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7 0.75C10.8555 0.75 14 3.89453 14 7.75C14 11.6328 10.8555 14.75 7 14.75C3.11719 14.75 0 11.6328 0 7.75C0 3.89453 3.11719 0.75 7 0.75ZM7 13.4375C7.19141 13.4375 7.71094 13.2461 8.28516 12.125C8.53125 11.6328 8.72266 11.0586 8.88672 10.375H5.08594C5.25 11.0586 5.44141 11.6328 5.6875 12.125C6.26172 13.2461 6.78125 13.4375 7 13.4375ZM4.86719 9.0625H9.10547C9.16016 8.65234 9.1875 8.21484 9.1875 7.75C9.1875 7.3125 9.16016 6.875 9.10547 6.4375H4.86719C4.8125 6.875 4.8125 7.3125 4.8125 7.75C4.8125 8.21484 4.8125 8.65234 4.86719 9.0625ZM8.88672 5.125C8.72266 4.46875 8.53125 3.89453 8.28516 3.40234C7.71094 2.28125 7.19141 2.0625 7 2.0625C6.78125 2.0625 6.26172 2.28125 5.6875 3.40234C5.44141 3.89453 5.25 4.46875 5.08594 5.125H8.88672ZM10.418 6.4375C10.4727 6.875 10.5 7.3125 10.5 7.75C10.5 8.21484 10.4727 8.65234 10.418 9.0625H12.5234C12.6328 8.65234 12.6875 8.21484 12.6875 7.75C12.6875 7.3125 12.6328 6.875 12.5234 6.4375H10.418ZM9.35156 2.58203C9.73438 3.29297 10.0352 4.16797 10.2266 5.125H12.0312C11.457 4.00391 10.5 3.10156 9.35156 2.58203ZM4.62109 2.58203C3.47266 3.10156 2.51562 4.00391 1.94141 5.125H3.74609C3.9375 4.16797 4.23828 3.29297 4.62109 2.58203ZM1.3125 7.75C1.3125 8.21484 1.33984 8.65234 1.44922 9.0625H3.55469C3.5 8.65234 3.5 8.21484 3.5 7.75C3.5 7.3125 3.5 6.875 3.55469 6.4375H1.44922C1.33984 6.875 1.3125 7.3125 1.3125 7.75ZM12.0312 10.375H10.2266C10.0352 11.3594 9.73438 12.2344 9.35156 12.9453C10.5 12.4258 11.457 11.5234 12.0312 10.375ZM3.74609 10.375H1.94141C2.51562 11.5234 3.47266 12.4258 4.62109 12.9453C4.23828 12.2344 3.9375 11.3594 3.74609 10.375Z"
                                    fill="white" />
                        </svg>
                    </div>
                    <?php echo do_shortcode('[weglot_switcher]'); ?>
                </div>
                <div class="kl-social-networks">
                    <ul class="list-unstyled d-flex align-items-center">
                        <?php if ($social_network_fb) : ?>
                            <li>
                                <a href="<?= esc_url($social_network_fb['url'])?>">
                                    <svg width="8" height="13" viewBox="0 0 8 13" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M6.78906 7.25L7.11719 5.09375H5.03125V3.6875C5.03125 3.07812 5.3125 2.51562 6.25 2.51562H7.21094V0.664062C7.21094 0.664062 6.34375 0.5 5.52344 0.5C3.8125 0.5 2.6875 1.55469 2.6875 3.42969V5.09375H0.765625V7.25H2.6875V12.5H5.03125V7.25H6.78906Z"
                                                fill="white" />
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ($social_network_tw) : ?>
                            <li>
                                <a href="<?= esc_url($social_network_tw['url'])?>">
                                    <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M10.7578 3.0625C10.7578 3.17969 10.7578 3.27344 10.7578 3.39062C10.7578 6.64844 8.29688 10.375 3.77344 10.375C2.36719 10.375 1.07812 9.97656 0 9.27344C0.1875 9.29688 0.375 9.32031 0.585938 9.32031C1.73438 9.32031 2.78906 8.92188 3.63281 8.26562C2.55469 8.24219 1.64062 7.53906 1.33594 6.55469C1.5 6.57812 1.64062 6.60156 1.80469 6.60156C2.01562 6.60156 2.25 6.55469 2.4375 6.50781C1.3125 6.27344 0.46875 5.28906 0.46875 4.09375V4.07031C0.796875 4.25781 1.19531 4.35156 1.59375 4.375C0.914062 3.92969 0.492188 3.17969 0.492188 2.33594C0.492188 1.86719 0.609375 1.44531 0.820312 1.09375C2.03906 2.57031 3.86719 3.55469 5.90625 3.67188C5.85938 3.48438 5.83594 3.29688 5.83594 3.10938C5.83594 1.75 6.9375 0.648438 8.29688 0.648438C9 0.648438 9.63281 0.929688 10.1016 1.42188C10.6406 1.30469 11.1797 1.09375 11.6484 0.8125C11.4609 1.39844 11.0859 1.86719 10.5703 2.17188C11.0625 2.125 11.5547 1.98438 11.9766 1.79688C11.6484 2.28906 11.2266 2.71094 10.7578 3.0625Z"
                                                fill="white" />
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ($social_network_insta) : ?>
                            <li>
                                <a href="<?= esc_url($social_network_insta['url'])?>">
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M5.5 2.80469C4 2.80469 2.80469 4.02344 2.80469 5.5C2.80469 7 4 8.19531 5.5 8.19531C6.97656 8.19531 8.19531 7 8.19531 5.5C8.19531 4.02344 6.97656 2.80469 5.5 2.80469ZM5.5 7.25781C4.53906 7.25781 3.74219 6.48438 3.74219 5.5C3.74219 4.53906 4.51562 3.76562 5.5 3.76562C6.46094 3.76562 7.23438 4.53906 7.23438 5.5C7.23438 6.48438 6.46094 7.25781 5.5 7.25781ZM8.92188 2.71094C8.92188 3.0625 8.64062 3.34375 8.28906 3.34375C7.9375 3.34375 7.65625 3.0625 7.65625 2.71094C7.65625 2.35938 7.9375 2.07812 8.28906 2.07812C8.64062 2.07812 8.92188 2.35938 8.92188 2.71094ZM10.7031 3.34375C10.6562 2.5 10.4688 1.75 9.85938 1.14062C9.25 0.53125 8.5 0.34375 7.65625 0.296875C6.78906 0.25 4.1875 0.25 3.32031 0.296875C2.47656 0.34375 1.75 0.53125 1.11719 1.14062C0.507812 1.75 0.320312 2.5 0.273438 3.34375C0.226562 4.21094 0.226562 6.8125 0.273438 7.67969C0.320312 8.52344 0.507812 9.25 1.11719 9.88281C1.75 10.4922 2.47656 10.6797 3.32031 10.7266C4.1875 10.7734 6.78906 10.7734 7.65625 10.7266C8.5 10.6797 9.25 10.4922 9.85938 9.88281C10.4688 9.25 10.6562 8.52344 10.7031 7.67969C10.75 6.8125 10.75 4.21094 10.7031 3.34375ZM9.57812 8.59375C9.41406 9.0625 9.03906 9.41406 8.59375 9.60156C7.89062 9.88281 6.25 9.8125 5.5 9.8125C4.72656 9.8125 3.08594 9.88281 2.40625 9.60156C1.9375 9.41406 1.58594 9.0625 1.39844 8.59375C1.11719 7.91406 1.1875 6.27344 1.1875 5.5C1.1875 4.75 1.11719 3.10938 1.39844 2.40625C1.58594 1.96094 1.9375 1.60938 2.40625 1.42188C3.08594 1.14062 4.72656 1.21094 5.5 1.21094C6.25 1.21094 7.89062 1.14062 8.59375 1.42188C9.03906 1.58594 9.39062 1.96094 9.57812 2.40625C9.85938 3.10938 9.78906 4.75 9.78906 5.5C9.78906 6.27344 9.85938 7.91406 9.57812 8.59375Z"
                                                fill="white" />
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php  if ($social_network_youtube) : ?>
                            <li>
                                <a href="<?= esc_url($social_network_youtube['url'])?>">
                                    <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M13.1172 1.42969C12.9766 0.867188 12.5312 0.421875 11.9922 0.28125C10.9844 0 7 0 7 0C7 0 2.99219 0 1.98438 0.28125C1.44531 0.421875 1 0.867188 0.859375 1.42969C0.578125 2.41406 0.578125 4.52344 0.578125 4.52344C0.578125 4.52344 0.578125 6.60938 0.859375 7.61719C1 8.17969 1.44531 8.60156 1.98438 8.74219C2.99219 9 7 9 7 9C7 9 10.9844 9 11.9922 8.74219C12.5312 8.60156 12.9766 8.17969 13.1172 7.61719C13.3984 6.60938 13.3984 4.52344 13.3984 4.52344C13.3984 4.52344 13.3984 2.41406 13.1172 1.42969ZM5.6875 6.42188V2.625L9.01562 4.52344L5.6875 6.42188Z"
                                                fill="white" />
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse kl-navbar-collapse" id="navbarNav">
                <?php
                $nav_args = array(
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarNav',
                    'theme_location' => 'primary',
                    'menu_class'    => 'navbar-nav kl-navbar-nav me-auto mb-2 mb-lg-0',
                    'fallback_cb'   => false,
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker_primary(),
                );
                wp_nav_menu($nav_args);
                ?>

                <div class="d-none justify-content-start align-items-end mt-auto kl-footer-sub-menu">
                    <div class="dropdown kl-dropdown-translate">
                        <div class="kl-icon-world">
                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M7 0.75C10.8555 0.75 14 3.89453 14 7.75C14 11.6328 10.8555 14.75 7 14.75C3.11719 14.75 0 11.6328 0 7.75C0 3.89453 3.11719 0.75 7 0.75ZM7 13.4375C7.19141 13.4375 7.71094 13.2461 8.28516 12.125C8.53125 11.6328 8.72266 11.0586 8.88672 10.375H5.08594C5.25 11.0586 5.44141 11.6328 5.6875 12.125C6.26172 13.2461 6.78125 13.4375 7 13.4375ZM4.86719 9.0625H9.10547C9.16016 8.65234 9.1875 8.21484 9.1875 7.75C9.1875 7.3125 9.16016 6.875 9.10547 6.4375H4.86719C4.8125 6.875 4.8125 7.3125 4.8125 7.75C4.8125 8.21484 4.8125 8.65234 4.86719 9.0625ZM8.88672 5.125C8.72266 4.46875 8.53125 3.89453 8.28516 3.40234C7.71094 2.28125 7.19141 2.0625 7 2.0625C6.78125 2.0625 6.26172 2.28125 5.6875 3.40234C5.44141 3.89453 5.25 4.46875 5.08594 5.125H8.88672ZM10.418 6.4375C10.4727 6.875 10.5 7.3125 10.5 7.75C10.5 8.21484 10.4727 8.65234 10.418 9.0625H12.5234C12.6328 8.65234 12.6875 8.21484 12.6875 7.75C12.6875 7.3125 12.6328 6.875 12.5234 6.4375H10.418ZM9.35156 2.58203C9.73438 3.29297 10.0352 4.16797 10.2266 5.125H12.0312C11.457 4.00391 10.5 3.10156 9.35156 2.58203ZM4.62109 2.58203C3.47266 3.10156 2.51562 4.00391 1.94141 5.125H3.74609C3.9375 4.16797 4.23828 3.29297 4.62109 2.58203ZM1.3125 7.75C1.3125 8.21484 1.33984 8.65234 1.44922 9.0625H3.55469C3.5 8.65234 3.5 8.21484 3.5 7.75C3.5 7.3125 3.5 6.875 3.55469 6.4375H1.44922C1.33984 6.875 1.3125 7.3125 1.3125 7.75ZM12.0312 10.375H10.2266C10.0352 11.3594 9.73438 12.2344 9.35156 12.9453C10.5 12.4258 11.457 11.5234 12.0312 10.375ZM3.74609 10.375H1.94141C2.51562 11.5234 3.47266 12.4258 4.62109 12.9453C4.23828 12.2344 3.9375 11.3594 3.74609 10.375Z"
                                        fill="black" />
                            </svg>
                        </div>
                        <?php echo do_shortcode('[weglot_switcher]'); ?>
                    </div>
                    <div class="kl-social-networks kl-social-networks-black">
                        <ul class="list-unstyled d-flex align-items-center">
                            <?php  if ($social_network_fb) : ?>
                            <li>
                                <a href="<?= esc_url($social_network_fb['url'])?>">
                                    <svg width="8" height="13" viewBox="0 0 8 13" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M6.78906 7.25L7.11719 5.09375H5.03125V3.6875C5.03125 3.07812 5.3125 2.51562 6.25 2.51562H7.21094V0.664062C7.21094 0.664062 6.34375 0.5 5.52344 0.5C3.8125 0.5 2.6875 1.55469 2.6875 3.42969V5.09375H0.765625V7.25H2.6875V12.5H5.03125V7.25H6.78906Z"
                                                fill="black" />
                                    </svg>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php  if ($social_network_tw) : ?>
                            <li>
                                <a href="<?= esc_url($social_network_tw['url'])?>">
                                    <svg width="12" height="11" viewBox="0 0 12 11" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M10.7578 3.0625C10.7578 3.17969 10.7578 3.27344 10.7578 3.39062C10.7578 6.64844 8.29688 10.375 3.77344 10.375C2.36719 10.375 1.07812 9.97656 0 9.27344C0.1875 9.29688 0.375 9.32031 0.585938 9.32031C1.73438 9.32031 2.78906 8.92188 3.63281 8.26562C2.55469 8.24219 1.64062 7.53906 1.33594 6.55469C1.5 6.57812 1.64062 6.60156 1.80469 6.60156C2.01562 6.60156 2.25 6.55469 2.4375 6.50781C1.3125 6.27344 0.46875 5.28906 0.46875 4.09375V4.07031C0.796875 4.25781 1.19531 4.35156 1.59375 4.375C0.914062 3.92969 0.492188 3.17969 0.492188 2.33594C0.492188 1.86719 0.609375 1.44531 0.820312 1.09375C2.03906 2.57031 3.86719 3.55469 5.90625 3.67188C5.85938 3.48438 5.83594 3.29688 5.83594 3.10938C5.83594 1.75 6.9375 0.648438 8.29688 0.648438C9 0.648438 9.63281 0.929688 10.1016 1.42188C10.6406 1.30469 11.1797 1.09375 11.6484 0.8125C11.4609 1.39844 11.0859 1.86719 10.5703 2.17188C11.0625 2.125 11.5547 1.98438 11.9766 1.79688C11.6484 2.28906 11.2266 2.71094 10.7578 3.0625Z"
                                                fill="black" />
                                    </svg>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php  if ($social_network_insta) : ?>
                            <li>
                                <a href="<?= esc_url($social_network_insta['url'])?>">
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M5.5 2.80469C4 2.80469 2.80469 4.02344 2.80469 5.5C2.80469 7 4 8.19531 5.5 8.19531C6.97656 8.19531 8.19531 7 8.19531 5.5C8.19531 4.02344 6.97656 2.80469 5.5 2.80469ZM5.5 7.25781C4.53906 7.25781 3.74219 6.48438 3.74219 5.5C3.74219 4.53906 4.51562 3.76562 5.5 3.76562C6.46094 3.76562 7.23438 4.53906 7.23438 5.5C7.23438 6.48438 6.46094 7.25781 5.5 7.25781ZM8.92188 2.71094C8.92188 3.0625 8.64062 3.34375 8.28906 3.34375C7.9375 3.34375 7.65625 3.0625 7.65625 2.71094C7.65625 2.35938 7.9375 2.07812 8.28906 2.07812C8.64062 2.07812 8.92188 2.35938 8.92188 2.71094ZM10.7031 3.34375C10.6562 2.5 10.4688 1.75 9.85938 1.14062C9.25 0.53125 8.5 0.34375 7.65625 0.296875C6.78906 0.25 4.1875 0.25 3.32031 0.296875C2.47656 0.34375 1.75 0.53125 1.11719 1.14062C0.507812 1.75 0.320312 2.5 0.273438 3.34375C0.226562 4.21094 0.226562 6.8125 0.273438 7.67969C0.320312 8.52344 0.507812 9.25 1.11719 9.88281C1.75 10.4922 2.47656 10.6797 3.32031 10.7266C4.1875 10.7734 6.78906 10.7734 7.65625 10.7266C8.5 10.6797 9.25 10.4922 9.85938 9.88281C10.4688 9.25 10.6562 8.52344 10.7031 7.67969C10.75 6.8125 10.75 4.21094 10.7031 3.34375ZM9.57812 8.59375C9.41406 9.0625 9.03906 9.41406 8.59375 9.60156C7.89062 9.88281 6.25 9.8125 5.5 9.8125C4.72656 9.8125 3.08594 9.88281 2.40625 9.60156C1.9375 9.41406 1.58594 9.0625 1.39844 8.59375C1.11719 7.91406 1.1875 6.27344 1.1875 5.5C1.1875 4.75 1.11719 3.10938 1.39844 2.40625C1.58594 1.96094 1.9375 1.60938 2.40625 1.42188C3.08594 1.14062 4.72656 1.21094 5.5 1.21094C6.25 1.21094 7.89062 1.14062 8.59375 1.42188C9.03906 1.58594 9.39062 1.96094 9.57812 2.40625C9.85938 3.10938 9.78906 4.75 9.78906 5.5C9.78906 6.27344 9.85938 7.91406 9.57812 8.59375Z"
                                                fill="black" />
                                    </svg>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ($social_network_youtube) : ?>
                            <li>
                                <a href="<?= esc_url($social_network_youtube['url'])?>">
                                    <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M13.1172 1.42969C12.9766 0.867188 12.5312 0.421875 11.9922 0.28125C10.9844 0 7 0 7 0C7 0 2.99219 0 1.98438 0.28125C1.44531 0.421875 1 0.867188 0.859375 1.42969C0.578125 2.41406 0.578125 4.52344 0.578125 4.52344C0.578125 4.52344 0.578125 6.60938 0.859375 7.61719C1 8.17969 1.44531 8.60156 1.98438 8.74219C2.99219 9 7 9 7 9C7 9 10.9844 9 11.9922 8.74219C12.5312 8.60156 12.9766 8.17969 13.1172 7.61719C13.3984 6.60938 13.3984 4.52344 13.3984 4.52344C13.3984 4.52344 13.3984 2.41406 13.1172 1.42969ZM5.6875 6.42188V2.625L9.01562 4.52344L5.6875 6.42188Z"
                                                fill="black" />
                                    </svg>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="kl-bg-beige kl-bg-mega-menu js-bg-menu"></div>
        <div class="kl-image-banner js-img-banner">
            <?php if($image_banner_head):?>
                <img src="<?php echo esc_url($image_banner_head['url']); ?>" class="img-fluid kl-img-cover" alt="<?php echo esc_attr($image_banner_head['alt']); ?>" />
            <?php  else : ?>
                <img src="<?= get_template_directory_uri() ?>/assets/img/home/img-banner.png" class="img-fluid kl-img-cover" alt="logo">
            <?php  endif; ?>
        </div>
    </nav>
</header>


<div class="<?php if (
                is_front_page()
                || is_page_template(array('templates/notre-travail.php', 'templates/notre-equipe.php', 'templates/ressource.php', 'templates/nos-champions.php', 'templates/nos-partenaires.php', 'templates/emplois.php', 'templates/contact.php'))
                || is_tax(array('thematique', 'thematique-ressource', 'format'))
                || is_singular('programme')
                || is_singular('offre-emploi')
            ) {
                echo 'overflow-hidden';
            } else {
                echo 'kl-other-page';
            } ?>">

