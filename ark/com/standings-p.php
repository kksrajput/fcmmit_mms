<?php

session_start();

require_once("config.php");
require_once("connection.php");

$_SESSION['url'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION['un']))
{
  header("Location:plogin.php");
}
if(isset($_SESSION['un']))
{
  $username=$_SESSION['un'];
}

?>


<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>NCET MONSTER MINDS</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../../images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="../../css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="../../css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="../../css/nice-select.css"> 
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="../../css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="../../css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="../../css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="../../css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="../../css/responsive.css">
  
  
</head>

<body>



   
    <!--====== PRELOADER PART START ======-->
    <!--
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>-->
    
    <!--====== PRELOADER PART START ======-->
   
    <!--====== HEADER PART START ======-->    
     
    <?php
        require_once("header.php");
    ?>
    
    <!--====== HEADER PART ENDS ======-->
   

    <!--====== PAGE BANNER PART START ======-->

      <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(../../images/compiler/code-banner.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-banner-cont">
                <h2> Leader Board</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="home-p.php">Portal</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="contest-p.php">Contest</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Practice Problem</li>
                    <li class="breadcrumb-item active" aria-current="page">Standings</li>

                  </ol>
                </nav>
              </div>  <!-- page banner cont -->
            </div>
          </div> <!-- row -->
        </div> <!-- container -->
      </section>

    <!--====== PAGE BANNER PART ENDS ======-->

      <!--====== NEWS PART START ======-->

  <section id="news-part" class="pt-115 pb-110 gray-bg">
    <div class="container">

        <?php

            if(isset($_GET['id']))
            {
                $conid=$_GET['id'];
                $mycon="SELECT * from rapl_oj_contest WHERE id='$conid'";
                $sendcon=mysqli_query($con,$mycon);
                $rhis=mysqli_fetch_array($sendcon);


            }


            ?>
      
      <div class="row justify-content-center">
        <div class="col-lg-12 mb-30 white-bg" id="3">

          <div class="section-title pb-50">
              <!-- <h5>Beta Version</h5> -->
              <h2 style="text-align:center;">Standings / Leader Board</h2>
              <h3 style="text-align:center;"><?php echo "<a class=\"main-btn\" href=\"contestproblem-p.php?name=$rhis[cname]\">$rhis[cname]</a>"; ?></h3>
            </div>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <tr>
                     <th>Rank</th>
                     <th>Name</th>
                     <th>Total Solved</th>
                     <th>Total Points</th>
                     <th>Submission</th>
                    </tr>
                  </tr>
                </thead>

                <tbody>

                    <?php


if(isset($_GET['id']))
{
  $conid=$_GET['id'];
  

/*$sql="SELECT sname,SUM(status) AS Solved FROM ( SELECT * FROM submission WHERE cid='$conid' AND status='1'  GROUP BY  pbname,sname )T1 GROUP BY sname

UNION ALL

SELECT * FROM  (SELECT sname, SUM(status) As Solved  FROM submission WHERE cid='$conid' GROUP BY  sname)T2  HAVING Solved='0'
ORDER BY `Solved`  DESC ";*/

$sql="SELECT sname, SUM(status) As Solved, SUM(point) As Points FROM submission Where cid='$conid' GROUP BY sname ORDER BY Solved DESC , Points DESC";

$send=mysqli_query($con,$sql);
$i=0;
while($row=mysqli_fetch_array($send))
{
  $i++;
  echo "<tr><td>$i</td><td><a href=\"profile-p.php?user=$row[sname]\">$row[sname]</a></td><td>$row[Solved]</td><td>$row[Points]</td><td><a href=\"contestsubmission-p.php?id=$conid&show=$row[sname]\"><div class=\"btn btn-primary btn-xs\">Show</td></tr>";
}

  echo "</tbody>
</table>
</div><br><br><br><br><br>";

 

}
?>


        </div><!-- compiler container-->

      </div> <!-- row -->
    </div> 
  </section>
  


  
  <!--====== NEWS PART ENDS ======-->

  






    

    

   
    <!--====== FOOTER PART START ======-->
    
    <?php

require_once("footer.php");

?>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="../../js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="../../js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="../../js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="../../js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="../../js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="../../js/waypoints.min.js"></script>
    <script src="../../js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="../../js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="../../js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="../../js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="../../js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="../../js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="../../js/main.js"></script>
    

    <script src="../../js/map-script.js"></script>


 



</body>

</html>
