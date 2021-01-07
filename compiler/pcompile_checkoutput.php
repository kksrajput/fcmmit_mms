
  <!--====== NEWS PART START ======-->

  <section id="news-part" class="pb-110 gray-bg">
    <div class="container white-bg">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-title pb-50">
            
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


         
        </div>
      </div> 
    </div> 
  </section>