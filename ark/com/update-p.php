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
}

?>




      <!--====== update ======-->



          <?php

if(isset($_POST['name']) || isset($_POST['email'])||isset($_POST['status']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $status=$_POST['status'];
   $password=md5($status);

   $sql="UPDATE user SET name='$name', email='$email', pass='$password' WHERE name='$username'";
   $send=mysqli_query($con,$sql);
 

   echo "<br><div class=\"alert alert-success\">
   <strong>Your Profile Has Been Updated! Go To Your <a href=\"profile-p.php?user=$username\">Profile</a></strong>
   </div><br><br><br><br>";


}

?>



  
 