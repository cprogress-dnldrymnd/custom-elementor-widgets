var swiper_step_thumb = new Swiper('.swiper-step-thumb', {
    loop: false,
    autoplay: false,
    spaceBetween: 10,
    slidesPerView: 3,
    watchSlidesProgress: true,
    navigation: {
        nextEl: ".swiper-button-next-step",
        prevEl: ".swiper-button-prev-step",
    },

});

const progressCircle = document.querySelector(".slide-progress");
var swiper_step_slider = new Swiper('.swiper-step-slider', {
    loop: false,
    autoplay: true,
    slidesPerView: 1,
    thumbs: {
        swiper: swiper_step_thumb,
    },
    on: {
        autoplayTimeLeft(s, time, progress) {
            progressCircle.style.setProperty("--progress", 1 - progress);
        }
    }
});
