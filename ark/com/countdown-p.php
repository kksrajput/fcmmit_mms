<?php

session_start();

require_once("config.php");

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

    <script>
            // Set the date we're counting down to

            function call(d,val,st){

            //console.log(d);
            //console.log(val);
            //console.log(st);
            var countDownDate = new Date(d).getTime();
            var start =new Date(st).getTime();

            //console.log(start);

            var result;

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();
                
                // Find the distance between now an the count down date
                
                
               
               

                if(start>now)
                {

                   var distance = start - now;

                    // Time calculations for days, hours, minutes and seconds
                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


                  // Output the result in an element with id="demo"
                  var result=days + "d " + hours + "h "
                  + minutes + "m " + seconds + "s ";

                  //console.log(result);

                   document.getElementById(val).innerHTML = "Countdown : " + days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
                }
                else if(countDownDate>=now)
                {

                   
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                     
                    // Output the result in an element with id="demo"
                    var result=days + "d " + hours + "h "
                    + minutes + "m " + seconds + "s ";

                  //console.log(result);
                    document.getElementById(val).innerHTML = " Running.... : "+ days + "d " + hours + "h "
                   + minutes + "m " + seconds + "s ";

                   document.getElementById("show").style.display="block";




                }
                
                // If the count down is over, write some text 
                else if (now>countDownDate) {
                    clearInterval(x);

                    document.getElementById(val).innerHTML = "Status : Finished";
                }


                
            }, 1000);

              return x;
            }


</script>

  
  
</head>

<body onload="set()">
    <!--<script type="text/javascript">var hour=<?php //print json_encode(date("H"));?>; call(hour); </script>-->



   
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
                <h2>Practice Problem</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="home-p.php">Portal</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Practice Problem</li>
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
        <div class="col-lg-12 mb-30 white-bg" id="3">
          <div class="section-title pb-50">
            
            <h2 style="text-align: center;">Contest Countdown</h2>
          </div>

          <?php

        require_once("connection.php");
        date_default_timezone_set("Asia/Dhaka");

        $nam = $_GET['name'];

        $q3="SELECT * FROM rapl_oj_contest where cname='$nam' ORDER BY date_on DESC LIMIT 0,1";
            $sq3=mysqli_query($con,$q3);

                $q4="SELECT TIME_FORMAT(end_at,'%H') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";
               $q5="SELECT TIME_FORMAT(end_at,'%i') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";
                $q6="SELECT TIME_FORMAT(end_at,'%s') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";

              $sq4=mysqli_query($con,$q4);
              $sq5=mysqli_query($con,$q5);
              $sq6=mysqli_query($con,$q6);
              
              $i=0;


              
           
          while($row=mysqli_fetch_array($sq3))
            {
              $d=date("Y-m-d");
              $t=date("H:i:s");
              $m=$row['start_at'];
              $nv=$row['start_at'];


              $i++;
              $demo="demo"+"$i";
              $nr=mysqli_fetch_array($sq4);
              $nm=mysqli_fetch_array($sq5);
              $ns=mysqli_fetch_array($sq6);
              
              $shr=$nr['end_at'];
              $shm=$nm['end_at'];
              $shs=$ns['end_at'];
              $cur=date('H');
              $curm=date('i');
              $curs=date('s');

              $h=$shr-$cur;
              $mt=$shm-$curm;
              $scnd=$shs-$curs;

              if($scnd<0)
              {
                 $scnd=$scnd+60;
                 $mt=$mt-1;
              }

              if($mt<0)
              {
                $mt=$mt+60;
                $h=$h-1;
              }

              if($h<0)
              {
                $h=$h+24;
              }
              
              $en=$row['end_at'];

              $seconds = strtotime($t) - strtotime($m);
              $ss= strtotime($en) - strtotime($t);
              $min=intval($seconds/60);
              $sec=intval($seconds%60);
              $hr=intval($min/60);
              $m=intval($min%60);

           ?>
              
            <script type="text/javascript">
            var end=<?php print json_encode($en);?>; 
            var val=<?php print json_encode($i);?>; 
            var nv=<?php print json_encode($nv);?>; 

            //console.log("Start" +nv);

            call(end,val,nv);


           </script>
              
            <?php
             echo("<br><br><h2 style=\"text-align:center\" id=$demo></h2> <br><br>");
             echo ("<div id=\"show\" style=\"display:none\" class=\"mb-50\"><center><a class=\"main-btn\" href=\"contestproblem-p.php?name=$row[cname]\">Enter Now</a></center></div>");
             
              
          

             
              /*echo(" <a href=\"save.php?name=$row[table_name]\">$row[table_name]</a><br><br>");
                if($row['date_on']==$d && $seconds>=0 && $ss>=0 )
                {
                     echo("<div class=\"xmm\">Contest Name: <a href=\"contestproblem.php?name=$row[cname]\">$row[cname]</a><br><br>Contest Date: $row[date_on] <br><br>Start Time: $row[start_at]<br><br>End Time: $row[end_at] <br><br> Status: <b>Running</b> <br><br>Time Remaining:  $h hour $mt miniute $scnd second <br><br></div>");
                 }
                 else if($d>$row['date_on'] || ($d==$row['date_on'] && $t>$en))
                 {
                    echo("<div class=\"xmm\">Contest Name: <a href=\"contestproblem.php?name=$row[cname]\">$row[cname]</a><br><br>Contest Date:  $row[date_on] <br><br>Start Time: $row[start_at]<br><br>End Time: $row[end_at] <br><br>Status: <b>Finished</b><br><br></div>");
                 }
                 else
                 {
                    echo("<div class=\"xmm\">Contest Name: $row[cname]<br><br>Contest Date:  $row[date_on] <br><br>Start Time: $row[start_at]<br><br>End Time: $row[end_at] <br><br>Countdown : <div id=\"demo\"></div><br><br></div>");
                 }
            }


        */
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
