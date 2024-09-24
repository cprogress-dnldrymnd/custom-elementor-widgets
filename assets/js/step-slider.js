var swiper_step_thumb = new Swiper('.swiper-step-thumb', {
    loop: false,
    autoplay: false,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next-step",
        prevEl: ".swiper-button-prev-step",
    },
    breakpoints: {
        0: {
            slidesPerView: 2,
        },

        768: {
            slidesPerView: 'auto',
        },

      

    },
});

var swiper_step_slider = new Swiper('.swiper-step-slider', {
    loop: false,
    autoplay: false,
    slidesPerView: 1,
    thumbs: {
        swiper: swiper_step_thumb,
    },
});
