$(document).ready(function () {
    $('#owl-main-slider').owlCarousel({
        smartSpeed: 1000,
        animateOut: 'fadeOut',
        autoplayTimeout: 7000,
        animateIn: 'fadeIn',
        nav: false,
        autoplayHoverPause: true,
        mouseDrag: false,
        touchDrag: false,
        dots: true,
        rewind: true,
        autoplay: true,
        responsiveRefreshRate: 200,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1,
                nav: true,
            }
        }
    })
    $('#owl-home-flash-sale').owlCarousel({
        smartSpeed: 500,
        nav: false,
        dots: true,
        loop: false,
        rewind: true,
        responsiveRefreshRate: 200,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 2,
                margin: 5
            },
            480: {
                items: 3,
                margin: 5
            },
            768: {
                items: 3,
                margin: 15,
            },
            1000: {
                items: 3,
                margin: 30,
                nav: true,
                dots: false
            }
        }
    })

    $('#owl-home-reviews').owlCarousel({
        smartSpeed: 200,
        nav: false,
        dots: true,
        loop: false,
        autoplay: false,
        rewind: true,
        autoplayHoverPause: true,
        responsiveRefreshRate: 200,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    $('#owl-home-articles').owlCarousel({
        smartSpeed: 200,
        nav: false,
        dots: true,
        loop: false,
        autoplay: false,
        rewind: true,
        margin: 5,
        autoplayHoverPause: true,
        responsiveRefreshRate: 200,
        responsive: {
            0: {
                items: 2,
            },
            480: {
                items: 3,
            },
            768: {
                items: 3,
                margin: 15,
            },
            1000: {
                items: 2,
                margin: 30,
            }
        }
    })
    $('#owl-service').owlCarousel({
        smartSpeed: 200,
        nav: false,
        dots: true,
        loop: false,
        autoplayHoverPause: true,
        autoplay: true,
        autoplayTimeout: 3000,
        rewind: true,
        autoplayHoverPause: true,
        responsiveRefreshRate: 200,
        responsive: {
            0: {
                items: 2
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
    $('#owl-brand').owlCarousel({
        smartSpeed: 200,
        nav: false,
        dots: false,
        autoplayHoverPause: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        margin: 5,
        autoplayHoverPause: true,
        responsiveRefreshRate: 200,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 2
            },
            480: {
                items: 4,
            },
            768: {
                items: 4,
                margin: 15,
            },
            1000: {
                items: 5,
                margin: 30,
                nav: true,
            }
        }
    })
});
