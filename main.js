const appHeight = () => {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty(`--vh, ${vh}px`);
};
window.addEventListener("resize", appHeight);
appHeight();

console.log(window.location.hash);
// if(window.location.hash=#contact){

// }

icons.addEventListener("click", ()=>{
    nav.classList.toggle("active")
})