

var swiper_step_thumb = new Swiper('.swiper-step-thumb', {
    loop: false,
    autoplay: false,
    spaceBetween: 20,
    slidesPerView: 'auto',
    watchSlidesProgress: true,
    navigation: {
        nextEl: ".swiper-button-next-step",
        prevEl: ".swiper-button-prev-step",
    },

});

var swiper_step_slider = new Swiper('.swiper-step-slider', {
    loop: false,
    speed: 500,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    slidesPerView: 1,
    thumbs: {
        swiper: swiper_step_thumb,
    },
    on: {
        slideChange: function () {
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
