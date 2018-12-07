// var modal = document.getElementById('myModal');
//
// // Get the button that opens the modal
// var img = document.getElementById("myBtn");
//
// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];
//
// // When the user clicks the button, open the modal
// img.onclick = function() {
//     modal.style.display = "block";
// }
//
// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }
//
// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }


//var rad = document.addCart.hello;

var add_to_cart = document.querySelector("#addtocart");

// for(var i = 0; i < add_to_cart.length; i++){
	add_to_cart.addEventListener("click", function(){
		add_to_cart.classList.add("hidden");
	})
// }

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
