<?php

ob_start();
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

 if(isset($_GET['name']))
 {

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

             console.log(distance);

              // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);


            // Output the result in an element with id="demo"
            var result=days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

            //console.log(result);

             document.getElementById(val).innerHTML = "Contest Countdown : "+ days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
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
              document.getElementById(val).innerHTML = "Running : "+ days + "d " + hours + "h "
             + minutes + "m " + seconds + "s ";
              document.getElementById("demo").innerHTML = "Running : "+ days + "d " + hours + "h "
             + minutes + "m " + seconds + "s ";
          }
          
          // If the count down is over, write some text 
          else if (now>countDownDate) {
              clearInterval(x);
              document.getElementById(val).innerHTML = "Status : Finished";
              document.getElementById("demo").innerHTML = "Finished";
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
            <h2>Contest Problems</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="home-p.php">Portal</a></li>
                <li class="breadcrumb-item"><a href="contest-p.php">Contests</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contest problems</li>
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

      <div class="alert alert-info">
        <a href="#fn2">
          <button id="an" class="btn btn-success">
            <script type="text/javascript">        
                 $("#an").click(function() {
                    $('html,body').animate({
                 scrollTop: $("#fn").offset().top},
                 'slow');
               });
             </script>
        </button>
        </a>
      </div>
      
      <div class="row">
        <div class="col-lg-8 mb-30 white-bg" id="3">

            <div class="section-title pb-50">
            <!-- <h5>Beta Version</h5> -->
            <h2>Contest Problems</h2>
          </div>

          <h2><div id="tc"></div></h2>

          <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Problem Name</th>
                    <th>Status</th>
                    <th>Accepted/Submission</th>
                    <th>Problem Setter</th>
                  </tr>
                </thead>

                <tbody>
                      <?php
                      require_once("connection.php");

                      date_default_timezone_set("Asia/Dhaka");


                      if(isset($_POST['up']))
                      {
                         

                          $contest=$_POST['cnn'];
                          $cid=$_POST['ccid'];
                          $pbid=$_POST['ci'];
                          $pn=$_POST['pb'];
                          $des=$_POST['c1'];
                          $au=$_POST['c2'];
                          $tc=$_POST['c3'];
                          $out=$_POST['c4'];
                          $ptl=$_POST['tll'];


                          $update="UPDATE element SET pbname='$pn',pbdes='$des',pbauthor='$au',tc='$tc',output='$out',tlimit=$ptl WHERE pbid=$pbid";
                          $supdate=mysqli_query($con,$update);

                          if($supdate)
                          {
                             echo "<script>alert(\"Updated Successfully\");</script>";

                          }
                          else
                          {
                             echo "<script>alert(\"Failed\");</script>";

                          }
                          
                          $q3="SELECT * FROM element WHERE cname='$contest'";

                          $sq3=mysqli_query($con,$q3);


                      while($row=mysqli_fetch_array($sq3))
                      {
                         //echo("<a href=\"details-p.php?id=$row[pbid]\"><div class=\"pb\">$row[pbname]</div></a><br>");
                        $problem_name=$row['pbname'];

                        $number="SELECT verdict from submission WHERE pbname='$row[pbname]' and sname='$username' and verdict='Accepted' and cid='$cid'";
                        $snumber=mysqli_query($con,$number);
                        $tsol=mysqli_num_rows($snumber);

                        $acn="SELECT COUNT(verdict) AS verdict from submission WHERE verdict='Accepted' AND pbname='$row[pbname]' AND cid='$cid' GROUP BY pbname";
                        $sacn=mysqli_query($con,$acn);
                        $sol=mysqli_fetch_array($sacn);


                        $tsub="SELECT COUNT(verdict) as sub from submission WHERE pbname='$row[pbname]' AND cid='$cid' GROUP BY pbname";
                        $stsub=mysqli_query($con,$tsub);
                        $ntsub=mysqli_fetch_array($stsub);


                        if($tsol>0)
                        {
                           $ver="Solved";
                               echo "

                         
                        <tr><td>$row[pbid]</td><td><a href=\"details-p.php?id=$row[pbid]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-success btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";

                        }
                        else
                        {
                               $ver="Unsolved";
                               echo "

                         
                        <tr><td>$row[pbid]</td><td><a href=\"details-p.php?id=$row[pbid]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-danger btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";
                        }
                      }

                      echo "</tbody>
                      </table>
                      </div><br><br>";


                      }


                      if(isset($_POST['del']))
                      {
                          $contest=$_POST['cnn'];
                          $cid=$_POST['ccid'];
                          $pbid=$_POST['ci'];
                          $pn=$_POST['pb'];
                          $des=$_POST['c1'];
                          $au=$_POST['c2'];
                          $tc=$_POST['c3'];
                          $out=$_POST['c4'];
                          $ptl=$_POST['tll'];


                          $delete="DELETE FROM element WHERE pbid=$pbid";
                          $sdelete=mysqli_query($con,$delete);

                          if($sdelete)
                          {
                             echo "<script>alert(\"Deleted Successfully\");</script>";
                          }

                           $q3="SELECT * FROM element WHERE cname='$contest'";

                          $sq3=mysqli_query($con,$q3);


                      while($row=mysqli_fetch_array($sq3))
                      {
                         //echo("<a href=\"details-p.php?id=$row[pbid]\"><div class=\"pb\">$row[pbname]</div></a><br>");
                        $problem_name=$row['pbname'];

                        $number="SELECT verdict from submission WHERE pbname='$row[pbname]' and sname='$username' and verdict='Accepted' and cid='$cid'";
                        $snumber=mysqli_query($con,$number);
                        $tsol=mysqli_num_rows($snumber);

                        $acn="SELECT COUNT(verdict) AS verdict from submission WHERE verdict='Accepted' AND pbname='$row[pbname]' AND cid='$cid' GROUP BY pbname";
                        $sacn=mysqli_query($con,$acn);
                        $sol=mysqli_fetch_array($sacn);


                        $tsub="SELECT COUNT(verdict) as sub from submission WHERE pbname='$row[pbname]' AND cid='$cid' GROUP BY pbname";
                        $stsub=mysqli_query($con,$tsub);
                        $ntsub=mysqli_fetch_array($stsub);


                        if($tsol>0)
                        {
                           $ver="Solved";
                               echo "

                         
                        <tr><td>$row[pbid]</td><td><a href=\"details-p.php?id=$row[pbid]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-success btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";

                        }
                        else
                        {
                               $ver="Unsolved";
                               echo "

                         
                        <tr><td>$row[pbid]</td><td><a href=\"details-p.php?id=$row[pbid]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-danger btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";
                        }
                      }

                      echo "</tbody>
                      </table>
                      </div><br><br>";


                      }




                      if(isset($_POST['cn']))
                      {

                      $contest=$_POST['cn'];
                      $cid=$_POST['ci'];
                      $pn=$_POST['pb'];
                      $des=$_POST['c1'];
                      $au=$_POST['c2'];
                      $tc=$_POST['c3'];
                      $out=$_POST['c4'];
                      $ptl=$_POST['tll'];

                         $fowner="SELECT  owner from rapl_oj_contest where id='$cid'";
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



                      if($access==1)
                      {

                      $q2="INSERT into element  VALUES('$cid','$contest','$pn','$des','$au','$tc','$out','',NULL,'$ptl')";
                      $q3="SELECT * FROM element WHERE cname='$contest'";

                      $sq2=mysqli_query($con,$q2);
                      $sq3=mysqli_query($con,$q3);


                      while($row=mysqli_fetch_array($sq3))
                      {
                         //echo("<a href=\"details-p.php?id=$row[pbid]\"><div class=\"pb\">$row[pbname]</div></a><br>");
                        $problem_name=$row['pbname'];

                        $number="SELECT verdict from submission WHERE pbname='$row[pbname]' and sname='$username' and verdict='Accepted' and cid='$cid'";
                        $snumber=mysqli_query($con,$number);
                        $tsol=mysqli_num_rows($snumber);

                        $acn="SELECT COUNT(verdict) AS verdict from submission WHERE verdict='Accepted' AND pbname='$row[pbname]' AND cid='$cid' GROUP BY pbname";
                        $sacn=mysqli_query($con,$acn);
                        $sol=mysqli_fetch_array($sacn);


                        $tsub="SELECT COUNT(verdict) as sub from submission WHERE pbname='$row[pbname]' AND cid='$cid' GROUP BY pbname";
                        $stsub=mysqli_query($con,$tsub);
                        $ntsub=mysqli_fetch_array($stsub);


                        if($tsol>0)
                        {
                           $ver="Solved";
                               echo "

                         
                        <tr><td>$row[pbid]</td><td><a href=\"details-p.php?id=$row[pbid]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-success btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";

                        }
                        else
                        {
                               $ver="Unsolved";
                               echo "

                         
                        <tr><td>$row[pbid]</td><td><a href=\"details-p.php?id=$row[pbid]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-danger btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";
                        }
                      }

                      echo "</tbody>
                      </table>
                      </div><br><br>";

                      }

                      else
                      {
                          header("Location:setcontestproblem-p.php?fail=1");
                      }



                      }
                      if(isset($_GET['name']))
                      {
                        $n=$_GET['name'];
                        $q3="SELECT * FROM element WHERE cname='$n'";
                        $fcontest="SELECT id from rapl_oj_contest where cname='$n'";
                        $sf=mysqli_query($con,$fcontest);
                        $myrow=mysqli_fetch_array($sf);

                        $r=mysqli_query($con,$q3);

                         while($row=mysqli_fetch_array($r))
                         {
                            //echo("<a href=\"details-p.php?id=$row[pbid]\"><div class=\"pb\">$row[pbname]</div></a><br>");
                            $problem_name=$row['pbname'];
                            $cid=$myrow['id'];


                            $number="SELECT verdict from submission WHERE pbname='$row[pbname]' and sname='$username' and verdict='Accepted' AND cid='$cid'";
                            $snumber=mysqli_query($con,$number);
                            $tsol=mysqli_num_rows($snumber);

                            $acn="SELECT COUNT(verdict) AS verdict from submission WHERE verdict='Accepted' AND pbname='$row[pbname]' AND cid='$cid' GROUP BY pbname";
                            $sacn=mysqli_query($con,$acn);
                            $sol=mysqli_fetch_array($sacn);


                            $tsub="SELECT COUNT(verdict) as sub from submission WHERE pbname='$row[pbname]' AND cid='$cid' GROUP BY pbname";
                            $stsub=mysqli_query($con,$tsub);
                            $ntsub=mysqli_fetch_array($stsub);


                            if($tsol>0)
                            {
                               $ver="Solved";
                                   echo "

                             
                            <tr><td>$row[pbid]</td><td><a href=\"details-p.php?id=$row[pbid]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-success btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";

                            }
                            else
                            {
                                   $ver="Unsolved";
                                   echo "

                             
                            <tr><td>$row[pbid]</td><td><a href=\"details-p.php?id=$row[pbid]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-danger btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";
                            }
                            }

                            echo "</tbody>
                      </table>
                      </div><br><br>";

                      echo "<h3 id=\"fn2\" style=\"text-align:center;\">Announcement</h3><br>";
                         $query="SELECT des from announcement where cname='$n'";
                         $send=mysqli_query($con,$query);
                         $nrow=mysqli_num_rows($send);
                         
                         if($nrow>0)
                         {


                           while($arow=mysqli_fetch_array($send))
                           {
                               echo "<div id=\"fn\" class=\"alert alert-info\">$arow[des]</div><br>";
                           }

                               echo "<script>
                          document.getElementById(\"an\").innerHTML = \"$nrow New Announcement</a>\";
                          </script>";

                         }
                         else
                         {
                            echo "<div id=\"fn\" class=\"alert alert-info\">No Announcement Yet</div><br>";
                            echo "<script>
                          document.getElementById(\"an\").innerHTML = \"No New Announcement\";
                          </script>";

                         } 

                      }





                      /*require_once("connection.php");

                      $q6="SELECT table_name FROM information_schema.tables where table_schema='problem' ";

                      $res=mysqli_query($con,$q6);

                      while($row=mysqli_fetch_array($res))
                      {
                        error_reporting(0);
                        echo '<form action="test.php" method="POST"> <input type="hidden" name="pb" value="' . htmlspecialchars($row[table_name]) . '" /><input type="submit" value=" ' . htmlspecialchars($row[table_name]) .'  "/></form>'."<br>";
                      }
                      */

                       
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
                                <!-- <?php //echo("<center><h2 id=\"demo\" class=\"main-btn\"></h2></center><br>");?> -->
                                
                            </div>                          
                        </div>
                      </div>
                    </div>
<?php


if(isset($_GET['name']))
{
  $n=$_GET['name'];
  $q3="SELECT id FROM rapl_oj_contest WHERE cname='$n'";

    $r=mysqli_query($con,$q3);

   $r1=mysqli_fetch_array($r);

   $conid=$r1['id'];

   $sql="SELECT sname, SUM(status) As Solved, SUM(point) As Points FROM submission Where cid='$conid' GROUP BY sname ORDER BY Solved DESC , Points DESC";

   $send=mysqli_query($con,$sql);
   $i=0;
   while($bow=mysqli_fetch_array($send))
   {
       $i++;

       if($bow['sname']==$username)
       {
          echo "<div class=\"col-lg-12 col-md-6\">
                    <div class=\"saidbar-post mt-30\">
                        <div class=\"cont\">
                          <a href=\"standings-p.php?id=$r1[id]\"><span class=\"pad btn btn-success\"><i class=\"fa fa-trophy\"></i> $username 's Rank =$i</span></center></a>
                        </div>
                    </div>
                </div>";
          break;
       }
   }

  
  
   echo("
    <div class=\"col-lg-12 col-md-6\">
                    <div class=\"saidbar-post mt-30\">
                        <div class=\"cont\">
                          <a href=\"contestsubmission-p.php?id=$r1[id]\"><span class=\"pad btn btn-primary\">Contest Submissions</span></a>&nbsp;&nbsp;&nbsp;&nbsp;
                          <a href=\"standings-p.php?id=$r1[id]\"><div class=\"pad btn btn-primary\"> Standings </div></a>
                        </div>
                    </div>
                </div>

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


      
   
  while($timerow=mysqli_fetch_array($sq3))
    {
      $d=date("Y-m-d");
      $t=date("H:i:s");
      $current=date("Y-m-d H:i:s ");

      $m=$timerow['start_at'];
      $nv=$timerow['start_at'];


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
      
      $en=$timerow['end_at'];

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
         
         header("Location:countdown-p.php?name=$n");

     }

     echo("
           <div class=\"col-lg-12 col-md-6 mb-30\">
               <div class=\"saidbar-post mt-30\">
                   <div class=\"cont\">
                       <h6 style=\"pointer-events: none;\">Contest Name: <a href=\"contestproblem-p.php?name=$row[cname]\">$timerow[cname]</a></h6><br>
                       <h6>Contest Date: $timerow[date_on] </h6><br>
                       <h6>Start Time: $timerow[start_at]</h6><br>
                       <h6>End Time: $timerow[end_at] </h6><br>
                       <div id=$demo></div>
                   </div>
               </div>
           </div>");

   
     

     
      
       
 
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
