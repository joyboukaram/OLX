var add_to_cart = document.querySelectorAll(".add_to_cart").forEach(function(elem) {
	elem.addEventListener("click", function(event) {
		var item_added = document.querySelector("#item_added");
		elem.classList.add("hidden");
		item_added.classList.remove("hidden");
	});
});;

var b  = document.querySelectorAll(".hello");
var prev = null;
for (var i = 0; i < b.length; i++) {
	b[i].onclick = function () {
		$.ajax({
			type: 'POST',
			url: 'tester.php',
			data: {
				result: this.value,
			},

			success: function (data) {
				console.log("done");
			}
		});
		
	};
}