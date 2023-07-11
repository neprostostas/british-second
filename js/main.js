$(document).ready(function() {
    $(".nav-ul li").hover(
        function() {
            $(this).next().addClass("no-border");
        },
        function() {
            $(this).next().removeClass("no-border");
        }
    );
    $(".season").hover(
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
