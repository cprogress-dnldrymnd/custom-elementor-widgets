var swiper_step_slider = new Swiper('.swiper-step-slider', {
    autoplay: false,
    autoHeight: true,
    loop: false,
    slidesPerView: 1,
    calculateHeight: true,
    navigation: {
        nextEl: ".swiper-button-next-step",
        prevEl: ".swiper-button-prev-step",
    },
    on: {
        slideChange: function () {
            var index = this.realIndex;
            jQuery('.slide-progress').removeClass('animate');
            jQuery('.custom-pagination').removeClass('active');
            jQuery('.custom-pagination[key="' + index + '"]').addClass('active');

            if (index == 3) {
                jQuery('.custom-pagination-holder').css('--offset', '-57px');
            } else if (index == 4) {
                jQuery('.custom-pagination-holder').css('--offset', '-114px');
            } else if (index == 5) {
                jQuery('.custom-pagination-holder').css('--offset', '-171px');
            } else if (index == 6) {
                jQuery('.custom-pagination-holder').css('--offset', '-228px');
            } else {
                jQuery('.custom-pagination-holder').css('--offset', '0');
            }

            $height = jQuery('.swiper-step-slider .swiper-slide[key=' + index + ']').find('.inner').outerHeight();

            jQuery('.swiper-step-slider .swiper-wrapper').height($height);
        },
    }
});

jQuery('.custom-pagination').click(function (e) {
    $key = jQuery(this).attr('key');
    swiper_step_slider.slideTo($key);
    e.preventDefault();
});