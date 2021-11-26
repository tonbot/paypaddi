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
    <link rel="stylesheet" href="resources/customCss/revenue_generation.css">
    <script src="resources/customjs/drift.js"></script>

</head>
<body>
    <div class="mother_container">
           <!-- including top nav -->
           <?php require __DIR__.'/resources/topnav/topnav.php' ?> 
           <div class="oval">
                <span >Revenue Generation & Simplification for Governments</span>
           </div>
          <span class="far fa-envelope fa-4x p-4 circle"></span>

          <!-- SECTION CONTAINER -->
          <div class="section2_container">
              <div class="payment">
                  <p>Revenue Generation & Simplification for Governments</p>
                  <P>
                        our consultancy models are to help the 3 tiers of Government to reach the optimal level of revenue generation and increasing their tax base through technological innovation. 
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