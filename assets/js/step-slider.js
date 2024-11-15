

var swiper_step_thumb = new Swiper('.swiper-step-thumb', {
    loop: false,
    speed: 500,
    autoplay: {
        delay: 500,
        disableOnInteraction: false
    },
    spaceBetween: 10,
    slidesPerView: 3,
    watchSlidesProgress: true,
    navigation: {
        nextEl: ".swiper-button-next-step",
        prevEl: ".swiper-button-prev-step",
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

var swiper_step_slider = new Swiper('.swiper-step-slider', {
    loop: false,
    autoplay: false,
    slidesPerView: 1,
    thumbs: {
        swiper: swiper_step_thumb,
    },
});
