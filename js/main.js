$(document).ready(function() {
    $(".nav-ul li").hover(
        function() {
            $(this).next().addClass("no-border");
        },
        function() {
            $(this).next().removeClass("no-border");
        }
    );
    $("header nav.catalog-content .season").hover(
        function() {
            $(this).next().addClass("no-border");
        },
        function() {
            $(this).next().removeClass("no-border");
        }
    );

    $(".search-block-mobile").click(function() {
        $("#site-search-mobile").toggleClass("open");
    });


    $(".mobile-nav").click(function() {
        const $megaMenu = $(".mega-menu");
        const isMenuOpen = $megaMenu.hasClass("open");

        if (isMenuOpen) {
            $megaMenu.animate({ right: "-300px" }, 300, function() {
                $megaMenu.removeClass("open");
            });
        } else {
            $megaMenu.addClass("open").css("right", "-300px").animate({ right: "0" }, 300);
        }
    });

    $('.contacts-form button.contact').click(function() {
        $('.modal-form').addClass('active');
        $(document.documentElement).addClass('no-scroll');
    });

    $('.modal-form .close-modal').click(function() {
        $('.modal-form').removeClass('active');
        $(document.documentElement).removeClass('no-scroll');
    });

    $('.modal-form-close').click(function() {
        $('.modal-form').removeClass('active');
        $(document.documentElement).removeClass('no-scroll');
    });


    // When the user scrolls down 50px from the top of the document, easily-animated remove middleSection
    let prevScrollTop = $(window).scrollTop();

    $(window).scroll(function() {
        const currentScrollTop = $(this).scrollTop();

        if (currentScrollTop < prevScrollTop) {
            $('.catalog-container').slideDown(200);
        } else {
            $('.catalog-container').slideUp(200);
        }

        prevScrollTop = currentScrollTop;
    });


    $('.filters-block .custom-select .top-part').on('click', function() {
        const $customSelect = $(this).closest('.custom-select');
        const $customOptions = $customSelect.find('.custom-options');
        const $topPart = $customSelect.find('.top-part');
        const $svg = $topPart.find('svg');

        if ($customOptions.is(':visible')) {
            $customOptions.slideUp(200);
            $topPart.css('border-bottom', 'unset');
            $svg.animate({ deg: 90 }, {
                duration: 200,
                step: function(now) {
                    $svg.css('transform', 'rotate(' + now + 'deg)');
                }
            });
        } else {
            $customOptions.slideDown(200);
            $topPart.css('border-bottom', '1px solid var(--color-orange)');
            $svg.animate({ deg: 0 }, {
                duration: 200,
                step: function(now) {
                    $svg.css('transform', 'rotate(' + now + 'deg)');
                }
            });
        }
    });

});


const swiper = new Swiper('.swiper', {
    direction: 'horizontal',

    scrollbar: {
        el: '.swiper-scrollbar',
    },

    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1.5,
            spaceBetween: 27,
        },
        // when window width is >= 320px
        760: {
            slidesPerView: 2.5,
            spaceBetween: 27,
        },
        // when window width is >= 960px
        960: {
            slidesPerView: 3.5,
            spaceBetween: 27,
        },
        // when window width is >= 1200px
        1200: {
            slidesPerView: 4.3,
            spaceBetween: 27,
        },
    }

});





