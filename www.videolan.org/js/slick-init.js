$(document).ready(function() {
    $('#header-carousel').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: false,
        responsive: [{
            breakpoint: 767,
            settings: {
                arrows: false
            }
        }]
    });
});
