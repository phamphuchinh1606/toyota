$(document).ready(function(){
    changeProductColor();
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
        var $spanColor = $(this).find('span');
        var colorName = $spanColor.attr('data-cl');
        var colorImage = $spanColor.attr('data-img');
        $(this).closest('ul').find('.txt-color').html(colorName);
        $(this).closest('.chk_color_box').find('img.lazy').attr('src',colorImage);
    })
}