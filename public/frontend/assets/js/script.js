(function ($) {
    "use strict";

    var initPreloader = function () {
        $(document).ready(function ($) {
            var Body = $("body");
            Body.addClass("preloader-site");
        });
        $(window).load(function () {
            $(".preloader-wrapper").fadeOut();
            $("body").removeClass("preloader-site");
        });
    };

    // init Chocolat light box
    var initChocolat = function () {
        Chocolat(document.querySelectorAll(".image-link"), {
            imageSize: "contain",
            loop: true,
        });
    };

    var initSwiper = function () {
        var swiper = new Swiper(".main-swiper", {
            speed: 500,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        var category_swiper = new Swiper(".category-carousel", {
            slidesPerView: 8,
            spaceBetween: 30,
            speed: 500,
            navigation: {
                nextEl: ".category-carousel-next",
                prevEl: ".category-carousel-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                991: {
                    slidesPerView: 5,
                },
                1500: {
                    slidesPerView: 8,
                },
            },
        });

        $(".products-carousel").each(function () {
            var $el_id = $(this).attr("id");

            var products_swiper = new Swiper("#" + $el_id + " .swiper", {
                slidesPerView: 5,
                spaceBetween: 30,
                speed: 500,
                navigation: {
                    nextEl: "#" + $el_id + " .products-carousel-next",
                    prevEl: "#" + $el_id + " .products-carousel-prev",
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    991: {
                        slidesPerView: 4,
                    },
                    1500: {
                        slidesPerView: 5,
                    },
                },
            });
        });

        // product single page
        var thumb_slider = new Swiper(".product-thumbnail-slider", {
            slidesPerView: 5,
            spaceBetween: 20,
            // autoplay: true,
            direction: "vertical",
            breakpoints: {
                0: {
                    direction: "horizontal",
                },
                992: {
                    direction: "vertical",
                },
            },
        });

        var large_slider = new Swiper(".product-large-slider", {
            slidesPerView: 1,
            // autoplay: true,
            spaceBetween: 0,
            effect: "fade",
            thumbs: {
                swiper: thumb_slider,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    };

    // input spinner
    var initProductQty = function () {
        $(".product-qty").each(function () {
            var $el_product = $(this);
            var quantity = 0;

            $el_product.find(".quantity-right-plus").click(function (e) {
                e.preventDefault();
                quantity = parseInt($el_product.find("#quantity").val());
                $el_product.find("#quantity").val(quantity + 1);
            });

            $el_product.find(".quantity-left-minus").click(function (e) {
                e.preventDefault();
                quantity = parseInt($el_product.find("#quantity").val());
                if (quantity > 0) {
                    $el_product.find("#quantity").val(quantity - 1);
                }
            });
        });
    };

    // init jarallax parallax
    var initJarallax = function () {
        jarallax(document.querySelectorAll(".jarallax"));

        jarallax(document.querySelectorAll(".jarallax-keep-img"), {
            keepImg: true,
        });
    };

    // document ready
    $(document).ready(function () {
        initPreloader();
        initSwiper();
        initProductQty();
        initJarallax();
        initChocolat();
    }); // End of a document

    class Slider {
        constructor(slider) {
            this.slider = slider;
            this.display = slider.querySelector(".image-display");
            this.navButtons = Array.from(
                slider.querySelectorAll(".nav-button")
            );
            this.prevButton = slider.querySelector(".prev-button");
            this.nextButton = slider.querySelector(".next-button");
            this.sliderNavigation = slider.querySelector(".slider-navigation");
            this.currentSlideIndex = 0;
            this.preloadedImages = {};

            this.initialize();
        }

        initialize() {
            this.setupSlider();
            this.preloadImages();
            this.eventListeners();
        }

        setupSlider() {
            this.showSlide(this.currentSlideIndex);
        }

        showSlide(index) {
            this.currentSlideIndex = index;
            const navButtonImg =
                this.navButtons[this.currentSlideIndex].querySelector("img");
            if (navButtonImg) {
                const imgClone = navButtonImg.cloneNode();
                this.display.replaceChildren(imgClone);
            }
            this.updateNavButtons();
        }

        updateNavButtons() {
            this.navButtons.forEach((button, buttonIndex) => {
                const isSelected = buttonIndex === this.currentSlideIndex;
                button.setAttribute("aria-selected", isSelected);
                if (isSelected) button.focus();
            });
        }

        preloadImages() {
            this.navButtons.forEach((button) => {
                const imgElement = button.querySelector("img");
                if (imgElement) {
                    const imgSrc = imgElement.src;
                    if (!this.preloadedImages[imgSrc]) {
                        this.preloadedImages[imgSrc] = new Image();
                        this.preloadedImages[imgSrc].src = imgSrc;
                    }
                }
            });
        }

        eventListeners() {
            document.addEventListener("keydown", (event) => {
                this.handleAction(event.key);
            });

            this.sliderNavigation.addEventListener("click", (event) => {
                const targetButton = event.target.closest(".nav-button");
                const index = targetButton
                    ? this.navButtons.indexOf(targetButton)
                    : -1;
                if (index !== -1) {
                    this.showSlide(index);
                }
            });

            this.prevButton.addEventListener("click", () =>
                this.handleAction("prev")
            );
            this.nextButton.addEventListener("click", () =>
                this.handleAction("next")
            );
        }

        handleAction(action) {
            if (action === "Home") {
                this.currentSlideIndex = 0;
            } else if (action === "End") {
                this.currentSlideIndex = this.navButtons.length - 1;
            } else if (action === "ArrowRight" || action === "next") {
                this.currentSlideIndex =
                    (this.currentSlideIndex + 1) % this.navButtons.length;
            } else if (action === "ArrowLeft" || action === "prev") {
                this.currentSlideIndex =
                    (this.currentSlideIndex - 1 + this.navButtons.length) %
                    this.navButtons.length;
            }

            this.showSlide(this.currentSlideIndex);
        }
    }

    const ImageSlider = new Slider(document.querySelector(".image-slider"));

    let spinNumberOutput = document.querySelector(".spinNumberOutput");
    let regularPrice = document.querySelector(".regularPrice");
    let quantityOutput = document.querySelector(".quantityOutput");
    let plusButton = document.querySelector(".incrimentButton");
    let minusButton = document.querySelector(".decrimentButton");

    spinNumberOutput.value = 1;
    quantityOutput.innerHTML = regularPrice.innerHTML * spinNumberOutput.value;

    plusButton.addEventListener("click", function () {
        spinNumberOutput.value++;
        console.log(
            (quantityOutput.innerHTML =
                regularPrice.innerHTML * spinNumberOutput.value)
        );
    });

    minusButton.addEventListener("click", function () {
        if (spinNumberOutput.value > 1) {
            spinNumberOutput.value--;
            console.log(
                (quantityOutput.innerHTML =
                    regularPrice.innerHTML * spinNumberOutput.value)
            );
        }
    });
})(jQuery);
