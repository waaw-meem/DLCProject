import fontResizer from "./common-components/fontResizer";
import pageLoader from "./common-components/pageLoader";
import landscapeOff from "./common-components/landscapeOff";
import stickyHeader from "./common-components/stickyHeader";
import svgConvert from "./common-components/svgConvert";
import navigationSlide from "./common-components/navigationSlide";
import navigationAccordion from "./common-components/navigationAccordion";
import animateObserver from "./common-components/animateObserver";
import lazyLoadImgObserver from "./common-components/lazyLoadImgObserver";
import clipPathImgObserver from "./common-components/clipPathImgObserver";

landscapeOff();
stickyHeader();
svgConvert();
navigationSlide();
navigationAccordion();
animateObserver();
lazyLoadImgObserver();
clipPathImgObserver();

// -------------------- Above code might be common for all website --------------------------
import propertyGallerySlider from "./components/pages/program-detail/propertyGallerySlider";
import amenitiesSlider from "./components/pages/program-detail/amenitiesSlider";
import propertyVideoSlider from "./components/pages/program-detail/propertyVideoSlider";
import propertyFilters from "./components/pages/property-listing/propertyFilters";
import aboutThumbSlider from "./components/pages/aboout/about";
import mortgageCalculator from "./components/pages/mortgage-calculator/mortgageCalculator";
import selectFields from "./components/pages/contact-us/selectFields";
import Modal from "./components/pages/propertiesDetail/Modal";

propertyGallerySlider();
amenitiesSlider();
propertyVideoSlider();
propertyFilters();
aboutThumbSlider();
selectFields();
mortgageCalculator();


if (document.querySelector(".modal--properties-detail")) {
  Modal(".modal--properties-detail", ".modal-backdrop--properties-detail", ".show-modal--properties-detail");
}
