const image = document.querySelectorAll(".prod_image");
for (let i = 0; i < image.length; i++) {
    image[i].addEventListener("click", event => {
        window.open("buy_product.php", "_self");
    })
}

const searchpic = document.querySelector("#searchpic");
const search = document.querySelector("#search");
searchpic.addEventListener("click", event => {
  search.style.border = "4px solid rgb(109, 44, 44)";
  return;
})

const ad = document.querySelector("#ad");
ad.addEventListener("click", event => {
  window.open("../products/ad.php", "_self");
});