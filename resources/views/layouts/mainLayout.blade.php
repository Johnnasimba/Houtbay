<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <title>Hout Bay Job Seekers</title>
  </head>

  <body>
      <div>
          <!-- Header -->
          <div class="container" id="header">

              <!-- Menu button -->
              <div class="navbar navbar-white btn " id="menu-button">
                <i class="material-icons">menu</i>
              </div>

            
             
            <!-- Title -->
            <nav class="header-navbar navbar navbar-dark " id="header-title" >
                <div class="header-title">
                    <a class="navbar-brand" href="#">Hout Bay Job Seekers</a>
                </div>
            </nav>  

            <!-- Search form -->
            <div id="search-form" >
                <form action="search" method="get" class="search-form"  >
                   @csrf     
                    <input type="search" placeholder="Search" name="search">
                    <button  id="search-button" type="submit">Search</button>
                </form>
            </div>
            

            <!-- Search icon -->
            <div class="navbar navbar-white btn " id="search-icon">
                 <i class="material-icons">search</i>

             </div>
        </div> 

          <!-- Side Nav -->
        <div class="preload">
        <nav class="nav"  id="side-nav">
            <div class="nav__links">
                <a href="#" class="nav__link">
                    <i class="material-icons">home</i>
                    Home
                </a>
                <a class="nav__link" href="#">
                    <i class="material-icons">info</i>
                    About
                </a>
                <a class="nav__link " href="#">
                    <i class="material-icons">contact_page</i>
                    Contact
                </a>
               
                <a class="nav__link" href="#">
                    <i class="material-icons">admin_panel_settings</i>
                   Admin
                </a>
            </div>
            <div class="nav__overlay"  id="nav__overlay"></div>
        </nav>
    </div>


                <!--  Category Navigation  -->
            <!-- <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">Gardener</a></li>
                    <li class="page-item"><a class="page-link" href="#">Driver</a></li>
                    <li class="page-item"><a class="page-link" href="#">House keeper</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav> -->
        
           
            







        <!-- Content body -->
        <div class="container content">
            @yield('body')
        </div>

        
   
   







<!-- Footer -->
    <div class="container footer">    
            <h1 class="footer"> This is the footer</h1>
    </div>

  
    <style>
      
#header {
    background-color:#0093E3 ;
    display: flex;
    justify-content: space-between;
    height: 50px;
}

#menu-button {
    background-color:#0093E3 ;
    color: white;
    padding-left: 0px;
}
#menu-button:hover {
    filter: brightness(80%);
}
#menu-button img {
    color: white;
    
}
#header-title{
    margin-right: 0px;
    padding-right: 0px;
}
#header-title:hover {
    filter: brightness(80%);
}


#header .search-form {
    display: flex;
    justify-content: flex-end;
    background-color:#0093E3 ;
    width: 200px;
    margin-right: 0px;
    height: 50px;
}

#header .search-form input {
    min-width: 160px;
    margin: 5px 0px 7px 7px;
    height: 40px;
    border: 1px solid whitesmoke;
    border-radius: 5px;
    padding: 20px;
    font-size: 1.2em;
}
#search-button {
   width: 100px;
   height: 40px;
   border: 1px solid white;
   border-radius: 5%;
   color: white;
   background-color: #0093E3;
   margin: 5px 10px 7px 5px;

}
 #search-button:hover {
    filter: brightness(80%);
 }
 #search-icon {
    background-color: #0093E3;
    margin: 5px 10px 7px 0px;
    padding-left: 0px;
    color: white;
 }
#search-icon:hover {
    filter: brightness(80%);
}



/* Display search icon only on small screens */
@media only screen and (min-width: 500px) {
    #search-icon {
        display: none;
    }
}

/* Hide  search form on small screens. It will only be displayed on click on Search-icon */
@media only screen and (max-width: 500px) {
    #search-form {
        display: none;
    } 
}
 @media only screen and (max-width: 350px) {
    #header-title {
        margin: 5px 0px 10px 0px;
        padding: 0px;
    } 
    #menu-button {
        padding-left: 0px;
    }
}
 @media only screen and (max-width: 750px) {
    #header-title {
        margin: 5px 0px 10px 0px;
        padding: 0px;
    } 
    #menu-button {
        padding: 0px;
    }
}




/* Side Nav  */
#preload * {
    transition: none !important;
    
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: #333333;
    display: flex;
}

.header__button {
    flex-shrink: 0;
    background: none;
    outline: none ;
    border: none;
    color: #ffffff;
    cursor: pointer;
}

.nav__links {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 2;
    height: 100vh;
    width: 250px;
    background: #ffffff;
    transform: translateX(-250px);
    transition: transform 0.3s;
    
}

.nav--open .nav__links {
    transform: translateX(0);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
}

.nav__link {
    display: flex;
    align-items: center;
    color: #666666;
    font-weight: bold;
    font-size: 14px;
    text-decoration: none !important;
    padding: 12px 15px;
    background: transform 0.2s;
}

.nav__link > i {
    margin-right: 15px;
}
.nav__link:hover {
    background: #eeeeee;
    color: teal;
}

.nav__overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(2px);
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.3s;
}

.nav--open .nav__overlay {
    visibility: visible;
    opacity: 1;
}
    </style>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script >
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
  </script>

</body>
</html>
