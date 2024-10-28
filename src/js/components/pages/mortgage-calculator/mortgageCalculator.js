


function mortgageCalculator() {
    if(document.querySelectorAll(".mortgage-choice")) {
        const elements = document.querySelectorAll(".mortgage-choice");
        for (const el of elements) {
          const choices = new Choices(el, {
            placeholder: true,
          });
        }
    }

}

export default mortgageCalculator;
