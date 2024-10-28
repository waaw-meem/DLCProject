export default function homeFilter() {
  const searchEl = document.querySelector(".js-choice1");
  const searchElChoice = new Choices(searchEl, {
    placeholder: true,
    placeholderValue: "City, community or building",
    searchEnabled: false,
    searchChoices: false,
    renderChoiceLimit: 1,
    maxItemCount: 1,
  });

  const elements = document.querySelectorAll(".js-choice");
  for (const el of elements) {
    const choices = new Choices(el, {
      placeholder: true,
    });
  }
  
}
