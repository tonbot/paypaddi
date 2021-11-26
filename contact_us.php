<?php

    include_once('resources/include.php'); 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYPADDI</title>
    <link rel="stylesheet" href="resources/customCss/contact_us.css">
    <script src="resources/customjs/drift.js"></script>
    <script src="resources/customjs/contact.js"></script>

</head>
<body>
    <div class="mother_container">
           <!-- including top nav -->
           <?php require __DIR__.'/resources/topnav/topnav.php' ?> 
           <div class="oval">
                <span > HAVE SOME QUESTIONS?</span>
           </div>
          <span class="far fa-envelope fa-4x p-4 circle"></span>

           <!--form container -->
           <div class="form_container">
               <div class="status" id="status">  Sorry! Your message can not be placed </div>
               <div>
                   <form>
                       <label for="details">Your name*</label>
                       <p><input type="text"  id="SenderName" required></p>
                       <label for="details">Your E-mail* </label>
                       <p><input type="text" id="SenderEmail" required></p>
                       <label for="details">Subject*</label>
                       <p><input type="text" id="SenderSubject" required></p>
                       <label for="details">Details*</label>
                       <p><textarea rows = "7"  name = "description"  id="SenderMessage" required>
                       
                      </textarea></p>
                       <p><button class="shadow" type="button" id="submit">Submit</button><i class="fas fa-spinner fa-spin fa-2x pl-3"></i></p>
                   </form>
               </div>
               <div id="note">
                   <p>Once you click ‘submit’, the system will send you an email confirmation that your message has been received. If you do not receive an email confirmation within one hour, please email us directly at support@paypaddi.ng</p>
               </div>
           </div>

                 
          
            <!--footer -->
           <div ><?php require __DIR__.'/resources/footer/footer.php' ?> </div> 
    </div>
</body>
</html>