<?php
session_start();
if(isset($_SESSION['username']) && (!isset($_SESSION['key']))){
   header('location:account.php?q=1');
}
else if(isset($_SESSION['username']) && isset($_SESSION['key']) && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39'){
   header('location:dash.php?q=0');
}
else{}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-73144081-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-73144081-5');
</script>

    <script data-ad-client="ca-pub-6244981918944412" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> NGI</title>
   
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>
<script>
function validateForm() {
  var y = document.forms["form"]["name"].value; 
  if (y == null || y == " ") {
    document.getElementById("errormsg").innerHTML="Name must be filled out.";
    return false;
  }
  var br = document.forms["form"]["branch"].value;
  if (br == " ") {
    document.getElementById("errormsg").innerHTML="Please select your branch";
    return false;
  }
  if (m.length < 10) {
    document.getElementById("errormsg").innerHTML="Passwordr must be 12 digits long";
    return false;
  }
  var g = document.forms["form"]["gender"].value;
  if (g==" ") {
    document.getElementById("errormsg").innerHTML="Please select your gender";
    return false;
  }
  var x = document.forms["form"]["username"].value;
  if (x.length == 0) {
    document.getElementById("errormsg").innerHTML="Please enter a valid username";
    return false;
  }
  if (x.length < 4) {
    document.getElementById("errormsg").innerHTML="Username must be at least 4 characters long";
    return false;
  }
  var m = document.forms["form"]["phno"].value;
  if (m.length != 10) {
    document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
    return false;
  }
  var a = document.forms["form"]["password"].value;
  if(a == null || a == " "){
    document.getElementById("errormsg").innerHTML="Password must be filled out";
    return false;
  }
  if(a.length<4 || a.length>15){
    document.getElementById("errormsg").innerHTML="Passwords must be 4 to 15 characters long.";
    return false;
  }
  var b = document.forms["form"]["cpassword"].value;
  if (a!=b){
    document.getElementById("errormsg").innerHTML="Passwords must match.";
    return false;
  }
}
</script>
</head>

<body>
    
     <!-- Modal -->
  <div class="modal" id="global-modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">For Admissions</h4>
        </div>
        
        <div class="modal-body">
          <div class="container">
            <div class="row">
                <div class="col-xs-4  col-md-3">
                    <img style="" class="img-full img-responsive" src="image/ngi.png">
                </div>
                <div class="col-xs-8  col-md-3" style="text-align:centre;">
                    <h4><strong>N Venugopal Reddy</strong></h4>
                    <h5>(Director - Admissions)</h5><hr>
                    <h4>Ap & Telengana</h4>
                    <h4>9949166771, 9985165771</h4>
                </div>
            </div>
            
          </div>
        </div>
       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <centre><p style="text-size:30px;">For forget password and technical problems <br>call:- 8094113042 / 9113536073</p></centre>
          
        </div>
      </div>
      
    </div>
  </div>
    

  
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo"><img src="image/ngi.png" alt="NGI LOGO" style="width: 80px; height: auto;"></span></div>
<div class="col-md-6">
<a href="#" class="btn btn-primary logb" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Student Login </b> </span></a>
<a href="#" class="btn btn-primary logb" data-toggle="modal" data-target="#login"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b> Admin Login </b> </span></a>
</div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:darkblue;font-size:12px;font-weight: bold">Login to your Account</span></h4>
      </div>
      <div class="modal-body">

<form class="form-horizontal" action="login.php?q=index.php" method="POST">
    <fieldset>
    <div class="form-group">
      <label class="col-md-3 control-label" for="username"></label>  
      <div class="col-md-6">
      <input id="username" name="username" placeholder="Email" class="form-control input-md" required type="username">
        
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label" for="password"></label>
      <div class="col-md-6">
        <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" required type="password">
        
      </div>
      
    </div>
    <p style="text-size:30px;">For forget password and technical problems <br>call:- 8094113042 / 9113536073</p>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Log in</button>
        </fieldset>
</form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">

<form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <h3 align="center">Registration Form</h3>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red"><?php
if (@$_GET['q7']) {
    echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
}
?></div>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" required value="<?php
if (isset($_GET['name']))
{
echo $_GET['name'];
}?>">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="rollno"></label>  
  <div class="col-md-12">
  <input id="rollno" name="rollno" placeholder="Enter your Father name" class="form-control input-md" required type="text" value="<?php
if (isset($_GET['rollno']))
{
echo $_GET['rollno'];
}?>">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Select your gender" class="form-control input-md" >
   <option value="" disabled <?php
if (!isset($_GET['gender']))
    echo "selected";
?>>Select Gender</option>
  <option value="M" <?php
  if (isset($_GET['gender']))
  {
if ($_GET['gender'] == "M")
    echo "selected";
  }
?>>Male</option>
  <option value="F" <?php
  if (isset($_GET['gender']))
  {
if ($_GET['gender'] == "F")
    echo "selected";
  }
?>>Female</option> </select>
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="branch"></label>
  <div class="col-md-12">
    <select id="branch" name="branch" placeholder="Select your branch" class="form-control input-md"  >
   <option value="" disabled <?php
if (!isset($_GET['branch']))
    echo "selected";
?>  >Subjects</option>
  <option value="PCME" selected <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "PCME")
    echo "selected";
  }
  ?>>Maths Physics Chemistry English</option>

   </select>
  </input>
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label title1" for="username"></label>
  <div class="col-md-12">
    <input id="username" name="username" placeholder="Enter your Email address" type="email" class="form-control input-md" type="username" required value="<?php
if (isset($_GET['username']))
{
echo $_GET['username'];
};
?>" style="<?php
if (isset($_GET['q7']))
    echo "border-color:red";
?>">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="phno"></label>  
  <div class="col-md-12">
  <input id="phno" name="phno" placeholder="Enter your mobile number" class="form-control input-md" type="number" required value="<?php
if (isset($_GET['phno']))
{
echo $_GET['phno'];
}
?>">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="fphno"></label>  
  <div class="col-md-12">
  <input id="fphno" name="fphno" placeholder="Enter your whatsapp number" class="form-control input-md" type="number" required value="<?php
if (isset($_GET['fphno']))
{
echo $_GET['fphno'];
}
?>">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="clgname"></label>  
  <div class="col-md-12">
  <input id="clgname" name="clgname" placeholder="College name with Place" class="form-control input-md" required type="text" value="<?php
if (isset($_GET['clgname']))
{
echo $_GET['clgname'];
}?>">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="priname"></label>  
  <div class="col-md-12">
  <input id="priname" name="priname" placeholder="Enter your Principal name" class="form-control input-md" required type="text" value="<?php
if (isset($_GET['priname']))
{
echo $_GET['priname'];
}?>">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" required type="password">
    
  </div>
</div>

<!--<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" required type="password">
    
  </div>
</div> -->

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12" style="text-align: center"> 
    <input  type="submit" value=" Register Now " class="btn btn-primary" style="text-align:center" />
  </div>
</div>

</fieldset>
</form>
</div>
</div></div>
</div>
<div class="row footer">
<div class="col-md-3 box">
    <a href="#" data-toggle="modal" data-target="#login" style="color:lightyellow">Admin Login</a><hr>
</div>

<div class="col-md-3 box">
    <a href="#" data-toggle="modal" data-target="#developers" s style="color:lightyellow;" onmouseover="this.style('color:yellow')" target="new">Organized by ARK</a><hr>
    <p>
        <span style="color:lightyellow">Abhishek Kumar (1NC17CS001) - 6th Sem,CSE<br></span>
        <span style="color:lightyellow">Kaushal Kant Singh (1NC17CS037) - 6th Sem,CSE<br></span>
        <span style="color:lightyellow">Rahul Kumar (1NC17CS074) - 6th Sem,CSE<br></span>
        <hr>
    </p>
</div>

<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">NGI</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/ngi.png" width=100 height=100 alt="Mugunthan" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="" style="color:#202020; font-family:'typo' ; font-size:18px" title="">Developed by:-</a>
		<h4 style="font-size:12px" >Abhishek Kumar (1NC17CS001) <br> 6th Sem,CSE</h4>
		<h4 style="font-size:12px ">Kaushal Kant Singh (1NC17CS037) <br> 6th Sem,CSE</h4>
		<h4 style="font-size:12px ">Rahul Kumar (1NC17CS074) <br> 6th Sem,CSE</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#contact" s style="color:lightyellow;" onmouseover="this.style('color:yellow')" target="new">Contact Us</a><hr>
<p>
    <span style="color:lightyellow">N Venugopal Reddy (Director - Admissions)<br></span>
    <span style="color:lightyellow">Ap & Telengana<br></span>
    <span style="color:lightyellow">9949166771, 9985165771<br></span>
    <hr>
    
</p>
</div>

<!-- Modal For Contact-->
<div class="modal fade title1" id="contact">
  <div class="modal-dialog">
    <div class="modal-content">
        
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">NGI</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/ngi.png" width=100 height=100 alt="Mugunthan" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		     <a href="" style="color:#202020; font-family:'typo' ; font-size:18px" title="">For Admissions:-</a>
		     <h4 style="font-size:12px" >N Venugopal Reddy <br>(Director - Admissions)</h4>
		     <h4 style="font-size:12px ">Ap & Telengana</h4>
		     <h4 style="font-size:12px ">9949166771, 9985165771</h4>
		 </div>
		 </div>
		
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="col-md-3 box">
<a href="feedback.php" style="color:lightyellow;" onmouseover="this.style('color:yellow')" target="new">Feedback</a><hr>
</div>


   <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:darkblue;font-size:12px;font-weight: bold">Login to Admin Server</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Username" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="30" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
    </div>
  </div>
</div>
<!---------------##############startup popup modal script################----------------->
	<script type="text/javascript">
	$(document).ready(function() {
		$('#global-modal').modal('show');
	});
	</script>
	<!---------------################startup popup modal script##############----------------->
</body>
</html>
