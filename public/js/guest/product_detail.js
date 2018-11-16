$(document).ready(function(){
    changeProductColor();
    checkResizeMobile();
    <!-- Owl carousel init -->
    $("#owl-related-products-slider").owlCarousel({
        smartSpeed: 1000,
        nav: false,
        dots: false,
        loop: false,
        autoplay: false,
        autoplayHoverPause: true,
        responsiveRefreshRate : 200,
        margin: 5,
        responsive:{
            0:{
                items:2
            },
            480:{
                items:3
            },
            768:{
                items:3,
                margin: 15,
            },
            1000:{
                items:4,
                margin: 30,
            }
        }
    });
});

function changeProductColor(){
    $('.chk_color_box .list-color li').on('click',function(){
        let $spanColor = $(this).find('span');
        let colorName = $spanColor.attr('data-cl');
        let colorImage = $spanColor.attr('data-img');
        $(this).closest('ul').find('.txt-color').html(colorName);
        $(this).closest('.chk_color_box').find('img.lazy').attr('src',colorImage);
    })
}

function checkResizeMobile(){
    $( window ).resize(function() {
        let isMobile = window.matchMedia("only screen and (max-width: 760px)");
        if (isMobile.matches) {
            $('#product-wrapper').find('.inner').addClass('isPhone');
        }else{
            $('#product-wrapper').find('.inner').removeClass('isPhone');
        }
    });
    let isMobile = window.matchMedia("only screen and (max-width: 760px)");
    if (isMobile.matches) {
        $('#product-wrapper').find('.inner').addClass('isPhone');
    }else{
        $('#product-wrapper').find('.inner').removeClass('isPhone');
    }
}
