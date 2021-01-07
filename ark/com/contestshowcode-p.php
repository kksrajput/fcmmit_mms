<?php

session_start();

require_once("config.php");

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

if(!isset($_SESSION["un"]))
{
  header("Location:plogin.php");
}

if(isset($_SESSION['un']))
{
  $username=$_SESSION['un'];
}




$mysql="SELECT  status from user WHERE name='$username'";
$snd=mysqli_query($con,$mysql);
$arrow=mysqli_fetch_array($snd);

$st=$arrow['status'];
 

$access=0;


require_once("connection.php");


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
                <h2>Show Contest Code</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="home-p.php">Portal</a></li>
                    <li class="breadcrumb-item"><a href="contest-p.php">Contests</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contest problems</li>
                    <li class="breadcrumb-item active" aria-current="page">Contest Submission</li>
                    <li class="breadcrumb-item active" aria-current="page">Contest Show Code</li>
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
      
      <div class="row justify-content-center">
        <div class="col-lg-12 mb-30 white-bg pb-50" id="3">
          <div class="section-title pb-50">
            
            <h2 style="text-align:center;">Show Contest Code</h2>
          </div>

          <?php

                require_once("connection.php");

                if(isset($_GET['id']) && isset($_GET['nm']) && isset($_GET['cn']))
                {
                   $data=$_GET['nm'];
                   $get=$_GET['id'];

                   $ci=$_GET['cn'];

                 $fowner="SELECT  owner from rapl_oj_contest where id='$ci'";
                 $sendit=mysqli_query($con,$fowner);
                 $frow=mysqli_fetch_array($sendit);
                 $owner=$frow['owner'];

                 if($username==$owner)
                 {
                      $access=1;
                 }
                 else if($st=="Teacher" || $st=="Developer")
                 {   
                      $access=1;
                 }


                   if($access==1)
                   {


                         $show="SELECT * FROM code WHERE id='$get'";

                         $sq=mysqli_query($con,$show);

                         
                         echo "<h5>Submitted By : $data<br><br></h5>";

                          while($row=mysqli_fetch_array($sq))
                          {
                                echo("<h5>Submit Id: $row[id]</h5><br><br><textarea id='div' class=\"form-control\" rows=\"20\" cols=\"40\">$row[source_code]</textarea>");
                          }
                    }
                    else
                    {
                       header("Location:contest-p.php");
                    }

                }
                else
                {
                   header("Location:contest-p.php");
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
