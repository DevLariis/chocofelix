// ALERT FUNCTION ENTER IN THE PAGE LOGIN
// function entrar() {
//   alert("Por favor digite email e senha");
// }

/************* NAVIGATION BAR **************/
window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("menu-scroll", window.scrollY > 10);
});

// CART OPEN

window.addEventListener("scroll", function () {
  var floaterMedia = document.querySelector(".floaterMedia");
  if (window.scrollY > 1500) {
    floaterMedia.style = "bottom: 150px";
  } else {
    floaterMedia.style = "bottom: 30px";
  }
});

// POUP UP

function openpoupup() {
  var openpoupup = document.querySelector(".poupup");
  openpoupup.style = "display:flex";
}
function closepoupup() {
  var closepoupup = document.querySelector(".poupup");
  closepoupup.style = "display:none";
}
