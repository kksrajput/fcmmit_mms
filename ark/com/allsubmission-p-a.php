<?php

session_start();

require_once("config.php");

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
    <?php require_once("header.php"); ?> 
    <!--====== HEADER PART ENDS ======-->
   

<!--====== PAGE BANNER PART START ======-->

  <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(../../images/compiler/code-banner.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-banner-cont">
            <h2>All Submissions</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                <li class="breadcrumb-item "><a href="home-p.php">Portal</a></li>
                <li class="breadcrumb-item active" aria-current="page">Submissions</li>
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
      
      <div class="row justify-content-center ">
        <div class="col-lg-12 mb-30 white-bg pb-50" id="3">

            <div class="section-title pb-50">
              <!-- <h5>Beta Version</h5> -->
              <h2 style="text-align:center;">All Submission</h2>
            </div>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>ID (Show Code)</th>
                     <th>Username</th>
                     <th>Problem Name</th>
                     <th>Verdict</th>
                     <th>CPU TIME</th>
                  </tr>
                </thead>

                <tbody>

                  
            


            <?php


              error_reporting(0);
              if(isset($_POST['id']))
              {
                $cid=$_POST['id'];
                $uo=$_POST['result'];
                $pname=$_POST['pb'];
                $nid=$_POST['mid'];
                $result=$_POST['vd'];
                $cpu=$_POST['il'];
                
              }

              $ch=1;
              //echo "$result";
              if(!isset($_POST['id']) && !isset($_GET['name']))
              {
                 $ch=0;
                 error_reporting(0);
                 $per_page=30;

                if(isset($_GET['page']))
                {
                  $page=$_GET['page'];
                }
                else
                {
                  $page=1;
                }

                $start=($page-1)*$per_page;




                 $show="SELECT * FROM submissions ORDER BY sid DESC limit $start,$per_page";

                 
                 $sts=mysqli_query($con,$show);



              while($row=mysqli_fetch_array($sts))
              {

                if($row['verdict']=="Accepted")
                {
                   echo "<tr><td><a href=\"showcode-p.php?id=$row[sid]&nm=$row[sname]\">$row[sid]</a></td><td><a href=\"profile-p.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"description-p.php?name=$row[pbname]\">$row[pbname]</a></td><td><div class=\"btn btn-success btn-xs\">$row[verdict]</div></td><td>$row[time]</td></tr>";
                }
                else if($row['verdict']=="Time Limit Exceed")
                {
                   echo "<tr><td><a href=\"showcode-p.php?id=$row[sid]&nm=$row[sname]\">$row[sid]</a></td><td><a href=\"profile-p.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"description-p.php?name=$row[pbname]\">$row[pbname]</a></td><td><div class=\"btn btn-primary btn-xs\">$row[verdict]</div></td><td>$row[time]</td></tr>";
                }
                else if($row['verdict']=="Runtime Error")
                {
                   echo "<tr><td><a href=\"showcode-p.php?id=$row[sid]&nm=$row[sname]\">$row[sid]</a></td><td><a href=\"profile-p.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"description-p.php?name=$row[pbname]\">$row[pbname]</a></td><td><div class=\"btn btn-warning btn-xs\">$row[verdict]</div></td><td>$row[time]</td></tr>";
                }
                else
                {
                   echo "<tr><td><a href=\"showcode-p.php?id=$row[sid]&nm=$row[sname]\">$row[sid]</a></td><td><a href=\"profile-p.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"description-p.php?name=$row[pbname]\">$row[pbname]</a></td><td><div class=\"btn btn-danger btn-xs\">$row[verdict]</div></td><td>$row[time]</td></tr>";
                }

              }

                echo "</tbody>
              </table>
              </div>";

                $psql="SELECT * FROM submissions ORDER BY sid DESC";
                $sn=mysqli_query($con,$psql);
                $total_rows=mysqli_num_rows($sn);
                $total_page=ceil($total_rows/$per_page);
                $c="active";

               // echo "<div class=\"contain con\"><ul class=\"pagination\"><li><a href=\"allsubmission-p.php?page=1\">First Page</a></li>";
                echo "<nav class=\"courses-pagination mt-50\">
                              <ul class=\"pagination justify-content-center\">
                                <li class=\"page-item\">
                                  <a href=\"allsubmission-p.php?page=1\ aria-label=\"Previous\">
                                    <i class=\"fa fa-angle-left\"></i>
                                  </a>
                                </li>";

                for ($i=1; $i <$total_page ; $i++) {
                    
                  if($page==$i)
                  {
                    $c="active";
                      }
                      else
                      {
                        $c="";
                      }
                  //echo "<li class=\"$c\"><a href=\"allsubmission-p.php?page=$i\">$i</a></li>";
                      echo "<li class=\"page-item\"><a class=\"$c\"  href=\"allsubmission-p.php?page=$i\">$i</a></li>";
                }


               // echo "<li><a href=\"allsubmission-p.php?page=$total_page\">Last Page</a></li></ul></div>";

                echo " <li class=\"page-item\">
                                  <a  href=\"allsubmission-p.php?page=$total_page\" aria-label=\"Next\">
                                    <i class=\"fa fa-angle-right\"></i>
                                  </a>
                                </li>
                            </ul
                            </nav>";

                

                             


              }

              if(isset($_GET['name']))
              {
                 $name=$_GET['name'];
                 $ch=0;
                 error_reporting(0);
                 $per_page=30;

                if(isset($_GET['page']))
                {
                  $page=$_GET['page'];
                }
                else
                {
                  $page=1;
                }

                $start=($page-1)*$per_page;




                 $show="SELECT * FROM submissions WHERE sname='$name' ORDER BY sid DESC limit $start,$per_page";

                 
                 $sts=mysqli_query($con,$show);



              while($row=mysqli_fetch_array($sts))
              {

                if($row['verdict']=="Accepted")
                {
                   echo "<tr><td><a href=\"showcode-p.php?id=$row[sid]&nm=$row[sname]\">$row[sid]</a></td><td><a href=\"profile-p.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"description-p.php?name=$row[pbname]\">$row[pbname]</a></td><td><div class=\"btn btn-success btn-xs\">$row[verdict]</div></td><td>$row[time]</td></tr>";
                }
                else if($row['verdict']=="Time Limit Exceed")
                {
                   echo "<tr><td><a href=\"showcode-p.php?id=$row[sid]&nm=$row[sname]\">$row[sid]</a></td><td><a href=\"profile-p.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"description-p.php?name=$row[pbname]\">$row[pbname]</a></td><td><div class=\"btn btn-primary btn-xs\">$row[verdict]</div></td><td>$row[time]</td></tr>";
                }
                else if($row['verdict']=="Runtime Error")
                {
                   echo "<tr><td><a href=\"showcode-p.php?id=$row[sid]&nm=$row[sname]\">$row[sid]</a></td><td><a href=\"profile-p.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"description-p.php?name=$row[pbname]\">$row[pbname]</a></td><td><div class=\"btn btn-warning btn-xs\">$row[verdict]</div></td><td>$row[time]</td></tr>";
                }
                else
                {
                   echo "<tr><td><a href=\"showcode-p.php?id=$row[sid]&nm=$row[sname]\">$row[sid]</a></td><td><a href=\"profile-p.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"description-p.php?name=$row[pbname]\">$row[pbname]</a></td><td><div class=\"btn btn-danger btn-xs\">$row[verdict]</div></td><td>$row[time]</td></tr>";
                }
              }

                echo "</tbody>
              </table>
              </div>";

                $psql="SELECT * FROM submissions WHERE sname='$name' ORDER BY sid DESC";
                $sn=mysqli_query($con,$psql);
                $total_rows=mysqli_num_rows($sn);
                $total_page=ceil($total_rows/$per_page);
                $c="active";

                //echo "<div class=\"contain con\"><ul class=\"pagination\"><li><a href=\"allsubmission-p.php?page=1&name=$name\">First Page</a></li>";
                echo "<nav class=\"courses-pagination mt-50\">
                              <ul class=\"pagination justify-content-center\">
                                <li class=\"page-item\">
                                  <a href=\"allsubmission-p.php?page=1&name=$name\" aria-label=\"Previous\">
                                    <i class=\"fa fa-angle-left\"></i>
                                  </a>
                                </li>";

                for ($i=1; $i <$total_page ; $i++) {
                    
                  if($page==$i)
                  {
                    $c="active";
                      }
                      else
                      {
                        $c="";
                      }
                  //echo "<li class=\"$c\"><a href=\"allsubmission-p.php?page=$i&name=$name\">$i</a></li>";
                      echo "<li class=\"page-item\"><a class=\"$c\" href=\"allsubmission-p.php?page=$i&name=$name\">$i</a></li>";
                }


               // echo "<li><a href=\"allsubmission-p.php?page=$total_page&name=$name\">Last Page</a></li></ul></div>";
                echo " <li class=\"page-item\">
                                  <a  href=\"allsubmission-p.php?page=$total_page&name=$name\" aria-label=\"Next\">
                                    <i class=\"fa fa-angle-right\"></i>
                                  </a>
                                </li>
                            </ul
                            </nav>";

                


              }

              

                            

                            

                            





              if(isset($_POST['id']))
              {

              //var_dump($uo);

              //$l=strlen($uo)-2;


              //$m=strlen($ao);



              //var_dump($ao);

                $cid=$_POST['id'];
                $uo=$_POST['result'];
                $pname=$_POST['pb'];
                $nid=$_POST['mid'];
                $result=$_POST['vd'];
                



              $query="SELECT output FROM archieve WHERE id='$cid'";
              $sq=mysqli_query($con,$query);
              $r3=mysqli_fetch_array($sq);

              $ao=$r3['output'];
              //var_dump($uo);
              //var_dump($ao);


                if($result!="lt")
                {
                 
                  if($result=="e")
                  {
                    $result="Compilation Error";
                  }
                  else if(strcmp($uo,$ao)==0)
                  {
                    //echo "Accepted";
                    $result="Accepted";
                  }
                  else if($result=="rte")
                  {
                    $result="Runtime Error";
                    
                  }
                  else
                  {
                   //echo "Wrong Answer";
                    $result="Wrong Answer";
                  }
                }
                else
                {
                   $result="Time Limit Exceed";
                }




                 $per_page=30;

                if(isset($_GET['page']))
                {
                  $page=$_GET['page'];
                }
                else
                {
                  $page=1;
                }

                $start=($page-1)*$per_page;







              $sql="INSERT INTO submissions VALUES('$nid','$username','$result','$pname','$cpu') ";
              $show="SELECT * FROM submissions ORDER BY sid DESC limit $start,$per_page";


              $stq=mysqli_query($con,$sql);
              $sts=mysqli_query($con,$show);



              while($row=mysqli_fetch_array($sts))
              {

                if($row['verdict']=="Accepted")
                {
                   echo "<tr><td><a href=\"showcode-p.php?id=$row[sid]&nm=$row[sname]\">$row[sid]</a></td><td><a href=\"profile-p.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"description-p.php?name=$row[pbname]\">$row[pbname]</a></td><td><div class=\"btn btn-success btn-xs\">$row[verdict]</div></td><td>$row[time]</td></tr>";
                }
                else if($row['verdict']=="Time Limit Exceed")
                {
                   echo "<tr><td><a href=\"showcode-p.php?id=$row[sid]&nm=$row[sname]\">$row[sid]</a></td><td><a href=\"profile-p.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"description-p.php?name=$row[pbname]\">$row[pbname]</a></td><td><div class=\"btn btn-primary btn-xs\">$row[verdict]</div></td><td>$row[time]</td></tr>";
                }
                else if($row['verdict']=="Runtime Error")
                {
                   echo "<tr><td><a href=\"showcode-p.php?id=$row[sid]&nm=$row[sname]\">$row[sid]</a></td><td><a href=\"profile-p.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"description-p.php?name=$row[pbname]\">$row[pbname]</a></td><td><div class=\"btn btn-warning btn-xs\">$row[verdict]</div></td><td>$row[time]</td></tr>";
                }
                else
                {
                   echo "<tr><td><a href=\"showcode-p.php?id=$row[sid]&nm=$row[sname]\">$row[sid]</a></td><td><a href=\"profile-p.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"description-p.php?name=$row[pbname]\">$row[pbname]</a></td><td><div class=\"btn btn-danger btn-xs\">$row[verdict]</div></td><td>$row[time]</td></tr>";
                }

              }

                 echo "</tbody>
              </table>
              </div>";

                $psql="SELECT * FROM submissions ORDER BY sid DESC";
                $sn=mysqli_query($con,$psql);
                $total_rows=mysqli_num_rows($sn);
                $total_page=ceil($total_rows/$per_page);
                $c="active";

                //echo "<div class=\"contain con\"><ul class=\"pagination\"><li><a href=\"allsubmission-p.php?page=1\">First Page</a></li>";
                echo "<nav class=\"courses-pagination mt-50\">
                              <ul class=\"pagination justify-content-center\">
                                <li class=\"page-item\">
                                  <a href=\"allsubmission-p.php?page=1\" aria-label=\"Previous\">
                                    <i class=\"fa fa-angle-left\"></i>
                                  </a>
                                </li>";

                for ($i=1; $i <$total_page ; $i++) {
                    
                  if($page==$i)
                  {
                    $c="active";
                      }
                      else
                      {
                        $c="";
                      }
                  //echo "<li class=\"$c\"><a href=\"allsubmission-p.php?page=$i\">$i</a></li>";
                      echo "<li class=\"page-item\"><a class=\"$c\" href=\"allsubmission-p.php?page=$i\">$i</a></li>";
                }


                //echo "<li><a href=\"allsubmission-p.php?page=$total_page\">Last Page</a></li></ul></div>";
                echo "<li class=\"page-item\">
                                  <a href=\"allsubmission-p.php?page=$total_page\" aria-label=\"Next\">
                                    <i class=\"fa fa-angle-right\"></i>
                                  </a>
                                </li>
                            </ul
                            </nav>";

              }
              ?>










          
            
            
         
        </div><!-- compiler container-->


        

        


      </div> <!-- row -->
    </div> 
  </section>

    
  <!--====== NEWS PART ENDS ======-->
    

   
    <?php require_once("footer.php"); ?> 
   
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
    
    
    
   <!--  <?php

//require_once("time.php");

?> -->
    
    
    
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
