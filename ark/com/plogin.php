<?php

session_start();

if(isset($_SESSION["un"]))
{
  header("Location:home-p.php");
}

if(isset($_SESSION['url']))
{
     $url=$_SESSION['url'];
               
}
else
{
      $url="home-p.php";
               
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
    <title>NCET MONSTER MINDS | PORTAL LOGIN</title>
    
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
    
    <header id="header-part">
       
    
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-10 col-sm-9 col-9">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="../../index.html">
                                <img src="../../logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a href="../../index.html" >Home</a>                                        
                                    </li>

                                    <li class="nav-item">
                                        <a href="../../about.html" >About us</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="../../courses.html">Courses</a>
                                        <!--<a href="courses-singel.html">Course Singel</a>-->
                                    </li>

                                    <li class="nav-item">
                                        <a href="../../events.html">Events</a>
                                    </li>
                                    
                                    <!--
                                    <li class="nav-item">
                                        <a href="teachers.html">Our teachers</a>
                                        <ul class="sub-menu">
                                            <li><a href="teachers.html">teachers</a></li>
                                            <li><a href="teachers-singel.html">teacher Singel</a></li>
                                        </ul>
                                    </li> -->

                                    <li class="nav-item">
                                        <a href="../../news.html">News/Updates</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="../../compiler/compiler.php">Compiler</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="../../blog.html">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="../../Write-blog.html">Write Blog</a></li>
                                        </ul>
                                    </li>

                                    
                                    <li class="nav-item">
                                        <a href="../../contact.html">Contact</a>                                        
                                    </li>

                                    <li class="nav-item">
                                        <a href="home-p.php" class="active"  style="text-shadow: 5px 10px 5px #000;">Portal</a>
                                        <ul class="sub-menu">
                                            <li><a href="plogin.php"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login</a></li>
                                            <li><a href="psignup.php"><i class="fa fa-chevron-circle-up"></i>&nbsp;&nbsp;SignUp</a></li>                                            
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div> <!-- nav -->
                    </div>
                    
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <!-- <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-6.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div> 
                </div>
            </div> 
        </div> 
    </section> -->
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->
    
    <section id="contact-page" class="pt-30 pb-120 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="contact-from" style="box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0)">
                        <div class="section-title">
                            
                            <a class="active" href="plogin.php"><h5>LogIn </h5></a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="psignup.php"><h5>SignUp</h5></a>
                            <h2>Login to Your Account</h2>
                        </div> <!-- section title -->

                        <div class="main-form pt-45">
                            <form  action="process.php" method="post" name="f1">
                                <div class="row">
                                    <!-- <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="name" type="text" placeholder="Your Full Name" required="required">  
                                        </div> 
                                    </div> -->                                    

                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="un" type="text" placeholder="Enter Username" required="required">                   
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="ps" type="Password" placeholder="Enter Password" required="required">                   
                                        </div> 
                                    </div>

                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input type="hidden" class="form-control"  name="uri" value="home-p.php">                   
                                        </div> 
                                    </div>                                 

                                    <!-- <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="subject" type="text" placeholder="USN" required="required">
                                            
                                        </div> 
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="phone" type="text" placeholder="Phone" required="required">
                                            
                                        </div> 
                                    </div>

                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <select type="text">
                                                <option>cjdshg</option>
                                            </select>
                                            
                                        </div>
                                    </div> -->
                                    
                                    
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <!-- <input   type="submit" name="submit" class="main-btn" > -->
                                            <button type="submit" name="submit" class="main-btn">Sign In</button>
                                        </div> <!-- singel form -->
                                    </div> 
                                </div> <!-- row -->
                            </form>

                            <?php

                            if(isset($_GET['value']))
                            {
                               
                               echo "<br><div class=\"alert alert-danger\">
                              <strong>Sign in Failed!</strong>  Wrong Username And Password
                               </div><br>";
                                
                            }

                            ?>


                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>

                
            </div> <!-- row -->
        </div> <!-- container -->

    </section>

    <!--====== CONTACT PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
    <?php require_once("footer.php"); ?>
    
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
