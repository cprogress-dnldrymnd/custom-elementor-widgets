var progressCircle = document.querySelector(".slide-progress2");

var swiper_step_thumb = new Swiper('.swiper-step-thumb', {
    loop: false,
    autoplay: {
        delay: 2500,
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
        autoplayTimeLeft(s, time, progress) {
            console.log(progress);
            progressCircle.style.setProperty("--progress", 1 - progress);
        }
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
