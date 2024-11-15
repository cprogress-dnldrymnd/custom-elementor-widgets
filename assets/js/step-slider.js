var swiper_step_slider = new Swiper('.swiper-step-slider', {
    loop: false,
    speed: 500,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    slidesPerView: 1,
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
                jQuery('.custom-pagination-holder').css('--offset', '-58px');
            } else if (index == 4) {
                jQuery('.custom-pagination-holder').css('--offset', '-116px');
            } else if (index == 5) {
                jQuery('.custom-pagination-holder').css('--offset', '-174px');
            } else if (index == 6) {
                jQuery('.custom-pagination-holder').css('--offset', '-232px');
            } else {
                jQuery('.custom-pagination-holder').css('--offset', '0');
            }

            setTimeout(function () {
                jQuery('.slide-progress').addClass('animate');
            }, 500);

        },
        init: function () {
            jQuery('.slide-progress').addClass('animate');
        },
    }
});
