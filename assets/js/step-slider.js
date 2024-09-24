var swiper_step_thumb = new Swiper('.swiper-step-thumb', {
    loop: true,
    autoplay: false,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 3,
        },

        768: {
            slidesPerView: 4,
        },


        992: {
            slidesPerView: 5,
        },

        1200: {
            slidesPerView: 6,
        },

    },
});

var swiper_step_slider = new Swiper('.swiper-step-slider', {
    loop: true,
    autoplay: false,
    slidesPerView: 1,
    thumbs: {
        swiper: swiper_step_thumb,
    },
});
