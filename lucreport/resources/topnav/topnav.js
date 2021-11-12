$(document).ready(function()
{   
    
    
        //hide toplogout container
        $(".user-icon").click(function(){
            $('.topLogout').toggle();
       });

       //logout onclick
        //hide toplogout container
        $(".logout").click(function(){
            sessionStorage.clear();
            window.location.href="index.php";   
       });










     //validate function
        function validate(data){
            if (data==null || data==""){
                return "empty"; 
            }
            else {
                let data1=data;
                    data1=data1.trim();
                    return data1;
            }
        }//end of validate


})