export default function latestPropertySlider() {
  if (document.querySelector(".latest-properties__slider")) {
    let lastestPropertySlider = new Swiper(
      ".latest-properties__slider .swiper",
      {
        loop: true,
        speed: 1000,
        // autoplay: {
        //   delay: 3000,
        // },
        slidesPerView: 1,
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        coverflowEffect: {
          depth: 0,
          rotate: 0,
          scale: 0.75,
          stretch: 0,
          modifier: 1,
          slideShadows: false,
        },
        // watchSlidesProgress: true,
        grabCursor: true,
        observeParents: true,
        observer: true,
        spaceBetween: 0,
        breakpoints: {
          576: {
            slidesPerView: 2,
          },
          992: {
            slidesPerView: 3,
          },
          1200: {
            slidesPerView: 4,
          },
        },
        navigation: {
          nextEl: ".latest-properties__slider .swiper-button-next",
          prevEl: ".latest-properties__slider .swiper-button-prev",
        },
      }
    );

    // const tabs = document.querySelectorAll(".latest-properties__main-wrapper .rectangle-btn");

    // tabs.forEach((tab) => {
    //   tab.addEventListener("click", () => {
    //     // Remove the 'active' class from all tabs
    //     tabs.forEach((t) => t.classList.remove("active"));
    //     // Add the 'active' class to the clicked tab
    //     tab.classList.add("active");

    //     // Get the category from the data-category attribute
    //     const category = tab.getAttribute("data-category");

    //     document.querySelectorAll(".latest-properties__slider .swiper-slide").forEach((slide) => {
    //         if (slide.classList.contains(category)) {
    //           slide.style.display = "block"; // Show matching slides
    //         } else {
    //           slide.style.display = "none"; // Hide non-matching slides
    //         }
    //       });

    //     // Update Swiper after showing/hiding slides
    //     lastestPropertySlider.destroy(true, true);
    //     lastestPropertySlider.updateSlidesClasses();
    //     lastestPropertySlider.init();
    //     lastestPropertySlider.update();
    //     // console.log('first')
    //     // lastestPropertySlider.updateProgress();
    //     // lastestPropertySlider.updateSlides();

    //   });
    // });

    // // Initialize Swiper
    // lastestPropertySlider.init();
  }
}

class SwiperFilter {
  constructor(filters) {
    this.cardsFilters = document.querySelectorAll(filters);
    this.initializeFilters();
  }

  initializeFilters() {
    this.cardsFilters.forEach((item) =>
      item.addEventListener("click", (e) => this.filterAction(item))
    );
  }

  filterAction(filterAnchor) {
    this.cardsFilters.forEach((item) => item.classList.remove("active"));
    let slider = document.getElementById(
      `${this.cardsFilters[0].parentElement.getAttribute("data-filterSlideRef")}`);

    // console.log(this.cardsFilters[0].parentElement);

    let filter = filterAnchor.getAttribute("data-category");
    filterAnchor.classList.add("active");
    if (slider) {
      let slides = slider.querySelectorAll(".swiper-wrapper > div");
      slides.forEach((item) => {
        if (filter == "all") {
          this.updateSlideClasses(item, "swiper-slide");
        } else {
          if (item.getAttribute("data-filter") == filter) {
            this.updateSlideClasses(item, "swiper-slide");
          } else {
            this.updateSlideClasses(item, "non-swiper-slide");
          }
        }
      });
      this.updateSwiper(slider);
    }
  }

  updateSlideClasses(item, className) {
    item.removeAttribute("class");
    item.classList.add(className);
  }

  updateSwiper(slider) {
    let swiper = slider.swiper;
    swiper.updateSize();
    swiper.updateSlides();
    swiper.updateProgress();
    swiper.updateSlidesClasses();
    swiper.slideTo(0);
  }
}

const swiperFilter = new SwiperFilter(
  ".latest-properties__main-wrapper .btnn-group  .rectangle-btn"
);

// console.log(swiperFilter);
