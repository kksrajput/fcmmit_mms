


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
					include("c-p.php");
					break;
				}
				case "cpp":
				{
					include("cpp-p.php");
					break;
				}
				case "c_cpp":
		        {
		          include("cpp-p.php");
		          break;
		        }
				case "cpp11":
				{
					include("cpp11.php");
					break;
				}
				case "java":
				{	
					include("java-p.php");
					break;
				}
				case "python2.7":
				{
					include("python27.php");
					break;
				}
				case "python":
				{
					include("python-p.php");
					break;
				}
			}
	}
?>


