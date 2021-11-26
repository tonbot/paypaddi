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
    <link rel="stylesheet" href="resources/customCss/strategic_planning.css">
    <script src="resources/customjs/drift.js"></script>

</head>
<body>
    <div class="mother_container">
           <!-- including top nav -->
           <?php require __DIR__.'/resources/topnav/topnav.php' ?> 
           <div class="oval">
               <div class="bgg">
                <span >Strategic Planning & Project Management</span>
                </div>
            </div>
          <span class="far fa-envelope fa-4x p-4 circle"></span>

          <!-- SECTION CONTAINER -->
          <div class="section2_container">
              <div class="payment">
                  <p>Strategic Planning & Project Management</p>
                  <P>
                  <ul>
                      <li><b>Product Ideation:</b> Our collaborative ideation sprint process works with Jobs to be Done, research to rapidly generate and refine ideas while building the foundation of a new product or service that is created to solve clients’ needs.</li>
                     <li><b>Value proposition design:</b> we identify product benefits and validate not only an idea’s potential     to solve our client’s problem.</li>
                      <li><b>Implement change quickly:</b> we transform clients’ core operational model to become a truly digital business.</li>
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