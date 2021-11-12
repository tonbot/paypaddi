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
               <div>
                   <form action="">
                       <label for="details">Your name:</label>
                       <p><input type="text" placeholder="name"></p>
                       <label for="details">Your E-mail: </label>
                       <p><input type="text"></p>
                       <label for="details">Subject:</label>
                       <p><input type="text"></p>
                       <label for="details">Details:</label>
                       <p><textarea rows = "7" cols = "50" name = "description" >
                           please enter yur message here
                      </textarea></p>
                       <p><button class="shadow" type="button">Submit</button></p>
                   </form>
               </div>
           </div>

                 
          
            <!--footer -->
           <div ><?php require __DIR__.'/resources/footer/footer.php' ?> </div> 
    </div>
</body>
</html>