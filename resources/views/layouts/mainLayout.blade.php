<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('/css/card.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/header.css') }}" rel="stylesheet">
 
    <link href="{{ asset('/css/applicant.css') }}" rel="stylesheet">
 
    <title>Hout Bay Job Seekers</title>
  </head>

  <body>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1936634b09.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/applicant.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    </body>
</html>
