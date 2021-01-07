<?php

session_start();
date_default_timezone_set("Asia/Dhaka");
require_once("config.php");
require_once("connection.php");

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

$sql="SELECT * FROM element WHERE pbid='$problemid' ";

$sq=mysqli_query($con,$sql);

$r1=mysqli_fetch_array($sq);




//echo "<textarea  style=\"display:none;\" name=\"in\" 

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

    <script>
// Set the date we're counting down to

function call(d,val,st){

//console.log(d);
//console.log(val);
//console.log(st);
var countDownDate = new Date(d).getTime();
var start =new Date(st).getTime();

//console.log(start);

var result;

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    
    
   
   

    if(start>now)
    {

       var distance = start - now;

        // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);


      // Output the result in an element with id="demo"
      var result=days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";

      //console.log(result);

       //document.getElementById(val).innerHTML = "Countdown : " + days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
    }
    else if(countDownDate>=now)
    {

       
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

         
        // Output the result in an element with id="demo"
        var result=days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

      //console.log(result);
        //document.getElementById(val).innerHTML = " Running.... : "+ days + "d " + hours + "h "
       //+ minutes + "m " + seconds + "s ";

       document.getElementById("show").style.display="block";




    }
    
    // If the count down is over, write some text 
    else if (now>countDownDate) {
        clearInterval(x);


        document.getElementById("fin").innerHTML = "Contest has Finished";


    }


    
}, 1000);

  return x;
}


</script>
  
  
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
                <h2>Submit Solution For Contest Problem</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="home-p.php">Portal</a></li>
                    <li class="breadcrumb-item"><a href="contest-p.php">Contests</a></li>
                    <li class="breadcrumb-item">Contest problems</li>                    
                    <li class="breadcrumb-item ">Problem Details</li>
                    <li class="breadcrumb-item active" aria-current="page">Submit Code</li>
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
      

      <div class="row justify-content-center">
        <div class="col-lg-10 mb-30 pt-40 pb-50" id="3">

            <div class="section-title pb-50">
                
            
            <h2 style="text-align:center;">Submit Contest Problem Code</h2>
          </div>

          <div class="form-group">
              <form action="pcompile-p.php" name="f2" method="POST" >
                <label for="language"><h5>Choose Language</h5></label>

                <select class="form-control" name="language" id="mode">
                  <!-- <option value="c">C</option> -->
                  <!-- <option value="cpp">C++</option> -->
                  <option  value="c_cpp">C/C++</option>
                  <!--<option value="cpp11">C++11</option>-->
                  <option value="java">Java</option>
                  <option value="python">Python 3</option>
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
                <textarea id="textcode" class="form-control" name="src" data-editor="c_cpp" data-gutter="1" rows="20" cols="50"></textarea><br><br>


                <input type="hidden" name='pbn' value="<?php echo $r1['pbname']; ?>">


                
                
                <!-- <label for="in"><h5>Enter Your Input</h5></label>
                <textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
                <textarea class="form-control" name="input" data-editor="" data-gutter="1" rows="10" cols="50"></textarea><br><br> -->  

                <!-- submit button for pcompile-p.php (submit code)-->
                

                <?php

$conid=$r1['id'];

   $q3="SELECT * FROM rapl_oj_contest WHERE id='$conid'";
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
      $current=date("Y-m-d H:i:s ");

      $m=$row['start_at'];
      $nv=$row['start_at'];


      $i++;
      $demo="demo"+"$i";
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
      
    <script type="text/javascript">
    var end=<?php print json_encode($en);?>; 
    var val=<?php print json_encode($i);?>; 
    var nv=<?php print json_encode($nv);?>; 

    //console.log("Start" +nv);

    call(end,val,nv);


   </script>
      
    <?php

     $diff=strtotime($nv)-strtotime($current);
     $current=strtotime($current);
     
    // echo "$current<br>";

     //echo "$diff";

     if($diff>0)
     {
         
         header("Location:countdown-p.php");

     }

     echo("<div id=\"show\" style=\"display:none;\"><input type=\"submit\" class=\"btn btn-success\" value=\"Submit\"></div><br><br><br>");

     echo("<div id=\"fin\"></div>");
     


     
      /*echo(" <a href=\"save.php?name=$row[table_name]\">$row[table_name]</a><br><br>");
        if($row['date_on']==$d && $seconds>=0 && $ss>=0 )
        {
             echo "<input type=\"submit\" class=\"btn btn-success\" value=\"Submit\"><br><br><br>";
         }
         else if($d>$row['date_on'] || ($d==$row['date_on'] && $t>$en))
         {
            echo "Contest Has Finished<br><br>";
         }
         else
         {
            echo " Contest Has Not Started Yet<br><br> ";
         }*/
    }




?>

                <!-- submit button for pcompile-p.php (Check Output)-->
                <!-- <input type="submit" class="main-btn mt-55" formaction="../../compiler/compile.php" formtarget="_blank" style=" box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" value="Check Output"><br><br><br> -->
                

              <h6> Note: If you are using Java Compiler, Use the main class name as "Main" as during the compilation and byte code execution , it loads the name of the main class as "Main" .</h6>

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
