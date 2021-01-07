
<?php
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
    <title>NCET MONSTER MINDS | Run-C </title>
    
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
   


      <!--====== NEWS PART START ======-->

  <section id="news-part" class="pt-115 pb-110 gray-bg">
    <div class="container">
      
      <div class="row justify-content-center">
        <div class="col-lg-12 mb-30 white-bg pb-50"  id="3">
          <div class="section-title pb-50">
            <h5>Language : C</h5>
            <h2>Code Compiler</h2>
          </div>

          <?php

                if($_POST['code'])
                {


                $lang=$_POST['language'];
                $source=$_POST['code'];
                //$input=$_POST['in'];
                $pb=$_POST['pbn'];
                $pid=$_POST['id'];
                $us=$_SESSION['un'];


                $isql="SELECT * FROM archieve WHERE id='$pid'";
                $si=mysqli_query($con,$isql);
                $r4=mysqli_fetch_array($si);

                $limit=$r4['tlimit'];

                //$input=$r4['tc'];
                    
                    
                    $CC="gcc";
                    $out="timeout 5s ./a.out";
                    $code=$_POST["code"];
                    $input=$r4['tc'];
                    $filename_code="main.c";
                    $filename_in="input.txt";
                    $filename_error="error.txt";
                    $executable="a.out";
                    $command=$CC." -lm ".$filename_code;    
                    $command_error=$command." 2>".$filename_error;
                    $check=0;
                    $tle=0;
                    $ce=0;



                    //if(trim($code)=="")
                    //die("The code area is empty");
                    
                    $file_code=fopen($filename_code,"w+");
                    fwrite($file_code,$code);
                    fclose($file_code);
                    $file_in=fopen($filename_in,"w+");
                    fwrite($file_in,$input);
                    fclose($file_in);
                    exec("chmod 777 $executable"); 
                    exec("chmod 777 $filename_error");  

                    shell_exec($command_error);
                    $error=file_get_contents($filename_error);


                    $sql="SELECT output FROM archieve WHERE id='$pid'";

                    $sq=mysqli_query($con,$sql);
                    $row=mysqli_fetch_array($sq);

                    $executionStartTime = microtime(true);
                    if(trim($error)=="")
                    {
                        if(trim($input)=="")
                        {
                            $output=shell_exec($out);
                        }
                        else
                        {
                            $out=$out." < ".$filename_in;
                            $output=shell_exec($out);
                        }


                        
                        //echo "<pre>$output</pre>";
                        //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
                                 echo "<div class=\"row\"><div class=\"col-sm-4\"></div><div class=\"col-sm-6\"><div class=\"alert alert-success\"><strong>Successfully Compiled!</strong> Click Below Submit Button To Submit -1.</div></div><div class=\"col-sm-2\"></div></div><br>";
                    }
                    else if(!strpos($error,"error"))
                    {
                        echo "<pre>$error</pre>";
                        if(trim($input)=="")
                        {
                            $output=shell_exec($out);
                        }
                        else
                        {
                            $out=$out." < ".$filename_in;
                            $output=shell_exec($out);
                        }



                        //echo "<pre>$output</pre>";
                                //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
                                 echo "<div class=\"row\"><div class=\"col-sm-4\"></div><div class=\"col-sm-6\"><div class=\"alert alert-success\"><strong>Successfully Compiled!</strong> Click Below Submit Button To Submit -2.</div></div><div class=\"col-sm-2\"></div></div><br>";
                    }
                    else
                    {
                        echo "<pre>$error</pre>";
                        $check=1;
                        $ce=1;
                            echo "<div class=\"row\"><div class=\"col-sm-4\"></div><div class=\"col-sm-6\"><div class=\"alert alert-danger\"><strong>Compilation Error Or Submit Failed!</strong> Back To Problem Description And Submit Code Again -3.</div></div><div class=\"col-sm-2\"></div></div><br>";
                    }
                    $executionEndTime = microtime(true);
                    $seconds = $executionEndTime - $executionStartTime;
                    $seconds = sprintf('%0.2f', $seconds);
                    //echo "<pre>Compiled And Executed In: $seconds s</pre>";
                    
                    

                    if($seconds>$limit)
                    {
                        $fr="lt";
                    }
                    else if($ce==1)
                    {
                         $fr="e";
                    }
                    else if(trim($output)=="")
                    {
                          $fr="rte";
                    }

                    exec("rm $filename_code");
                    exec("rm *.o");
                    exec("rm *.txt");
                    exec("rm $executable");

                    if($check==0 || $check==1)
                    {

                        $nsql="INSERT into codes VALUES('$us','$source',NULL)";
                        $usql="UPDATE archieve SET uoutput='$output' WHERE id='$pid'";
                        $csql="SELECT uoutput FROM archieve WHERE id='$pid'";
                        $q3="SELECT id FROM codes ORDER BY id DESC ";
                        $snq=mysqli_query($con,$nsql);
                        $snd=mysqli_query($con,$usql);
                        $cnd=mysqli_query($con,$csql);
                        $sq3=mysqli_query($con,$q3);
                        $r2=mysqli_fetch_array($cnd);
                        $r4=mysqli_fetch_array($sq3);




                        $uo=$r2['uoutput'];
                        $ac=$row['output'];
                        $nid=$r4['id'];

                        //var_dump($uo);
                        //echo "<br><br>";
                        //var_dump($ac);


                        //echo "$uo<br>";

                    


                    }
                    //echo "<div class=\"row\"><div class=\"col-sm-5\"></div><div class=\"col-sm-5\"><form action=\"allsubmission.php\" method=\"POST\"><input type=\"hidden\" name=\"pb\" value=\"$pb\"><input type=\"hidden\" name=\"id\" value=\"$pid\"><input type=\"hidden\" name=\"mid\" value=\"$nid\"><input type=\"hidden\" name=\"vd\" value=\"$fr\"><input type=\"hidden\" name=\"il\" value=\"$tle\"><textarea style=\"display:none\" name=\"result\" rows=\"10\" cols=\"10\">$output</textarea><input class=\"btn btn-success tm\" type=\"submit\" value=\"Submit Code\"> </div><div class=\"col-sm-2\"></div></div>";

                //<form action=\"allsubmission.php\" method=\"POST\">
                  echo "<center>
                        <div class=\"row\">
                            <form action=\"allsubmission-p.php\" method=\"POST\">
                                <input type=\"hidden\" name=\"pb\" value=\"$pb\">
                                <input type=\"hidden\" name=\"id\" value=\"$pid\">
                                <input type=\"hidden\" name=\"mid\" value=\"$nid\">
                                <input type=\"hidden\" name=\"vd\" value=\"$fr\">
                                <input type=\"hidden\" name=\"il\" value=\"$seconds\">
                                <textarea style=\"display:none\" name=\"result\" rows=\"10\" cols=\"10\">$output</textarea>
                                <input class=\"main-btn tm\" type=\"submit\" value=\"Submit Code\"></div></center>";


                }

                else if($_POST['src'])
                {


                    require_once("connection.php");
                    
                    $lang=$_POST['language'];
                    $source=$_POST['src'];
                    $pb=$_POST['pbn'];
                    $pid=$_POST['id'];
                    $us=$_SESSION['un'];
                    $check=0;
                    $tle=0;
                    $ce=0;

                    $isql="SELECT * FROM element WHERE pbid='$pid'";
                    $si=mysqli_query($con,$isql);
                    $r4=mysqli_fetch_array($si);

                    $limit=$r4['tlimit'];




                    
                    $CC="gcc";
                    $out="timeout 5s ./a.out";
                    $code=$_POST["src"];
                    $input=$r4['tc'];
                    $filename_code="main.c";
                    $filename_in="input.txt";
                    $filename_error="error.txt";
                    $executable="a.out";
                    $command=$CC." -lm ".$filename_code;    
                    $command_error=$command." 2>".$filename_error;

                    

                    //if(trim($code)=="")
                    //die("The code area is empty");
                    
                    $file_code=fopen($filename_code,"w+");
                    fwrite($file_code,$code);
                    fclose($file_code);
                    $file_in=fopen($filename_in,"w+");
                    fwrite($file_in,$input);
                    fclose($file_in);
                    exec("chmod 777 $executable"); 
                    exec("chmod 777 $filename_error");  

                    shell_exec($command_error);
                    $error=file_get_contents($filename_error);



                    $sql="SELECT output FROM element WHERE pbid='$pid'";
                    $sq=mysqli_query($con,$sql);
                    $row=mysqli_fetch_array($sq);


                   $executionStartTime = microtime(true);

                    if(trim($error)=="")
                    {
                        if(trim($input)=="")
                        {
                            $output=shell_exec($out);
                        }
                        else
                        {
                            $out=$out." < ".$filename_in;
                            $output=shell_exec($out);
                        }
                        //echo "<pre>$output</pre>";
                        //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
                         echo "<div class=\"row\"><div class=\"col-sm-5\"></div><div class=\"col-sm-5\"><div class=\"alert alert-success\"><strong>Successfully Compiled!</strong> Click  Submit Button To Submit.</div></div><div class=\"col-sm-2\"></div></div><br>";
                    }
                    else if(!strpos($error,"error"))
                    {
                        echo "<pre>$error</pre>";
                        if(trim($input)=="")
                        {
                            $output=shell_exec($out);
                        }
                        else
                        {
                            $out=$out." < ".$filename_in;
                            $output=shell_exec($out);
                        }
                        //echo "<pre>$output</pre>";
                                //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
                         echo "<div class=\"row\"><div class=\"col-sm-5\"></div><div class=\"col-sm-5\"><div class=\"alert alert-success\"><strong>Successfully Compiled!</strong> Click  Submit Button To Submit.</div></div><div class=\"col-sm-2\"></div></div><br>";
                    }
                    else
                    {
                        echo "<pre>$error</pre>";
                        $check=1;
                        $ce=1;

                        echo "<div class=\"row\"><div class=\"col-sm-5\"></div><div class=\"col-sm-5\"><div class=\"alert alert-danger\"><strong>Compilation Error Or Submit Failed!</strong> Back To Problem Description And Submit Code Again.</div></div><div class=\"col-sm-2\"></div></div><br>";
                    }
                    $executionEndTime = microtime(true);
                    $seconds = $executionEndTime - $executionStartTime;
                    $seconds = sprintf('%0.2f', $seconds);
                    //echo "<pre>Compiled And Executed In: $seconds s</pre>";
                    if($seconds>$limit)
                    {
                        $fr="lt";
                    }
                    else if($ce==1)
                    {
                         $fr="e";
                    }
                    else if(trim($output)=="")
                    {
                          $fr="rte";
                    }
                    exec("rm $filename_code");
                    exec("rm *.o");
                    exec("rm *.txt");
                    exec("rm $executable");




                    if($check==0 || $check==1)
                    {

                            $nsql="INSERT into code VALUES('$us','$code',NULL)";
                            $usql="UPDATE element SET uoutput='$output' WHERE pbid='$pid'";
                            $csql="SELECT uoutput FROM element WHERE pbid='$pid'";
                            $q3="SELECT id FROM code ORDER BY id DESC ";
                            $snq=mysqli_query($con,$nsql);
                            $snd=mysqli_query($con,$usql);
                            $cnd=mysqli_query($con,$csql);
                            $sq3=mysqli_query($con,$q3);
                            $r2=mysqli_fetch_array($cnd);
                            $r4=mysqli_fetch_array($sq3);




                            $uo=$r2['uoutput'];
                            $ac=$row['output'];
                            $nid=$r4['id'];




                    }

                    //echo "<div class=\"row\"><div class=\"col-sm-5\"></div><div class=\"col-sm-5\"><form action=\"contestsubmission.php\" method=\"POST\"><input type=\"hidden\" name=\"pb\" value=\"$pb\"><input type=\"hidden\" name=\"id\" value=\"$pid\"><input type=\"hidden\" name=\"mid\" value=\"$nid\"><input type=\"hidden\" name=\"il\" value=\"$tle\"><textarea style=\"display:none\" name=\"result\" rows=\"10\" cols=\"10\">$output</textarea><input class=\"btn btn-success tm\" type=\"submit\" value=\"Submit Code\"> </div><div class=\"col-sm-2\"></div></div>";

                  echo "<div class=\"row\"><div class=\"col-sm-4\"></div><div class=\"col-sm-5\"><form action=\"contestsubmission-p.php\" method=\"POST\"><input type=\"hidden\" name=\"pb\" value=\"$pb\"><input type=\"hidden\" name=\"id\" value=\"$pid\"><input type=\"hidden\" name=\"mid\" value=\"$nid\"><input type=\"hidden\" name=\"vd\" value=\"$fr\"><input type=\"hidden\" name=\"il\" value=\"$seconds\"><textarea style=\"display:none\" name=\"result\" rows=\"10\" cols=\"10\">$output</textarea><input class=\"btn btn-success tm\" type=\"submit\" value=\"Submit Code\"> </div><div class=\"col-sm-3\"></div></div>";
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
