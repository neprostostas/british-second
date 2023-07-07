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
