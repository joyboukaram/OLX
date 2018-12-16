

const ad = document.querySelector("#ad");

ad.addEventListener("click", event => {
  window.open("../products/ad.php", "_self");
})

const cart = document.querySelector("#cart");
cart.addEventListener("click", event => {
  window.open("../products/cart.php", "_self");
})

const searchpic = document.querySelector("#searchpic");
const search = document.querySelector("#search");
searchpic.addEventListener("click", event => {
  search.style.border = "4px solid rgb(109, 44, 44)";
})

