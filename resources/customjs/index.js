
 $(document).ready(function() 
 {
    $('#message').hide();
    $('#login').click(function()
          
      {
              
            
                let username = $('#username').val();
                let password = $('#password').val();
               

                if (  username==="" || username === null || password==="" || password === null  )
 
                    {     
                        $('#message').text("Please fill all fields");
                        $('#message').show();
                         
                    }
             else{

            var formData = {
     
                 username    :  username,
                 password    :  password,
               
                 };

            $.ajax //ajax call
                ({
                    url: "post/index_post.php",
                    type: "POST",
                    data: formData,
                    encode:true,
                    beforeSend: function() {
                        $('.progress-circle').show();
                        $('.fa-sign-in-alt').hide();
                     },
                     complete: function(){
                        $('.progress-circle').hide();
                        $('.fa-sign-in-alt').show();
                     },
                    success: function(data)
                        {
                            if (data === 'success') {
                                
                                      // console.log ((res));
                                    sessionStorage.setItem("user", username)                                    
                                      // let userType = 
                                      window.location.href="dashboard.php";
                              }
                                else if (data === 'failed'){
                                    $('#message').text(" Username/Email or Password not correct ");
                                    $('#message').show();
                                   // console.log ((data));
                                  
                                
                                    }
                        },
                    error: function(error)
                        { console.log(error); }   
                }); //end of ajax
             }//end of else
    }); //end of adduser click ebent
    
    $("#login").focusout(function(){
        $('#message').hide();
   });
        
  
});