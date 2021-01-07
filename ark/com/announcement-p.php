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

?>

<!DOCTYPE html>
<html>
<head>
  
  <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Edubin - LMS Education HTML Template</title>
    
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

   
<div class="main">
 



<div class="row log">
<div class="col-sm-10">
<div class=""><h3 style="text-align:center;">Announcement</h3></div>
</div>

<div class="col-sm-1">

</div>

<div class="col-sm-1">
  
</div>

</div>




<div class="row cspace">
<div class="col-sm-7">

<?php

require_once("connection.php");



if(isset($_POST['cr']))
{

   

   $cid=$_POST['ci'];
   $cname=$_POST['cn'];
   $announcement=$_POST['an'];


 $fowner="SELECT  owner from rapl_oj_contest where cname='$cname'";
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


   if($access==1)
   {

     $query="INSERT INTO announcement(id,cname,des,aid) VALUES('$cid','$cname','$announcement','')";
     $send=mysqli_query($con,$query);

     if($send)
     {
       echo "Submitted Successfully. <a href=\"announcement-p.php\">Check Here</a>";
     }
   }
   else
   {
      header("Location:announcement-p.php?fail=1");
   }


   
   
  
 

}
else
{
   $query="SELECT * from announcement";
   $send=mysqli_query($con,$query);
  
   while($row=mysqli_fetch_array($send))
   {
       $aid=$row['aid'];
       echo "<button class=\"btn btn-success\">$aid</button><button class=\"btn btn-primary\">$row[cname]</button> <div class=\"alert alert-info\">$row[des]</div><br>";
   }

}


if(isset($_POST['up']))
{

  

   $aid=$_POST['ann'];
   $cont=$_POST['con'];
   

 $fowner="SELECT  owner from rapl_oj_contest where cname='$cont'";
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


   if($access==1)
   {
     $query="DELETE FROM announcement WHERE aid='$aid'";
     $send=mysqli_query($con,$query);

     if($send)
     {
       echo "Deleted Successfully. <a href=\"announcement-p.php\">Check Here</a>";
     }
  }
 else
 {
    header("Location:announcement-p.php?fail=1");
 }
}



?>


</div>

<?php

if($st=="Teacher" || $st=="Developer" || $st=="Problem Setter")
{
?>

<div class="col-sm-5">
<div class="form-group">
<legend>Create Announcement</legend>
<form action="<?php echo $_SERVER['PHP_SELF']?>" name="f2" method="POST">
<label for="ta">Enter Your Contest ID</label>
<input type="text" name="ci" class="form-control" required><br><br>
<label for="ta">Enter Your Contest Name</label>
<input type="text" name="cn" class="form-control" required><br><br>
<label for="in">Enter Announcement Description</label>
<textarea name="an" class="form-control" rows="10" cols="60" required></textarea><br><br>
<input type="submit" name="cr" class="btn btn-success" value="Create Announcement">
<br><br>

</form>

<form action="<?php echo $_SERVER['PHP_SELF']?>" name="f3" method="POST">
  
<legend>Delete Announcement</legend>
<label for="ta">Enter Announcement Number</label>
<input type="text" name="ann" class="form-control"><br><br>
<label for="ta">Enter Contest Name</label>
<input type="text" name="con" class="form-control" required><br><br>
<input type="submit" name="up" class="btn btn-danger" value="Delete">




</form>


</div>

</div>

<?php
}

if(isset($_GET['fail']))
{
   echo "<script>alert(\"You Are Not Owner Of This Contest. Only Owner Can Control Announcement\");</script>";
}
?>


</div>
</div><br><br><br>


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
















