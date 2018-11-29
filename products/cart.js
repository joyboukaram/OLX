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


// var rad = document.Cart.checkbox;
//     var prev = null;
//     for(var i = 0; i < rad.length; i++) {
var rad = document.querySelectorAll('.checkbox');
for(var i = 0; i < rad.length; i++) {
			rad[i].onclick = function() {
			 $.ajax({
				type: 'POST',
					url: 'updateprice.php',
					data: {
							result: this.value,
					},

					success : function(data){
            console.log(data);
					}
			 });

			};
	}
