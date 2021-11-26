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
    <link rel="stylesheet" href="resources/customCss/payment_processing.css">
    <script src="resources/customjs/drift.js"></script>

</head>
<body>
    <div class="mother_container">
           <!-- including top nav -->
           <?php require __DIR__.'/resources/topnav/topnav.php' ?> 
           <div class="oval">
                <span >Payment Processing for Merchants?</span>
           </div>
          <span class="far fa-envelope fa-4x p-4 circle"></span>

          <!-- SECTION CONTAINER -->
          <div class="section2_container">
              <div class="payment">
                  <p>PAYMENT PROCESSING FOR MERCHANTS</p>
                  <P>
                  Seamlessly integrate payment processing across locations and into your business software, IT infrastructure, and technology stack. Customize a payment solution to meet enterprise needs with open APIs and a full set of integration with deep data management and analytics.

                	<ul class="pl-5">
                        <li><b>Enterprise Merchant Account</b></li>
                        <li><b>Online payments and integrations</b></li>
                        <li><b>Virtual terminals</b></li>
                        <li><b>Mobile payments</b></li>
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