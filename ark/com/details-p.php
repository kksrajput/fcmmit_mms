<?php

ob_start();
session_start();
require_once("config.php");

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

if(!isset($_SESSION['un']))
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

if(isset($_GET['id']))
{
    $pid=$_GET['id'];
}


?>

<?php

 require_once("connection.php");

if(isset($_GET['id']))
{

 $getcon="SELECT cname from element WHERE pbid='$pid'";
 $sendcon=mysqli_query($con,$getcon);
 $namerow=mysqli_fetch_array($sendcon);
 $coname=$namerow['cname'];

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
     $access=0;
 }
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
                     document.getElementById("demo").innerHTML = "Running : "+ days + "d " + hours + "h "
                     + minutes + "m " + seconds + "s ";
              
                    // document.getElementById("dem").innerHTML = " Running.... : "+ days + "d " + hours + "h "
                     //+ minutes + "m " + seconds + "s ";
              
                     document.getElementById("show").style.display="block";
              
              
              
              
                  }
                  
                  // If the count down is over, write some text 
                  else if (now>countDownDate) {
                      clearInterval(x);
              
                      document.getElementById("demo").innerHTML = "Status : Finished";
              
                      document.getElementById("fin").innerHTML = "Contest has Finished";
              
              
                  }
              
              
                  
              }, 1000);
              
                return x;
              }
              

         </script>
  
  
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
            <h2>Details</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="home-p.php">Portal</a></li>
                <li class="breadcrumb-item"><a href="contest-p.php">Contests</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contest problems</li>
                <li class="breadcrumb-item active" aria-current="page">Problem Details</li>
              </ol>
            </nav>
          </div>  <!-- page banner cont -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <!--====== PAGE BANNER PART ENDS ======-->

  




  <!--====== NEWS PART START ======-->

  <section id="news-part" class="pt-115 gray-bg">
    <div class="container">
      
      <div class="row">
        <div class="col-lg-8 mb-30 white-bg " id="3">

            <div class="section-title pb-50">
            <!-- <h5>Problem Details</h5> -->
            <h2 style="text-align:center;">Problem Details</h2>
          </div>

          <?php

                require_once("connection.php");

                date_default_timezone_set("Asia/Dhaka");

                if(isset($_GET['id']))
                {
                   $des=$_GET['id'];


                $q3="SELECT * FROM element WHERE pbid='$des'";

                $sq3=mysqli_query($con,$q3);

                $r1=mysqli_fetch_array($sq3);

                  $cnt=$r1['cname'];


                echo("Problem Name: $r1[pbname]<br><br>
                      Problem ID: $r1[pbid]<br><br>
                      Time Limit: $r1[tlimit] Seconds<br><br>
                      Problem Details<br><br>
                      <textarea class=\"form-control\" rows=\"30\" cols=\"95\" readonly>$r1[pbdes]</textarea><br><br>Problem Setter: $r1[pbauthor]<br><br>");

                  $conid=$r1['id'];

                   $q3="SELECT * FROM rapl_oj_contest WHERE id='$conid'";
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
                      $current=date("Y-m-d H:i:s ");

                      $m=$row['start_at'];
                      $nv=$row['start_at'];


                      $i++;
                      $demo="demo".$i;
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

     $diff=strtotime($nv)-strtotime($current);
     $current=strtotime($current);
     
    // echo "$current<br>";

     //echo "$diff";

     if($diff>0 && $access==0)
     {
         
         header("Location:countdown-p.php?name=$cnt");

     }

     echo("<div id=\"show\" style=\"display:none;\"><a class=\"btn btn-success\" href=\"contestsubmit-p.php?id=$r1[pbid]\">Submit Your Code</a></div>");
     
     echo "<div id=\"fin\"></div><br><br>";
     
      

     

     


      

     
      


     
      /*echo(" <a href=\"save.php?name=$row[table_name]\">$row[table_name]</a><br><br>");
        if($row['date_on']==$d && $seconds>=0 && $ss>=0 )
        {
             echo "<a class=\"btn btn-success\" href=\"contestsubmit.php?id=$r1[pbid]\">Submit Your Code</a>";
         }
         else if($d>$row['date_on'] || ($d==$row['date_on'] && $t>$en))
         {
            echo "Contest Has Finished<br><br>";
         }
         else
         {
            echo " Contest Has Not Started Yet<br><br> ";
            header("Location:contest.php");
         }*/

    }



}

if(isset($_GET['name']) && isset($_GET['cod']))
{
  $des=$_GET['name'];
  $cod=$_GET['cod'];

  $q3="SELECT * FROM element WHERE pbname='$des' AND id='$cod'";

$sq3=mysqli_query($con,$q3);

$r1=mysqli_fetch_array($sq3);


echo("Problem Name: $r1[pbname]<br><br> Problem ID: $r1[pbid]<br><br>Time Limit: $r1[tlimit] Seconds<br><br> Problem Details<br><br><textarea class=\"form-control\" rows=\"30\" cols=\"95\" readonly>$r1[pbdes]</textarea><br><br>Problem Setter: $r1[pbauthor]<br><br>


  ");

 

  $conid=$r1['id'];


   $q3="SELECT * FROM rapl_oj_contest WHERE id='$conid'";
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
      $current=date("Y-m-d H:i:s ");

      $m=$row['start_at'];
      $nv=$row['start_at'];


      $i++;
      $demo="demo".$i;
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

     $diff=strtotime($nv)-strtotime($current);
     $current=strtotime($current);
     
    // echo "$current<br>";

     //echo "$diff";

     if($diff>0)
     {
         
         header("Location:countdown.php?name=$des");

     }

     echo("<div id=\"show\" style=\"display:none;\"><a class=\"btn btn-success\" href=\"contestsubmit.php?id=$r1[pbid]\">Submit Your Code</a></div>");
     
     echo "<div id=\"fin\"></div><br><br>";
     
      


     
      /*echo(" <a href=\"save.php?name=$row[table_name]\">$row[table_name]</a><br><br>");
        if($row['date_on']==$d && $seconds>=0 && $ss>=0 )
        {
             echo "<a class=\"btn btn-success\" href=\"contestsubmit.php?id=$r1[pbid]\">Submit Your Code</a>";
         }
         else if($d>$row['date_on'] || ($d==$row['date_on'] && $t>$en))
         {
            echo "Contest Has Finished<br><br>";
         }
         else
         {
            echo " Contest Has Not Started Yet<br><br> ";
            header("Location:contest.php");
         }*/
    }

     
     

}

?>

          
            
         
        </div><!-- compiler container-->

        <div class="col-lg-4"> <!-- upcomming events -->
           <div class="saidbar">
               <div class="row">




                    <div class="col-lg-12 col-md-6">
                      <div class="" >
                        <div class="events-coundwon bg_cover" data-overlay="8" style="background-image: url(../../911.png); margin-top: 0px; ">
                            <!-- <div data-countdown="2020/07/11"></div> -->

                             <div class="section-title">
                                <h3 style="color: #ffc600">Dashboard</h3>
                                
                            </div>                          
                        </div>
                      </div>
                    </div>

                    <?php

if(isset($_GET['id']))
{
   $des=$_GET['id'];

$q3="SELECT * FROM element WHERE pbid='$des'";

$sq3=mysqli_query($con,$q3);

$r1=mysqli_fetch_array($sq3);


$cnt=$r1['cname'];

  $conid=$r1['id'];

  
 $q3="SELECT * FROM rapl_oj_contest WHERE id='$conid'";
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
      $current=date("Y-m-d H:i:s ");

      $m=$row['start_at'];
      $nv=$row['start_at'];


      $i++;
      $demo="demo".$i;
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

     $diff=strtotime($nv)-strtotime($current);
     $current=strtotime($current);
     
    // echo "$current<br>";

     //echo "$diff";

     if($diff>0 && $access==0)
     {
         
         header("Location:countdown.php?name=$cnt");

     }

     
    if($access==1) 
    {
       echo "
        <div class=\"col-lg-12 col-md-6\">
          <div class=\"saidbar-post mt-30\">
              <div class=\"cont\">
              <center><a class=\"main-btn\" href=\"editcontestproblem-p.php?id=$pid\">Edit</a></center>
                  
                  
              </div>
          </div>
      </div>

       " ;
    }
    
    //echo("<center><h2 id=\"demo\" class=\"btn btn-primary btn-lg\"></h2></center><br><br>"); 
     
    echo("

      <div class=\"col-lg-12 col-md-6\">
          <div class=\"saidbar-post mt-30\">
              <div class=\"cont\">
              <center><h2 id=\"demo\" class=\"btn btn-primary btn-lg\"></h2></center><br><br>
                  <h6>Contest Name: <a href=\"contestproblem-p.php?name=$row[cname]\">$row[cname]</a></h6><br>
                  <h6>Contest Date: $row[date_on] </h6><br>
                  <h6>Start Time: $row[start_at]</h6><br>
                  <h6>End Time: $row[end_at] </h6><br>
                  
              </div>
          </div>
      </div>
");

     
     
     

     
      /*echo(" <a href=\"save.php?name=$row[table_name]\">$row[table_name]</a><br><br>");
        if($row['date_on']==$d && $seconds>=0 && $ss>=0 )
        {
             echo("<div class=\"xmm\">Contest Name: <a href=\"contestproblem-p.php?name=$row[cname]\">$row[cname]</a><br><br>Contest Date: $row[date_on] <br><br>Start Time: $row[start_at]<br><br>End Time: $row[end_at] <br><br> Status: <b>Running</b> <br><br>Time Remaining:  $h hour $mt miniute $scnd second <br><br></div>");
         }
         else if($d>$row['date_on'] || ($d==$row['date_on'] && $t>$en))
         {
            echo("<div class=\"xmm\">Contest Name: <a href=\"contestproblem-p.php?name=$row[cname]\">$row[cname]</a><br><br>Contest Date:  $row[date_on] <br><br>Start Time: $row[start_at]<br><br>End Time: $row[end_at] <br><br>Status: <b>Finished</b><br><br></div>");
         }
         else
         {
            echo("<div class=\"xmm\">Contest Name: $row[cname]<br><br>Contest Date:  $row[date_on] <br><br>Start Time: $row[start_at]<br><br>End Time: $row[end_at] <br><br>Status: <b>Not Started Yet</b><br><br></div>");
         }*/
    }


}
else
{
   if(isset($_GET['name']) && isset($_GET['cod']))
   {

      $des=$_GET['name'];
      $cod=$_GET['cod'];


      $q10="SELECT * FROM element WHERE pbname='$des' AND id='$cod'";

      $sq10=mysqli_query($con,$q10);
 

      $r8=mysqli_fetch_array($sq10);

      $conid=$r1['id'];


     $q12="SELECT * FROM rapl_oj_contest WHERE id='$conid'";
      $sq12=mysqli_query($con,$q12);
      $oc=mysqli_fetch_array($sq12);




      //echo("<center><h2 id=\"demo\" class=\"btn btn-primary btn-lg\"></h2></center><br><br>"); 
     
     echo("

          <div class=\"col-lg-12 col-md-6\">
              <div class=\"saidbar-post mt-30\">
                  <div class=\"cont\">
                  <center><h2 id=\"demo\" class=\"btn btn-primary btn-lg\"></h2></center><br><br>

                      <h6>Contest Name: <a href=\"contestproblem-p.php?name=$r8[cname]\">$oc[cname]</a></h6><br>
                      <h6>Contest1Date: $oc[date_on] </h6><br>
                      <h6>Start Time: $oc[start_at]</h6><br>
                      <h6>End Time: $oc[end_at] </h6><br>
                      
                  </div>
              </div>
          </div>

     ");
  }

}


?>

                    
                           
                      

                    
               </div> <!-- row -->
           </div> <!-- saidbar -->
        </div>

        


      </div> <!-- row -->
    </div> 
  </section>
  
  
  
  <!--====== NEWS PART ENDS ======-->


    

   
     <?php

require_once("time.php");
require_once("footer.php");

?> 
   
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
