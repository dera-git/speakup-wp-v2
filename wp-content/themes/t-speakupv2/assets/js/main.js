(function ($) {
    "use strict";
    let btnToggler = $('.kl-navbar-toggler')
    let blocDiv = $('.js-bg-menu')
    let blocImg = $('.js-img-banner')

    //kl-form-select
    $(".kl-form-select select").select2({
        width: '100%',
        minimumResultsForSearch: Infinity,
    });

    //form
    function checkInputValue() {
        $(".kl-form-control .ginput_container input").each(function() {
            if($(this).val() !== "") {
                $(this).closest('.kl-form-control').addClass("kl-is-dirty");
            } else {
                $(this).closest('.kl-form-control').removeClass("kl-is-dirty");
            }
        });
    }

    $(document).on('gform_post_render', function(){
        checkInputValue();
    });

    $(document).on("focus", ".kl-form-control .ginput_container input", function() {
        $(this).closest('.kl-form-control').addClass("kl-is-focused");
    });

    $(document).on("blur", ".kl-form-control .ginput_container input", function() {
        $(this).closest('.kl-form-control').removeClass("kl-is-focused");
    });

    $(document).on("keyup", ".kl-form-control .ginput_container input", function() {
        if($(this).val() !== "") {
            $(this).closest('.kl-form-control').addClass("kl-is-dirty");
        } else {
            $(this).closest('.kl-form-control').removeClass("kl-is-dirty");
        }
    });


    //trigger submit gform
    $(document).on('click', '#id-trigger-submit-newsletter', function () {
        const btnSumit = $(this).closest('.kl-gform').find('.gform_button');
        btnSumit.trigger('click');
    });

    $(btnToggler).each(function () {
        $(this).on("click", function () {
            if (blocDiv.hasClass('kl-h-100')) {
                setTimeout(function () {
                    blocDiv.removeClass('kl-h-100')
                }, 450);
            } else {
                blocDiv.addClass('kl-h-100')
            }

            if (blocImg.hasClass('kl-transform')) {
                setTimeout(function () {
                    blocImg.removeClass('kl-transform')
                }, 350);
            } else {
                blocImg.addClass('kl-transform')
            }

            setTimeout(function () {
                $('.kl-if-menu-show').toggleClass('d-none');
            }, 800);

            setTimeout(function () {
                $('.kl-footer-sub-menu').toggleClass("d-none d-flex");
            }, 300);
        });
    });

    // Slider home

    let swiper_container = $('.swiper-container');
    if(swiper_container.length){
        let mySwiper = new Swiper('.swiper-container', {
            direction: 'horizontal',
            loop: true,
            speed: 1200,
            // grabCursor: true,
            // mousewheel: true,
            effect: "creative",
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: ["-40%", 0, -1],
                },
                next: {
                    translate: ["100%", 0, 0],
                },
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            // Pagination
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },

            // Navigation arrows
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            // },

            on: {
                slideChangeTransitionStart: function () {
                    // Slide captions
                    let swiper = this;
                    setTimeout(function () {
                        let currentCat = $(swiper.slides[swiper.activeIndex]).attr("data-cat");
                        let currentTitle = $(swiper.slides[swiper.activeIndex]).attr("data-title");
                        let currentLink = $(mySwiper.slides[mySwiper.activeIndex]).attr("data-link");
                    }, 500);
                    gsap.to($(".current-title"), 0.4, { autoAlpha: 0, y: -40, ease: Power1.easeIn });
                    gsap.to($(".current-cat"), 0.4, { autoAlpha: 0, y: -40, delay: 0.15, ease: Power1.easeIn });
                    gsap.to($(".current-link"), 0.4, { autoAlpha: 0, y: -40, delay: 0.1, ease: Power1.easeIn });
                },
                slideChangeTransitionEnd: function () {
                    // Slide captions
                    let swiper = this;
                    let currentCat = $(swiper.slides[swiper.activeIndex]).attr("data-cat");
                    let currentTitle = $(swiper.slides[swiper.activeIndex]).attr("data-title");
                    let hrefLink = $(swiper.slides[swiper.activeIndex]).attr("data-link");
                    let txt_bnt = $(swiper.slides[mySwiper.activeIndex]).attr("data-txt-btn");
					
                    let currentLink = `<a class='kl-btn-theme js-btn' href='${hrefLink}'>
                        <svg class='kl-me-10' width='17' height='13' viewBox='0 0 17 13' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <path d='M12.375 6.75C12.375 8.69141 10.7891 10.25 8.875 10.25C6.93359 10.25 5.375 8.69141 5.375 6.75C5.375
                            4.83594 6.93359 3.25 8.875 3.25C10.7891 3.25 12.375 4.83594 12.375 6.75ZM8.875 4.125C7.39844 4.125 6.25
                            5.30078 6.25 6.75C6.25 8.19922 7.39844 9.375 8.875 9.375C10.3242 9.375 11.5 8.19922 11.5 6.75C11.5
                            5.30078 10.3242 4.125 8.875 4.125ZM14.125 2.83984C15.4102 4.01562 16.2578 5.4375 16.668 6.42188C16.75
                            6.64062 16.75 6.88672 16.668 7.10547C16.2578 8.0625 15.4102 9.48438 14.125 10.6875C12.8398 11.8906
                            11.0625 12.875 8.875 12.875C6.66016 12.875 4.88281 11.8906 3.59766 10.6875C2.3125 9.48438 1.46484
                            8.0625 1.05469 7.10547C0.972656 6.88672 0.972656 6.64062 1.05469 6.42188C1.46484 5.4375 2.3125
                            4.01562 3.59766 2.83984C4.88281 1.63672 6.66016 0.625 8.875 0.625C11.0625 0.625 12.8398 1.63672
                            14.125 2.83984ZM1.875 6.75C2.23047 7.625 3.02344 8.9375 4.19922 10.0312C5.375 11.125 6.93359 12 8.875
                            12C10.7891 12 12.3477 11.125 13.5234 10.0312C14.6992 8.9375 15.4922 7.625 15.875 6.75C15.4922 5.875
                            14.6992 4.5625 13.5234 3.46875C12.3477 2.375 10.7891 1.5 8.875 1.5C6.93359 1.5 5.375 2.375 4.19922
                            3.46875C3.02344 4.5625 2.23047 5.875 1.875 6.75Z' fill='white' />
                        </svg>
                        ${txt_bnt} <span></span> </a>`;
                    $(".slide-captions").html(function () {
                        return "<div class='current-cat'>" + currentCat + "</div>" + "<h2 class='current-title'>" + currentTitle + "</h2>" + "<div class='current-link kl-max-w-180'>" + currentLink + "</div>";
                    });
                    gsap.from($(".current-title"), 0.4, { autoAlpha: 0, y: 40, ease: Power1.easeOut });
                    gsap.from($(".current-cat"), 0.4, { autoAlpha: 0, y: 40, delay: 0.15, ease: Power1.easeOut });
                    gsap.from($(".current-link"), 0.4, { autoAlpha: 0, y: 40, delay: 0.1, ease: Power1.easeOut });
                }
            }
        });
        // Slide captions
        let currentTitle = $(mySwiper.slides[mySwiper.activeIndex]).attr("data-title");
        let currentCat = $(mySwiper.slides[mySwiper.activeIndex]).attr("data-cat");

        let hrefLink = $(mySwiper.slides[mySwiper.activeIndex]).attr("data-link");
        let txt_bnt = $(mySwiper.slides[mySwiper.activeIndex]).attr("data-txt-btn");

        let currentLink = `<a class='kl-btn-theme js-btn' href='${hrefLink}'>
                        <svg class='kl-me-10' width='17' height='13' viewBox='0 0 17 13' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <path d='M12.375 6.75C12.375 8.69141 10.7891 10.25 8.875 10.25C6.93359 10.25 5.375 8.69141 5.375 6.75C5.375
                            4.83594 6.93359 3.25 8.875 3.25C10.7891 3.25 12.375 4.83594 12.375 6.75ZM8.875 4.125C7.39844 4.125 6.25
                            5.30078 6.25 6.75C6.25 8.19922 7.39844 9.375 8.875 9.375C10.3242 9.375 11.5 8.19922 11.5 6.75C11.5
                            5.30078 10.3242 4.125 8.875 4.125ZM14.125 2.83984C15.4102 4.01562 16.2578 5.4375 16.668 6.42188C16.75
                            6.64062 16.75 6.88672 16.668 7.10547C16.2578 8.0625 15.4102 9.48438 14.125 10.6875C12.8398 11.8906
                            11.0625 12.875 8.875 12.875C6.66016 12.875 4.88281 11.8906 3.59766 10.6875C2.3125 9.48438 1.46484
                            8.0625 1.05469 7.10547C0.972656 6.88672 0.972656 6.64062 1.05469 6.42188C1.46484 5.4375 2.3125
                            4.01562 3.59766 2.83984C4.88281 1.63672 6.66016 0.625 8.875 0.625C11.0625 0.625 12.8398 1.63672
                            14.125 2.83984ZM1.875 6.75C2.23047 7.625 3.02344 8.9375 4.19922 10.0312C5.375 11.125 6.93359 12 8.875
                            12C10.7891 12 12.3477 11.125 13.5234 10.0312C14.6992 8.9375 15.4922 7.625 15.875 6.75C15.4922 5.875
                            14.6992 4.5625 13.5234 3.46875C12.3477 2.375 10.7891 1.5 8.875 1.5C6.93359 1.5 5.375 2.375 4.19922
                            3.46875C3.02344 4.5625 2.23047 5.875 1.875 6.75Z' fill='white' />
                        </svg>
                        ${txt_bnt} <span></span> </a>`;

        $(".slide-captions").html(function () {
            return "<div class='current-cat'>" + currentCat + "</div>" + "<h2 class='current-title'>" + currentTitle + "</h2>" + "<div class='current-link kl-max-w-180'>" + currentLink + "</div>";
        });
    }

    // Button animation
    $(function () {
        $('.js-btn')
            .on('mouseenter', function (e) {
                let parentOffset = $(this).offset();
                let relX = e.pageX - parentOffset.left;
                let relY = e.pageY - parentOffset.top;
                $(this).find('span').css({ top: relY, left: relX })
            })
            .on('mouseout', function (e) {
                let parentOffset = $(this).offset();
                let relX = e.pageX - parentOffset.left;
                let relY = e.pageY - parentOffset.top;
                $(this).find('span').css({ top: relY, left: relX })
            });
    });

    // Swiper Ressource
    let swiper_ressource = $('.js-swiper-resources');
    if (swiper_ressource.length){
        let swiper = new Swiper(".js-swiper-resources", {
            slidesPerView: "auto",
            spaceBetween: 40,
            navigation: {
                nextEl: '.kl-swiper-button-next',
                prevEl: '.kl-swiper-button-prev',
            },
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                },
                1440: {
                    slidesPerView: 4,
                },
            },
        });
    }

    //swiper Champion
    let swiper_champion = $('#id-champion-items');
    if (swiper_champion){
        let swiper = new Swiper("#id-champion-items", {
            slidesPerView: "auto",
            spaceBetween: 40,
            navigation: {
                nextEl: '.kl-swiper-button-next',
                prevEl: '.kl-swiper-button-prev',
            },
            breakpoints: {
                1200: {
                    slidesPerView: 2,
                },
                1440: {
                    slidesPerView: 2,
                },
            },
        });
    }

    if($('.js-wrap-parallax').length) {
        // Animation parallax valeurs
        let background = $('.js-wrap-parallax')[0].getBoundingClientRect();
        let mouse = { x: 0, y: 0, moved: false };

        $('.js-hover-parallax').each(function (item) {
            let _this = $(this);
            let imgAnimated = _this.find('.js-img-prallax');
            let textAnimated = _this.find('.js-text-prallax');

            _this.mousemove(mouseMoveImg);
            _this.mousemove(mouseMoveText);

            function mouseMoveImg(element) {
                mouse.moved = true;
                mouse.x = element.clientX - background.left;
                mouse.y = element.clientY - background.top;
                prlx(imgAnimated, -12);
            }

            function mouseMoveText(element) {
                mouse.moved = true;
                mouse.x = element.clientX - background.left;
                mouse.y = element.clientY - background.top;
                prlx(textAnimated, 18);
            }
        })

        $(window).on('resize scroll', function () {
            background = $('.js-wrap-parallax')[0].getBoundingClientRect();
        });

        // call parallax function
        function prlx(target, mvmt) {
            TweenMax.to(target, 0.3, {
                x: (mouse.x - background.width / 2) / background.width * mvmt,
                y: (mouse.y - background.height / 2) / background.height * mvmt,
            });
        }
    }

    // Fin parallax

    // transform label in form newsletter
    let _input = $('.kl-newsletter-form').find('input');
    _input.each(function () {
        $(this).on('change', function () {
            $(this).siblings('label').addClass('kl-label-transform');
            $(this).addClass('kl-bordered');
        });
    });

    // Play video
    $('.js-btn-play').each(function () {
        $('.js-btn-play').on('click', function (e) {
            var _this = $(this),
                wrp = _this.closest('.kl-parent-video');

            wrp.children('.kl-cover-image').hide();
            _this.hide();
            wrp.find('iframe')[0].src += "&autoplay=1";
            e.preventDefault();
        });
    });

    $('.js-form-select-actus').on('submit', function (e) {
        e.preventDefault();
        get_location_select_actus();
    });

    function get_location_select_actus() {
        let selectElement = $('.js-select-category-default');
        let selectedOption = selectElement.find('option:selected');
        let selectedValue = selectedOption.val();

        if (selectedValue) {
            window.location.href = selectedValue;
        }
    }

    /* animate general */
    function scrollWaypointInit(items, trigger) {
        items.each(function () {
            var element = jQuery(this),
                osAnimationClass = element.data("animation"),
                osAnimationDelay = element.attr('data-animation-delay');
            element.css({
                '-webkit-animation-delay': osAnimationDelay,
                '-moz-animation-delay': osAnimationDelay,
                'animation-delay': osAnimationDelay
            });
            var trigger = (trigger) ? trigger : element;

            trigger.waypoint(function () {
                element.addClass('animate__animated').addClass(osAnimationClass);
            }, {
                offset: '80%'
            });
        });
    }

    // Animation on scroll (IDEAS)
    const itemsShowOneByOne = () => {
        ScrollTrigger.batch(".kl-animate-items-scroll", {
            onEnter: batch => gsap.to(batch, {
                autoAlpha: 1,
                stagger: 0.35
            }),
            once: true,
            start: "200px bottom",
        });
    }

    scrollWaypointInit($('.kl-animate-scroll'));
    itemsShowOneByOne();

    // setTimeout(() => {
    //     $('.kl-content-text-about p').filter(function() {
    //         return $(this).html().includes('<!--more-->');
    //     }).nextAll().addClass('d-none');
    // }, 500);

    // $('#id-view-more').on('click', function(e) {
    //     e.preventDefault()
    //     $('.kl-content-text-about p').removeClass('d-none')
    // })

})(jQuery);

// Sticky header
const header = document.querySelector(".kl-header");
const toggleClass = "is-sticky";

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll > 150) {
        header.classList.add(toggleClass);
    } else {
        header.classList.remove(toggleClass);
    }
});
