<?php

session_start();
require_once("config.php");

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

if(!isset($_SESSION['un']))
{
    header("Location:plogin.php");
}
if(isset($_SESSION['un']))
{
    $username=$_SESSION['un'];
}
?>



<?php

$c=0;

if(isset($_GET['id']))
{
   $problemid=$_GET['id'];
   $c=1;
}

$sql="SELECT * FROM archieve WHERE id='$problemid' ";

$sq=mysqli_query($con,$sql);

$row=mysqli_fetch_array($sq);


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
    <title>NCET MONSTER MINDS</title>
    
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
    
    <?php require_once("header.php"); ?> 
    
    <!--====== HEADER PART ENDS ======-->
   

    <!--====== PAGE BANNER PART START ======-->

      <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(../../images/compiler/code-banner.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-banner-cont">
                <h2>Submit Solution For Practice Problem</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                    <li class="breadcrumb-item "><a href="home-p.php">Portal</a></li>
                    <li class="breadcrumb-item "><a href="archive-p.php">Practice Problem</a></li>
                    <li class="breadcrumb-item "><a href="description-p.php?id=<?php echo("$row[id]"); ?>">Problem Descriptions</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Submit Code</li>
                  </ol>
                </nav>
              </div>  <!-- page banner cont -->
            </div>
          </div> <!-- row -->
        </div> <!-- container -->
      </section>

    <!--====== PAGE BANNER PART ENDS ======-->
    
        <!--====== Description ======-->

        <section id="news-part" class="pt-115 gray-bg">
        <div class="container">
          
          <div class="row justify-content-center">
            <div class="col-lg-12 mb-30 white-bg pt-40 pb-40" id="3">
              <div class="section-title pb-50 "  >
                <h5>Problem Descriptions</h5>
                <h2 style="text-align:center;"><?php echo "$row[pbname]"; ?></h2>
              </div>

              <textarea class="form-control" rows="15" cols="50" readonly><?php echo "$row[pbdes]"; ?></textarea><br>
              <?php// echo "<b>Problem Setter : <a style=\"pointer-events: none;\" href=\"profile-p.php?user=$row[pbauthor]\">$row[pbauthor]</a></b><br><br>"; ?>             

            </div><!-- compiler container-->

          </div> <!-- row -->
        </div> 
      </section>

    <!--====== Description ======-->

      <!--====== NEWS PART START ======-->

  <section id="news-part" class="pt-50 pb-110 gray-bg">
    <div class="container white-bg">
      

      <div class="row justify-content-center">
        <div class="col-lg-10 mb-30 pt-40 pb-50" id="3">

            <div class="section-title pb-50">
                <h5>Problem name : <?php echo "$row[pbname]"; ?></h5>
            
            <h2 style="text-align:center;">Submit Code</h2>
          </div>

          <div class="form-group">
              <form action="pcompile-p.php" name="f2" method="POST" >
                <label for="language"><h5>Choose Language</h5></label>

                <select class="form-control" name="language" id="mode">
                  <!-- <option value="c">C</option> -->
                  <!-- <option value="cpp">C++</option> -->
                  <option  value="c_cpp">C/C++</option>
                  <!--<option value="cpp11">C++11</option>-->
                  <!--<option value="java">Java</option>-->
                  <!--<option value="python">Python 3</option>-->
                </select><br><br><br><br>

                <?php

                    if($c==1)
                    {
                       //echo "<input type=\"hidden\" name=\"pbn\" value=\"$problem\">";
                        echo "<input type=\"hidden\" name=\"id\" value=\"$problemid\">";
                    }
                    else
                    {
                        echo"<label for=\"pp\">Enter Problem ID</label><br>";
                        //echo "<input class=\"form-control\" type=\"text\" name=\"pbn\">";
                        echo "<input class=\"form-control\" type=\"text\" name=\"id\">";
                    }

                 ?>

                <label for="ta"><h5>Write Your Code</h5></label>
                <!--<textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>-->
                <textarea id="textcode" class="form-control" name="code" data-editor="c_cpp" data-gutter="1" rows="20" cols="50"></textarea><br><br>

                <input type="hidden" name='pbn' value="<?php echo $row['pbname']; ?>">
                
                
                <label for="in"><h5>Check Custom Input</h5></label>
                <!--<textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>-->
                <textarea class="form-control" name="input" data-editor="" data-gutter="1" rows="10" cols="50"></textarea><br>


                <!-- submit button for pcompile-p.php (Check Output)-->
                 <input type="submit" class="main-btn mt-55" formaction="../../compiler/pcompile_checkoutput.php" formtarget="_blank" style=" box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" value="Check Custom Output">
                
                <!-- submit button for pcompile-p.php (submit code)-->
                <input type="submit" class="main-btn mt-55" style=" box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" value="Run Test Cases"><br>
                

              <h6> <br>Note: If you are using Java Compiler, Use the main class name as "Main" as during the compilation and byte code execution , it loads the name of the main class as "Main" .</h6>

              </form>
            </div>
            
            
         
        </div>
      </div> 
    </div> 
  </section>
  
  <!-- <div id="result"></div> 
  <div id="result2"></div>  -->


  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.9/ace.js"></script>
  
<!--  <script>
$(document).ready(function(){
    //$(window).load(function() {
    $(window).on('load', function() {
        $("form").submit(function(event){
            // Stop form from submitting normally
            event.preventDefault();
            /* Serialize the submitted form control values to be sent to the web server with the request */
            var formValues = $(this).serialize();
            // Send the form data using post
            $.post("pcompile.php", formValues, function(data){
                // Display the returned data in browser
                $("#result").html(data);

                
                
            });
            
        });
        
    });
    
});
</script> -->
  
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
        editor.getSession().setMode("ace/mode/" + newMode);
        //editor.session.setMode("ace/mode/" + newMode)
        });

    // copy back to textarea on form submit...
    textarea.closest('form').submit(function() {
      textarea.val(editor.getSession().getValue());
    })
  });
});




  </script>

  
  <!--====== NEWS PART ENDS ======-->
  






    

    

   
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
