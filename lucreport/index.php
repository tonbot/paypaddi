



<?php
    include_once('resources/include.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EKIRS LUC</title>
    <link rel="shortcut icon" href="image/ekirs.ico">
    <link rel="stylesheet" href="resources/customCss/index.css">
    <script src="resources/customjs/index.js"></script>
</head>
<body>
    <div class="motherContainer">
        <!--<div class="ekirs">WELCOME TO EKIRS <span class="luc" ><i>LUC</i></span> PORTAL</div>-->
        <div class="hasChildren">
                 <div class="text-center"><img  src="image/ekirs.png" width="80px" height="auto" alt=""> </div>
                 <div class="titleContainer">Executive Login</div>
                 <div class="frmContainer">
                    <form method="post">
                        <div id="message"></div>
                        <div><input class="form-control" type="text" name="" id="username"  placeholder="Enter Your Username"><i class="fas fa-user fa-1x shadow-sm"></i></div>
                        <div><input class="form-control" type="password" name="password" id="password"  placeholder="Enter Password"><i class="fas fa-key fa-1x  shadow-sm"></i></div>
                        <div class="text-center"><button type="button" id="login" >Login <i class="fas fa-sign-in-alt"></i><i class="progress-circle fa fa-circle-notch fa-spin" style="display:none"></i></button></div>
                    </form>
                </div>
                
        </div>
        
    </div>
</body>
</html>