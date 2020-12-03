$(".btn-searchBar").click(function(){
    $(".input").toggleClass("active").focus;
    $(this).toggleClass("animate");
    $(".input").val("");   
  });

   /*Actions to be perfomed after loading the file*/
   $(document).ready(function() {
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.modal').modal();
 });
 
 /*CHOOSE FILE BUTTON .....less important
 $('#choose-file').inputFileText({
    text: 'SELECT IMAGE'
});*/
