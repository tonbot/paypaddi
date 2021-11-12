
 $(document).ready(function() 
 {
    $('#add_user_message').hide();
    $('#addUser').click(function()
          
      {
              
                let fullname = $('#fullname').val();
                let username = $('#username').val();
                let email = $('#email').val();
                let phone = $('#phone').val();
                let userType = $('#userType').val();

                if ( fullname=="" || fullname == null || username=="" || username == null ||
                     phone=="" || phone == null || userType=="" || userType == null || email=="" || email == null
                   )
                    {     
                        $('#add_user_message').text("Please fill all fields");
                        $('#add_user_message').css({"color": "red", "background-color": "#e5e5e5", });
                        $('#add_user_message').show();
                         
                    }
             else{

            var formData = {
                 fullname :  fullname,
                 username :  username,
                 email    :  email,
                 phone    :  phone,
                 userType :  userType
                 };

            $.ajax //ajax call
                ({
                    url: "post/addUsers_post.php",
                    type: "POST",
                    data: formData,
                    encode:true,
                    success: function(data)
                        {
                            switch (data.trim()) {
                                case 'success':

                                    $('#add_user_message').text("New user Added ");
                                    $('#add_user_message').css({"color": "white", "background-color": "green", "font-size":"11px" });
                                    $('#add_user_message').show();
                                     
                                    break;
                                case 'true':
                                    $('#add_user_message').text("User with this Username/Phone already exist ");
                                    $('#add_user_message').css({"color": "red", "background-color": "#e5e5e5", "font-size": "11px" });
                                    $('#add_user_message').show();
                                    break;
                                default:
                                       alert(data);
                                    break;
                            }
                        },
                    error: function(error)
                        { alert("failed"); }   
                }); //end of ajax
             }//end of else
    }); //end of adduser click ebent
    
    //
    $("#addUser").focusout(function(){
           $('#add_user_message').hide();
      });
   

});