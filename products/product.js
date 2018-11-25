const ad = document.querySelector("#ad");

ad.addEventListener("click", event => {
  window.open("ad.php", "_self");
})

const cart = document.querySelector("#cart");
cart.addEventListener("click", event => {
  window.open("cart.php", "_self");
})

const searchpic = document.querySelector("#searchpic");
const search = document.querySelector("#search");
searchpic.addEventListener("click", event => {
  search.style.border = "4px solid rgb(109, 44, 44)";
})

const add_to_cart = document.querySelector("#add_to_cart");
const go_to_cart = document.querySelector("#go_to_cart");
const item_added = document.querySelector("#item_added");
add_to_cart.addEventListener("click", event => {
  event.preventDefault();
  add_to_cart.classList.add("hidden");
  go_to_cart.classList.remove("hidden");
  item_added.classList.remove("hidden");
})

go_to_cart.addEventListener("click", event => {
  window.open("cart.php", "_self");
})
