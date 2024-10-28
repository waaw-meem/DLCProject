export default function propertyVideoSlider() {
  if (document.querySelector(".property-video-sec")) {
    let interleaveOffset = 0.5;
    const propertyVideoSwiper = new Swiper(".property-video-sec .swiper", {
      slidesPerView: 1,
      loop: false,
      speed: 2000,
      observeParents: true,
      observer: true,
      loop: false,
      watchSlidesProgress: true,
      on: {
        progress: function () {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            var slideProgress = swiper.slides[i].progress,
                innerOffset = swiper.width * interleaveOffset,
                innerTranslate = slideProgress * innerOffset;
            swiper.slides[i].querySelector(".img-wrapper").style.transform ="translateX(" + innerTranslate + "px)";
          }
        },
        touchStart: function () {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },
        setTransition: function (swiper, speed) {
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = speed + "ms";
            swiper.slides[i].querySelector(".img-wrapper").style.transition = speed + "ms";
          }
        },
      },
      // Navigation arrows
      navigation: {
        nextEl: ".property-video-sec .swiper-button-next",
        prevEl: ".property-video-sec .swiper-button-prev",
      },
    });
  }
}
