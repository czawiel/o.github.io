
//Lightbox IMG
var lightbox = GLightbox();
var lightbox = GLightbox({
    selector: '.glightboxlogo'
});
var lightboxVideo = GLightbox({
    selector: '.glightbox3',
    touchNavigation: true,
    loop: true,
    autoplayVideos: true,
    closeOnOutsideClick: true
});

//rollDown slider section
const rollDown = document.getElementById("rollDown");
const rollText = document.getElementById("rollText");

rollDown.addEventListener('click', function() {
if(rollText.style.height !== "200px"){
    rollText.style.height = "200px";
}
else{
    rollText.style.height = "89px";
}

rollDown.classList.toggle('upside-down');
});

//nav scroll add bg
const navbar = document.getElementById("nav");

window.addEventListener("scroll", function () {
const scrollHeight = window.pageYOffset;
const navHeight = navbar.getBoundingClientRect().height;
if (scrollHeight > navHeight) {
navbar.classList.add("fixed-nav");
} else {
navbar.classList.remove("fixed-nav");
}
});

//nav ham
const navHam = document.getElementById("nav-ham");
const ulNavOne = document.querySelector(".ul-nav-one");
const socialContainer = document.querySelector(".social-container");
const ulNav = document.querySelector(".ul-nav");

navHam.addEventListener('click', function() {

ulNavOne.classList.toggle('displayBlock');
socialContainer.classList.toggle('displayFlex');
ulNav.classList.toggle('displayBlock');

});