<?php global $image_logo_head, $social_network_fb, $social_network_tw,
             $social_network_insta, $social_network_youtube, $email_contact_site, $phone_number_contact_site,
             $live_adress_contact_site; ?>

<?php
    $title_email_contact = get_field('title_option_email_contact', 'option');
    $icon_email_contact = get_field('icon_option_email_contact', 'option');

    $title_phone_contact = get_field('title_phone_option_contact', 'option');
    $icon_phone_contact = get_field('icon_phone_option_contact', 'option');

    $title_adress_contact = get_field('title_adress_option_contact', 'option');
    $icon_adress_contact = get_field('icone_adress_option_contact', 'option');
?>

</div>

<footer>
    <div class="position-absolute kl-group-wave">
        <div class="kl-wave01"><img src="<?= get_template_directory_uri() ?>/assets/img/home/wave01.svg" class="img-fluid w-100" alt=""></div>
        <div class="kl-wave02"><img src="<?= get_template_directory_uri() ?>/assets/img/home/wave02.svg" class="img-fluid w-100" alt=""></div>
    </div>
    <div class="container kl-container-xl-1164">
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center kl-pt-40 kl-mb-70">
            <a href="<?= esc_url(home_url())?>">
                <?php if($image_logo_head):?>
                    <img src="<?php echo esc_url($image_logo_head['url']); ?>" class="img-fluid kl-logo-footer" alt="<?php echo esc_attr($image_logo_head['alt']); ?>" />
                <?php  else : ?>
                    <img src="<?= get_template_directory_uri() ?>/assets/img/logo/logo-white.svg" class="img-fluid kl-logo-footer" alt="logo">
                <?php  endif; ?>
            </a>
            <div class="d-flex flex-column flex-lg-row align-items-center kl-mt-40 kl-mt-lg-0">
                <div class="kl-social-networks kl-social-hover-blue">
                    <ul class="list-unstyled d-flex align-items-center">
                        <?php if ($social_network_fb) : ?>
                            <li>
                                <a href="<?= esc_url($social_network_fb['url'])?>">
                                    <svg width="13" height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.0781 13.5002L12.7344 9.18774H8.5625V6.37524C8.5625 5.15649 9.125 4.03149 11 4.03149H12.9219V0.328369C12.9219 0.328369 11.1875 0.000244141 9.54688 0.000244141C6.125 0.000244141 3.875 2.10962 3.875 5.85962V9.18774H0.03125V13.5002H3.875V24.0002H8.5625V13.5002H12.0781Z" fill="white"/>
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ($social_network_tw) : ?>
                            <li>
                                <a href="<?= esc_url($social_network_tw['url'])?>">
                                    <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.5156 5.12524C21.5156 5.35962 21.5156 5.54712 21.5156 5.78149C21.5156 12.2971 16.5938 19.7502 7.54688 19.7502C4.73438 19.7502 2.15625 18.9534 0 17.5471C0.375 17.594 0.75 17.6409 1.17188 17.6409C3.46875 17.6409 5.57812 16.844 7.26562 15.5315C5.10938 15.4846 3.28125 14.0784 2.67188 12.1096C3 12.1565 3.28125 12.2034 3.60938 12.2034C4.03125 12.2034 4.5 12.1096 4.875 12.0159C2.625 11.5471 0.9375 9.57837 0.9375 7.18774V7.14087C1.59375 7.51587 2.39062 7.70337 3.1875 7.75024C1.82812 6.85962 0.984375 5.35962 0.984375 3.67212C0.984375 2.73462 1.21875 1.89087 1.64062 1.18774C4.07812 4.14087 7.73438 6.10962 11.8125 6.34399C11.7188 5.96899 11.6719 5.59399 11.6719 5.21899C11.6719 2.50024 13.875 0.297119 16.5938 0.297119C18 0.297119 19.2656 0.859619 20.2031 1.84399C21.2812 1.60962 22.3594 1.18774 23.2969 0.625244C22.9219 1.79712 22.1719 2.73462 21.1406 3.34399C22.125 3.25024 23.1094 2.96899 23.9531 2.59399C23.2969 3.57837 22.4531 4.42212 21.5156 5.12524Z" fill="white"/>
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ($social_network_insta) : ?>
                            <li>
                                <a href="<?= esc_url($social_network_insta['url'])?>">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5 5.60962C8.5 5.60962 6.10938 8.04712 6.10938 11.0002C6.10938 14.0002 8.5 16.3909 11.5 16.3909C14.4531 16.3909 16.8906 14.0002 16.8906 11.0002C16.8906 8.04712 14.4531 5.60962 11.5 5.60962ZM11.5 14.5159C9.57812 14.5159 7.98438 12.969 7.98438 11.0002C7.98438 9.07837 9.53125 7.53149 11.5 7.53149C13.4219 7.53149 14.9688 9.07837 14.9688 11.0002C14.9688 12.969 13.4219 14.5159 11.5 14.5159ZM18.3438 5.42212C18.3438 6.12524 17.7812 6.68774 17.0781 6.68774C16.375 6.68774 15.8125 6.12524 15.8125 5.42212C15.8125 4.71899 16.375 4.15649 17.0781 4.15649C17.7812 4.15649 18.3438 4.71899 18.3438 5.42212ZM21.9062 6.68774C21.8125 5.00024 21.4375 3.50024 20.2188 2.28149C19 1.06274 17.5 0.687744 15.8125 0.593994C14.0781 0.500244 8.875 0.500244 7.14062 0.593994C5.45312 0.687744 4 1.06274 2.73438 2.28149C1.51562 3.50024 1.14062 5.00024 1.04688 6.68774C0.953125 8.42212 0.953125 13.6252 1.04688 15.3596C1.14062 17.0471 1.51562 18.5002 2.73438 19.7659C4 20.9846 5.45312 21.3596 7.14062 21.4534C8.875 21.5471 14.0781 21.5471 15.8125 21.4534C17.5 21.3596 19 20.9846 20.2188 19.7659C21.4375 18.5002 21.8125 17.0471 21.9062 15.3596C22 13.6252 22 8.42212 21.9062 6.68774ZM19.6562 17.1877C19.3281 18.1252 18.5781 18.8284 17.6875 19.2034C16.2812 19.7659 13 19.6252 11.5 19.6252C9.95312 19.6252 6.67188 19.7659 5.3125 19.2034C4.375 18.8284 3.67188 18.1252 3.29688 17.1877C2.73438 15.8284 2.875 12.5471 2.875 11.0002C2.875 9.50024 2.73438 6.21899 3.29688 4.81274C3.67188 3.92212 4.375 3.21899 5.3125 2.84399C6.67188 2.28149 9.95312 2.42212 11.5 2.42212C13 2.42212 16.2812 2.28149 17.6875 2.84399C18.5781 3.17212 19.2812 3.92212 19.6562 4.81274C20.2188 6.21899 20.0781 9.50024 20.0781 11.0002C20.0781 12.5471 20.2188 15.8284 19.6562 17.1877Z" fill="white"/>
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php  if ($social_network_youtube) : ?>
                            <li>
                                <a href="<?= esc_url($social_network_youtube['url'])?>">
                                    <svg width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25.7344 2.85962C25.4531 1.73462 24.5625 0.843994 23.4844 0.562744C21.4688 0.000244141 13.5 0.000244141 13.5 0.000244141C13.5 0.000244141 5.48438 0.000244141 3.46875 0.562744C2.39062 0.843994 1.5 1.73462 1.21875 2.85962C0.65625 4.82837 0.65625 9.04712 0.65625 9.04712C0.65625 9.04712 0.65625 13.219 1.21875 15.2346C1.5 16.3596 2.39062 17.2034 3.46875 17.4846C5.48438 18.0002 13.5 18.0002 13.5 18.0002C13.5 18.0002 21.4688 18.0002 23.4844 17.4846C24.5625 17.2034 25.4531 16.3596 25.7344 15.2346C26.2969 13.219 26.2969 9.04712 26.2969 9.04712C26.2969 9.04712 26.2969 4.82837 25.7344 2.85962ZM10.875 12.844V5.25024L17.5312 9.04712L10.875 12.844Z" fill="white"/>
                                    </svg>
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </div>
                <div class="kl-ms-lg-40 kl-mt-20 kl-mt-lg-0 kl-other-logo">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/home/NGOsource.svg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="row kl-gy-40">

            <div class="col-lg-4">
                <div class="d-flex flex-column flex-lg-row align-items-center align-items-lg-start text-center text-lg-start">
                    <?php if($email_contact_site) :?>
                        <div class="kl-me-lg-20 kl-mb-20 kl-mb-lg-0 kl-flex-auto kl-max-w-41">
                            <?php if($icon_email_contact):?>
                                <img src="<?php echo esc_url($icon_email_contact['url']); ?>" class="img-fluid " alt="<?php echo esc_attr($icon_email_contact['alt']); ?>" />
                            <?php  else : ?>
                                <svg width="42" height="32" viewBox="0 0 42 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M36.75 0.500244H5.25C2.29688 0.500244 0 2.87915 0 5.75024V26.7502C0 29.7034 2.29688 32.0002 5.25 32.0002H36.75C39.6211 32.0002 42 29.7034 42 26.7502V5.75024C42 2.87915 39.6211 0.500244 36.75 0.500244ZM40.6875 26.7502C40.6875 28.9651 38.8828 30.6877 36.75 30.6877H5.25C3.03516 30.6877 1.3125 28.9651 1.3125 26.7502V9.68774L18.2109 23.2229C19.0312 23.7971 19.9336 24.1252 21 24.1252C21.9844 24.1252 22.9688 23.7971 23.707 23.2229L40.6875 9.68774V26.7502ZM40.6875 7.96509L22.8867 22.1565C21.8203 23.0588 20.0977 23.0588 19.0312 22.1565L1.3125 7.96509V5.75024C1.3125 3.61743 3.03516 1.81274 5.25 1.81274H36.75C38.8828 1.81274 40.6875 3.61743 40.6875 5.75024V7.96509Z" fill="white"/>
                                </svg>
                            <?php  endif; ?>
                        </div>
                    <?php endif; ?>
                    <div>
                        <?php if($email_contact_site) :?>
                            <div class="kl-text-14 kl-color-white kl-fw-bold text-uppercase pb-1 mb-2">
                                <?php if($title_phone_contact) : ?>
                                    <h3><?= $title_phone_contact ?></h3>
                                <?php else: ?>
                                    <h3>Ecrivez-nous</h3>
                                <?php endif; ?>
                            </div>
                            <div class="kl-text-18 kl-fw-semi-bold kl-mb-10 pb-1">
                                <a href="mailto:info@speakupafrica.org" class="kl-color-white"><?= $email_contact_site ?></a>
                            </div>
                        <?php endif; ?>
                        <div class="kl-max-w-238">
                            <a class="kl-btn-theme kl-btn-hover-blue js-btn" href="#">
                                <svg class="kl-me-10" width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.375 6.75C12.375 8.69141 10.7891 10.25 8.875 10.25C6.93359 10.25 5.375 8.69141 5.375 6.75C5.375 4.83594 6.93359 3.25 8.875 3.25C10.7891 3.25 12.375 4.83594 12.375 6.75ZM8.875 4.125C7.39844 4.125 6.25 5.30078 6.25 6.75C6.25 8.19922 7.39844 9.375 8.875 9.375C10.3242 9.375 11.5 8.19922 11.5 6.75C11.5 5.30078 10.3242 4.125 8.875 4.125ZM14.125 2.83984C15.4102 4.01562 16.2578 5.4375 16.668 6.42188C16.75 6.64062 16.75 6.88672 16.668 7.10547C16.2578 8.0625 15.4102 9.48438 14.125 10.6875C12.8398 11.8906 11.0625 12.875 8.875 12.875C6.66016 12.875 4.88281 11.8906 3.59766 10.6875C2.3125 9.48438 1.46484 8.0625 1.05469 7.10547C0.972656 6.88672 0.972656 6.64062 1.05469 6.42188C1.46484 5.4375 2.3125 4.01562 3.59766 2.83984C4.88281 1.63672 6.66016 0.625 8.875 0.625C11.0625 0.625 12.8398 1.63672 14.125 2.83984ZM1.875 6.75C2.23047 7.625 3.02344 8.9375 4.19922 10.0312C5.375 11.125 6.93359 12 8.875 12C10.7891 12 12.3477 11.125 13.5234 10.0312C14.6992 8.9375 15.4922 7.625 15.875 6.75C15.4922 5.875 14.6992 4.5625 13.5234 3.46875C12.3477 2.375 10.7891 1.5 8.875 1.5C6.93359 1.5 5.375 2.375 4.19922 3.46875C3.02344 4.5625 2.23047 5.875 1.875 6.75Z" fill="white" />
                                </svg>
                                Formulaire de contact
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <?php if($phone_number_contact_site) :?>
            <div class="col-lg-4">
                <div class="d-flex flex-column flex-lg-row align-items-center align-items-lg-start text-center text-lg-start">
                    <div class="kl-me-lg-20 kl-mb-20 kl-mb-lg-0 kl-flex-auto kl-max-w-41">
                        <?php if($icon_phone_contact):?>
                            <img src="<?php echo esc_url($icon_phone_contact['url']); ?>" class="img-fluid " alt="<?php echo esc_attr($icon_phone_contact['alt']); ?>" />
                        <?php  else : ?>
                            <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M40.4414 29.1252L31.5 25.2698C30.4336 24.8596 29.2031 25.1057 28.5469 26.0081L24.9375 30.4377C19.1953 27.6487 14.6016 23.0549 11.8125 17.3127L16.2422 13.7034C17.1445 13.0471 17.3906 11.8167 16.9805 10.7502L13.125 1.80884C12.6328 0.742432 11.4023 0.0861816 10.1719 0.332275L1.96875 2.30103C0.738281 2.54712 0 3.53149 0 4.76196C0 25.4338 16.8164 42.2502 37.4883 42.2502C38.7188 42.2502 39.7031 41.512 39.9492 40.2815L41.918 31.9963C42.1641 30.8479 41.5078 29.6174 40.4414 29.1252ZM40.6055 31.7502L38.7188 40.0354C38.5547 40.6096 38.0625 40.9377 37.4883 40.9377C17.5547 40.9377 1.3125 24.6956 1.3125 4.76196C1.3125 4.18774 1.64062 3.69556 2.21484 3.53149L10.5 1.64478C11.0742 1.48071 11.7305 1.80884 11.9766 2.38306L15.75 11.2424C15.9961 11.8167 15.832 12.3909 15.4219 12.719L10.1719 16.9846C15.3398 27.9768 24.0352 31.5042 25.2656 32.0784L29.5312 26.8284C29.8594 26.4182 30.5156 26.2542 31.0078 26.5002L39.8672 30.2737C40.4414 30.5198 40.7695 31.176 40.6055 31.7502Z" fill="white"/>
                            </svg>
                        <?php  endif; ?>
                    </div>
                    <div>
                        <div class="kl-text-14 kl-color-white kl-fw-bold text-uppercase pb-1 mb-2">
                            <?php if($title_phone_contact) : ?>
                                <h3><?= $title_phone_contact ?></h3>
                            <?php else: ?>
                                <h3>Appelez-nous</h3>
                            <?php endif; ?>
                        </div>
                        <div class="kl-text-18 kl-color-white kl-fw-semi-bold">
                            <a href="tel:221338224922" class="kl-color-white"><?= $phone_number_contact_site ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if($live_adress_contact_site) :?>
            <div class="col-lg-4">
                <div class="d-flex flex-column flex-lg-row align-items-center align-items-lg-start text-center text-lg-start">
                    <div class="kl-me-lg-20 kl-mb-20 kl-mb-lg-0 kl-flex-auto kl-max-w-41">
                        <?php if($icon_adress_contact):?>
                            <img src="<?php echo esc_url($icon_adress_contact['url']); ?>" class="img-fluid " alt="<?php echo esc_attr($icon_adress_contact['alt']); ?>" />
                        <?php  else : ?>
                            <svg width="32" height="43" viewBox="0 0 32 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.4375 16.0002C9.4375 12.3909 12.3086 9.43774 16 9.43774C19.6094 9.43774 22.5625 12.3909 22.5625 16.0002C22.5625 19.6917 19.6094 22.5627 16 22.5627C12.3086 22.5627 9.4375 19.6917 9.4375 16.0002ZM16 10.7502C13.0469 10.7502 10.75 13.1292 10.75 16.0002C10.75 18.9534 13.0469 21.2502 16 21.2502C18.8711 21.2502 21.25 18.9534 21.25 16.0002C21.25 13.1292 18.8711 10.7502 16 10.7502ZM31.75 16.0002C31.75 23.219 22.1523 35.9338 17.8867 41.2659C16.9023 42.4963 15.0156 42.4963 14.0312 41.2659C9.76562 35.9338 0.25 23.219 0.25 16.0002C0.25 7.30493 7.22266 0.250244 16 0.250244C24.6953 0.250244 31.75 7.30493 31.75 16.0002ZM16 1.56274C7.96094 1.56274 1.5625 8.04321 1.5625 16.0002C1.5625 17.5588 2.05469 19.5276 2.95703 21.7424C3.94141 23.9573 5.17188 26.3362 6.64844 28.6331C9.51953 33.3088 12.9648 37.8206 15.0156 40.4456C15.5078 41.0198 16.4102 41.0198 16.9023 40.4456C18.9531 37.8206 22.3984 33.3088 25.2695 28.6331C26.7461 26.3362 27.9766 23.9573 28.9609 21.7424C29.8633 19.5276 30.4375 17.5588 30.4375 16.0002C30.4375 8.04321 23.957 1.56274 16 1.56274Z" fill="white"/>
                            </svg>
                        <?php  endif; ?>
                    </div>
                    <div>
                        <div class="kl-text-14 kl-color-white kl-fw-bold text-uppercase pb-1 mb-2">
                            <?php if($title_adress_contact) : ?>
                                <h3><?= $title_adress_contact ?></h3>
                            <?php else: ?>
                                <h3>Rendez-nous visite</h3>
                            <?php endif; ?>
                        </div>
                        <div class="kl-text-18 kl-color-white kl-fw-semi-bold">
                            <?= $live_adress_contact_site ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

        </div>

        <?php $footer_txt_copiryght = get_field('texte_copyright_globals', 'option');
        $link_txt_copiryght = get_field('link_site_web_copyright_globals', 'option');
        if ($footer_txt_copiryght) : ?>
        <div class="kl-footer-bottom">
            <div class="kl-text-12 kl-color-white kl-fw-semi-bold kl-mb-10 kl-mb-lg-0 kl-opacity-0_7">Nous respectons votre vie privée.</div>
            <div class="kl-text-12 kl-color-white kl-fw-regular text-center text-lg-start">
                <span class="kl-opacity-0_7"><?=$footer_txt_copiryght?></span>
                <?php if($link_txt_copiryght) : ?>
                <a href="<?= esc_url($link_txt_copiryght['url']) ?>" class="kl-color-white kl-fw-semi-bold">
                    <?= $link_txt_copiryght['title'] ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>