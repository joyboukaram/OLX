function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };
        reader.readAsDataURL(input.files[0]);
        if (input.files[1]) {
            reader.readAsDataURL(input.files[1]);
        }
    }
}

var hide_contact = document.querySelector("#hide_contact");
var hide_contact2 = document.querySelector("#hide_contact2");

$('select').on('change', function () {


    switch (this.value) {
        case 'services':
            hide_contact.classList.add("hidden");
            hide_contact2.classList.add("hidden");
            console.log("ok");
            break;


        default:
        console.log("no");
        hide_contact.classList.remove("hidden");
        hide_contact2.classList.remove("hidden");
            break;
    }


});
