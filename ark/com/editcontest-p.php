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


if(isset($_GET['name']))
{
      
   $coname=$_GET['name'];

}





?>

<?php


 require_once("connection.php");

 $fowner="SELECT  owner from rapl_oj_contest where cname='$coname'";
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
 else
 {
    header("Location:contest-p.php");
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
                <h2>Edit Contest</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="home-p.php">Portal</a></li>
                    <li class="breadcrumb-item"><a href="contest-p.php">Contests</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Contest</li>
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

        <div class="col-lg-6">
            <div class="contact-from" style="box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0)">
                <div class="section-title pb-20">
                    <h5><?php  echo" $username"; ?></h5>
                    <h2>Edit Contest</h2>                                
                </div>

                <?php

                    require_once("connection.php");

                    $fetch="SELECT * from rapl_oj_contest where cname='$coname'";
                    $sfetch=mysqli_query($con,$fetch);
                    $erow=mysqli_fetch_array($sfetch);
                    $name=$erow['cname'];
                    $id=$erow['id'];
                    $start=$erow['start_at'];
                    $end=$erow['end_at'];
                    $date=$erow['date_on'];



                    ?>

                <div class="form-group">
                    <form action="contest-p.php" name="f3" method="POST">
                        
                        <input type="hidden" name="uci" class="form-control" value="<?php echo "$id"; ?>"><br>

                        <h5>Current contest name : <?php echo "$name"; ?></h5>
                        <label for="ta">Enter Your Contest New Name </label>
                        <input type="text" name="ucn" class="form-control" value="<?php echo "$name"; ?>"><br>

                        <h5>Current contest Date : <?php echo "$date"; ?></h5>
                        <label for="ta">Enter Contest New Date  </label>
                        <input type="datetime-local" name="ucd" class="form-control" value="<?php echo "$date"; ?>"><br>
                        

                        <!-- <div class="input-group date form_datetime2 col-md-5" data-date="2017-06-15T05:25:07Z" data-date-format=" yyyy-mm-dd " data-link-field="dtp_input1">
                            <input type='text' name="cd" class="form-control" readonly class="form_datetime2" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-remove"></span>
                            </span>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </span>
                        </div><br> -->

                        <h5>Current contest Start Time : <?php echo "$start"; ?></h5>
                        <label for="ta">Enter Contest Start Time</label>
                        <input type="datetime-local" name="uct" class="form-control" value="<?php echo "$start"; ?>"><br>
                        
                        <!--<input type="text" name="ct" class="form-control"><br><br>-->
                        <!-- <div class="input-group date form_datetime col-md-5" data-date="2017-06-15T05:25:07Z" data-date-format=" yyyy-mm-dd hh:ii" data-link-field="dtp_input1">
                            <input type='text' name="ct" class="form-control" readonly class="form_datetime" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-remove"></span>
                            </span>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </span>
                        </div><br> -->

                        <h5>Current contest End Time : <?php echo "$end"; ?></h5>
                        <label for="ta">Enter Contest End Time</label>
                        <input type="datetime-local" name="uce" class="form-control"  value="<?php echo "$end"; ?>"><br>
                        <!--<input type="text" name="ce" class="form-control"><br><br>-->
                        <!-- <div class="input-group date form_datetime1 col-md-5" data-date="2017-06-15T05:25:07Z" data-date-format=" yyyy-mm-dd hh:ii " data-link-field="dtp_input1">
                            <input type='text' name="ce" class="form-control" readonly class="form_datetime1" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-remove"></span>
                            </span>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </span>
                        </div><br><br> -->

                        <input type="submit" name="update" class="btn btn-success" value="Update Contest">
                        <input type="submit" name="delete" class="btn btn-danger" value="Delete">
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
