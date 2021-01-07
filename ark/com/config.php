<?php


// $host = getenv("216.10.249.126");
// $port = getenv("MYSQL_SERVICE_PORT");
// $user = getenv("databaseuser");
// $pass = getenv("databasepassword");
// $db =   getenv("databasename");

// $host = "localhost";
// $user = "root";
// $pass = "";
// //$db =   "ncetmons_arktest";
// $db =   "liveroj";

$host = "216.10.249.126";
$user = "ncetmons_ark";
$pass = "ARKark@007";
// $db =   "ncetmons_liveroj";
$db =   "ncetmons_arktest";






$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	print("Not Connected<br>".mysql_error());

}
else
{
	//echo("Connected");
}


//$con= new mysqli('216.10.249.126','ncetmons_ark','ARKark@007','ncetmons_arktest')or die("Could not connect to mysql".mysqli_error($con));



?>
