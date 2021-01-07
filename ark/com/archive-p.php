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
      
      <div class="row justify-content-center ">
        <div class="col-lg-12 mb-30 white-bg" id="3">

            <div class="section-title pb-50">
              <!-- <h5>Beta Version</h5> -->
              <h2 style="text-align:center;">All Problems</h2>
            </div>

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

                    require_once("config.php");

                    error_reporting(0);

                    if(isset($_POST['pname']))
                    {
                      $pn=$_POST['pname'];
                      $pd=$_POST['description'];
                      $author=$_POST['c2'];
                      $tc=$_POST['case'];
                      $ac=$_POST['result'];
                      $ptl=$_POST['tll'];
                    }

                    error_reporting(0);

                    if(isset($pn))
                    {


                    $sql="INSERT INTO archieve VALUES(NULL,'$pn','$pd','$author','$tc','$ac','','$ptl')";

                    $sq=mysqli_query($con,$sql);

                    /*if($sq)
                    {
                      $last_id=mysqli_insert_id($con);
                    }
                    */

                    $per_page=10;

                    if(isset($_GET['page']))
                    {
                      $page=$_GET['page'];
                    }
                    else
                    {
                      $page=1;
                    }

                    $start=($page-1)*$per_page;

                    $show="SELECT * FROM archieve limit $start,$per_page"; //start from 0 index
                    $send=mysqli_query($con,$show);





                    while($row=mysqli_fetch_array($send))
                    {

                        $problem_name=$row['pbname'];

                      $number="SELECT verdict from submissions WHERE pbname='$row[pbname]' and sname='$username' and verdict='Accepted'";
                      $snumber=mysqli_query($con,$number);
                      $tsol=mysqli_num_rows($snumber);

                      $acn="SELECT COUNT(verdict) AS verdict from submissions WHERE verdict='Accepted' AND pbname='$row[pbname]' GROUP BY pbname";
                      $sacn=mysqli_query($con,$acn);
                      $sol=mysqli_fetch_array($sacn);



                      $tsub="SELECT COUNT(verdict) as sub from submissions WHERE pbname='$row[pbname]' GROUP BY pbname";
                      $stsub=mysqli_query($con,$tsub);
                      $ntsub=mysqli_fetch_array($stsub);


                      if($tsol>0)
                      {
                         $ver="Solved";
                             echo "

                       
                      <tr><td>$row[id]</td><td><a href=\"description-p.php?id=$row[id]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-success btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";

                      }
                      else
                      {
                             $ver="Unsolved";
                             echo "

                       
                      <tr><td>$row[id]</td><td><a href=\"description-p.php?id=$row[id]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-danger btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";
                      }

                      


                      
                    }

                    echo "</tbody>
                    </table>
                    </div><br><br>";

                    $psql="SELECT * FROM archieve";
                    $sn=mysqli_query($con,$psql);
                    $total_rows=mysqli_num_rows($sn);
                    $total_page=ceil($total_rows/$per_page);

                        $c="active";

                      // echo "<div style=\"text-align:center\"><ul class=\"pagination\"><li><a href=\"p-archive.php?page=1\">First Page</a></li>";
                        echo "<nav class=\"courses-pagination mt-50\">
                              <ul class=\"pagination justify-content-center\">
                                <li class=\"page-item\">
                                  <a href=\"archive-p.php?page=1\" aria-label=\"Previous\">
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
                        // echo "<li class=\"$c\"><a href=\"p-archive.php?page=$i\">$i</a></li>";
                            echo "<li class=\"page-item\"><a class=\"$c\"href=\"archive-p.php?page=$i\">$i</a></li>";
                      }


                      //echo "<li><a href=\"p-archive.php?page=$total_page\">Last Page</a></li></ul></div>";
                      echo "<li class=\"page-item\">
                                  <a href=\"archive-p.php?page=$total_page\" aria-label=\"Next\">
                                    <i class=\"fa fa-angle-right\"></i>
                                  </a>
                                </li>
                            </ul
                            </nav>";

                    }

                    if(!isset($pn))
                    {
                        $per_page=10;

                      if(isset($_GET['page']))
                      {
                        $page=$_GET['page'];
                      }
                      else
                      {
                        $page=1;
                      }

                      $start=($page-1)*$per_page;

                      $show="SELECT * FROM archieve limit $start,$per_page";




                        $send=mysqli_query($con,$show);



                      while($row=mysqli_fetch_array($send))
                      {
                        $problem_name=$row['pbname'];

                        $number="SELECT verdict from submissions WHERE pbname='$row[pbname]' and sname='$username' and verdict='Accepted'";
                      $snumber=mysqli_query($con,$number);
                      $tsol=mysqli_num_rows($snumber);

                      $acn="SELECT COUNT(verdict) AS verdict from submissions WHERE verdict='Accepted' AND pbname='$row[pbname]' GROUP BY pbname";
                      $sacn=mysqli_query($con,$acn);
                      $sol=mysqli_fetch_array($sacn);


                      $tsub="SELECT COUNT(verdict) as sub from submissions WHERE pbname='$row[pbname]' GROUP BY pbname";
                      $stsub=mysqli_query($con,$tsub);
                      $ntsub=mysqli_fetch_array($stsub);

                      if($tsol>0)
                      {
                         $ver="Solved";
                             echo "

                       
                      <tr><td>$row[id]</td><td><a href=\"description-p.php?id=$row[id]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-success btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";

                      }
                      else
                      {
                             $ver="Unsolved";
                             echo "

                       
                      <tr><td>$row[id]</td><td><a href=\"description-p.php?id=$row[id]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-danger btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";
                      }


                      }
                      echo "</tbody>
                    </table>
                    </div><br><br>";


                      $psql="SELECT * FROM archieve";
                      $sn=mysqli_query($con,$psql);
                      $total_rows=mysqli_num_rows($sn);
                      $total_page=ceil($total_rows/$per_page);
                      $c="active";

                      
                      echo "
                            <nav class=\"courses-pagination mt-50\">
                              <ul class=\"pagination justify-content-center\">
                                <li class=\"page-item\">
                                  <a href=\"archive-p.php?page=1\" aria-label=\"Previous\">
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
                        echo "<li class=\"page-item\"><a class=\"$c\"href=\"archive-p.php?page=$i\">$i</a></li>";



                      }

                      // echo "<li><a href=\"p-archive.php?page=$total_page\">Last Page</a></li></ul></div>";
                      echo "
                            <li class=\"page-item\">
                                  <a href=\"archive-p.php?page=$total_page\" aria-label=\"Next\">
                                    <i class=\"fa fa-angle-right\"></i>
                                  </a>
                                </li>
                            </ul
                            </nav>";

                      
                    }



                    ?>

            </div>




   <!--   <a href="allsubmission.php"><div class="btn btn-primary">Submissions</div></a><br><br> -->





          
            
            
         
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
