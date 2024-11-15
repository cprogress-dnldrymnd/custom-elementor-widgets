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
            console.log(this.realIndex);
            jQuery('.slide-progress').removeClass('animate');
            setTimeout(function () {
                jQuery('.slide-progress').addClass('animate');
            }, 500);

        },
        init: function () {
            jQuery('.slide-progress').addClass('animate');
        },
    }
});
