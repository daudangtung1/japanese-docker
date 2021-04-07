$(function () {
    $('.first-item').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        prevArrow: false,
        nextArrow: false
    });
    $('.second-item').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        prevArrow: false,
        nextArrow: false
    });

    jQuery(document).ready(function(){
        $(".slider").hide();
    });
    jQuery(function(){
        jQuery('.showSingle').click(function(){
            jQuery('.slider').hide('.cnt');
            jQuery('#div'+$(this).attr('target')).slideToggle();
        });
    });
});
