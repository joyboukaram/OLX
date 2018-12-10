var rad = document.myForm.price;
for(var i = 0; i < rad.length; i++) {
			rad[i].onclick = function() {
			 $.ajax({
				type: 'POST',
					url: 'sortprice.php',
					data: {
							price: this.value,
					},

					success : function(data){
            console.log(data);
					}
			 });

			};
	}

  $(document).ajaxStop(function(){
    setTimeout("window.location = 'shop.php'",100);
  });



  var rad1 = document.myForm.date;
  for(var i = 0; i < rad.length; i++) {
  			rad1[i].onclick = function() {
  			 $.ajax({
  				type: 'POST',
  					url: 'sortdate.php',
  					data: {
  							price: this.value,
  					},

  					success : function(data){
              console.log(data);
  					}
  			 });

  			};
  	}

    $(document).ajaxStop(function(){
      setTimeout("window.location = 'shop.php'",100);
    });




const arr = [women, men, electronics, jewelry, home, bags, children, sports, beauty, cars];


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
  window.open("ad.php", "_self");
});

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
