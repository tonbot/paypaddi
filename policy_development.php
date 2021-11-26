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
    <link rel="stylesheet" href="resources/customCss/policy_development.css">
    <script src="resources/customjs/drift.js"></script>

</head>
<body>
    <div class="mother_container">
           <!-- including top nav -->
           <?php require __DIR__.'/resources/topnav/topnav.php' ?> 
           <div class="oval">
                <span >Policy Development & Execution</span>
           </div>
          <span class="far fa-envelope fa-4x p-4 circle"></span>

          <!-- SECTION CONTAINER -->
          <div class="section2_container">
              <div class="payment">
                  <p>Policy Development & Execution</p>
                  <P>
                        <ul>
    
                          <li><b>Discovering growth & opportunity</b>: finding growth opportunities for our clients by tapping into the unmet needs.</li>
                           <li><b>Operating for growth</b>: creating the foundations of a successful plans that can scale</li>
                        </ul>

                  </P>
              </div>
              <div class="section4_container"><!-- section4 start  here -->
                <p><i class="fas fa-glasses"></i></p>
                <p>Learn more about Paypaddi, the Enterprise for Smarter Government.</p>
                <p><a href="about_us.php"><span class="shadow">LEARN MORE</span></a></p>
            </div><!-- section4 ends  here -->

          </div>
          <!-- SECTION CONTAINER ENDS HERE -->

      
        

                 
          
            <!--footer -->
           <div ><?php require __DIR__.'/resources/footer/footer.php' ?> </div> 
    </div>
</body>
</html>