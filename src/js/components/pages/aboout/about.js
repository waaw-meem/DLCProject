function aboutThumbSlider() {
    if (document.querySelector(".statements__slider-wrapper")) {
        let statements__slider__one = new Swiper(".statements__slider__one", {
            spaceBetween: 0,
            slidesPerView: "auto",
            freeMode: true,
            watchSlidesProgress: true,
            direction: "vertical",
            observeParents: true,
            observer: true,
        });

        let statements__slider__two = new Swiper(".statements__slider__two", {
            spaceBetween: 15,
            direction: "vertical",
            speed: 1500,
            observeParents: true,
            observer: true,
            // navigation: {
            //   nextEl: ".swiper-button-next",
            //   prevEl: ".swiper-button-prev",
            // },
            thumbs: {
                swiper: statements__slider__one,
            },
        });
    }
}

export default aboutThumbSlider