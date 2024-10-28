export default function desktopPanel() {
  if (document.querySelector(".burger-menu")) {
    let burger__menu = document.querySelector(".burger-menu");
    let main__side__panel = document.querySelector(".main-side-panel");
    let main__cross = document.querySelector(".main-side-panel__cross-icon");

    burger__menu.addEventListener("click", function () {
      main__side__panel.classList.add("active");
    });

    main__cross.addEventListener("click", function () {
      main__side__panel.classList.remove("active");
    });

    let side_nav_items = document.getElementsByClassName("side-nav-item");
    if (window.innerWidth > 1199) {
      for (const side_nav_item of side_nav_items) {
        // console.log(side_nav_item)
        side_nav_item.addEventListener("mouseover", function () {
          let current_nav_item = this;
          let current__nav_dropdown = current_nav_item.lastElementChild;

          if (current__nav_dropdown.matches("ul")) {
            for (const side_nav_item of side_nav_items) {
              if (side_nav_item.lastElementChild.matches("ul")) {
                side_nav_item.lastElementChild.classList.remove("active");
              }
            }
            current__nav_dropdown.classList.add("active");
          }
        });
      }
    }
  }
}
