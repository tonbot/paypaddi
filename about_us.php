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
    <link rel="stylesheet" href="resources/customCss/about_us.css">
    <script src="resources/customjs/drift.js"></script>

</head>
<body>
    <div class="mother_container">
           <!-- including top nav -->
           <?php require __DIR__.'/resources/topnav/topnav.php' ?> 

           <div class="oval">
                <p class="animate__animated animate__rubberBand animate__infinite animate animate__slower" > WHO WE ARE</p>
           </div>
          <span class="far fa-address-card fa-4x p-4 circle"></span>
          
            <div class="section2_container"><!-- section2 start here -->
                 <div class="row">
                     <div class="col-sm-2">
                             <div>
                                 <div id="title">
                                     <p>Contents</p>
                                 </div>
                                 <div class="link_nav">
                                     <p><a href="#about-us">About us</a></p>
                                     <p><a href="#mission">Our Mision</a></p>
                                     <p><a href="#vision">Our Vision</a></p>
                                     <p><a href="#our_office">Our Office</a></p>
                                     <p><a href="#our_contact">Our Contact</a></p>
                                     <p><a href="#team">Our Team</a></p>
                                 </div>
                             </div>
                     </div>
                     <div class="col-sm-8">
                            <div id="about-us">About Us</div>
                            <p class="content">
                            PayPaddi is the one-stop-shop e-payment solution for the tripartite (individuals, business firms and Government) of any economy. Our focus is to make revenue generation simpler and collection easier by adopting cutting-edge technology. This unique e-payment solution serves every revenue generating sectors across the tiers of Government.
                            </p>

                            <div id="mission">Our Mission</div>
                            <p  class="content">
                            PayPaddi is the one-stop-shop e-payment solution for the tripartite (individuals, business firms and Government) of any economy. Our focus is to make revenue generation simpler and collection easier by adopting cutting-edge technology. This unique e-payment solution serves every revenue generating sectors across the tiers of Government.
                            </p>

                            <div id="vision">Our Vision</div>
                            <p  class="content">
                            PayPaddi is the one-stop-shop e-payment solution for the tripartite (individuals, business firms and Government) of any economy. Our focus is to make revenue generation simpler and collection easier by adopting cutting-edge technology. This unique e-payment solution serves every revenue generating sectors across the tiers of Government.
                            </p>

                            <div id="our-office">Core values</div>
                            <p  class="content">
                                    <b>Integrity</b><br/>
                                    <b>Innovation</b><br/>
                                    <b>Commitment</b><br/>
                                    <b>Teamwork</b>
                            </p>

                            <div class="section4_container" id="our_contact"><!-- section4 start  here -->
                                <p><i class="fas fa-map-marker-alt "></i></p>
                                <p>2A Anthony Road, Anthony Village Lagos.</p>
                            </div><!-- section4 ends  here -->
                            
                            <p id="meet-our-team">MEET OUR TEAM</p>
                            <div class="section5_container shadow-lg" id="team"><!-- section4 start  here -->
                                <div class="row">
                                    <div class="col-sm-4  colcol">
                                        <p><img src="image/man1.jpg" alt="" class="ourimage shadow-lg"></p>
                                        <p>Tunde Ogundana</p>
                                        <p>CEO</p>
                                        
                                    </div>
                                    <div class="col-sm-4 colcol">
                                        <p><img src="image/man4.jpg " alt="" class="ourimage shadow-lg"></p>
                                        <p>Rebecca Juliet</p>
                                        <p>Tech Manager</p>
                                    </div>
                                    <div class="col-sm-4 colcol">
                                        <p><img src="image/man2.jpg" alt="" class="ourimage shadow-lg"></p>
                                        <p>Theophilus Ajiboye</p>
                                        <p>Senior Programmer</p>
                                    </div>
                                    
                                </div>
                            </div><!-- section4 ends  here -->


                     </div>
                     <div class="col-sm-2">
                             <div>
                                 <div id="title">
                                     <p id="our-contact">Our Contact</p>
                                 </div>
                                 <div class="link_nav">
                                     <p><a href="#about-us">support@paypaddi.ng</a></p> 
                                     <p><a href="#about-us">adooffice@paypaddi.ng</a></p> 
                                     <p><a href="#about-us">+234 806 251 1055</a></p> 
                                                       
                                 </div>

                                 <div>
                                     <P id="title" class="pt-5">For more enquires contact</P>
                                     <p class="link_nav"><a href="mailto:enquiries@paypaddi.ng">enquiries@paypaddi.ng</a></p>
                                 </div>
                             </div>
                     </div>
                 </div>
            </div><!-- section2 start here -->

            <!--footer -->
           <div ><?php require __DIR__.'/resources/footer/footer.php' ?> </div> 
    </div>
</body>
</html>