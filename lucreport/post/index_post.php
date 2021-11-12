<?php

   $username=$_POST['username']; 
   $password=$_POST['password']; 

      if( isset($username) && $username !="" && isset($password) && $password !="" )
    
                    {      
                            //including database file with connection
                            include_once 'dbconn_post.php';

                            //making an object of class dbconn  
                            $connect=new dbconn_post;

                            // passing five parameters to add users function in dbconn_post
                            $response=$connect->get_user_post($username, $password);
                                
                             //getting response text
                             if ($response === 'success'){
                               
                               echo 'success';
                             }
                             else{

                               echo 'failed';
                             }
                    }

?>