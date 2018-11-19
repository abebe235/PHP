



jQuery(document).ready(function() {

    //Check to see if the window is top if not then display button
    jQuery(window).scroll(function() {


        if (jQuery(this).scrollTop() > 100) {

            jQuery('.scrollToTop').fadeIn();

        } else {
            jQuery('.scrollToTop').fadeOut();

        }
    });

    //Click event to scroll to top
    jQuery('.scrollToTop').click(function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 800);

        return false;
    });
    // tksd animations
    var $animation_elements = jQuery('.animation-element');
    var $window = jQuery(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);


        jQuery.each($animation_elements, function() {
            var $element = jQuery(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
            } else {
                $element.removeClass('in-view');
            }
        });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
    // add classes tksdAddClasses

    var $tksdSelector = jQuery('#TKfootercontent');
    var $tksdSelector2 = jQuery('#TKcontent');
    var $tksdSelector3 = jQuery('#TKcontent-pages');
    var $step = 0;
    var $collection = [];
    var $collection2 = [];
    $collection = jQuery($tksdSelector).find('.tk-block');
    $collection2 = jQuery($tksdSelector2).find('.tk-block');
    $collection3 = jQuery($tksdSelector3).find('.tk-block');

    jQuery($collection).each(function(i, e) {
        $step = i;
        jQuery(e).addClass("footer-anim-" + $step);



    });
    jQuery($collection2).each(function(i, e) {
        $step = i;
        jQuery(e).addClass("top-anim-" + $step);



    });
    jQuery($collection3).each(function(i, e) {
        $step = i;
        jQuery(e).addClass("top-anim-" + $step);

    });

    //footer animations
    jQuery('#TKfootercontent .footer-anim-0').css({
        'opacity': '0'
    });
    jQuery('#TKfootercontent .footer-anim-0').waypoint(function() {

        jQuery('#TKfootercontent .footer-anim-0').addClass('animated fadeInLeft');
    }, {
        offset: '85%'
    });
    jQuery('#TKfootercontent .footer-anim-1').css({
        'opacity': '0'
    });
    jQuery('#TKfootercontent .footer-anim-1').waypoint(function() {

        jQuery('#TKfootercontent .footer-anim-1').addClass('animated fadeInLeft');
    }, {
        offset: '85%'
    });
    jQuery('#TKfootercontent .footer-anim-2').css({
        'opacity': '0'
    });
    jQuery('#TKfootercontent .footer-anim-2').waypoint(function() {

        jQuery('#TKfootercontent .footer-anim-2').addClass('animated fadeInRight');
    }, {
        offset: '85%'
    });
    jQuery('#TKfootercontent .footer-anim-3').css({
        'opacity': '0'
    });
    jQuery('#TKfootercontent .footer-anim-3').waypoint(function() {

        jQuery('#TKfootercontent .footer-anim-3').addClass('animated fadeInRight');
    }, {
        offset: '85%'
    });
    //Top animations

    jQuery('#TKcontent .top-anim-0').css({
        'opacity': '0'
    });
    jQuery('#TKcontent .top-anim-0').waypoint(function() {

        jQuery('#TKcontent .top-anim-0').addClass('animated fadeInLeft');
    }, {
        offset: '85%'
    });
    jQuery('#TKcontent .top-anim-1').css({
        'opacity': '0'
    });
    jQuery('#TKcontent .top-anim-1').waypoint(function() {

        jQuery('#TKcontent .top-anim-1').addClass('animated fadeInLeft');
    }, {
        offset: '85%'
    });
    jQuery('#TKcontent .top-anim-2').css({
        'opacity': '0'
    });
    jQuery('#TKcontent .top-anim-2').waypoint(function() {

        jQuery('#TKcontent .top-anim-2').addClass('animated fadeInRight');
    }, {
        offset: '85%'
    });
    jQuery('#TKcontent .top-anim-3').css({
        'opacity': '0'
    });
    jQuery('#TKcontent .top-anim-3').waypoint(function() {

        jQuery('#TKcontent .top-anim-3').addClass('animated fadeInRight');
    }, {
        offset: '85%'
    });
    //Top pages animations

    jQuery('#TKcontent-pages .top-anim-0').css({
        'opacity': '0'
    });
    jQuery('#TKcontent-pages .top-anim-0').waypoint(function() {

        jQuery('#TKcontent-pages .top-anim-0').addClass('animated fadeInLeft');
    }, {
        offset: '85%'
    });
    jQuery('#TKcontent-pages .top-anim-1').css({
        'opacity': '0'
    });
    jQuery('#TKcontent-pages .top-anim-1').waypoint(function() {

        jQuery('#TKcontent-pages .top-anim-1').addClass('animated fadeInUp');
    }, {
        offset: '85%'
    });
    jQuery('#TKcontent-pages .top-anim-2').css({
        'opacity': '0'
    });
    jQuery('#TKcontent-pages .top-anim-2').waypoint(function() {

        jQuery('#TKcontent-pages .top-anim-2').addClass('animated fadeInRight');
    }, {
        offset: '85%'
    });
    jQuery('#TKcontent-pages .top-anim-3').css({
        'opacity': '0'
    });
    jQuery('#TKcontent-pages .top-anim-3').waypoint(function() {

        jQuery('#TKcontent-pages .top-anim-3').addClass('animated fadeInRight');
    }, {
        offset: '85%'
    });
    // totop
    //Check to see if the window is top if not then display button
    jQuery(window).scroll(function() {


        if (jQuery(this).scrollTop() > 100) {

            jQuery('.scrollToTop').fadeIn();

        } else {
            jQuery('.scrollToTop').fadeOut();

        }
    });

    //Click event to scroll to top
    jQuery('.scrollToTop').click(function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 800);

        return false;
    });
    // wabc-heights
    var byRow = jQuery('body').hasClass('home');
    jQuery('#TKMiddlecontent,#TKcontent-pages,#TKMiddlecontent-pages, #TKcontent, #page-wrapper .container').each(function() {
        jQuery(this).children('.columns').matchHeight({
            byRow: byRow
        });
    });
    //

});

jQuery('a.dropdown-toggle').on('click', function(event) {
    jQuery(this).parent().removeClass("open");
    event.stopPropagation();
    var $parent = jQuery(this).parent();
});
