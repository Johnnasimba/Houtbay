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
    <link href="{{ asset('/css/categories.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/applicant.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/addApplicant.css') }}" rel="stylesheet">
 
    <title>Hout Bay Job Seekers</title>
  </head>

  <body>
          <!-- Header -->
    <div class="main-header">
        <div class="container" id="header">

            <!-- Menu button -->
            <div class="navbar navbar-white btn " id="menu-button">
                <i class="material-icons">menu</i>
            </div>

            <!-- Title -->
            <nav class="header-navbar navbar navbar-dark " id="header-title" >
                <div class="header-title">
                    <a class="navbar-brand" href="/">Hout Bay Job Seekers</a>
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
                    <a href="/" class="nav__link">
                        <i class="material-icons">home</i>
                        Home
                    </a>
                    <a class="nav__link" href="/about">
                        <i class="material-icons">info</i>
                        About
                    </a>
                    <a class="nav__link " href="#contact">
                        <i class="material-icons">contact_page</i>
                        Contact
                    </a>
                
                    <a class="nav__link" href="/Admin">
                        <i class="material-icons">admin_panel_settings</i>
                    Admin
                    </a>
                </div>
                <div class="nav__overlay"  id="nav__overlay"></div>
            </nav>
        </div>

    </div>

        <!-- Content body -->
        <div  id="content">
            @yield('body')
        </div>

      

        <!-- Footer -->
        <div style="width: 100%; bottom:0px; position:relative" >    
           @include('components.footer')
        </div>
        <style>
            body {
                background-color: #f9f9f9;
                width: 100vw;
            }
            #content {
                margin-top: 0px;
                margin-bottom: 100px;
            }
        </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1936634b09.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/applicant.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    </body>
</html>
