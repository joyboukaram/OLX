const submit = document.querySelector("#submit");
const h2 = document.querySelector("h2");
const account = document.querySelector("#account");
const h1 = document.querySelector("h1");

var form = document.form;

submit.addEventListener("click", event => {
   
if(form.email.value !== "" && form.password.value !== ""){ 
    h2.classList.remove("hidden");
    account.classList.remove("hidden");
    submit.parentNode.removeChild(submit);
}
return;
})