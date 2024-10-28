export default function propertySlider() {
  if (document.querySelector(".property-highlight__slider-wrapper")) {
    let propertySlider = new Swiper(
      ".property-highlight__slider-wrapper .swiper",
      {
        spaceBetween: 0,
        slidesPerView: "auto",
        loop: false,
        freeMode: true,
        watchSlidesProgress: true,
        grabCursor: true,
        observeParents: true,
        observer: true,
        observeSlideChildren: true,
        init: false,
        speed: 1500,
        //   allowTouchMove: true,
        navigation: {
          nextEl: ".property-highlight__main-wrapper .swiper-button-next",
          prevEl: ".property-highlight__main-wrapper .swiper-button-prev",
        },
      }
    );

    const tabs = document.querySelectorAll(".property-highlight__main-wrapper .rectangle-btn");

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        // Remove the 'active' class from all tabs
        tabs.forEach((t) => t.classList.remove("active"));
        // Add the 'active' class to the clicked tab
        tab.classList.add("active");

        // Get the category from the data-category attribute
        const category = tab.getAttribute("data-category");

        document
          .querySelectorAll(".property-highlight__slider-wrapper .swiper-slide")
          .forEach((slide) => {
            if (slide.classList.contains(category)) {
              slide.style.display = "block"; // Show matching slides
            } else {
              slide.style.display = "none"; // Hide non-matching slides
            }
          });

        // Update Swiper after showing/hiding slides
        propertySlider.update();
        
        propertySlider.updateSlidesClasses();
        propertySlider.init();
        // // console.log('first')
        // propertySlider.updateProgress();
        // propertySlider.updateSlides();


      });
    });

    // Initialize Swiper
    propertySlider.init();

  }
}
