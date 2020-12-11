<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css ">
    
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
    <div >    
      <nav class="container" id="footer">
            <!-- Main footer -->
          <div class="main-footer container" >
              <p class="btn">Home</p>
              <p class="btn">About </p>
              <p>@2020</p>
          </div>
            <!-- Connect with the developer section -->
          <div class="connection-message container">
              <h6>Connect with the Developer</h6> 
          </div>
            <!-- Social Icons -->
          <div class="Social-media container center">
            <ul class="socialIcons"> 
                <li class="linkedin"><a href="https://www.linkedin.com/in/john-nasimba/" target="_blank" rel="noopener noreferrer"><i class="fa fa-fw fa-linkedin"></i>linkedin</a></li>
                <li class="gmail"><a href="mailto:nasimba4john@outlook.com" target="_blank" rel="noopener noreferrer"><i class="fa fa-fw fa-envelope"></i>Email</a></li>
                <li class="whatsapp"><a  href="https://wa.me/+27780387591" target="_blank" rel="noopener noreferrer"><i class="fa fa-fw fa-whatsapp"></i>WhatsApp</a></li>              
                <li class="facebook"><a href="https://www.facebook.com/john.nasimba.7" target="_blank" rel="noopener noreferrer"><i class="fa fa-fw fa-facebook"></i>Facebook</a></li>          
            </ul>
        </div>
      </nav>
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

/* FOOTER */
#footer {
    position: absolute;
    height: 130px;
    bottom: 0px;
    width: 100vw;
    background-color: #007bff;
    margin: auto;
  
}
#footer .main-footer {
    display: flex;
    justify-content: space-between;
    /* background-color: teal; */
    width: 100vw;
    height: 30px;
    color: white;
}
#footer .connection-message {
    width: 100vw;
    /* background-color: thistle; */
    height: 30px;
    color: white;
}
#footer .connection-message {
    text-align: center;
}
#footer .Social-media {
    display: flex;
    justify-content: space-between;
    width: 100vw;
    /* background-color: rgb(3, 80, 72); */
    color: white;
   
}
/* Social icons */
 ul.socialIcons {
    padding: 0;
    text-align: center;
    /* background-color: rgb(87, 211, 180); */
    margin: auto;
    align-items: center;
  }
  
  .socialIcons li {
    list-style: none;
    display: inline-block;
    margin: 10px;
    border-radius: 2em;
    overflow: hidden;
  }
  
  .socialIcons li a {
    display: block;
    padding: 0.5em;
    min-width: 1.28571429em;
    max-width: 2.28571429em;
    height: 2.28571429em;
    white-space: nowrap;
    line-height: 1.5em; /*it's working only when you write text with icon*/
    transition: 0.5s;
    text-decoration: none;
    font-family: arial;
    color: #fff;
  }
  
  .socialIcons li i {
    margin-right: 0.5em;
  }
  
  .socialIcons li:hover a {
    max-width: 200px;
    padding-right: 1em;
  }
  
  .socialIcons .facebook {
    background-color: #3b5998;
    box-shadow: 0 0 16px #3b5998;
  }
  
  .socialIcons .gmail {
    background-color: #00aced;
    box-shadow: 0 0 16px #00aced;
  }
  
  .socialIcons .instagram {
    background-color: #cd486b;
    box-shadow: 0 0 16px #cd486b;
  }
  
  .socialIcons .whatsapp {
    background-color: #1bce89;
    box-shadow: 0 0 16px #1bce89;
  }
  
    </style>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   
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
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
