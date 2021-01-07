<?php


$host = "216.10.249.126";
//$port = getenv("MYSQL_SERVICE_PORT");
$user = "ncetmons_ark";
$pass = "ARKark@007";
$db =   "ncetmons_liveroj";

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	print("Not Connected<br>".mysql_error());

}
else
{
	//echo("Connected");
}






?>
