jQuery(document).ready(function() {
    var slickOpts = {
        slidesToShow: 1,
        slidesToScroll: 1,
        //centerMode: true,
        easing: 'Animate Both', // see http://api.jquery.com/animate/
        speed: 700,
        dots: true,
        prevArrow: '<div class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
        nextArrow: '<div class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>'

    };
    // Init slick carousel
    jQuery('.slider_main').slick(slickOpts);
    
    
    new WOW().init();
});

(function ($) {$ (document).ready(function() {$ ('ul.dropdown-menu [data-toggle = dropdown]'). On ('click', function (event) {event. preventDefault(); event.stopPropagation(); $ (this).parent(). siblings(). removeClass ('open'); $ (this).parent(). toggleClass ('open');});} );}) (jQuery);