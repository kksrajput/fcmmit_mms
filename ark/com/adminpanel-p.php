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

if($st=="Teacher" || $st=="Problem Setter" || $st=="Developer")
{
   $access=1;
}
else
{
    header("Location:home-p.php");
}

if(isset($_GET['user']))
{
  $data=$_GET['user'];
}

?>

<!-- ============= admin panel============= -->

<?php

if(isset($_POST['name']) || isset($_POST['email'])||isset($_POST['status']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $status=$_POST['status'];

   $sql="UPDATE user SET  status='$status' WHERE name='$name'";
   $send=mysqli_query($con,$sql);


   if($send)
   {
       echo "<br><div  class=\"alert alert-success\">
  <strong>Admin Panel Has Been Updated! Go To Your <a href=\"profile-p.php?user=$name\">Profile</a></strong>
   </div><br><br><br><br>";
   }
   else
   {
      echo "<div  class=\"alert alert-danger\">
    <strong>Operation Failed. Please Try Again By Giving Correct Username And Email</strong>
   </div><br><br><br><br>";
   }
 

  


}





?>