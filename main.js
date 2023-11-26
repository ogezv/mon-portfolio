// const appHeight = () => {
//   const vh = window.innerHeight * 0.01;
//   document.documentElement.style.setProperty(`--vh, ${vh}px`);
// };
// window.addEventListener("resize", appHeight);
// appHeight();

const links = document.querySelectorAll("nav li");
let footer = document.querySelector("footer");

// console.log(window.location.hash);
// if ((window.location.hash = "#contact")) {
//   footer.classList.toggle("fixed");
// }

icons.addEventListener("click", () => {
  nav.classList.toggle("active");
});

links.forEach((link) => {
  link.addEventListener("click", () => {
    nav.classList.remove("active");
  });
});
