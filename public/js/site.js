// Home
var currentIndex = 1;
var totalCount = 5;
setInterval(function() {
    if (currentIndex > totalCount)
        currentIndex = 1;
        document.getElementById("header").style.backgroundImage = "url(http://localhost/R-Stadium/assets/image" + currentIndex++ + ".png)";
}, 5000);

// NavBar
var navbar = document.getElementById("navbar");
var menu = document.getElementById("menu");
var logo1 = document.getElementById("logo1");
var logo2 = document.getElementById("logo2");
window.onscroll = function(){
    if(window.pageYOffset >= menu.offsetTop){
        // scroll active
        logo1.classList.add("d-none");
        logo2.classList.remove("d-none");
        navbar.classList.add("fixed-top");
        menu.classList.remove("mx-auto");
        menu.classList.add("ms-auto");
        navbar.classList.add("py-3");
        navbar.classList.remove("py-2");
    }else{
        logo1.classList.remove("d-none");
        logo2.classList.add("d-none");
        navbar.classList.remove("fixed-top");
        menu.classList.remove("ms-auto");
        menu.classList.add("mx-auto");
        navbar.classList.remove("py-3");
        navbar.classList.add("py-2");
    }
}