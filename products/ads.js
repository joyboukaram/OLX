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

const product = document.querySelectorAll(".images_ads");
for (let i = 0; i < product.length; i++) {
  product[i].addEventListener("click", event => {
      window.open("my_ad_edit.php", "_self");
  })
}