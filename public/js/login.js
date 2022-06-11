var sign_in = document.getElementById('sign_in');
var sign_up = document.getElementById('sign_up');
var btn_sign_in = document.getElementById('btn_sign_in');
var btn_sign_up = document.getElementById('btn_sign_up');

var error_sign_up = document.getElementById('error_sign_up');


if(window.location.hash == '#sign_in'){
    sign_in_active();
}
if(window.location.hash == '#sign_up'){
    sign_up_active();
}
if(window.location.hash == ''){
    sign_in_active();
}


let urlParts = window.location.href.split("?");

if(urlParts[1] == 'repeat_signup'){
    window.location.href=urlParts[0];
    error_sign_up.innerHTML = '<p style="color: red;">Please, repeat again.</p>';
}
if(urlParts[1] == 'confirm_signup'){
    window.location.href=urlParts[0];
    error_sign_up.innerHTML = '<p style="color: red;">Please, confirm your password.</p>';
}
if(urlParts[1] == 'fill_signup'){
    window.location.href=urlParts[0];
    error_sign_up.innerHTML = '<p style="color: red;">Please, fill all the file.</p>';
}
if(urlParts[1] == 'successful'){
    window.location.href=urlParts[0];
    Swal.fire({
        position: '',
        icon: 'success',
        title: 'Your registration is successful',
        showConfirmButton: false,
        timer: 3000
    })
}



btn_sign_in.addEventListener('click', (e) => {
    sign_in_active();
});
btn_sign_up.addEventListener('click', (e) => {
    sign_up_active();
});

function sign_in_active(){
    sign_in.style.display = "block";
    sign_up.style.display = "none";
}
function sign_up_active(){
    sign_in.style.display = "none";
    sign_up.style.display = "block";
}