<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css""> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">  
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:600&display=swap'>  
               
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Houtbay Job Applicants</title>
</head>
<!--<body class="#757575 grey darken-1"> -->
<body class="white">
<div id="header">
<nav class="nav-wapper">
            <!--Job type selectin bar -->
    <div class="">  

        <ul > 
           <li><a href="" class="sidenav-trigger" data-target="mobile-links"> <i class="material-icons">menu</i>  </a>  </li>   

           <div class="hide-on-med-and-down"> 
                <li> <div id="home"> <a href="/"><i class="material-icons">home</i></a> </div> </li>  
                <li > <a href="/browse/General">General Workers</a>  </li>
                <li> <a href="/browse/Gardener">Gardeners</a>  </li>
                <li> <a href="/browse/Driver">Drivers</a>  </li>
                <li> <a href="/browse/House">House Keepers</a> </li>
                <li> <a href="#" class="dropdown-trigger" data-target="dropdown" id="arrow-down"> <i class="fa fa-angle-down" aria-hidden="true"></i></i> </a> </li>
            </div>
            <li class="search">
                <form action="search" method="get" >
                @csrf                  
                <input type="text" placeholder="search" name="search" class="white">
                <button class="fa fa-search btn" type="submit"></button>
                 </form> 
            </li>
        </ul>
        
            <!--Search bar and admn -->
      <div id="Admn">         
          <a href="login" class="white-text" class="right">Admn</a>
      </div>               
    </div>
</nav>


<ul class="sidenav" id="mobile-links">
    <li > <a href="/browse/General">General Workers</a>  </li>
    <li> <a href="/browse/Gardener">Gardeners</a>  </li>
    <li> <a href="/browse/Driver">Drivers</a>  </li>
    <li> <a href="/browse/House">House Keepers</a> </li>
    <li> <a href="/browse/Painter">Painter</a></a> </li>
    <li > <a href="/browse/Brick">Brick Layers</a>  </li>
    <li> <a href="/browse/Plumber">Plumber</a>  </li>
    <li> <a href="/browse/Shop">Shop assistance</a>  </li>
    <li> <a href="/browse/Baby">Baby sitter</a></a> </li>
</ul>

<ul id="dropdown" class="dropdown-content ">
    <li class="dropdown-list"> <a href="/browse/Painter">Painter</a></a> </li>
    <li class="dropdown-list"> <a href="/browse/Brick">Brick Layers</a>  </li>
    <li class="dropdown-list"> <a href="/browse/Plumber">Plumber</a>  </li>
    <li class="dropdown-list"> <a href="/browse/Shop">Shop assistance</a>  </li>
    <li class="dropdown-list"> <a href="/browse/Baby">Baby sitter</a></a> </li>
</ul>


  </div>
  <div id="bodyPlusPagination">
    <div id="content">
        @yield('body')
    </div>
<!--FOOTER-->
</div>
<div>
<nav class="nav-wrapper" id="footer">
  <div class="left">
      <ul>
          <li > <a href="/">HOME</a>  </li>
          <li> <a href="about">ABOUT</a>  </li>  
          <li> @2020</li>                
      </ul>
  </div>
 
  
  <div class="right" id="footer-icons">
      <h6>Contact the developer</h6>
      <ul class="socialIcons"> 
          <li class="gmail"><a href="mailto:nasimba4john@outlook.com" target="_blank" rel="noopener noreferrer"><i class="fa fa-fw fa-envelope"></i>Email</a></li>
          <li class="whatsapp"><a  href="https://wa.me/+27780387591" target="_blank" rel="noopener noreferrer"><i class="fa fa-fw fa-whatsapp"></i>WhatsApp</a></li>              
          <li class="facebook"><a href="https://www.facebook.com/john.nasimba.7" target="_blank" rel="noopener noreferrer"><i class="fa fa-fw fa-facebook"></i>Facebook</a></li>          
          <li class="instagram"><a href="https:///www.instagram.com/johnnasimba/?hl=en" target="_blank" rel="noopener noreferrer"><i class="fa fa-fw fa-instagram"></i>Instagram</a></li>
      </ul>
  </div>
</nav>
@include('sweetalert::alert')
</div>
<style>
    #content {
        margin-bottom: 100px;
    }
  #bodyPlusPagination nav {
        background-color: white ;
        margin: auto;
        width: 200px;
    }
    #bodyPlusPagination .pagination li{
    color: black;
    display: inline-block;
    justify-content: center;
    align-content: center;
    font-size: 2.0rem;
    margin: auto;
    width: 40px;
    padding: 10px;
    line-height: 30px;
}
#bodyPlusPagination .pagination .active {
    background-color:  white;
    padding: 10px;
    text-shadow: 2px 2px #0277bd;

}
.search {
  position: relative;
  color: #aaa;
  font-size: 16px;
}

.search input {
  min-width: 199px;
  max-width: 200px;
  height: 32px;

  background: #fcfcfc;
  border: 1px solid #aaa;
  border-radius: 5px;
  box-shadow: 0 0 3px #ccc, 0 10px 15px #ebebeb inset;
}

.search input { text-indent: 32px;}
.search .fa-search { 
  position: absolute !important;
  top: 0px t;
  left: 150px !important;
}
nav .search {
    display: inline-flex;
    margin-top: 10px;
    margin-left: 50px;
}
@media only screen and (max-width: 800px) {
          
          nav .search {
              display: inline-flex;
              margin-left: 10px;              
              margin-top: 5px;          
          }
          #Admn {
              margin-right: 10px;
          }
      }


/*HEADER STYLES*/

.wrapper {
    position: absolute !important;
    transform: translate(-50%, -50% )!important;
    margin-left: 94% !important;
  }
  
  .search-box {
    position: relative !important;
  
  }
  
  .input {
    position: absolute !important;
    top: 5px !important;
    right: 50px !important;
    box-sizing: border-box !important;
    width: 0px !important;
    height: 55px !important;
    padding: 0 20px !important;
    outline: none !important;
    font-size: 18px !important;
    border-radius: 50px !important;
    color: white !important;
    border: 1px solid white !important;
    transition: all 0.8s ease !important;
  }
  
  ::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    color: #757575 grey;
  }
  ::-moz-placeholder {
    /* Firefox 19+ */
    color: #757575 grey;
  }
  :-ms-input-placeholder {
    /* IE 10+ */
    color: #757575 grey;
  }
  :-moz-placeholder {
    /* Firefox 18- */
    color: #757575 grey;
  }
  
  nav .btn {
    position: absolute !important;
    width: 50px !important;
    height: 50px;
    background: #0093E3 !important;
    border-radius: 50% !important;
    right: 45px !important;
    top: 0px !important;
    cursor: pointer !important;
    text-align: center !important;
    line-height: 50px !important;
    font-size: 24px !important;
    color: white !important;
    transition: all 0.8s ease !important;
  }
  nav .btn:hover {
    background: #0277bd !important;
  }
  #Admn {
      margin-left: 90%;
  }  
  nav #arrow-down {
      margin-top: 15px;
      font-size: 30px;
      
  }
  
  .nav-wapper {
      background: #0093E3 !important;
      color: white !important;
  }
  nav #home {
      width: 50% !important;
  }
  ul .dropdown-list a{
    color: white !important;
  }
  ul .dropdown-list{
    background: #0093E3 !important;
    
  }
  ul .dropdown-list:hover {
  background: #0277bd !important;
  }

#content {
  margin-top: 20px;
  margin-bottom: 200px;
}




  /*STYLES FOR THE FOOTER*/
  #footer{
    position: fixed !important;
    bottom: 0 !important;
    width: 100% !important;
    height: 4rem !important;
    background: #0093E3 !important;
    text-align: center !important;
    border: 3px solid #0093E3 !important;    
  }
  #footer-icons {
    display: inline-flex;
  }
  ul.socialIcons {
    padding: 0;
    text-align: center;
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

  #searh {
    display: inline-block;
    margin-left: 90%;
    margin-top: 10px;
    
}
</style>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="/script/script.js"></script>
</body>
</html>

