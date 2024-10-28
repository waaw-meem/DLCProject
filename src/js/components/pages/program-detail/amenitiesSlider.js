export default function amenitiesSlider() {
    if (document.querySelector(".amenitiesSlider")) {
        let slider = new Swiper(".amenitiesSlider .swiper",{
            slidesPerView: "auto",
            spaceBetween: 0,
            observeParents: true,
            observer: true,
            navigation: {
                nextEl: ".amenitiesSlider .swiper-button-next",
                prevEl: ".amenitiesSlider .swiper-button-prev",
            },
        });
  
        // Initialize Swiper
        // amenitiesSlider.init();
    }
  }
  