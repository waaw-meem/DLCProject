export default function homeHeroSlider() {
  // document.addEventListener("DOMContentLoaded", () => {
  //   window.setTimeout(() => {
  //     const imgElements = document.querySelectorAll("img[data-src-hero]");
  //     const lazyLoadingImage = (entries, observer2) => {
  //       entries.forEach((entry) => {
  //         if (!entry.isIntersecting) return;
  //         entry.target.src = entry.target.dataset.srcHero;
  //         entry.target.addEventListener("load", () => {
  //           entry.target.classList.remove("lazy-img");
  //           observer2.unobserve(entry.target);
  //         });
  //       });
  //     };
  //     const lazyLoadingObserver = new IntersectionObserver(lazyLoadingImage, {
  //       threshold: 0,
  //       rootMargin: "0px 0px 150px 0px",
  //     });
  //     imgElements.forEach((img) => lazyLoadingObserver.observe(img));
  //   }, 100);
  // });

  if (document.querySelector(".home-hero__slider")) {
    let homeImage = new Swiper(".home-hero__slider", {
      slidesPerView: 1,
      loop: false,
      speed: 2000,
      allowTouchMove: false,
      observeParents: true,
      observer: true,
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.home-hero .swiper-pagination',
        clickable: true
      },
    });
  }
}
