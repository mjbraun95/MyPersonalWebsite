// ### Sticky code ###

// Execute myFunction whenever page is scrolled
window.onscroll = function() {myFunction()};

// get nav
var navbar = document.getElementById("navbar");

// get offset position
var sticky = navbar.offsetTop;

// add sticky class whenever you reach the bar scroll position

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }

}