const menuButton = document.getElementById('menu-button');
const searchForm = document.getElementById('mobile-search-form');
const searchIcon = document.getElementById('search-icon');
const searchButton = document.getElementById('search-button');
const headerTitle = document.getElementById('header-title');
const mobileSearchButton = document.getElementById('mobile-search-button')


function onSearchIconClick() {

    searchIcon.classList.add("hidden");
    headerTitle.classList.add("hidden");
    searchForm.classList.remove("hidden");

}

function onSearchSubmit() {
    searchIcon.classList.remove("hidden");
    headerTitle.classList.remove("hidden");
    searchForm.classList.add("hidden");
}

// Event listeners 
searchIcon.addEventListener('click', onSearchIconClick);
mobileSearchButton.addEventListener('click', onSearchSubmit);

//side nav scripts

window.addEventListener("load", () => {
    document.body.classList.remove("preload");
});

document.addEventListener("DOMContentLoaded", () => {
    const nav = document.getElementById("side-nav");

menuButton.addEventListener("click", () => {
        nav.classList.add("nav--open");
    });

    document.getElementById("nav__overlay").addEventListener("click", () => {
        nav.classList.remove("nav--open");
    });
});