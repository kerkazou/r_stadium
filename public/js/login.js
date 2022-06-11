var sign_in = document.getElementById('sign_in');
var sign_up = document.getElementById('sign_up');
var btn_sign_in = document.getElementById('btn_sign_in');
var btn_sign_up = document.getElementById('btn_sign_up');

sign_in.style.display = "block";
sign_up.style.display = "none";

btn_sign_in.addEventListener('click', (e) => {
    sign_in.style.display = "block";
    sign_up.style.display = "none";
});
btn_sign_up.addEventListener('click', (e) => {
    sign_in.style.display = "none";
    sign_up.style.display = "block";
});