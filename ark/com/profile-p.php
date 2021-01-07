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

if(isset($_GET['user']))
{
  $data=$_GET['user'];
  $us=$_GET['user'];

  //$query="UPDATE world SET value='$data'";
  //$run=mysqli_query($con,$query);

}

$admin=0;

$mysql="SELECT  status from user WHERE name='$username'";
$snd=mysqli_query($con,$mysql);
$arrow=mysqli_fetch_array($snd);

$st=$arrow['status'];

if($st=="Teacher" || $st=="Problem Setter" || $st=="Developer")
{
   $admin=1;
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

    <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/chart.min.js"></script>
  
  
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
                <h2>Profile</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <<li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="home-p.php">Portal</a></li>
                    <!-- <li class="breadcrumb-item active" aria-current="page"><a href="profile-p.php?user=<?php echo("$username"); ?>">Profile</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                  </ol>
                </nav>
              </div>  <!-- page banner cont -->
            </div>
          </div> <!-- row -->
        </div> <!-- container -->
      </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <?php

if(isset($_GET['user']))
{

   $username=$data;
   
}

$ac="SELECT COUNT(verdict) AS verdict FROM submissions where verdict='Accepted' and sname='$us'";
$wa="SELECT COUNT(verdict) AS verdict FROM submissions where verdict='Wrong Answer' and sname='$us'";
$tle="SELECT COUNT(verdict) AS verdict FROM submissions where verdict='Time Limit Exceed' and sname='$us'";

$s1=mysqli_query($con,$ac);
$s2=mysqli_query($con,$wa);
$s3=mysqli_query($con,$tle);

//$nac=mysqli_fetch_array($s1);
//$nwa=mysqli_fetch_array($s2);
//$ntle=mysqli_fetch_array($s3);

$d=array();
$result=array();



//$data[]=$nwa['verdict'];
//$data[]=$ntle['verdict'];




foreach($s1 as $nac)
{
  $d[]=$nac;
  //$i++;
}


foreach($s2 as $nwa)
{
  $d[]=$nwa;
  //$i++;
}

foreach($s3 as $ntle)
{
  $d[]=$ntle;
  //$i++;
}


json_encode($d);

$dd=$d;


//echo "$username";

?>

<script type="text/javascript">
  
var data= <?php print json_encode($d); ?>;

$(document).ready(function(){
              var verdicts=[];
               var ac=[];
               var wa=[];
               var tle=[];
               var obj;
               

              console.log(data);

              verdicts.push("User's Statistics");
              //verdicts.push("Wrong Answer");
              //verdicts.push("Time Limit Exceed");

              
              
              //console.log(data);
              

               
                  
              ac.push(data[0].verdict);
              wa.push(data[1].verdict);
              tle.push(data[2].verdict);

                   //console.log(data[i].verdict);

               
               
               

               

               var chartdata={
                    labels:verdicts,
                    datasets:[
                      {
                          label:'AC',
                          backgroundColor:'green',
                          borderColor:'green',
                          hoverBackgroundColor:'green',
                          data:ac,
                      },
                      
                      {
                          label:'WA',
                          backgroundColor:'red',
                          borderColor:'red',
                          hoverBackgroundColor:'red',
                          data:wa,
                      },
                      
                      {
                          label:'TLE',
                          backgroundColor:'blue',
                          borderColor:'blue',
                          hoverBackgroundColor:'blue',
                          data:tle,
                      }
                      




                    ]
               };

               var ctx=$('#mycanvas');
               var barGraph=new Chart(ctx,{

                     type:'bar',
                     responsive:true,
                     data:chartdata,
                     options: {
                        scales: {
                          yAxes: [{
                            ticks: {
                              beginAtZero: true,
                              
                              callback: function(value) {if (value % 1 === 0) {return value;}}
                            }
                          }]
                        }
                      }

               });
      
    
});

</script>

      <!--====== NEWS PART START ======-->

  <section id="news-part" class="pt-115 pb-110 gray-bg">
    
      <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-5 white-bg pt-30" id="3" style="margin: 10px;">
          <div class="section-title pb-50">
            <h5><?php  echo"$username's "; ?></h5>
            <h2>Profile Information</h2>

            <?php

                $sql="SELECT * FROM user WHERE name='$username'";
                $send=mysqli_query($con,$sql);
                $row=mysqli_fetch_array($send);


                /*$ts="SELECT DISTINCT sname, COUNT(verdict) AS verdict FROM ( SELECT * FROM submission where verdict='Accepted' and sname='$username' GROUP BY pbname, sname)T1 GROUP BY sname";

                $sts=mysqli_query($con,$ts);

                $solved=mysqli_fetch_array($sts);

                $tsolved=$solved['verdict'];

                if($tsolved=="")
                {
                   $tsolved=0;
                }
                */

            ?>
             <div class="table-responsive">

                <table class="table">
                    <tr class="success">
                        <td>Name : <?php echo("$row[name]") ?></td>
                    </tr>
                    <tr class="info">
                        <td>Email : <?php echo("$row[email]") ?></td>
                    </tr>
                    <tr class="danger">
                        <td>Role : <?php echo("$row[status]") ?></td>
                    </tr>

                    <?php

                     if($data==$_SESSION['un'])
                     {
                        echo "<tr class=\"warning\"><td><a href=\"edit-p.php?name=$username\">Edit Profile</a></td></tr>";
                     }

                    ?>
                    <tr class="info">
                        <td><?php echo("<a href=\"allsubmission-p.php?name=$username\">Your Submissions</a>") ?></td>
                    </tr>
                </table>
                <hr>
             </div>


          </div>
        </div><!-- compiler container-->

        <div class="col-lg-5  white-bg pt-30 " id="3" style="margin: 10px;">
          <div class="section-title pb-20">
            <h5><?php  echo"$username's "; ?></h5>
            <h2>Statistics</h2>
          </div><br>

          <div id="chart-container">
            <canvas id="mycanvas"> </canvas>
          </div>
        </div><!-- compiler container-->

        <div class="col-lg-5  white-bg pt-30" id="3" style="margin: 10px;">
          <div class="section-title pb-50">
            <h5><?php  echo"$username's "; ?></h5>
            <h2>Contest History</h2>

            <div class="table-responsive">
                <table class="table">
                <thead>
                <tr>
                 <th>ID</th>
                 <th>Contest Name</th>
                 <th>Date</th>
                 <th>User's Activity</th>
                </tr>
                </thead>
                <tbody>

                <?php
                
                require_once("connection.php");

                $his="SELECT DISTINCT cid FROM `submission` WHERE sname='$username'";
                $shis=mysqli_query($con,$his);
                while($chis=mysqli_fetch_array($shis))
                {
                    $conid=$chis['cid'];
                    $mycon="SELECT * from rapl_oj_contest WHERE id='$conid'";
                    $sendcon=mysqli_query($con,$mycon);
                    $rhis=mysqli_fetch_array($sendcon);

                    echo "<tr><td>$rhis[id]</td><td><a href=\"contestproblem-p.php?name=$rhis[cname]\">$rhis[cname]</a></td><td>$rhis[date_on]</td><td><a class=\"btn btn-primary btn-xs \" href=\"contestsubmission-p.php?id=$rhis[id]&show=$username\">Show</a></td></tr>";


                }
                  echo "</tbody>
                       </table>
                       </div><br><br>";



                ?>
          </div>
        </div><!-- compiler container-->

        
        <?php

         if($data==$_SESSION['un']  && $admin==1)
         {

            echo "<div class=\"col-lg-5  white-bg pt-30\" id=\"3\" style=\"margin: 10px;\">
                    <div class=\"section-title pb-50\">
                        <h5>$username's</h5>
                        <h2>Dashboard</h2>

                        <div class=\"table-responsive\">

                        <table class=\"table\">
                            <tr>
                                <td><a href=\"setproblem-p.php\">Create Practice Problem</a> </td>
                            </tr> 
                            <tr>
                                <td><a href=\"setcontest-p.php\">Create Contest</a></td>
                            </tr>
                            <tr>
                                <td><a href=\"setcontestproblem-p.php\">Create Contest Problem</a> </td>
                            </tr>
                            
                            <tr>
                                <td><a href=\"allsubmission-p.php?name=$username\">My Submission</a></td>
                            </tr>
                            <tr>
                                <td><a href=\"allsubmission-p.php\">All Submission</a></td>
                            </tr>
                            <tr>
                                <td><a href=\"announcement-p.php\">Announcement</a></td>
                            </tr>
                            <tr>
                                <td><a href=\"createadmin-p.php\">Create Admin</a></td>
                            </tr>                   
                        </table>
                        <hr>
                        </div>

                       

                    </div>
                  </div>";            



              
         }
       ?>



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
