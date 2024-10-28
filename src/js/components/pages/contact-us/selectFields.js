

export default function selectFields() {
    if(document.querySelectorAll(".select-form-choice")) {
        const elements = document.querySelectorAll(".select-form-choice");
        for (const el of elements) {
          const choices = new Choices(el, {
            placeholder: true,
          });
        }
    }
}
