$(document).ready(function()
{   
       //logout function
    $('#logout').click(function()
    {
        sessionStorage.clear();
        window.location.href="index.php";      
    });
    
         
  

});