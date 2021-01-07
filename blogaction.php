<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit']))
{
    //  database configuration
    $dbHost = "216.10.249.126";
    $dbUsername = "ncetmons_ark";
    $dbPassword = "ARKark@007";
    $dbName = "ncetmons_monsterminds";
    
    //$dbHost = "103.53.41.210";
    //$dbUsername = "ncetmmhh_ark";
    //$dbPassword = "13774";
    //$dbName = "ncetmmhh_monsterminds";
    


    // Create database connection
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Check connection
    if ($db->connect_error)
    {
        die("Connection failed: " . $db->connect_error);
    }

    $name = $_POST['name'];
    $usn = $_POST['usn'];
    $email = $_POST['email'];
    $college = $_POST['college'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $phone = $_POST['phone'];
    $blogtext = $_POST['blogtext'];

    // File upload configuration
    $targetDir = "uploads/";

    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    $fileNames = array_filter($_FILES['files']['name']);
    if (!empty($fileNames))
    {
        foreach ($_FILES['files']['name'] as $key => $val)
        {
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;

            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Upload file to server
            if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath))
            {
                // Image db insert sql
                $insertValuesSQL .= "('" . $name . "','" . $usn . "','" . $email . "', '" . $college . "', '" . $title . "', '" . $category . "','" . $phone . "', '" . $blogtext . "', '" . $fileName . "', NOW()),";
            }
            else
            {
                $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
            }

        }

        if (!empty($insertValuesSQL))
        {
            $insertValuesSQL = trim($insertValuesSQL, ',');
            // Insert image file name into database
            $insert = $db->query("INSERT INTO blog (name, usn, email, college, title, category, phone, blogtext, file_name, uploaded_on) VALUES $insertValuesSQL");
            if ($insert)
            {
                $errorUpload = !empty($errorUpload) ? 'Upload Error: ' . trim($errorUpload, ' | ') : '';
                $errorUploadType = !empty($errorUploadType) ? 'File Type Error: ' . trim($errorUploadType, ' | ') : '';
                $errorMsg = !empty($errorUpload) ? '<br/>' . $errorUpload . '<br/>' . $errorUploadType : '<br/>' . $errorUploadType;
                $statusMsg = "Files are uploaded successfully." . $errorMsg;

                $to = "ark@ncetmonsterminds.com";
                $subject = "BLOG";
                $headers = "From: ark@ncetmonsterminds.com";
                $message = '                
                      Name: ' . $name . '
                      Email: ' . $email . '
                      USN: ' . $usn . '
                      College: ' . $college . '
                      Title: ' . $title . '
                      Category: ' . $category . ' 

                      Text: ' . $blogtext . ' 

                      ';

                if (mail($to, $subject, $message, $headers))
                {
                    //echo 'Thank you ' .$name. '<br><br> Your Blog is successfully Received . It will be Posted on http://ncetmonsterminds.com/blog.html Shortly. For further Inquiry feel free to Contact Us.<br>Regards<br>Team MONSTER MINDS <br>';
                    $to = $email;
                    $subject = "NCET MONSTER MINDS BLOG";
                    $headers = "From: ark@ncetmonsterminds.com";
                    $message = 'Thank you ' . $name . ', Your Blog is successfully Received . It will be Posted on http://ncetmonsterminds.com/blog.html Shortly. For further Inquiry feel free to Contact Us.Regards Team MONSTER MINDS';
                    mail($to, $subject, $message, $headers);
                }
                else
                {
                    echo "not send";
                }

?>

  <!DOCTYPE html>
  <html>
  <head><!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <title></title>
      <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Roboto:300,400,500,700');
        body, html {
          background: #000;
      }
      .container{
          margin-top: 200px;

      }


      h1 {
          color: #EEE;
          text-shadow: -1px -2px 3px rgba(17, 17, 17, 0.3);
          text-align: center;
          font-family: "Monsterrat", sans-serif;
          font-weight: 900;
          text-transform: uppercase;
          font-size: 60px;
          margin-bottom: -5px;
      }

      h1 underline {
          border-top: 5px solid rgba(26, 188, 156, 0.3);
          border-bottom: 5px solid rgba(26, 188, 156, 0.3);

      }

      h2 {

          font-size: 45px;
          margin-top: 40px;
          margin-left: 16px;
          font-family: 'Roboto', sans-serif;
          font-weight: 400;
          font-style: normal;

          color: #EEE;
          text-align: center;
          word-spacing: 4px;
      }
      h3 {
          margin-left: 16px;
          font-family: "Lato", sans-serif;
          font-weight: 600;
          color: #EEE;
          text-align: center;

      }

  </style>
</head>
<body>


  <div class="container">
    <div class="row justify-content-centre">
      <div class="col-lg-12">
        <h1><underline>Thank you! <?php echo "$name"; ?></underline></h1>
        <p><h2>Title : <?php echo "$title"; ?></h2></p>
        <p> <h3>Your Blog will be Posted on <strong><a href="http://ncetmonsterminds.com/blog.html">  MONSTER MINDS BLOG  </a></strong>Shortly, For further Inquiry feel free to Contact Us. </h3></p>
        <p><h3><strong>Blog is successfully Received </strong> and <strong><?php echo "$statusMsg"; ?></strong></h3>  </p>

        <p><h3><a class="btn btn-primary btn-sm" href="index.html" role="button">Continue to homepage</a></h3></p>      
    </div>
</div>
</div>


</body>
</html>
<?php
                // header("Location: index.php");
                
            }
            else
            {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
    }
    else
    {
        $statusMsg = 'Please select a Image file to upload. that will be added to your blog artical';
    }

    // Display status message
    //echo $statusMsg;
    // header("Location: index.php");
    

    
}
?>
