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
document.querySelectorAll(".deliveryToUser").forEach(function (elem) {
	elem.addEventListener("click", function (event) {
		elem.classList.add("hidden");

	});
});;

var rad = document.querySelectorAll('.checkbox');

for (var i = 0; i < rad.length; i++) {
	rad[i].addEventListener("click", showTotal);
}



var total_price = document.querySelector("#price");

function showTotal(event) {
	const current_event = event.currentTarget;
	$.ajax({
		type: 'POST',
		url: 'updateprice.php',
		data: {
			result: this.value,
		},
		success: function (data) {

			total_price.textContent = data + "LBP";
			console.log("hey");

		}
	})
	current_event.removeEventListener("click", showTotal);
}


var b = document.querySelectorAll(".hello");
var prev = null;
for (var i = 0; i < b.length; i++) {
	b[i].onclick = function () {
		$.ajax({
			type: 'POST',
			url: 'addtodelivery.php',
			data: {
				result: this.value,
			},

			success: function (data) {
				console.log("done");
			}
		});

	};
}
