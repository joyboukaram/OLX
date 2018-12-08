
var add_to_cart = document.querySelector("#addtocart");

	add_to_cart.addEventListener("click", function(){
		add_to_cart.classList.add("hidden");
	})

var b = document.querySelectorAll(".hello");
	var prev = null;
	for(var i = 0; i < b.length; i++) {
			b[i].onclick = function() {
			 $.ajax({
				type: 'POST',
					url: 'tester.php',
					data: {
							result: this.value,
					},

					success : function(data){
            console.log("done");
					}
			 });

			};
	}
