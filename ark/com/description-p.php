<?php

session_start();

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

if(!isset($_SESSION["un"]))
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
    
    <?php require_once("header.php"); ?> 
    
    <!--====== HEADER PART ENDS ======-->
   

    <!--====== PAGE BANNER PART START ======-->

      <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(../../images/compiler/code-banner.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-banner-cont">
                <h2>Problem Description</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                    <li class="breadcrumb-item "><a href="home-p.php">Portal</a></li>
                    <li class="breadcrumb-item "><a href="archive-p.php">Practice Problem</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Problem Descriptions</li>
                  </ol>
                </nav>
              </div>  <!-- page banner cont -->
            </div>
          </div> <!-- row -->
        </div> <!-- container -->
      </section>

    <!--====== PAGE BANNER PART ENDS ======-->
    <?php


      require_once("config.php");

      if($_GET['id'])
      {
        $problemid=$_GET['id'];
      }

      if(isset($_GET['name']))
      {
        $problem=$_GET['name'];
        $sql="SELECT * FROM archieve WHERE pbname='$problem'";
      }
      else
      {
        $sql="SELECT * FROM archieve WHERE id='$problemid'";
      }



      $sq=mysqli_query($con,$sql);

      $row=mysqli_fetch_array($sq);

    ?>



      <!--====== NEWS PART START ======-->

      <section id="news-part" class="pt-115 pb-110 gray-bg">
        <div class="container">
          
          <div class="row justify-content-center">
            <div class="col-lg-12 mb-30 white-bg pt-40 pb-40" id="3">
              <div class="section-title pb-50 "  >
                <h5>Problem Descriptions</h5>
                <h2 style="text-align:center;"><?php echo "$row[pbname]"; ?></h2>
              </div>

              <textarea class="form-control" rows="20" cols="50" readonly><?php echo "$row[pbdes]"; ?></textarea><br>
              <?php echo "<b>Problem Setter : <a style=\"pointer-events: none;\" href=\"profile-p.php?user=$row[pbauthor]\">$row[pbauthor]</a></b><br><br>"; ?>

              <a class="main-btn " style=" box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" href="submit-p.php?id=<?php echo("$row[id]"); ?>" >Submit Your Code</a><br>



              




            </div><!-- compiler container-->

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
