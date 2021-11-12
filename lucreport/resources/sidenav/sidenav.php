<script>
    let user=sessionStorage.getItem('user');
      switch (user)
      {
         case null:
            location.href="index.php"
           break;
         case undefined:
            location.href="index.php"
            break;
      }
 </script>
<?php 
       #include database connnection
       include_once 'resources/sidenav/dbconnect.php';
      #initiallise database connection
?>



             
                  <link rel="stylesheet" href="resources/customCss/sidenav.css">   
                  <script src="resources/sidenav/sidenav.js"></script>
  
              <div class="side-nav">
                    <div class="title">EKIRS e-Portal <span><i class="fas fa-briefcase"></i></span></div>
                    <ul>
                        <div id="titleMain">Main Report</div>
                        <a id="dashboard"  href="dashboard.php"><li><i class="fas fa-tachometer-alt mr-4 text-light"></i>Dashboard</li></a> 
                        <a id="enumeration" href="enumeration_report.php"><li><i class="fas fa-award  mr-4 text-light "></i>Enumeration Report</li></a>
                        <a id="enumeration" href="Bill_report"><li><i class="fas fa-folder-open mr-4 text-light"></i></i>Bill Report</li></a>  
                        <div id="titleMain">More Report</div>
                        <a href="generate_report.php"><li><i class="far fa-folder-open mr-4 text-light"></i>Generate Report</li></a>  

                    </ul>
                   
                    <div class="text-center logcon"><button class="btn btn-danger" id="logout">Logout</button></div>
                </div>
               
               