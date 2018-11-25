const arr = [women, men, electronics, jewelry, home, bags, children, sports, beauty, cars];

const image = document.querySelectorAll(".new_image");

for (let i = 0; i < image.length; i++) {
    image[i].addEventListener("click", event => {
        window.open("../products/product.html", "_self");
    })
}


arr[women] = document.querySelector('#women');
arr[men] = document.querySelector("#men");
arr[electronics] = document.querySelector("#electronics");
arr[jewelry] = document.querySelector("#jewelry");
arr[home] = document.querySelector("#home");
arr[bags] = document.querySelector("#bags");
arr[children] = document.querySelector("#children");
arr[sports] = document.querySelector("#sports");
arr[beauty] = document.querySelector("#beauty");
arr[cars] = document.querySelector("#cars");


const women_link = document.querySelector('#women_link');
const men_link = document.querySelector('#men_link');
const electronics_link = document.querySelector('#electronics_link');
const jewelry_link = document.querySelector('#jewelry_link');
const home_link = document.querySelector('#home_link');
const bags_link = document.querySelector('#bags_link');
const children_link = document.querySelector('#children_link');
const sports_link = document.querySelector('#sports_link');
const beauty_link = document.querySelector('#beauty_link');
const cars_link = document.querySelector("#cars_link");



women_link.addEventListener("click", event => {
    for (let i = 0; i < arr.length; i++) {
        arr[i].classList.add("hidden");
    }
    arr[0].classList.remove("hidden");
});

men_link.addEventListener("click", event => {
    for (let i = 0; i < arr.length; i++) {
        arr[i].classList.add("hidden");
    }
    arr[1].classList.remove("hidden");
});

electronics_link.addEventListener("click", event => {
    for (let i = 0; i < arr.length; i++) {
        arr[i].classList.add("hidden");
    }
    arr[2].classList.remove("hidden");
});

jewelry_link.addEventListener("click", event => {
    for (let i = 0; i < arr.length; i++) {
        arr[i].classList.add("hidden");
    }
    arr[3].classList.remove("hidden");
});

home_link.addEventListener("click", event => {
    for (let i = 0; i < arr.length; i++) {
        arr[i].classList.add("hidden");
    }
    arr[4].classList.remove("hidden");
});


bags_link.addEventListener("click", event => {
    for (let i = 0; i < arr.length; i++) {
        arr[i].classList.add("hidden");
    }
    arr[5].classList.remove("hidden");
});

children_link.addEventListener("click", event => {
    for (let i = 0; i < arr.length; i++) {
        arr[i].classList.add("hidden");
    }
    arr[6].classList.remove("hidden");
});

sports_link.addEventListener("click", event => {
    for (let i = 0; i < arr.length; i++) {
        arr[i].classList.add("hidden");
    }
    arr[7].classList.remove("hidden");
});

beauty_link.addEventListener("click", event => {
    for (let i = 0; i < arr.length; i++) {
        arr[i].classList.add("hidden");
    }
    arr[8].classList.remove("hidden");
});

cars_link.addEventListener("click", event => {
    for (let i = 0; i < arr.length; i++) {
        arr[i].classList.add("hidden");
    }
    arr[9].classList.remove("hidden");


});


const filter = document.querySelector("#filter");
const sort_div = document.querySelector("#sort_div");

filter.addEventListener("click", event => {
    sort_div.classList.remove("hidden");
});


const ad = document.querySelector("#ad");
ad.addEventListener("click", event => {
  window.open("ad.html", "_self");
});