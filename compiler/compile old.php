<!doctype html>
<html lang="en">
<head>

  <!--====== Required meta tags ======-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!--====== Title ======-->
  <title>Ncet Monster Minds | COMPILER</title>



  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-73144081-5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-73144081-5');
  </script>
  
  <script data-ad-client="ca-pub-6244981918944412" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  
  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="../images/favicon.png" type="image/png">

  <!--====== Slick css ======-->
  <link rel="stylesheet" href="../css/slick.css">

  <!--====== Animate css ======-->
  <link rel="stylesheet" href="../css/animate.css">
  
  <!--====== Nice Select css ======-->
  <link rel="stylesheet" href="../css/nice-select.css">
  
  <!--====== Nice Number css ======-->
  <link rel="stylesheet" href="../css/jquery.nice-number.min.css">

  <!--====== Magnific Popup css ======-->
  <link rel="stylesheet" href="../css/magnific-popup.css">

  <!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  
  <!--====== Fontawesome css ======-->
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  
  <!--====== Default css ======-->
  <link rel="stylesheet" href="../css/default.css">
  
  <!--====== Style css ======-->
  <link rel="stylesheet" href="../css/style.css">
  
  <!--====== Responsive css ======-->
  <link rel="stylesheet" href="../css/responsive.css">



</head>

<body>


  <!--====== PRELOADER PART START ======-->
    
   <!-- <div class="preloader">
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

  <!--====== HEADER PART START ======-->

  <header id="header-part">        
    <div class="navigation navigation-2 navigation-3">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-11 col-md-10 col-sm-9 col-9">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="index.html">
                <img src="../logo.png" alt="Logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a  href="../index.html">Home</a>                                        
                  </li>

                  <li class="nav-item">
                    <a  href="../about.html ">About us</a>
                  </li>

                  <li class="nav-item">
                    <a  href="../courses.html" >Courses</a>
                    <!--<a href="courses-singel.html">Course Singel</a>-->
                  </li>

                  <li class="nav-item">
                    <a  href="../events.html"  >Events</a>
                  </li>

                  <li class="nav-item">
                    <a  href="../news.html">News/Updates</a>
                  </li>

                  <li class="nav-item">
                    <a class="active" style="text-shadow: 5px 10px 5px #000;" href="compiler.php">Compiler</a>
                  </li>

                  <li class="nav-item">
                    <a href="../blog.html">Blog</a>
                    <ul class="sub-menu">
                      <li><a href="../Write-blog.html">Write Blog</a></li>
                    </ul>
                  </li>

                  <li class="nav-item">
                    <a href="../contact.html">Contact</a>
                  </li>
                </ul>
              </div>
            </nav> <!-- nav -->
          </div>

        </div> <!-- row -->
      </div> <!-- container -->
    </div>
  </header>

  <!--====== HEADER PART ENDS ======-->

  <!--====== HEADER PART ENDS ======-->



  <!--====== PAGE BANNER PART START ======-->

  <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(../images/compiler/code-banner.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-banner-cont">
            <h2>Output</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">OUTPUT</li>
              </ol>
            </nav>
          </div>  <!-- page banner cont -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <!--====== PAGE BANNER PART ENDS ======-->

  




  <!--====== NEWS PART START ======-->

  <section id="news-part" class="pt-115 pb-110 gray-bg">
    <div class="container white-bg">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-title pb-50">
            <h5>New</h5>
            <h2>OUTPUT</h2>
          </div> <!-- section title -->
        </div>
      </div> <!-- row -->

      <div class="row justify-content-center">
        <div class="col-lg-8 mb-30" id="3">

          <?php

  $languageID=$_POST["language"];
        error_reporting(0);
  if($_FILES["file"]["name"]!="")
  {
    include "compilers/make.php";
  }
  else
  {
    switch($languageID)
      {
        case "c":
        {
          include("compilers/c.php");
          break;
        }
        case "cpp":
        {
          include("compilers/cpp.php");
          break;
        }
        case "c_cpp":
        {
          include("compilers/cpp.php");
          break;
        }
        case "cpp11":
        {
          include("compilers/cpp11.php");
          break;
        }
        case "java":
        { 
          include("compilers/java.php");
          break;
        }
        case "python2.7":
        {
          include("compilers/python27.php");
          break;
        }
        case "python":
        {
          include("compilers/python3.php");
          break;
        }
      }
  }
?>

        <button onclick="history.back();" class="main-btn mt-55" style=" box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >Back</button>
         
        </div>
      </div> 
    </div> 
  </section>

  
  <!--====== NEWS PART ENDS ======-->

  

  


  <!--====== FOOTER PART START ======-->
  
  <footer id="footer-part">
    <div class="footer-top pt-40 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="footer-address mt-40">
              <div class="footer-title pb-25">
                <h6 style="text-shadow: 5px 10px 5px #000;">Contact Us</h6>
              </div>
              <ul>
                <li>
                  <div class="icon">
                    <i class="fa fa-home"></i>
                  </div>
                  <div class="cont">
                    <p>R&D lab, Ground floor,<br>CSE Department, NCET</p>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <div class="cont">
                    <p><a href="tel:9663300824">+91 96633 00824</a></p>
                    <p><a href="tel:9916565665">+91 99165 65665</a></p>
                    <p><a href="tel:9986888121">+91 99868 88121</a></p>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fa fa-envelope-o"></i>
                  </div>
                  <div class="cont">
                    <p><a href="mailto:ark@ncetmonsterminds.com" target="_blank">ark@ncetmonsterminds.com</a></p>
                    <p><a href="mailto:ncetcodingclub@gmail.com" target="_blank">ncetcodingclub@gmail.com</a></p>
                  </div>
                </li>
              </ul>
              
              <div class="footer-about mt-40">
                <ul class="mt-20">
                  <li><a href="https://www.facebook.com/ncetcodingclub"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="https://twitter.com/ncetcodingclub"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.instagram.com/ncetcodingclub/"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>                             
            </div> <!-- footer address -->
          </div>
                    <!--
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="#"><img src="logo.png" alt="Logo"></a>
                            </div>
                            <p>Gravida nibh vel velit auctor aliquetn quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</p>
                            <ul class="mt-20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> 
                      </div>-->

                      <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="footer-link mt-40">
                          <div class="footer-title pb-25">
                            <h6 style="text-shadow: 5px 10px 5px #000;">Sitemap</h6>
                          </div>
                          <ul>
                            <li><a href="../index.html"><i class="fa fa-angle-right"></i>Home</a></li>
                            <li><a href="../about.html"><i class="fa fa-angle-right"></i>About us</a></li>
                            <li><a href="../courses.html"><i class="fa fa-angle-right"></i>Courses</a></li>
                            <li><a href="../events.html"><i class="fa fa-angle-right"></i>Event</a></li>
                            <li><a href="../blog.html"><i class="fa fa-angle-right"></i>Blogs</a></li>
                            <li><a href="../contact.html"><i class="fa fa-angle-right"></i>Contact</a></li>
                            
                          </ul>                            
                        </div> <!-- footer link -->
                      </div>

                      
                      <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="footer-address mt-40">
                          <div class="footer-title pb-25">
                            <h6 style="text-shadow: 5px 10px 5px #000;">Developed by:-</h6>
                          </div>
                          <ul>
                            <li>
                              <div class="icon">
                                <i class="fa fa-user"></i>
                              </div>
                              <div class="cont">
                                <p>Abhishek Kumar Ram<br>
                                6th Sem ,CSE</p>
                              </div>
                            </li>
                            
                            <li>
                              <div class="icon">
                                <i class="fa fa-user"></i>
                              </div>
                              <div class="cont">
                                <p>Kaushal Kant Singh<br>
                                6th Sem ,CSE</p>
                              </div>
                            </li>

                            <li>
                              <div class="icon">
                                <i class="fa fa-user"></i>
                              </div>
                              <div class="cont">
                                <p>Rahul Kumar<br>
                                6th Sem ,CSE</p>
                              </div>
                            </li>
                            
                          </ul>
                        </div> <!-- footer address -->
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="footer-address2 mt-40">
                          <div class="footer-title pb-25">
                            <h6><br></h6>
                          </div>

                          <ul>

                            <li>
                              <ul>
                                <li>
                                  <div class="cont">
                                    <p>1NC17CS001</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="icon">
                                    <a href="mailto:meisabikumar@gmail.com" target="_blank"><i class="fa fa-envelope-o"></i></a>
                                    <a href="https://www.instagram.com/akcoolboy47/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/meisabikumar/"><i class="fa fa-linkedin"></i></a>
                                  </div>
                                </li>
                              </ul>
                            </li>

                            <li>
                              <ul>
                                <li>
                                  <div class="cont">
                                    <p>1NC17CS037</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="icon">
                                    <a href="mailto:ark@ncetmonsterminds.com" target="_blank"><i class="fa fa-envelope-o"></i></a>
                                    <a href="https://www.instagram.com/kksrajput01/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/kaushal-kant-singh-741712171/"><i class="fa fa-linkedin"></i></a>
                                  </div>
                                </li>
                              </ul>
                            </li>

                            <li>
                              <ul>
                                <li>
                                  <div class="cont">
                                    <p>1NC17CS074</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="icon">
                                    <a href="mailto:ark@ncetmonsterminds.com" target="_blank"><i class="fa fa-envelope-o"></i></a>
                                    <a href="https://www.instagram.com/i_dream_bot/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/rahul-kumar-1616b4189/"><i class="fa fa-linkedin"></i></a>
                                  </div>
                                </li>
                              </ul>
                            </li>

                          </ul>
                        </div> <!-- footer address -->
                      </div>

                    </div> <!-- row -->
                  </div> <!-- container -->
                </div> <!-- footer top -->
                
                
              </footer>
              
              <!--====== FOOTER PART ENDS ======-->

              <!--====== BACK TO TOP PART START ======-->
              
              <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
              
              <!--====== BACK TO TOP PART ENDS ======-->

              <!--====== floating nav START ======-->
              <div class="parent" style="" >
                <div id="gooey-nav-b">
                  <div class="nav-b">
                    <input type="checkbox">
                    <span></span>
                    <span></span>
                    <div class="menu-b">
                      <li><a href="../index.html">home</a></li>
                      <li><a href="../Write-blog.html">Write_Blogs</a></li>
                      <li><a href="../contact.html">contacts</a></li>
                    </div>
                  </div>
                </div>
              </div>
              <!--====== floating nav START ======-->

              

              
              
              
              
              
              
              
              <!--====== jquery js ======-->
              <script src="../js/vendor/modernizr-3.6.0.min.js"></script>
              <script src="../js/vendor/jquery-1.12.4.min.js"></script>

              <!--====== Bootstrap js ======-->
              <script src="../js/bootstrap.min.js"></script>
              
              <!--====== Slick js ======-->
              <script src="../js/slick.min.js"></script>
              
              <!--====== Magnific Popup js ======-->
              <script src="../js/jquery.magnific-popup.min.js"></script>
              
              <!--====== Counter Up js ======-->
              <script src="../js/waypoints.min.js"></script>
              <script src="../js/jquery.counterup.min.js"></script>
              
              <!--====== Nice Select js ======-->
              <script src="../js/jquery.nice-select.min.js"></script>
              
              <!--====== Nice Number js ======-->
              <script src="../js/jquery.nice-number.min.js"></script>
              
              <!--====== Count Down js ======-->
              <script src="../js/jquery.countdown.min.js"></script>
              
              <!--====== Validator js ======-->
              <script src="../js/validator.min.js"></script>
              
              <!--====== Ajax Contact js ======-->
              <script src="../js/ajax-contact.js"></script>
              
              <!--====== Main js ======-->
              <script src="../js/main.js"></script>
              
              
              

            </body>
            </html>