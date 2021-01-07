<?php


//$host = getenv("216.10.249.126");
//$port = getenv("MYSQL_SERVICE_PORT");
//$user = getenv("databaseuser");
//$pass = getenv("databasepassword");
//$db =   getenv("databasename");

//$con=mysqli_connect($host,$user,$pass,$db);

//if(!$con)
//{
//	print("Not Connected<br>".mysql_error());

//}
//else
//{
	//echo("Connected");
//}


$con= new mysqli('216.10.249.126','ncetmons_ark','ARKark@007','ncetmons_arktest')or die("Could not connect to mysql".mysqli_error($con));



?>
