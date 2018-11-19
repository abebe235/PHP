jQuery(function($) {
    $(".wabc-slider .slider-inner").owlCarousel({
        items : +sliderOptions.itemscount,
                //items : 3,
        itemsCustom : false,
        singleItem: false,
                itemsDesktop : [1199, +sliderOptions.itemscount],
        itemsDesktopSmall : [980,+sliderOptions.itemscount],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        autoPlay : +sliderOptions.slideshowspeed,
        stopOnHover : true,
        navigation : true,
        navigationText : ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
        rewindNav : true,
        pagination : false,
        autoHeight : true,
    })
});

jQuery(function($) {
    $(window).bind('load', function() {
        $('.wabc-slider .slider-inner').fadeIn();
    });
});
