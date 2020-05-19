console.log('JS for volunteer-work');

// Add paws by editing the Style for paginator
let previousSpan = document.querySelector(".page-item:first-child>*");
if (previousSpan != null) {
  previousSpan.innerHTML = "";
  previousSpan.classList.add("fas", "fa-paw", "paw-left");
}

let nextSpan = document.querySelector(".page-item:last-child>*");
if (nextSpan != null) {
  nextSpan.innerHTML = "";
  nextSpan.classList.add("fas", "fa-paw", "paw-right");
}
