<?php

session_start();
require_once("config.php");

if(!isset($_SESSION["un"]))
{
  header("Location:plogin.php");
}

if(isset($_SESSION['un']))
{
  $username=$_SESSION['un'];
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
    <title>NCET MONSTER MINDS | PORTAL</title>
    
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
    
    <?php
        require_once("header.php");
    ?>
    
    <!--====== HEADER PART ENDS ======-->
   

<!--====== PAGE BANNER PART START ======-->

  <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(../../images/compiler/code-banner.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-banner-cont">
            <h2>Ncet Monster Minds Portal Home</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portal</li>
              </ol>
            </nav>
          </div>  <!-- page banner cont -->
        </div>
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <!--====== PAGE BANNER PART ENDS ======-->

  




  <!--====== NEWS PART START ======-->

  <section id="news-part" class="pt-115 gray-bg">
    <div class="container">
      
      <div class="row">
        <div class="col-lg-8 mb-30 white-bg" id="3">

            <div class="section-title pb-50">
            <h5>Beta Version</h5>
            <h2>Online Compiler</h2>
          </div>

          <div class="form-group">
              <form name="f2" method="POST" >
                <label for="language"><h5>Choose Language</h5></label>

                <select class="form-control" name="language" id="mode">
                  <!--<option value="c">C</option>-->
                  <option value="c_cpp">C/C++</option>
                  <!--<option value="cpp11">C++11</option>-->
                  <option value="java">Java</option>
                  <option value="python">Python 3</option>
                </select><br><br><br><br>

                <label for="ta"><h5>Write Your Code</h5></label>
                <!--<textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>-->
                <textarea id="textcode" class="form-control" name="code" data-editor="c_cpp" data-gutter="1" rows="20" cols="50">
                    // Write Your Code
#include <stdio.h>
int main() {
   printf("Welcome to NCET MONSTER MINDS");
   return 0;
}</textarea><br><br>
                
                
                <label for="in"><h5>Enter Your Input</h5></label>
                <!--<textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>-->
                <textarea class="form-control" name="input" data-editor2="" data-gutter="1" rows="10" cols="50"></textarea><br><br>
                
                <input type="submit" class="main-btn mt-55" style=" box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" value="Run Code"><br><br><br>
              <h6> Note: If you are using Java Compiler, Use the main class name as "Main" as during the compilation and byte code execution , it loads the name of the main class as "Main" .</h6>

              </form>
            </div>
            
            
         
        </div><!-- compiler container-->

        <div class="col-lg-4"> <!-- upcomming events -->
           <div class="saidbar">
               <div class="row">


                    <div class="col-lg-12 col-md-6">
                      <div class="" >
                        <div class="events-coundwon bg_cover" data-overlay="8" style="background-image: url(../../911.png); margin-top: 0px; ">
                            <!-- <div data-countdown="2020/07/11"></div> -->

                             <div class="section-title">
                                <h3 style="color: #ffc600">Recent And Upcoming Contests</h3>
                                
                            </div>                          
                        </div>
                      </div>
                    </div>

                    <?php

                        require_once("connection.php");
                        date_default_timezone_set("Asia/Dhaka");

                        $q3="SELECT * FROM rapl_oj_contest ORDER BY date_on DESC LIMIT 0,2";
                            $sq3=mysqli_query($con,$q3);

                                $q4="SELECT TIME_FORMAT(end_at,'%H') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";
                               $q5="SELECT TIME_FORMAT(end_at,'%i') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";
                                $q6="SELECT TIME_FORMAT(end_at,'%s') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";

                              $sq4=mysqli_query($con,$q4);
                              $sq5=mysqli_query($con,$q5);
                              $sq6=mysqli_query($con,$q6);
                              
                              $i=0;


                              
                           
                          while($row=mysqli_fetch_array($sq3))
                            {
                              $d=date("Y-m-d");
                              $t=date("H:i:s");
                              $m=$row['start_at'];
                              $nv=$row['start_at'];


                              $i++;
                              $demo="demo".$i;
                              $nr=mysqli_fetch_array($sq4);
                              $nm=mysqli_fetch_array($sq5);
                              $ns=mysqli_fetch_array($sq6);
                              
                              $shr=$nr['end_at'];
                              $shm=$nm['end_at'];
                              $shs=$ns['end_at'];
                              $cur=date('H');
                              $curm=date('i');
                              $curs=date('s');

                              $h=$shr-$cur;
                              $mt=$shm-$curm;
                              $scnd=$shs-$curs;

                              if($scnd<0)
                              {
                                 $scnd=$scnd+60;
                                 $mt=$mt-1;
                              }

                              if($mt<0)
                              {
                                $mt=$mt+60;
                                $h=$h-1;
                              }

                              if($h<0)
                              {
                                $h=$h+24;
                              }
                              
                              $en=$row['end_at'];

                              $seconds = strtotime($t) - strtotime($m);
                              $ss= strtotime($en) - strtotime($t);
                              $min=intval($seconds/60);
                              $sec=intval($seconds%60);
                              $hr=intval($min/60);
                              $m=intval($min%60);

                           ?>
                              
                           
                              
                            <?php

                             echo("
                                <div class=\"col-lg-12 col-md-6\">
                                    <div class=\"saidbar-post mt-30\">
                                        <div class=\"cont\">
                                            <h6>Contest Name: <a href=\"contestproblem-p.php?name=$row[cname]\">$row[cname]</a></h6><br>
                                            <h6>Contest Date: $row[date_on] </h6><br>
                                            <h6>Start Time: $row[start_at]</h6><br>
                                            <h6>End Time: $row[end_at] </h6><br>
                                            <div id=$demo></div>
                                        </div>
                                    </div>
                                </div>");
                             
                          }

                        ?>

                    
               </div> <!-- row -->
           </div> <!-- saidbar -->
        </div>

        


      </div> <!-- row -->
    </div> 
  </section>
  
  <div id="result"></div>

  <script>

  
</script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.9/ace.js"></script>
  
 <script>
$(document).ready(function(){
    //$(window).load(function() {
    $(window).on('load', function() {
        $("form").submit(function(event){
            // Stop form from submitting normally
            event.preventDefault();
            /* Serialize the submitted form control values to be sent to the web server with the request */
            var formValues = $(this).serialize();
            // Send the form data using post
            $.post("../../compiler/compile.php", formValues, function(data){
                // Display the returned data in browser
                $("#result").html(data);
                
            });
            
        });
        
    });
    
});
</script>
  
  <script type="text/javascript">
    // Hook up ACE editor to all textareas with data-editor attribute
$(function() {
  $('textarea[data-editor]').each(function() {
    var textarea = $(this);
    var mode = textarea.data('editor');
    var editDiv = $('<div>', {
      position: 'absolute',
      //width: textarea.width(),
      height: textarea.height(),
      'class': textarea.attr('class')
    }).insertBefore(textarea);
    textarea.css('display', 'none');
    var editor = ace.edit(editDiv[0]);
    editor.renderer.setShowGutter(textarea.data('gutter'));
    editor.getSession().setValue(textarea.val());
    editor.getSession().setMode("ace/mode/" + mode);
    editor.setTheme("ace/theme/twilight");
    
     $('#mode').on('change', function(){
        var newMode = $(this).val();
        var c=`// Write Your Code
#include <stdio.h>
int main() {
   printf("Welcome to NCET MONSTER MINDS");
   return 0;
}`
        
        
        var p=`try:
    #wite your code here
    print("hello python")


except EOFError as e:
   print(end="")`
        
        var j=`// Your First Program
// Do not change Class name
class Main {
    public static void main(String[] args) {
        System.out.println("Hello, Java!"); 
    }
}`
        editor.getSession().setMode("ace/mode/" + newMode);
        //editor.session.setMode("ace/mode/" + newMode)
        if(newMode=='c_cpp'){
            editor.getSession().setValue(c);
        }
        if(newMode=='java'){
            editor.getSession().setValue(j);
        }
        if(newMode=='python'){
            editor.getSession().setValue(p);
        }
        
        });
        
        
        

    // copy back to textarea on form submit...
    textarea.closest('form').submit(function() {
      textarea.val(editor.getSession().getValue());
    })
  });
});

  </script>
  
  <script>
      $(function() {
  $('textarea[data-editor2]').each(function() {
    var textarea = $(this);
    var mode = textarea.data('editor');
    var editDiv = $('<div>', {
      position: 'absolute',
      //width: textarea.width(),
      height: textarea.height(),
      'class': textarea.attr('class')
    }).insertBefore(textarea);
    textarea.css('display', 'none');
    var editor = ace.edit(editDiv[0]);
    editor.renderer.setShowGutter(textarea.data('gutter'));
    editor.getSession().setValue(textarea.val());
    editor.getSession().setMode("ace/mode/" + mode);
    editor.setTheme("ace/theme/twilight");
    
        

    // copy back to textarea on form submit...
    textarea.closest('form').submit(function() {
      textarea.val(editor.getSession().getValue());
    })
  });
});
  </script>

  
  <!--====== NEWS PART ENDS ======-->


    

   
     <?php

require_once("time.php");
require_once("footer.php");

?> 
   
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
