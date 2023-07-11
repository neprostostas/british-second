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





document.addEventListener("DOMContentLoaded", function () {
    var slider = document.querySelector(".js_slider");
    var slideCount = slider.querySelectorAll(".js_slide").length;
    var dotContainer = slider.querySelector(".slider_navigation_dots");
    var templateListItem = document.createElement("li");

    function handleEvents(e) {
        if (e.type === "before.lory.init") {
            for (var i = 0, len = slideCount; i < len; i++) {
                var clone = templateListItem.cloneNode();
                dotContainer.appendChild(clone);
            }
            dotContainer.childNodes[0].classList.add("active");
        }
        if (e.type === "after.lory.init") {
            for (var i = 0, len = slideCount; i < len; i++) {
                dotContainer.childNodes[i].addEventListener("click", function (e) {
                    lorySlider.slideTo(
                        Array.prototype.indexOf.call(dotContainer.childNodes, e.target)
                    );
                });
            }
        }
        if (e.type === "after.lory.slide") {
            for (var i = 0, len = dotContainer.childNodes.length; i < len; i++) {
                dotContainer.childNodes[i].classList.remove("active");
            }
            dotContainer.childNodes[e.detail.currentSlide - 1].classList.add(
                "active"
            );
        }
    }

    slider.addEventListener("before.lory.init", handleEvents);
    slider.addEventListener("after.lory.init", handleEvents);
    slider.addEventListener("after.lory.slide", handleEvents);

    var lorySlider = lory(slider, {
        infinite: 1
    });
});
