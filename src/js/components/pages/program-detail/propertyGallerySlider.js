export default function propertyGallerySlider() {
    if (document.querySelector(".gallerySlider")) {

        let propertyGallerySliderRight = new Swiper(".gallerySlider__right .swiper",{
            loop: false,
            direction: "horizontal",
            slidesPerView: "auto",
            freeMode: false,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            watchOverflow: true,
            speed: 1500,
            observeParents: true,
            observer: true,
            spaceBetween: 15,
            breakpoints: {
                992: {
                    direction: "vertical",
                    slidesPerView: 4,
                    spaceBetween: 30,
                }
            }
        });

        let interleaveOffset = 0.5;

        let propertyGallerySliderLeft = new Swiper(".gallerySlider__left .swiper",{
            loop: false,
            speed: 1500,
            watchSlidesProgress: true,
            observeParents: true,
            observer: true,
            thumbs: {
                swiper: propertyGallerySliderRight
            },
            navigation: {
                nextEl: ".gallerySlider__right_navigation .swiper-button-next",
                prevEl: ".gallerySlider__right_navigation .swiper-button-prev"
            },
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
        });

        // propertyGallerySliderLeft.controller.control = propertyGallerySliderRight;
        // propertyGallerySliderRight.controller.control = propertyGallerySliderLeft;
  
        // Initialize Swiper
        // propertyGallerySlider.init();
  
  
    }
  }
  