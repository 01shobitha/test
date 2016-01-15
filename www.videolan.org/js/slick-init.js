$(document).ready(function() {
    $('#header-carousel').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        responsive: [{
            breakpoint: 767,
            settings: {
                arrows: false,
                autoplay: false
            }
        }]
    });
});
