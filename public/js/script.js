const headerTitle = document.getElementById('header-title');
const searchForm = document.getElementById('search-form');
const searchIcon = document.getElementById('search-icon');
const searchButton = document.getElementById('search-button');
const menuButton =  document.getElementById('menu-button')

    // Create a media condition that targets view ports of screen width less than 500px

const mediaQuery = window.matchMedia('(max-width: 500px)')


function displayForm() {
    searchIcon.hidden = true;
    headerTitle.hidden = true;
    searchForm.hidden = false;
}
function hideFormOnSearchButtonClick() {
    searchIcon.hidden = false;
    headerTitle.hidden = false;
    if (mediaQuery.matches) {
        searchForm.hidden = true
    } else {
        searchForm.hidden = false;
      }
}

searchIcon.addEventListener('click', displayForm);
searchButton.addEventListener('click', hideFormOnSearchButtonClick)

// window.addEventListener('load', (event) => {

//     // Check if the media query is true
//     if (mediaQuery.matches) {
//       searchForm.hidden = true
//     }
// });
// function changeWhatToDisplay() {
//     if (mediaQuery.matches) {
//         // alert('the width is less than 500px');
//         searchForm.hidden = true
//       }
// }
// window.onresize = changeWhatToDisplay;


// side nav scripts

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