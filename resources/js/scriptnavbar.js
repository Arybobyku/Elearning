//hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});
const navProfile = document.querySelector("#nav-profile");
const profileNav = document.querySelector("#profilenav");

profileNav.addEventListener("click", function () {
    navProfile.classList.toggle("hidden");
});
//navbar fixed
window.onscroll = function () {
    const header = document.querySelector("header");
    const navfix = header.offsetTop;

    if (window.pageYOffset > navfix) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};
