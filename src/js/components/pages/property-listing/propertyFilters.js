

function propertyFilters() {

    const tabs = document.querySelectorAll(".property-highlight__listing .btnn-group .rectangle-btn");

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        // Remove the 'active' class from all tabs
        tabs.forEach((t) => t.classList.remove("active"));
        // Add the 'active' class to the clicked tab
        tab.classList.add("active");

        // Get the category from the data-category attribute
        const category = tab.getAttribute("data-category");

        document
          .querySelectorAll(".property-highlight__listing .custom-row .col_12")
          .forEach((slide) => {
            if (slide.classList.contains(category)) {
              slide.style.display = "block"; // Show matching slides
            } else {
              slide.style.display = "none"; // Hide non-matching slides
            }
          });

        


      });
    });
 
}

export default propertyFilters