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

if($st=="Teacher" || $st=="Problem Setter" || $st=="Developer")
{
   $access=1;
}
else
{
    header("Location:home-p.php");
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
                <h2>Create Practice Problem</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="home-p.php">Portal</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="profile-p.php?user=<?php echo("$username"); ?>">Profile</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Practice Problems</li>
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

        <div class="col-lg-10">
            <div class="contact-from" style="box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0)">
                <div class="section-title pb-20">
                    <h5><?php  echo" $username"; ?></h5>
                    <h2>Create New Practice Problem</h2>                                
                </div>

                <div class="form-group">
                <form action="archive-p.php" name="f2" method="POST">
                    <label for="ta">Enter Your Problem Name</label>
                    <input type="text" name="pname" class="form-control"><br><br>
                    <label for="in">Enter Problem Description</label>
                    <textarea name="description" class="form-control" rows="15" cols="80"></textarea><br><br>
                    <label for="ta">Enter Problem Author</label>
                    <input type="text" name="c2" class="form-control"><br><br>
                    <label for="ta">Enter Time Limit</label>
                    <input type="text" name="tll" title="Only float is allowed (Ex:3.00)" placeholder="1.00" class="form-control"><br><br>
                    <b>Enter Test Cases</b><br>
                    <textarea class="form-control" name="case" rows="10" cols="80"></textarea><br><br>
                    <b>Enter Output Of Test Cases</b><br>
                    <textarea class="form-control" name="result" rows="10" cols="80"></textarea><br><br>
                    <input type="submit" class="main-btn" value="Create Problem">
                </form>               

                        
            </div> <!--  contact from -->
        </div>


      </div> <!-- row -->
    </div> 
  </section>

  <!--====== NEWS PART ENDS ======-->


    

    

   
    <!--====== FOOTER PART START ======-->
    
    <?php require_once("footer.php"); ?>
    
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
