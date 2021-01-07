<?php

include_once 'dbConnection.php';
ob_start();
$name     = $_POST['name'];
$name     = ucwords(strtolower($name));
$gender   = $_POST['gender'];
$username = $_POST['username'];
$phno     = $_POST['phno'];
$fphno     = $_POST['fphno'];

$password = $_POST['password'];
$branch   = $_POST['branch'];

$rollno   = $_POST['rollno'];

$clgname   = $_POST['clgname'];

$priname   = $_POST['priname'];

$name     = stripslashes($name);
$name     = addslashes($name);
$name     = ucwords(strtolower($name));
$gender   = stripslashes($gender);
$gender   = addslashes($gender);
$username = stripslashes($username);
$username = addslashes($username);
$phno     = stripslashes($phno);
$phno     = addslashes($phno);
$fphno     = stripslashes($fphno);
$fphno     = addslashes($fphno);
$password = stripslashes($password);
$password = addslashes($password);

$clgname = stripslashes($clgname);
$clgname = addslashes($clgname);
$priname = stripslashes($priname);
$priname = addslashes($priname);




$q3 = mysqli_query($con, "INSERT INTO user VALUES  (NULL,'$name', 'father_name','branch','$gender' ,'$username' ,'$phno', '000000','clg_name',  'principal_ame','$password')");



if ($q3) {
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["name"]     = $name;
    
    header("location:account.php?q=1");
} else {
    echo "sql not executed";
    //header("location:index.php?q7=Username already exists. Please choose another&name=$name&username=$username&gender=$gender&phno=$phno&branch=$branch&rollno=$rollno");
}
ob_end_flush();




?>