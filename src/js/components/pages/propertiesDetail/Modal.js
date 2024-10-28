


export default function Modal(modalMainWrapper, backdrop, show) {
  let modal = document.querySelector(modalMainWrapper),
    modal_backdrop = document.querySelector(backdrop),
    show_modals = document.querySelectorAll(show),
    rootEl = document.querySelector("html");

  show_modals.forEach(function (show_modal) {
    show_modal.addEventListener("click", function (e) {
      e.stopPropagation();
      modal.classList.add("show");
      modal_backdrop.classList.add("show");
      rootEl.classList.add("overflow-hidden");
    });
  });

  document.addEventListener("click", function (e) {
    e.stopPropagation();
    if (e.target.closest(".modal")) {
      // console.log("modal")
      if (e.target.matches(".modal__cancel")) {
        // console.log(e.target.matches(".modal__cancel")  )
        modal.classList.remove("show");
        modal_backdrop.classList.remove("show");
        rootEl.classList.remove("overflow-hidden");
      }
    } else {
      modal.classList.remove("show");
      modal_backdrop.classList.remove("show");
      rootEl.classList.remove("overflow-hidden");
    }
  });
}





