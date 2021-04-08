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

    /*----banner index----*/
    $('.banner--head').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows:true,
        prevArrow:"<button type='button' class='slick-prev bg-white hover:bg-white rounded-md w-10 h-10 focus:bg-white'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-next bg-white hover:bg-white rounded-md w-10 h-10 focus:bg-white'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
        centerMode: true,
        centerPadding: '360px',
        autoplay: true,
        autoplaySpeed: 4000
        // responsive: [
        // {
        // 	breakpoint: 768,
        // 	settings: {
        // 		centerMode: false,
        // 	}
        // },
        // ]
    });
});


