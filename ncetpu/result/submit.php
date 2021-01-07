<?php


if (isset($_REQUEST['sub'])) {
	$con = mysqli_connect('103.53.41.210', 'ncetmmhh_ark', '13774');
	if ($con) {
		echo "";
	}

	mysqli_select_db($con, 'ncetmmhh_quiz_pcme');

	$name = $_REQUEST['name'];

	$phone = $_REQUEST['phone'];

	$percentage = $_REQUEST['percentage'];

	$jee = $_REQUEST['jee'];

	$Comedk = $_REQUEST['Comedk'];

	$other = $_REQUEST['other'];

	$q = "insert into result(name,  phone, percentage, jee, Comedk, other) values ('$name', '$phone', '$percentage', '$jee', '$Comedk', '$other')";

	mysqli_query($con, $q);


?>


	<!DOCTYPE HTML>
	<html>

	<head>
		<title>NGI | Results</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!--web-fonts-->
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	</head>
	<link href="//fonts.googleapis.com/css?family=Arvo:400,400i,700,700i" rel="stylesheet">

	<!--web-fonts-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-73144081-5"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-73144081-5');
	</script>
	
	<script data-ad-client="ca-pub-6244981918944412" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	<style type="text/css">
		#myInput {
			background-image: url('/css/searchicon.png');
			/* Add a search icon to input */
			background-position: 10px 12px;
			/* Position the search icon */
			background-repeat: no-repeat;
			/* Do not repeat the icon image */
			width: 85%;
			/* Full-width */
			font-size: 16px;
			/* Increase font-size */
			padding: 12px 20px 12px 40px;
			/* Add some padding */
			border: 1px solid #ddd;
			/* Add a grey border */
			margin-bottom: 12px;
			/* Add some space below the input */
		}

		#myTable {
			border-collapse: collapse;
			/* Collapse borders */
			width: 100%;
			/* Full-width */
			border: 1px solid #ddd;
			/* Add a grey border */
			font-size: 18px;
			/* Increase font-size */
		}

		#myTable th,
		#myTable td {
			text-align: left;
			/* Left-align text */
			padding: 12px;
			/* Add padding */
		}

		#myTable tr {
			/* Add a bottom border to all table rows */
			border-bottom: 1px solid #ddd;
		}

		#myTable tr.header,
		#myTable tr:hover {
			/* Add a grey background color to the table header and on hover */
			background-color: #f1f1f1;
		}
	</style>

	<body>
		<!---header--->
		<div class="header">
			<h1>NGI RESULTS 2020-21</h1>
		</div>
		<!---header--->
		<!---main--->
		<div class="main-content">
			<div class="img-w3" style="">
			<img src="g.jpg" alt="Nature" class="responsive"styele="width:100%; height:auto;" >
			</div>
		</div>
		
		<div class="header">
			<h1>Congratulations !!!</h1>
		</div>

		<div class="main-content">
			<div class="contact-w3" style="display:table;">
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Student names..">
				<table id="myTable" class="tableizer-table">

					<thead>
						<tr class="header">
							<th style="width:60%;">Student Name</th>
							<th style="width:40%;">Father Name</th>
							<th>Rank</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>A .Bharath Kumar Reddy</td>
							<td>A. Sreenavasulu Redd</td>
							<td>587</td>
						</tr>
						<tr>
							<td>A. Chenchusiva</td>
							<td>A.Bhaskar</td>
							<td>564</td>
						</tr>
						<tr>
							<td>A. Divya Teja Reddy</td>
							<td>A. Rama Koti Reddy</td>
							<td>630</td>
						</tr>
						<tr>
							<td>A. Surya Bhagavan Reddy</td>
							<td>A. Raja Gopal Reddy</td>
							<td>631</td>
						</tr>
						<tr>
							<td>A.Durgaprasad Reddy</td>
							<td>A.Janardhan Reddy</td>
							<td>536</td>
						</tr>
						<tr>
							<td>A.Janaki Ram</td>
							<td>A Krishnam Raju</td>
							<td>10</td>
						</tr>
						<tr>
							<td>A.Mansoor Ali</td>
							<td>Asar Rahim</td>
							<td>25</td>
						</tr>
						<tr>
							<td>A.Navyasree</td>
							<td>A. Chinna Thipparedd</td>
							<td>451</td>
						</tr>
						<tr>
							<td>A.Sai Kumar</td>
							<td>A Thimmappa</td>
							<td>15</td>
						</tr>
						<tr>
							<td>A.Samanna</td>
							<td>A Chinna Lakshmanna</td>
							<td>7</td>
						</tr>
						<tr>
							<td>A.Upendra Goud</td>
							<td>A Satyanarayana Goud</td>
							<td>12</td>
						</tr>
						<tr>
							<td>Aadarsh Shaw</td>
							<td>Rajesh Shaw</td>
							<td>551</td>
						</tr>
						<tr>
							<td>Abdul Kalam</td>
							<td>Mohammad Hussain</td>
							<td>207</td>
						</tr>
						<tr>
							<td>Abdul Razak</td>
							<td>Darvesh Khadar</td>
							<td>83</td>
						</tr>
						<tr>
							<td>Abdul Razaq</td>
							<td>Shaik Shasavali</td>
							<td>325</td>
						</tr>
						<tr>
							<td>Abhinav Kumar</td>
							<td>Mallikarjuna Reddy</td>
							<td>199</td>
						</tr>
						<tr>
							<td>Abhiram Rayal. M</td>
							<td>Subramanyam Baby. M</td>
							<td>854</td>
						</tr>
						<tr>
							<td>Abid Sameer</td>
							<td>Abdul Azeez</td>
							<td>401</td>
						</tr>
						<tr>
							<td>Achyuth Narayana</td>
							<td>Naggaraju</td>
							<td>228</td>
						</tr>
						<tr>
							<td>Adika Jayasankar</td>
							<td>A Jayarami Reddy</td>
							<td>499</td>
						</tr>
						<tr>
							<td>Aitha Sai Harsha</td>
							<td>Aitha Dorababu</td>
							<td>553</td>
						</tr>
						<tr>
							<td>Ajay</td>
							<td>P Venkata Ramudu</td>
							<td>242</td>
						</tr>
						<tr>
							<td>Ajay Kumar</td>
							<td>Ramanjaneyulu</td>
							<td>273</td>
						</tr>
						<tr>
							<td>Ajitabh Kashyap</td>
							<td>Ajay Kumar Jha</td>
							<td>754</td>
						</tr>
						<tr>
							<td>Ajith Kumar Reddy</td>
							<td>S Bhaskar Reddy</td>
							<td>287</td>
						</tr>
						<tr>
							<td>Akanksha Lakra</td>
							<td>Subhash Lakra</td>
							<td>811</td>
						</tr>
						<tr>
							<td>Akhil</td>
							<td>B.Sreeramulu</td>
							<td>46</td>
						</tr>
						<tr>
							<td>Akhil Chowdari</td>
							<td>Venkata Ramana</td>
							<td>378</td>
						</tr>
						<tr>
							<td>Akhil Kumar</td>
							<td>Venkateswarlu</td>
							<td>395</td>
						</tr>
						<tr>
							<td>Akkili Himabindu</td>
							<td>Akkili Veerabhadra R</td>
							<td>725</td>
						</tr>
						<tr>
							<td>Akshay</td>
							<td>T V Nagaraj Prasad</td>
							<td>663</td>
						</tr>
						<tr>
							<td>Aleem Basha</td>
							<td>Nabi Rasool</td>
							<td>858</td>
						</tr>
						<tr>
							<td>Allaka Bindumadhuri</td>
							<td>Allaka Chandra Shekh</td>
							<td>718</td>
						</tr>
						<tr>
							<td>Amansha</td>
							<td>Mastanvali</td>
							<td>203</td>
						</tr>
						<tr>
							<td>Ambur Puneeth</td>
							<td>A.Tharakanadh</td>
							<td>419</td>
						</tr>
						<tr>
							<td>Amrita Mishra</td>
							<td>Satyanarayana Mishra</td>
							<td>842</td>
						</tr>
						<tr>
							<td>Anantha Mohan Reddy</td>
							<td>Anantha Ramachandra</td>
							<td>565</td>
						</tr>
						<tr>
							<td>Anil</td>
							<td>A Srinivasulu</td>
							<td>14</td>
						</tr>
						<tr>
							<td>Anil Kumar</td>
							<td>Y.Srinivasulu</td>
							<td>400</td>
						</tr>
						<tr>
							<td>Anil Kumar Redddy</td>
							<td>J.Pandu Ranga Reddy</td>
							<td>129</td>
						</tr>
						<tr>
							<td>Anireddy Manasa</td>
							<td>A. Sheshareddy</td>
							<td>741</td>
						</tr>
						<tr>
							<td>Anitha</td>
							<td>Eswara Rao</td>
							<td>826</td>
						</tr>
						<tr>
							<td>Anjunatha Reddy</td>
							<td>Ch Kesava Reddy</td>
							<td>64</td>
						</tr>
						<tr>
							<td>Ankit Kumar</td>
							<td>Nityanand Singh</td>
							<td>616</td>
						</tr>
						<tr>
							<td>Annavaram Dinesh Kumar Reddy</td>
							<td>A.Ramana Reddy</td>
							<td>525</td>
						</tr>
						<tr>
							<td>Annuru Balaji</td>
							<td>Annuru Jagannatham</td>
							<td>664</td>
						</tr>
						<tr>
							<td>Anuhya. Bogireddy</td>
							<td>B.Venkatasubbareddy</td>
							<td>632</td>
						</tr>
						<tr>
							<td>Anvesh</td>
							<td>A Sabapathi</td>
							<td>11</td>
						</tr>
						<tr>
							<td>Aravind Swamy</td>
							<td>J Jagadeesh Swamy</td>
							<td>126</td>
						</tr>
						<tr>
							<td>Arnab Bhattacherjee</td>
							<td>Ashutosh Bhattacherj</td>
							<td>460</td>
						</tr>
						<tr>
							<td>Ashok</td>
							<td>Veera Badrappa</td>
							<td>373</td>
						</tr>
						<tr>
							<td>Ashok Kumar Reddy</td>
							<td>A Somasundar Reddy</td>
							<td>13</td>
						</tr>
						<tr>
							<td>Athaulla</td>
							<td>M Khasim Vali</td>
							<td>179</td>
						</tr>
						<tr>
							<td>Avinash Galiboina</td>
							<td>Rosaiah Galiboina</td>
							<td>466</td>
						</tr>
						<tr>
							<td>Ayaluri.Pavanjyothireddy</td>
							<td>Ayaluri.Sivashasnkar</td>
							<td>720</td>
						</tr>
						<tr>
							<td>B .Archana</td>
							<td>B.Akkulappa</td>
							<td>484</td>
						</tr>
						<tr>
							<td>B Dinesh Reddy</td>
							<td>B Sudhakar Reddy</td>
							<td>649</td>
						</tr>
						<tr>
							<td>B. Jeevan Achari</td>
							<td>B. Nagaraja</td>
							<td>441</td>
						</tr>
						<tr>
							<td>B. Vineela</td>
							<td>B. Narayana Rao</td>
							<td>801</td>
						</tr>
						<tr>
							<td>B.Akhilesh</td>
							<td>B Raja Sekhar</td>
							<td>33</td>
						</tr>
						<tr>
							<td>B.Charan Kumar</td>
							<td>B.Satish</td>
							<td>282</td>
						</tr>
						<tr>
							<td>B.Ganesh Naidu</td>
							<td>B Sriramulu</td>
							<td>37</td>
						</tr>
						<tr>
							<td>B.Geethanjali</td>
							<td>B.Meghanath Reddy</td>
							<td>683</td>
						</tr>
						<tr>
							<td>B.Hari Prasad</td>
							<td>B Thirupal</td>
							<td>41</td>
						</tr>
						<tr>
							<td>B.Harish Babu</td>
							<td>Venkataswamy</td>
							<td>391</td>
						</tr>
						<tr>
							<td>B.Karthik Sing</td>
							<td>B Nagarju Sing</td>
							<td>31</td>
						</tr>
						<tr>
							<td>B.Karthikbabu</td>
							<td>B Ramakrishna</td>
							<td>35</td>
						</tr>
						<tr>
							<td>B.Keshava Narayana</td>
							<td>Anjaneyulu</td>
							<td>23</td>
						</tr>
						<tr>
							<td>B.Lalith Kumar</td>
							<td>B.Ramulu</td>
							<td>426</td>
						</tr>
						<tr>
							<td>B.Madhu</td>
							<td>Chinna Maddaiah</td>
							<td>68</td>
						</tr>
						<tr>
							<td>B.Mohan Krishna</td>
							<td>B.Balasubramanyam</td>
							<td>402</td>
						</tr>
						<tr>
							<td>B.Mohan Raj Naik</td>
							<td>B.Thirupal Naik</td>
							<td>633</td>
						</tr>
						<tr>
							<td>B.Mukesh Kumar</td>
							<td>B.Kumar</td>
							<td>716</td>
						</tr>
						<tr>
							<td>B.Naresh Kumar</td>
							<td>B.Kristappa</td>
							<td>684</td>
						</tr>
						<tr>
							<td>B.Naveenkumar</td>
							<td>B.Nagaraju</td>
							<td>726</td>
						</tr>
						<tr>
							<td>B.P.Venkata Jai Krishna</td>
							<td>B.P.Venkata Ramana</td>
							<td>756</td>
						</tr>
						<tr>
							<td>B.Pallavi</td>
							<td>B.V.Prasad</td>
							<td>427</td>
						</tr>
						<tr>
							<td>B.Sainath Babu</td>
							<td>B.Chinna Babu</td>
							<td>795</td>
						</tr>
						<tr>
							<td>B.Sandhya</td>
							<td>B.Viswanath Goud</td>
							<td>685</td>
						</tr>
						<tr>
							<td>B.Shashidhar Reddy</td>
							<td>B.Venkareswara Reddy</td>
							<td>650</td>
						</tr>
						<tr>
							<td>B.Sirresha</td>
							<td>B.Raju</td>
							<td>686</td>
						</tr>
						<tr>
							<td>B.Srujana Abhishek</td>
							<td>B Suvarna Raju</td>
							<td>40</td>
						</tr>
						<tr>
							<td>B.Sudhakar</td>
							<td>B Madhu</td>
							<td>30</td>
						</tr>
						<tr>
							<td>B.Usha Sireesha</td>
							<td>B.Venkata Krishnaiah</td>
							<td>432</td>
						</tr>
						<tr>
							<td>B.Vamsi Siva Sai</td>
							<td>B.Venkata Krishnaiah</td>
							<td>467</td>
						</tr>
						<tr>
							<td>B.Vineetha</td>
							<td>B.Bramheshwar Reddy</td>
							<td>742</td>
						</tr>
						<tr>
							<td>Badvel Avais</td>
							<td>Badvel Yunush</td>
							<td>634</td>
						</tr>
						<tr>
							<td>Balaji Avinash</td>
							<td>Sathish Kumar</td>
							<td>300</td>
						</tr>
						<tr>
							<td>Bali Reddy</td>
							<td>Eswar Reddy</td>
							<td>93</td>
						</tr>
						<tr>
							<td>Bandaru Phani Chandra</td>
							<td>Bandaru Nagarjuna</td>
							<td>485</td>
						</tr>
						<tr>
							<td>Bandaru Venkata Chakradhar</td>
							<td>Bandaru Bhaskar</td>
							<td>291</td>
						</tr>
						<tr>
							<td>Bandi Kiran Babu</td>
							<td>Bandi Tatarao</td>
							<td>526</td>
						</tr>
						<tr>
							<td>Bangaru Abhinaya</td>
							<td>Chinnayya Naidu</td>
							<td>676</td>
						</tr>
						<tr>
							<td>Bathula Sulochana</td>
							<td>Bathula Peddabalaiah</td>
							<td>675</td>
						</tr>
						<tr>
							<td>Beeray Prasanna</td>
							<td>B.Sreenivasulu</td>
							<td>588</td>
						</tr>
						<tr>
							<td>Bhairy Dharani</td>
							<td>Bhairy Bhaskara Rao</td>
							<td>833</td>
						</tr>
						<tr>
							<td>Bharath</td>
							<td>Pullaiah</td>
							<td>255</td>
						</tr>
						<tr>
							<td>Bharath Goud</td>
							<td>K Thikka Swamy</td>
							<td>149</td>
						</tr>
						<tr>
							<td>Bharath Kumar</td>
							<td>Jaya Raju</td>
							<td>133</td>
						</tr>
						<tr>
							<td>Bharath Kumar</td>
							<td>Chandra Sekhar</td>
							<td>576</td>
						</tr>
						<tr>
							<td>Bharath Kumar</td>
							<td>M.Venu Gopola Krishn</td>
							<td>831</td>
						</tr>
						<tr>
							<td>Bharath Prakash Reddy</td>
							<td>Sudhakara Reddy</td>
							<td>3</td>
						</tr>
						<tr>
							<td>Bhargav</td>
							<td>K Sivasekhar</td>
							<td>147</td>
						</tr>
						<tr>
							<td>Bhargava Kumar</td>
							<td>Venkata Sivanna</td>
							<td>384</td>
						</tr>
						<tr>
							<td>Bhavani Devi</td>
							<td>Nagi Reddy</td>
							<td>468</td>
						</tr>
						<tr>
							<td>Bhumireddy Hanitha</td>
							<td>Bhumireddy Narasimha</td>
							<td>665</td>
						</tr>
						<tr>
							<td>Bhupal Reddy</td>
							<td>G.Narasimha Reddy</td>
							<td>114</td>
						</tr>
						<tr>
							<td>Bhuvandeep</td>
							<td>Anand Nazmal</td>
							<td>508</td>
						</tr>
						<tr>
							<td>Bhuvaneswar</td>
							<td>Venkataramanaiah</td>
							<td>390</td>
						</tr>
						<tr>
							<td>Bojje Nandivardhan Reddy</td>
							<td>B Sankar Reddy</td>
							<td>600</td>
						</tr>
						<tr>
							<td>Bottu.Lokesh</td>
							<td>B. Rajagopal Naidu</td>
							<td>422</td>
						</tr>
						<tr>
							<td>Boya Madhusudhan</td>
							<td>Boya Sukali</td>
							<td>797</td>
						</tr>
						<tr>
							<td>Boya Pavithra</td>
							<td>Boya Madhava Swamy</td>
							<td>705</td>
						</tr>
						<tr>
							<td>Boyella Sai Jyothika Reddy</td>
							<td>Boyella Padma Sekhar</td>
							<td>360</td>
						</tr>
						<tr>
							<td>Budumuru Varun</td>
							<td>B V Rao</td>
							<td>452</td>
						</tr>
						<tr>
							<td>Buduru Jayasurya</td>
							<td>B. Rajendra</td>
							<td>651</td>
						</tr>
						<tr>
							<td>Burugula Sravani</td>
							<td>Burugula Ravi</td>
							<td>812</td>
						</tr>
						<tr>
							<td>C Clive Nelson</td>
							<td>S Clemen Suresh</td>
							<td>575</td>
						</tr>
						<tr>
							<td>C Mahammad Siraj</td>
							<td>C Rasool Bavaji</td>
							<td>261</td>
						</tr>
						<tr>
							<td>C Praneeth Reddy</td>
							<td>Sreedhar Reddy</td>
							<td>589</td>
						</tr>
						<tr>
							<td>C Sagar Reddy</td>
							<td>V Chalapathi Reddy</td>
							<td>843</td>
						</tr>
						<tr>
							<td>C. Likhitha</td>
							<td>C. Anjineyulu</td>
							<td>415</td>
						</tr>
						<tr>
							<td>C. Srinivasulareddy</td>
							<td>C.Jayaramireddy</td>
							<td>554</td>
						</tr>
						<tr>
							<td>C. V. Rakesh Reddy</td>
							<td>C. V. Sartha Reddy</td>
							<td>635</td>
						</tr>
						<tr>
							<td>C. Vydehi</td>
							<td>C. Rammohan Rao</td>
							<td>687</td>
						</tr>
						<tr>
							<td>C.Anusha</td>
							<td>C.Venkatesh</td>
							<td>601</td>
						</tr>
						<tr>
							<td>C.Chamandeshwari</td>
							<td>C.Ramudu</td>
							<td>869</td>
						</tr>
						<tr>
							<td>C.Harsha Deep</td>
							<td>C.Ramesh</td>
							<td>778</td>
						</tr>
						<tr>
							<td>C.K Divyasree</td>
							<td>C.Kishorekumar</td>
							<td>688</td>
						</tr>
						<tr>
							<td>C.Madhu</td>
							<td>Maddileti</td>
							<td>191</td>
						</tr>
						<tr>
							<td>C.Naveen</td>
							<td>Prahaladha</td>
							<td>250</td>
						</tr>
						<tr>
							<td>C.Nihitha</td>
							<td>C.Murali</td>
							<td>469</td>
						</tr>
						<tr>
							<td>C.Pavan Kumar</td>
							<td>C Hanumanthu</td>
							<td>55</td>
						</tr>
						<tr>
							<td>C.Pavan Kumar Reddy</td>
							<td>C.Siva Reddy</td>
							<td>743</td>
						</tr>
						<tr>
							<td>C.Prasanna Siva Sai</td>
							<td>Naga Brahma Chari</td>
							<td>221</td>
						</tr>
						<tr>
							<td>C.Rolandshanthi Paul</td>
							<td>Ch Ashkanaz</td>
							<td>63</td>
						</tr>
						<tr>
							<td>C.Sai Ashwin</td>
							<td>C Sivaji</td>
							<td>56</td>
						</tr>
						<tr>
							<td>C.Saikumar</td>
							<td>C Venkata Ramudu</td>
							<td>58</td>
						</tr>
						<tr>
							<td>Ch. Keerthi Sadha</td>
							<td>Ch. Ravi</td>
							<td>453</td>
						</tr>
						<tr>
							<td>Chakradhar</td>
							<td>M.V Ramana</td>
							<td>188</td>
						</tr>
						<tr>
							<td>Chakrapani Reddy</td>
							<td>R.Viswanath Reddy</td>
							<td>259</td>
						</tr>
						<tr>
							<td>Challa Prashanthi</td>
							<td>Challa Balaiah</td>
							<td>774</td>
						</tr>
						<tr>
							<td>Challa Rakesh</td>
							<td>Sankaraiah Challa</td>
							<td>590</td>
						</tr>
						<tr>
							<td>Chambakur Lokesh</td>
							<td>Chambakur Chandrasek</td>
							<td>527</td>
						</tr>
						<tr>
							<td>Chand Basha</td>
							<td>Shaik Noor Bash</td>
							<td>324</td>
						</tr>
						<tr>
							<td>Chandaka Sri Pujitha</td>
							<td>Chandaka Venu Gopal</td>
							<td>859</td>
						</tr>
						<tr>
							<td>Chandra Sekhar Reddy</td>
							<td>Madhu Babu</td>
							<td>193</td>
						</tr>
						<tr>
							<td>Channa Poojitha</td>
							<td>Channa Venkata Rama</td>
							<td>689</td>
						</tr>
						<tr>
							<td>Charan Kumar</td>
							<td>Sudhakar</td>
							<td>349</td>
						</tr>
						<tr>
							<td>Charan Kumar Reddy</td>
							<td>B.Ramakrishna Reddy</td>
							<td>45</td>
						</tr>
						<tr>
							<td>Charan Reddy</td>
							<td>B Sudhakara Reddy</td>
							<td>38</td>
						</tr>
						<tr>
							<td>Chatrapati Shivaji</td>
							<td>Govindu</td>
							<td>119</td>
						</tr>
						<tr>
							<td>Chennakeshava Redddy</td>
							<td>A Gopal Reddy</td>
							<td>8</td>
						</tr>
						<tr>
							<td>Chennakeshavareddy</td>
							<td>Rajagopalreddy</td>
							<td>264</td>
						</tr>
						<tr>
							<td>Chigili Narasimha</td>
							<td>Chigili Rangaswamy</td>
							<td>813</td>
						</tr>
						<tr>
							<td>Chinthala Venkata Sainath Yadav</td>
							<td>Chinthala Raghavendr</td>
							<td>537</td>
						</tr>
						<tr>
							<td>Chinthalapalli Vijaya Bharathi</td>
							<td>Chinthalapalli Basi</td>
							<td>652</td>
						</tr>
						<tr>
							<td>Choppalli Srivalli</td>
							<td>Ch.Satyanarayana</td>
							<td>713</td>
						</tr>
						<tr>
							<td>Chowdam Navyasree</td>
							<td>Chowdam Ramesh</td>
							<td>820</td>
						</tr>
						<tr>
							<td>Chukka Mohit</td>
							<td>Chukka Srinivas Rao</td>
							<td>555</td>
						</tr>
						<tr>
							<td>D Naresh</td>
							<td>D Venkatarami Reddy</td>
							<td>772</td>
						</tr>
						<tr>
							<td>D.Feroz</td>
							<td>D.C Mastan</td>
							<td>78</td>
						</tr>
						<tr>
							<td>D.Murthu Javali</td>
							<td>Ilyash Basha</td>
							<td>125</td>
						</tr>
						<tr>
							<td>D.Naveen Babu</td>
							<td>Venkataswamy</td>
							<td>392</td>
						</tr>
						<tr>
							<td>D.Venkateshwara Reddy</td>
							<td>Bala Nagi Reddy</td>
							<td>53</td>
						</tr>
						<tr>
							<td>D.Vijay Kumar</td>
							<td>D Peddaiah</td>
							<td>73</td>
						</tr>
						<tr>
							<td>D.Yashwanth</td>
							<td>D Suresh</td>
							<td>76</td>
						</tr>
						<tr>
							<td>Dadakhalandar</td>
							<td>Shaikshavali</td>
							<td>326</td>
						</tr>
						<tr>
							<td>Dadi Pradeep Surya</td>
							<td>Dadi Pydi Raju</td>
							<td>821</td>
						</tr>
						<tr>
							<td>Dakeswar</td>
							<td>K Shankar</td>
							<td>145</td>
						</tr>
						<tr>
							<td>Dandeboyina Vamshi Sai</td>
							<td>Dandeboyina Subbaray</td>
							<td>410</td>
						</tr>
						<tr>
							<td>Darshan</td>
							<td>Srineevasul</td>
							<td>823</td>
						</tr>
						<tr>
							<td>Dasanapalli Sannihitha</td>
							<td>Dasanapalli Sreeniva</td>
							<td>486</td>
						</tr>
						<tr>
							<td>Dateshwara Reddy</td>
							<td>Lakshmi Reddy</td>
							<td>174</td>
						</tr>
						<tr>
							<td>Dawood</td>
							<td>Sk Bandenawaz</td>
							<td>330</td>
						</tr>
						<tr>
							<td>Deekshit</td>
							<td>Ravindra Reddy</td>
							<td>283</td>
						</tr>
						<tr>
							<td>Deekshith Reddy</td>
							<td>Siva Reddy</td>
							<td>887</td>
						</tr>
						<tr>
							<td>Deekshith Reddy Gundreddy</td>
							<td>Anand Reddy Gundredd</td>
							<td>771</td>
						</tr>
						<tr>
							<td>Deepak Veera Kumar</td>
							<td>Venkataramana Rao</td>
							<td>389</td>
						</tr>
						<tr>
							<td>Devarakonda Bharadwaj</td>
							<td>Devarakonda Ravi San</td>
							<td>662</td>
						</tr>
						<tr>
							<td>Devender Reddy</td>
							<td>Bhaskar Reddy</td>
							<td>556</td>
						</tr>
						<tr>
							<td>Devendra Naik</td>
							<td>D.Krishna Naik</td>
							<td>79</td>
						</tr>
						<tr>
							<td>Devpara Sai</td>
							<td>Mr Vivekananda Sai</td>
							<td>849</td>
						</tr>
						<tr>
							<td>Dhanush</td>
							<td>M.Prabhakar</td>
							<td>186</td>
						</tr>
						<tr>
							<td>Dharani Kumar</td>
							<td>K Dasthagiri</td>
							<td>138</td>
						</tr>
						<tr>
							<td>Dharmateja</td>
							<td>Jayaram</td>
							<td>135</td>
						</tr>
						<tr>
							<td>Dheeraj</td>
							<td>Hari Prasad</td>
							<td>727</td>
						</tr>
						<tr>
							<td>Dhulipalla.Krishna Murthy</td>
							<td>Dhulipalla.Sitaramai</td>
							<td>591</td>
						</tr>
						<tr>
							<td>Dibya Deviparna Sahoo</td>
							<td>Asit Kumar Sahoo</td>
							<td>768</td>
						</tr>
						<tr>
							<td>Dileep Kumar</td>
							<td>N Anjaneyulu</td>
							<td>211</td>
						</tr>
						<tr>
							<td>Dinesh Babu</td>
							<td>Tirupal</td>
							<td>851</td>
						</tr>
						<tr>
							<td>Dinesh Kumar Mallik</td>
							<td>Dhanurdhar Mallik</td>
							<td>599</td>
						</tr>
						<tr>
							<td>Diptangshu Dasgupta</td>
							<td>Pradyut Dasgupta</td>
							<td>681</td>
						</tr>
						<tr>
							<td>Divakar</td>
							<td>Pedda Sanjeeva Rayudu</td>
							<td>246</td>
						</tr>
						<tr>
							<td>Dovari Ajay Babu</td>
							<td>Dovari Suresh Babu</td>
							<td>744</td>
						</tr>
						<tr>
							<td>Dudyala.Akhila</td>
							<td>D.Sudharsan Reddy</td>
							<td>757</td>
						</tr>
						<tr>
							<td>Dulam Vamsika</td>
							<td>Dulam Madhusudhan</td>
							<td>617</td>
						</tr>
						<tr>
							<td>Durga Prasad</td>
							<td>Sreeramulu</td>
							<td>336</td>
						</tr>
						<tr>
							<td>Dushantha Reddy</td>
							<td>M.Venkatesara Reddy</td>
							<td>189</td>
						</tr>
						<tr>
							<td>E. Bhargavi</td>
							<td>E. Gangaraju</td>
							<td>706</td>
						</tr>
						<tr>
							<td>E.Muralidhar Goud</td>
							<td>Laxminarayana Goud</td>
							<td>177</td>
						</tr>
						<tr>
							<td>E.Sai Pavan Goud</td>
							<td>E Srinivas Goud</td>
							<td>89</td>
						</tr>
						<tr>
							<td>Ejju Aswitha</td>
							<td>Ejju Suribabu</td>
							<td>745</td>
						</tr>
						<tr>
							<td>Ekambar Reddy</td>
							<td>Vemana Reddy</td>
							<td>376</td>
						</tr>
						<tr>
							<td>Fairoz</td>
							<td>Saleem Basha</td>
							<td>307</td>
						</tr>
						<tr>
							<td>G Chiranjiv Rao</td>
							<td>G Venkat Rao</td>
							<td>877</td>
						</tr>
						<tr>
							<td>G Harsha Vardhan</td>
							<td>KìˆÌ¤. NìˆÌ¤AìˆÌ¤Gìˆ</td>
							<td>824</td>
						</tr>
						<tr>
							<td>G Naveen Kumar</td>
							<td>G Minirathnam</td>
							<td>758</td>
						</tr>
						<tr>
							<td>G. Hima Bindu</td>
							<td>G. Suresh</td>
							<td>538</td>
						</tr>
						<tr>
							<td>G. Lakshmi Narasimha Yadav</td>
							<td>G. Yellaiah</td>
							<td>528</td>
						</tr>
						<tr>
							<td>G. Manohar</td>
							<td>G. Siva Madhava</td>
							<td>602</td>
						</tr>
						<tr>
							<td>G. Sireesha</td>
							<td>G. Umapathi Naidu</td>
							<td>636</td>
						</tr>
						<tr>
							<td>G.Adarsh Reddy</td>
							<td>G.Subba Reddy</td>
							<td>836</td>
						</tr>
						<tr>
							<td>G.Akhil Yadav</td>
							<td>Radha Krishna</td>
							<td>260</td>
						</tr>
						<tr>
							<td>G.Balajikumar</td>
							<td>G.Gopal</td>
							<td>577</td>
						</tr>
						<tr>
							<td>G.Chidambaram</td>
							<td>G.Thimmappa</td>
							<td>714</td>
						</tr>
						<tr>
							<td>G.Gopi</td>
							<td>G Ramakrishna</td>
							<td>104</td>
						</tr>
						<tr>
							<td>G.Hamenth</td>
							<td>G.Laxmi Narayana</td>
							<td>653</td>
						</tr>
						<tr>
							<td>G.Kaushik Narayna Chowdary</td>
							<td>G Srinivasulu</td>
							<td>107</td>
						</tr>
						<tr>
							<td>G.Komal Kumar</td>
							<td>G Govardhan Rao</td>
							<td>95</td>
						</tr>
						<tr>
							<td>G.Likhith</td>
							<td>G Ram Mohan</td>
							<td>101</td>
						</tr>
						<tr>
							<td>G.Likhitha</td>
							<td>G.Taviti Naidu</td>
							<td>647</td>
						</tr>
						<tr>
							<td>G.Madhava Murali</td>
							<td>Madhusudhan</td>
							<td>195</td>
						</tr>
						<tr>
							<td>G.Meghanath</td>
							<td>G.Sreenivasulu</td>
							<td>423</td>
						</tr>
						<tr>
							<td>G.Pavan</td>
							<td>Suresh</td>
							<td>351</td>
						</tr>
						<tr>
							<td>G.Praveen</td>
							<td>G Uma Maheswar</td>
							<td>109</td>
						</tr>
						<tr>
							<td>G.Praveen Kumar Reddy</td>
							<td>G Chandra Reddy</td>
							<td>94</td>
						</tr>
						<tr>
							<td>G.Rahul</td>
							<td>G Kiran Kumar</td>
							<td>98</td>
						</tr>
						<tr>
							<td>G.Sai Harshith</td>
							<td>G.Venkateswara Rao</td>
							<td>878</td>
						</tr>
						<tr>
							<td>G.Sai Kiran</td>
							<td>G.Srinivasullu</td>
							<td>500</td>
						</tr>
						<tr>
							<td>G.Sekhar Babu</td>
							<td>G Raju</td>
							<td>100</td>
						</tr>
						<tr>
							<td>G.Sreehari</td>
							<td>Gunti Ramaiah</td>
							<td>120</td>
						</tr>
						<tr>
							<td>G.Srinivasulu</td>
							<td>G.Tirupathaiah</td>
							<td>578</td>
						</tr>
						<tr>
							<td>G.Surya Prakash</td>
							<td>G.Kishore Kumar</td>
							<td>783</td>
						</tr>
						<tr>
							<td>G.Venkates Wara Goud</td>
							<td>G.Pullaiah Goud</td>
							<td>579</td>
						</tr>
						<tr>
							<td>G.Vijay</td>
							<td>Dasthagiri</td>
							<td>84</td>
						</tr>
						<tr>
							<td>G.Viswanath</td>
							<td>G.S.Chowdaiah</td>
							<td>557</td>
						</tr>
						<tr>
							<td>Gajulapalli Bhargavi</td>
							<td>G.Vijaya Kumar Reddy</td>
							<td>433</td>
						</tr>
						<tr>
							<td>Galiboina Avinash</td>
							<td>Rosaiah Galiboina</td>
							<td>470</td>
						</tr>
						<tr>
							<td>Gampa Venkata Sai Chaitanya</td>
							<td>Gampa Srinivasa Rao</td>
							<td>487</td>
						</tr>
						<tr>
							<td>Gandikota Yaseen Khan</td>
							<td>Gandikota Yusuf Kha</td>
							<td>443</td>
						</tr>
						<tr>
							<td>Ganesh</td>
							<td>Malleswaraiah</td>
							<td>198</td>
						</tr>
						<tr>
							<td>Ganesh</td>
							<td>K.Lakshmi Narayana</td>
							<td>566</td>
						</tr>
						<tr>
							<td>Ganesh</td>
							<td>Eranna</td>
							<td>92</td>
						</tr>
						<tr>
							<td>Ganesh Kumar</td>
							<td>B Maddileti</td>
							<td>29</td>
						</tr>
						<tr>
							<td>Gangineni Hithaishi</td>
							<td>Gangineni Samar</td>
							<td>403</td>
						</tr>
						<tr>
							<td>Gangireddy Gari Guru Nandini</td>
							<td>G. Gurumaheswara Red</td>
							<td>759</td>
						</tr>
						<tr>
							<td>Ganne Narendra</td>
							<td>Ganne Janaki Ramudu</td>
							<td>837</td>
						</tr>
						<tr>
							<td>Gayazuddin</td>
							<td>Md Ariff</td>
							<td>205</td>
						</tr>
						<tr>
							<td>Giri Mohan</td>
							<td>K.Giddaya</td>
							<td>156</td>
						</tr>
						<tr>
							<td>Girish Kumar</td>
							<td>Kasiviswanath</td>
							<td>166</td>
						</tr>
						<tr>
							<td>Gnaneswar Chowdari</td>
							<td>V Ramappa</td>
							<td>370</td>
						</tr>
						<tr>
							<td>Gnaneswar Reddy</td>
							<td>Lakshmi Reddy</td>
							<td>175</td>
						</tr>
						<tr>
							<td>Gnaneswara Reddy</td>
							<td>Babul Reddy</td>
							<td>52</td>
						</tr>
						<tr>
							<td>Gogineni Chetan Venkata Krishna</td>
							<td>Gogineni Venkata Rat</td>
							<td>488</td>
						</tr>
						<tr>
							<td>Golla Prashanthi</td>
							<td>Golla Venkateshwarlu</td>
							<td>529</td>
						</tr>
						<tr>
							<td>Goutham Reddy</td>
							<td>G.Bhaskar Reddy</td>
							<td>428</td>
						</tr>
						<tr>
							<td>Govardhan</td>
							<td>Sreenivasulu</td>
							<td>335</td>
						</tr>
						<tr>
							<td>Govardhan Reddy</td>
							<td>Venkateswar Reddy</td>
							<td>393</td>
						</tr>
						<tr>
							<td>Gudikal Chitra</td>
							<td>Gudikal Ravi Kumar</td>
							<td>888</td>
						</tr>
						<tr>
							<td>Gundapuneedi Neeraj Chowdary</td>
							<td>Ggundapuneedi Bhaska</td>
							<td>580</td>
						</tr>
						<tr>
							<td>Gundlooru Navaz</td>
							<td>Gundlooru Hussain</td>
							<td>666</td>
						</tr>
						<tr>
							<td>Gurijala Dileep Reddy</td>
							<td>Gurijala Mohan Reddy</td>
							<td>489</td>
						</tr>
						<tr>
							<td>Gurram.Leelashankar</td>
							<td>G.Nagaraju</td>
							<td>475</td>
						</tr>
						<tr>
							<td>H. R. Sree Nidhi</td>
							<td>H. S.Ranganath</td>
							<td>628</td>
						</tr>
						<tr>
							<td>Hareesh</td>
							<td>Lakshmmana Murthy</td>
							<td>176</td>
						</tr>
						<tr>
							<td>Hareesh Reddy</td>
							<td>Ramana Reddy</td>
							<td>272</td>
						</tr>
						<tr>
							<td>Hari Kishore</td>
							<td>M.Thippaiah</td>
							<td>187</td>
						</tr>
						<tr>
							<td>Hari Krishna</td>
							<td>N.Ramudu</td>
							<td>220</td>
						</tr>
						<tr>
							<td>Hari Krishna</td>
							<td>A.Ramachandrudu</td>
							<td>16</td>
						</tr>
						<tr>
							<td>Hari Prasad</td>
							<td>Upendra</td>
							<td>365</td>
						</tr>
						<tr>
							<td>Hari Prasad Reddy</td>
							<td>Manikyam Reddy</td>
							<td>200</td>
						</tr>
						<tr>
							<td>Harish</td>
							<td>Srinivasulu</td>
							<td>338</td>
						</tr>
						<tr>
							<td>Harish</td>
							<td>K.Madhava Swamy</td>
							<td>157</td>
						</tr>
						<tr>
							<td>Harsh Mishra</td>
							<td>Prem Chandra Mishra</td>
							<td>817</td>
						</tr>
						<tr>
							<td>Harsha Vardhan Reddy</td>
							<td>Devendra Reddy</td>
							<td>86</td>
						</tr>
						<tr>
							<td>Harshavardan Reddy</td>
							<td>K Raja Sekhar</td>
							<td>142</td>
						</tr>
						<tr>
							<td>Harshavardhan</td>
							<td>S Siva Reddy</td>
							<td>302</td>
						</tr>
						<tr>
							<td>Harshavardhan Reddy</td>
							<td>G.Ramana Reddy</td>
							<td>116</td>
						</tr>
						<tr>
							<td>Harshitha Dudekula</td>
							<td>D. L Narasimhulu</td>
							<td>442</td>
						</tr>
						<tr>
							<td>Hemanth</td>
							<td>Veeranjaneyuli</td>
							<td>374</td>
						</tr>
						<tr>
							<td>Himaja</td>
							<td>Mohan</td>
							<td>530</td>
						</tr>
						<tr>
							<td>Ibrahim</td>
							<td>S.Karimulla</td>
							<td>603</td>
						</tr>
						<tr>
							<td>Idrus Basha</td>
							<td>S Jakeer Hussain</td>
							<td>290</td>
						</tr>
						<tr>
							<td>Inayatulla Khan</td>
							<td>Nurulla Khan</td>
							<td>848</td>
						</tr>
						<tr>
							<td>Indhra Reddy</td>
							<td>G. Madhusudhan Reddy</td>
							<td>112</td>
						</tr>
						<tr>
							<td>Indrasena Reddy</td>
							<td>Ramachenna Reddy</td>
							<td>269</td>
						</tr>
						<tr>
							<td>Innesh Kumar</td>
							<td>B.Dhanunjaya</td>
							<td>43</td>
						</tr>
						<tr>
							<td>Irfan</td>
							<td>Ca Riyaz</td>
							<td>62</td>
						</tr>
						<tr>
							<td>Isanakachareesh Reddy</td>
							<td>Isanaka Madhusudhan</td>
							<td>637</td>
						</tr>
						<tr>
							<td>J Bhavana</td>
							<td>J Bhaskar</td>
							<td>857</td>
						</tr>
						<tr>
							<td>J.Lavanya</td>
							<td>J.Sreenivasulu</td>
							<td>779</td>
						</tr>
						<tr>
							<td>J.Pavan Kalyan</td>
							<td>J.C.Vannurappa</td>
							<td>760</td>
						</tr>
						<tr>
							<td>J.Riyaz</td>
							<td>J.Mahaboob Basha</td>
							<td>853</td>
						</tr>
						<tr>
							<td>J.Shabdh Anoop</td>
							<td>J Subramanyam</td>
							<td>127</td>
						</tr>
						<tr>
							<td>J.Sujith Sravan</td>
							<td>J.Ravi Kumar</td>
							<td>130</td>
						</tr>
						<tr>
							<td>J.V.Sai Krishna</td>
							<td>J.S Balaji</td>
							<td>471</td>
						</tr>
						<tr>
							<td>Jagannath</td>
							<td>Anjaneyulu</td>
							<td>22</td>
						</tr>
						<tr>
							<td>Jaghadeswara Reddy</td>
							<td>M Bhaskar Reddy</td>
							<td>178</td>
						</tr>
						<tr>
							<td>Jahnavi</td>
							<td>Satyamnaidu</td>
							<td>740</td>
						</tr>
						<tr>
							<td>Jai Krishna</td>
							<td>Ramana</td>
							<td>746</td>
						</tr>
						<tr>
							<td>Jallanda Preeti</td>
							<td>J. Basudev</td>
							<td>751</td>
						</tr>
						<tr>
							<td>Jammula Vishnu Vardhan</td>
							<td>Jammula Ambanna</td>
							<td>883</td>
						</tr>
						<tr>
							<td>Jampana Tharun Kumar</td>
							<td>J Gopi</td>
							<td>690</td>
						</tr>
						<tr>
							<td>Janardhan</td>
							<td>Ravindranath</td>
							<td>284</td>
						</tr>
						<tr>
							<td>Jaothisuraj</td>
							<td>Japthiumesh</td>
							<td>804</td>
						</tr>
						<tr>
							<td>Jaswanth</td>
							<td>S.Markandeya</td>
							<td>303</td>
						</tr>
						<tr>
							<td>Jaya Chandhra Reddy</td>
							<td>P.Rajashekar Reddy</td>
							<td>244</td>
						</tr>
						<tr>
							<td>Jayanth Balaji</td>
							<td>G Venkateswarlu</td>
							<td>111</td>
						</tr>
						<tr>
							<td>Jayanth Reddy</td>
							<td>P Nagi Reddy</td>
							<td>236</td>
						</tr>
						<tr>
							<td>Jayanthreddy</td>
							<td>K.Venkataramakrishna Reddy</td>
							<td>163</td>
						</tr>
						<tr>
							<td>Jetti Chandrahasini</td>
							<td>Jetti Rambabu</td>
							<td>404</td>
						</tr>
						<tr>
							<td>Jetti Pragathi</td>
							<td>Jetti Rajasekhar</td>
							<td>405</td>
						</tr>
						<tr>
							<td>Jetti Pragathi</td>
							<td>Jetti Rajasekhar</td>
							<td>440</td>
						</tr>
						<tr>
							<td>Jithendra</td>
							<td>A Chinna Ganganna</td>
							<td>6</td>
						</tr>
						<tr>
							<td>Jithendra Kumar</td>
							<td>N Chandra Sekharaiah</td>
							<td>212</td>
						</tr>
						<tr>
							<td>Joel Jacob</td>
							<td>G Jaya Raju</td>
							<td>96</td>
						</tr>
						<tr>
							<td>Joyson Reddy</td>
							<td>B Chinnappa Reddy</td>
							<td>27</td>
						</tr>
						<tr>
							<td>Jyoshna Reddy</td>
							<td>Eswar Reddy</td>
							<td>667</td>
						</tr>
						<tr>
							<td>Jyothi Krishna</td>
							<td>Chandra Sekhar</td>
							<td>728</td>
						</tr>
						<tr>
							<td>Jyothi Sai Krishna</td>
							<td>Dhavara Naik</td>
							<td>88</td>
						</tr>
						<tr>
							<td>K Manoj Reddy</td>
							<td>K Gopal Reddy</td>
							<td>729</td>
						</tr>
						<tr>
							<td>K S Chandu Vadhan</td>
							<td>N Somasekhar</td>
							<td>730</td>
						</tr>
						<tr>
							<td>K Venu Madhav Reddy</td>
							<td>K Venkatarami Reddy</td>
							<td>501</td>
						</tr>
						<tr>
							<td>K. Durga Srinivas</td>
							<td>K. V. R. Prasad</td>
							<td>731</td>
						</tr>
						<tr>
							<td>K. L. Madhu Chandan</td>
							<td>K. L. Nagaraju</td>
							<td>818</td>
						</tr>
						<tr>
							<td>K. Lakshmi Saranya</td>
							<td>K. Krishna Venkata N</td>
							<td>592</td>
						</tr>
						<tr>
							<td>K. N. V. Jyothi</td>
							<td>K. Purnachandrarao</td>
							<td>884</td>
						</tr>
						<tr>
							<td>K. Nitish Gupta</td>
							<td>K. Srinivas Rao</td>
							<td>698</td>
						</tr>
						<tr>
							<td>K. Ramiredy</td>
							<td>K. Lakshmi Reddy</td>
							<td>531</td>
						</tr>
						<tr>
							<td>K. Supraja</td>
							<td>K. Naga Bhushan Redd</td>
							<td>490</td>
						</tr>
						<tr>
							<td>K.1Dinesh</td>
							<td>K. Venkateswarlu</td>
							<td>454</td>
						</tr>
						<tr>
							<td>K.Durga Prasad</td>
							<td>K Sanjeevaiah</td>
							<td>144</td>
						</tr>
						<tr>
							<td>K.Hemanvitha</td>
							<td>K.V.V.Prasad</td>
							<td>832</td>
						</tr>
						<tr>
							<td>K.Krishna Chaitanya</td>
							<td>K Mallikarjuna</td>
							<td>141</td>
						</tr>
						<tr>
							<td>K.Krupa</td>
							<td>K.Venkatesulu</td>
							<td>862</td>
						</tr>
						<tr>
							<td>K.Mohan Kumar</td>
							<td>Venkata Ramana</td>
							<td>380</td>
						</tr>
						<tr>
							<td>K.Mohith</td>
							<td>K.Ravimohannaidu</td>
							<td>539</td>
						</tr>
						<tr>
							<td>K.Mokshitha</td>
							<td>K.Ravimohannaidu</td>
							<td>761</td>
						</tr>
						<tr>
							<td>K.Naga Yaswanth Reddy</td>
							<td>K.Raja Sekhar Reddy</td>
							<td>668</td>
						</tr>
						<tr>
							<td>K.Nagendra</td>
							<td>K.Subbarayudu</td>
							<td>618</td>
						</tr>
						<tr>
							<td>K.Omprakash</td>
							<td>K Madhu Kumar</td>
							<td>140</td>
						</tr>
						<tr>
							<td>K.Ravindra Rao</td>
							<td>Sashadri</td>
							<td>310</td>
						</tr>
						<tr>
							<td>K.S.Hemadri</td>
							<td>K.Sathyanarayana</td>
							<td>715</td>
						</tr>
						<tr>
							<td>K.Sivamanitha</td>
							<td>K.Bhaskarreddy</td>
							<td>802</td>
						</tr>
						<tr>
							<td>K.Spoorthi</td>
							<td>K.Amarnath Reddy</td>
							<td>839</td>
						</tr>
						<tr>
							<td>K.Spoorthi</td>
							<td>K.Amaranth Reddy</td>
							<td>882</td>
						</tr>
						<tr>
							<td>K.Sumanth</td>
							<td>Satya Narayana</td>
							<td>313</td>
						</tr>
						<tr>
							<td>K.V.Sasikanthreddy</td>
							<td>K.Venkataramireddy</td>
							<td>509</td>
						</tr>
						<tr>
							<td>K.Yaswanth Sai</td>
							<td>K.Veeranjinayalu</td>
							<td>775</td>
						</tr>
						<tr>
							<td>Kajavali</td>
							<td>A.Vali Basha</td>
							<td>17</td>
						</tr>
						<tr>
							<td>Kakarla Pradeep Naidu</td>
							<td>Kakarla Gopal Naidu</td>
							<td>822</td>
						</tr>
						<tr>
							<td>Kalasapati Chinmayi</td>
							<td>Kalasapati C Ramarao</td>
							<td>434</td>
						</tr>
						<tr>
							<td>Kalathuru Karunakar Goud</td>
							<td>K Partha Sarathi Gou</td>
							<td>444</td>
						</tr>
						<tr>
							<td>Kalyan Kumar Reddy</td>
							<td>Ramvenkateswara Reddy</td>
							<td>279</td>
						</tr>
						<tr>
							<td>Kamanuru Naga Sai Rishik</td>
							<td>Kamanuru Nagaraj</td>
							<td>476</td>
						</tr>
						<tr>
							<td>Kamepalli Venkata Sowmya</td>
							<td>Kamepalli Venkateswa</td>
							<td>581</td>
						</tr>
						<tr>
							<td>Kammari Raghuveer Achari</td>
							<td>Kammari Rajaveeranna</td>
							<td>567</td>
						</tr>
						<tr>
							<td>Kandula Deepika</td>
							<td>Kandula Hari Prasad</td>
							<td>586</td>
						</tr>
						<tr>
							<td>Kapa.Chandralekha</td>
							<td>Kapa.Jagannathareddy</td>
							<td>445</td>
						</tr>
						<tr>
							<td>Karthik</td>
							<td>Madan Gopal</td>
							<td>875</td>
						</tr>
						<tr>
							<td>Karthik</td>
							<td>G Sreenivasulu</td>
							<td>106</td>
						</tr>
						<tr>
							<td>Kashish Kedia</td>
							<td>Nitin Kedia</td>
							<td>660</td>
						</tr>
						<tr>
							<td>Kattannagari Koushik</td>
							<td>Kattannagari Subrama</td>
							<td>502</td>
						</tr>
						<tr>
							<td>Khajavali</td>
							<td>Babafakruddin</td>
							<td>51</td>
						</tr>
						<tr>
							<td>Kiran Kumar Reddy</td>
							<td>Subba Reddy</td>
							<td>346</td>
						</tr>
						<tr>
							<td>Kiran Kumar.Ch</td>
							<td>Ramanaiah.Ch</td>
							<td>306</td>
						</tr>
						<tr>
							<td>Kishore Kumar Reddy</td>
							<td>G.Koti Reddy</td>
							<td>113</td>
						</tr>
						<tr>
							<td>Kishore Reddy</td>
							<td>C.Chandra Mohan Reddy</td>
							<td>60</td>
						</tr>
						<tr>
							<td>Kishtadoddi Mahendra</td>
							<td>Kishtadoddi Srinivas</td>
							<td>503</td>
						</tr>
						<tr>
							<td>Kodathala Sai Krishna Reddy</td>
							<td>Kodathala Prathap Re</td>
							<td>248</td>
						</tr>
						<tr>
							<td>Kollamma Gari Jagadeeswar Reddy</td>
							<td>Kollamma Gari Yugand</td>
							<td>691</td>
						</tr>
						<tr>
							<td>Kollipaka Kumara Swamy</td>
							<td>Kollipaka Pothu Raju</td>
							<td>638</td>
						</tr>
						<tr>
							<td>Kommineni Jayanth</td>
							<td>Kommineni Chalapathi</td>
							<td>855</td>
						</tr>
						<tr>
							<td>Konapula Sathwika</td>
							<td>Konapula Narasimha</td>
							<td>558</td>
						</tr>
						<tr>
							<td>Konda Reddy</td>
							<td>Venkata Reddy</td>
							<td>383</td>
						</tr>
						<tr>
							<td>Kondepogu Praveen Kumar</td>
							<td>Kondepogu Obulesu</td>
							<td>455</td>
						</tr>
						<tr>
							<td>Konduru Sai Geetha</td>
							<td>Konduru Jaya Chandra</td>
							<td>510</td>
						</tr>
						<tr>
							<td>Kota Bhumeswara Reddy</td>
							<td>Kota Narasimha Reddy</td>
							<td>879</td>
						</tr>
						<tr>
							<td>Kota.Vijaya Lakshmi</td>
							<td>Kota.Phalguna Rao</td>
							<td>736</td>
						</tr>
						<tr>
							<td>Kottamasu. N. V. Jyothi</td>
							<td>Kottamasu Purnachand</td>
							<td>639</td>
						</tr>
						<tr>
							<td>Koushik</td>
							<td>Sudha Chakravarthi</td>
							<td>348</td>
						</tr>
						<tr>
							<td>Krishna</td>
							<td>Peddaiah</td>
							<td>247</td>
						</tr>
						<tr>
							<td>Krishna Babu</td>
							<td>Mohan</td>
							<td>208</td>
						</tr>
						<tr>
							<td>Krittika Maity</td>
							<td>Mrinal Kanti Maity</td>
							<td>738</td>
						</tr>
						<tr>
							<td>Kubireddi.Venkata Sai Hemasree</td>
							<td>Kubireddi.Venkata Ra</td>
							<td>717</td>
						</tr>
						<tr>
							<td>Kunapareddy Venkata Kavya</td>
							<td>Kunapareddy Venkata</td>
							<td>559</td>
						</tr>
						<tr>
							<td>Kuntumalla Karnakara</td>
							<td>Kuntumalla Nagaiah</td>
							<td>593</td>
						</tr>
						<tr>
							<td>Kurra Bhargav Reddy</td>
							<td>Kurra Narayana Reddy</td>
							<td>604</td>
						</tr>
						<tr>
							<td>Kuruva Lokesh</td>
							<td>Kuruva Mahesh</td>
							<td>594</td>
						</tr>
						<tr>
							<td>Kuruva Ravishankar</td>
							<td>Kuruva Ramakrishna</td>
							<td>605</td>
						</tr>
						<tr>
							<td>L Venkata Sai Teja</td>
							<td>L C Reddeppa</td>
							<td>406</td>
						</tr>
						<tr>
							<td>L.Junaid</td>
							<td>L Shalu Basha</td>
							<td>172</td>
						</tr>
						<tr>
							<td>L.Krishna Reddy</td>
							<td>L.Narayana Reddy</td>
							<td>595</td>
						</tr>
						<tr>
							<td>L.Siva Ganesh Reddy</td>
							<td>L.Gangadhar Reddy</td>
							<td>762</td>
						</tr>
						<tr>
							<td>Lakshmi Eagala</td>
							<td>Krishnamurthy Eagala</td>
							<td>871</td>
						</tr>
						<tr>
							<td>Lakshmi Narasimha Reddy</td>
							<td>Surya Narayana Reddy</td>
							<td>353</td>
						</tr>
						<tr>
							<td>Lakshmi Obul Reddy Vundela</td>
							<td>Sudhakar Reddy Vunde</td>
							<td>606</td>
						</tr>
						<tr>
							<td>Lalith</td>
							<td>Rajendra</td>
							<td>265</td>
						</tr>
						<tr>
							<td>Laxmikanth Reddy</td>
							<td>Srinivasa Reddy</td>
							<td>337</td>
						</tr>
						<tr>
							<td>Linga Karthik Reddy</td>
							<td>Rama Linga Reddy</td>
							<td>266</td>
						</tr>
						<tr>
							<td>Lokesh</td>
							<td>Prasad</td>
							<td>340</td>
						</tr>
						<tr>
							<td>Lokeshwar Reddy</td>
							<td>Easwar Reddy</td>
							<td>91</td>
						</tr>
						<tr>
							<td>Lokeswara Reddy</td>
							<td>Janki Ram Reddy</td>
							<td>132</td>
						</tr>
						<tr>
							<td>Lovina Rachel Sahu</td>
							<td>Sukanta Kumar Sahu</td>
							<td>856</td>
						</tr>
						<tr>
							<td>Lukka Sai Teja</td>
							<td>Srinivasa Rao Lukka</td>
							<td>747</td>
						</tr>
						<tr>
							<td>M Chikitha</td>
							<td>M. Ramanjaneyulu</td>
							<td>841</td>
						</tr>
						<tr>
							<td>M Santhan Manohar</td>
							<td>M Sudhakar</td>
							<td>873</td>
						</tr>
						<tr>
							<td>M Venkata Anil</td>
							<td>M Ankhaiah</td>
							<td>640</td>
						</tr>
						<tr>
							<td>M Venkata Sai Tilak</td>
							<td>M Masthan Babu</td>
							<td>560</td>
						</tr>
						<tr>
							<td>M Viswanath Reddy</td>
							<td>M Veera Reddy</td>
							<td>641</td>
						</tr>
						<tr>
							<td>M. Abhiram Rayal</td>
							<td>M. Subramanyam Babu</td>
							<td>491</td>
						</tr>
						<tr>
							<td>M. Harsha Vardhan Reddy</td>
							<td>M. Rama Subba Reddy</td>
							<td>703</td>
						</tr>
						<tr>
							<td>M. Mani Deepa</td>
							<td>M. Suryanarayana</td>
							<td>776</td>
						</tr>
						<tr>
							<td>M. N. Noorjahn</td>
							<td>Moghal Shamir Husaai</td>
							<td>429</td>
						</tr>
						<tr>
							<td>M. Rangaswami</td>
							<td>M. Venkateswarlu</td>
							<td>755</td>
						</tr>
						<tr>
							<td>M. Sri Nanditha</td>
							<td>M. Eswar Rao</td>
							<td>864</td>
						</tr>
						<tr>
							<td>M.Hruthikkumar</td>
							<td>M.Madhu</td>
							<td>511</td>
						</tr>
						<tr>
							<td>M.Jaseanth</td>
							<td>M.Ravi Chandra</td>
							<td>814</td>
						</tr>
						<tr>
							<td>M.Jayalakshmi</td>
							<td>M.Venkataramana</td>
							<td>707</td>
						</tr>
						<tr>
							<td>M.Kishore</td>
							<td>M.Murali Mohan</td>
							<td>568</td>
						</tr>
						<tr>
							<td>M.Pavan Kalyan</td>
							<td>M Sai Krishnudu</td>
							<td>182</td>
						</tr>
						<tr>
							<td>M.Pavan Kumar</td>
							<td>M.Devendrappa</td>
							<td>519</td>
						</tr>
						<tr>
							<td>M.Praveen Kumar</td>
							<td>M.Obulesu</td>
							<td>654</td>
						</tr>
						<tr>
							<td>M.Rafiq Basha</td>
							<td>Md Kalasha</td>
							<td>206</td>
						</tr>
						<tr>
							<td>M.Rajasekhar</td>
							<td>Dasurao</td>
							<td>85</td>
						</tr>
						<tr>
							<td>M.Rakesh</td>
							<td>M.Bramhananda Rao</td>
							<td>477</td>
						</tr>
						<tr>
							<td>M.Sadiq Hussain</td>
							<td>Khaja Hussain</td>
							<td>168</td>
						</tr>
						<tr>
							<td>M.Saketh</td>
							<td>M.Sridhar</td>
							<td>850</td>
						</tr>
						<tr>
							<td>M.Surendra Reddy</td>
							<td>M.Purushotham Reddy</td>
							<td>724</td>
						</tr>
						<tr>
							<td>M.Tejasree</td>
							<td>Mohan</td>
							<td>492</td>
						</tr>
						<tr>
							<td>M.Thimmaraju</td>
							<td>M.Ngaraju</td>
							<td>796</td>
						</tr>
						<tr>
							<td>M.Vamsi Krishna</td>
							<td>M Lakshmi Narayana</td>
							<td>180</td>
						</tr>
						<tr>
							<td>M.Vihari</td>
							<td>M.Siva Sankar</td>
							<td>520</td>
						</tr>
						<tr>
							<td>M.Vijay Kumar</td>
							<td>M Pandu Ranga</td>
							<td>181</td>
						</tr>
						<tr>
							<td>Machavaram Hemanth Reddy</td>
							<td>M.Rama Lakshmana Red</td>
							<td>446</td>
						</tr>
						<tr>
							<td>Mada Venkata Sreedhar</td>
							<td>M.Siva Sankar</td>
							<td>607</td>
						</tr>
						<tr>
							<td>Madan Mohan Reddy</td>
							<td>Rameshwar Reddy</td>
							<td>276</td>
						</tr>
						<tr>
							<td>Madana Mohan</td>
							<td>K.Chinna Maddilety</td>
							<td>155</td>
						</tr>
						<tr>
							<td>Madarvali</td>
							<td>Mansoor Basha</td>
							<td>201</td>
						</tr>
						<tr>
							<td>Madhan</td>
							<td>Sreenivasulu</td>
							<td>561</td>
						</tr>
						<tr>
							<td>Madhu</td>
							<td>Devendra Naidu</td>
							<td>619</td>
						</tr>
						<tr>
							<td>Madhu Kumar</td>
							<td>A Bazarappa</td>
							<td>5</td>
						</tr>
						<tr>
							<td>Madhupavan</td>
							<td>P.Venkateswarlu</td>
							<td>245</td>
						</tr>
						<tr>
							<td>Madhusekhar</td>
							<td>N Chinna Maddilety</td>
							<td>213</td>
						</tr>
						<tr>
							<td>Madhusudhan</td>
							<td>Jayaramulu</td>
							<td>136</td>
						</tr>
						<tr>
							<td>Madugundu Satya Narayana</td>
							<td>M Venkateswarlu</td>
							<td>692</td>
						</tr>
						<tr>
							<td>Mahammad Thakhi</td>
							<td>S Murthujavali</td>
							<td>292</td>
						</tr>
						<tr>
							<td>Mahammed Badruddin</td>
							<td>S.Mohammed Usman</td>
							<td>304</td>
						</tr>
						<tr>
							<td>Mahammed Naveed</td>
							<td>Shaik Mohammed Khaja Basha</td>
							<td>322</td>
						</tr>
						<tr>
							<td>Mahammed Sajid</td>
							<td>K.Md.Nasir Hussain</td>
							<td>158</td>
						</tr>
						<tr>
							<td>Mahendra</td>
							<td>Rama Swamy</td>
							<td>267</td>
						</tr>
						<tr>
							<td>Mahendra Reddy</td>
							<td>K.Ramakrishna Reddy</td>
							<td>159</td>
						</tr>
						<tr>
							<td>Mahesh</td>
							<td>T Maddulety</td>
							<td>356</td>
						</tr>
						<tr>
							<td>Mahesh Babu</td>
							<td>C Venkatesh</td>
							<td>59</td>
						</tr>
						<tr>
							<td>Mahesh Chandra .K</td>
							<td>Deva Rajulu.K</td>
							<td>655</td>
						</tr>
						<tr>
							<td>Mahesh Naidu</td>
							<td>Krishna Murthi</td>
							<td>170</td>
						</tr>
						<tr>
							<td>Mahesh Reddy</td>
							<td>D Surya Sekhar Reddy</td>
							<td>77</td>
						</tr>
						<tr>
							<td>Mahidhar</td>
							<td>Subramanyam</td>
							<td>456</td>
						</tr>
						<tr>
							<td>Mallemula Venkata Heekshit</td>
							<td>Mallemula Ramesh Kum</td>
							<td>827</td>
						</tr>
						<tr>
							<td>Mallepalle Jayalakshmi</td>
							<td>Mallepalle Venkatara</td>
							<td>642</td>
						</tr>
						<tr>
							<td>Mallikarjuna Reddy</td>
							<td>Maheswar Reddy</td>
							<td>197</td>
						</tr>
						<tr>
							<td>Malyam Dinesh</td>
							<td>Malyam Ramanna</td>
							<td>416</td>
						</tr>
						<tr>
							<td>Manasmita Moharana</td>
							<td>Manoranjan Moharana</td>
							<td>552</td>
						</tr>
						<tr>
							<td>Mani Varma</td>
							<td>B Suresh</td>
							<td>39</td>
						</tr>
						<tr>
							<td>Manikanta</td>
							<td>K. Jaya Ramudu</td>
							<td>151</td>
						</tr>
						<tr>
							<td>Manikanta</td>
							<td>V Nagaraju</td>
							<td>369</td>
						</tr>
						<tr>
							<td>Manish Kumar</td>
							<td>T Rangaiah</td>
							<td>359</td>
						</tr>
						<tr>
							<td>Manish Kumar</td>
							<td>Venkata Raman</td>
							<td>377</td>
						</tr>
						<tr>
							<td>Mankamuthaka Pragathi</td>
							<td>Mankamuthaka Venkata</td>
							<td>669</td>
						</tr>
						<tr>
							<td>Manoj</td>
							<td>G.Yerriswamy</td>
							<td>117</td>
						</tr>
						<tr>
							<td>Manoj Kumar</td>
							<td>B Yella Krishnudu</td>
							<td>42</td>
						</tr>
						<tr>
							<td>Manoj Kumar Goud</td>
							<td>T E Vijaya Kumar Goud</td>
							<td>355</td>
						</tr>
						<tr>
							<td>Manoj Nithin Prakas</td>
							<td>Narayana</td>
							<td>230</td>
						</tr>
						<tr>
							<td>Masood Khan</td>
							<td>Nayazuddinkhan</td>
							<td>798</td>
						</tr>
						<tr>
							<td>Mavilla Bharadwaja</td>
							<td>Mavilla Chiranjeevi</td>
							<td>316</td>
						</tr>
						<tr>
							<td>Medam Charan</td>
							<td>M Satya Narayana Swa</td>
							<td>512</td>
						</tr>
						<tr>
							<td>Mekalagowthami</td>
							<td>Mekalalakshmi Naraya</td>
							<td>472</td>
						</tr>
						<tr>
							<td>Methku .Naresh Setty</td>
							<td>Methku Thimmaiah Set</td>
							<td>732</td>
						</tr>
						<tr>
							<td>Moghal Nazma Noorjahan</td>
							<td>Moghal Shamir Hussai</td>
							<td>867</td>
						</tr>
						<tr>
							<td>Mohammed Sadiq</td>
							<td>S Rafi</td>
							<td>294</td>
						</tr>
						<tr>
							<td>Mohammed Saquib Khan</td>
							<td>K Mahamood Khan</td>
							<td>518</td>
						</tr>
						<tr>
							<td>Mohan Krishana</td>
							<td>Venkataradgaiah</td>
							<td>4</td>
						</tr>
						<tr>
							<td>Mohan Reddy Molakatala</td>
							<td>M.Nagi Reddy</td>
							<td>185</td>
						</tr>
						<tr>
							<td>Mokshitha Lakshmi</td>
							<td>Venu Gopal Rao</td>
							<td>521</td>
						</tr>
						<tr>
							<td>Muppuri Lakshmi Narayana</td>
							<td>Muppuri Nagaraju</td>
							<td>478</td>
						</tr>
						<tr>
							<td>Muttukuru Yogamrutha</td>
							<td>Muttukuru Ravi Kumar</td>
							<td>656</td>
						</tr>
						<tr>
							<td>N Ajay Naidu</td>
							<td>N Ramanjineyulu</td>
							<td>540</td>
						</tr>
						<tr>
							<td>N Dharma Teja</td>
							<td>N Ramana</td>
							<td>643</td>
						</tr>
						<tr>
							<td>N. Bharath</td>
							<td>N. Gopala Krishna</td>
							<td>513</td>
						</tr>
						<tr>
							<td>N. Hemalatha</td>
							<td>N. Govinda Reddy</td>
							<td>693</td>
						</tr>
						<tr>
							<td>N. Prathyusha</td>
							<td>N. Bhaskar Reddy</td>
							<td>845</td>
						</tr>
						<tr>
							<td>N. V. Srihari</td>
							<td>N. V. Srinivasulu</td>
							<td>608</td>
						</tr>
						<tr>
							<td>N.Naveen Kumar</td>
							<td>Maddileti</td>
							<td>192</td>
						</tr>
						<tr>
							<td>N.Praneeth</td>
							<td>N Sathyalu</td>
							<td>216</td>
						</tr>
						<tr>
							<td>N.Pravallika</td>
							<td>N.Ramanjaneya Reddy</td>
							<td>657</td>
						</tr>
						<tr>
							<td>N.Reddy Prasad Reddy</td>
							<td>N.Ramana Reddy</td>
							<td>424</td>
						</tr>
						<tr>
							<td>N.S.Amanulla</td>
							<td>N.Chand Basha</td>
							<td>815</td>
						</tr>
						<tr>
							<td>N.Sreenath</td>
							<td>N Ramanaiah</td>
							<td>215</td>
						</tr>
						<tr>
							<td>N.Vamsi Krishna</td>
							<td>N.Siva Krishna</td>
							<td>532</td>
						</tr>
						<tr>
							<td>N.Vishnu Vardan Reddy</td>
							<td>N.Murali Dhara Reddy</td>
							<td>541</td>
						</tr>
						<tr>
							<td>Naga Bharath</td>
							<td>Ramudu</td>
							<td>277</td>
						</tr>
						<tr>
							<td>Naga Seshu</td>
							<td>Venkata Subbaiah</td>
							<td>386</td>
						</tr>
						<tr>
							<td>Nagam Jahnavi</td>
							<td>N.Penchala Reddy</td>
							<td>447</td>
						</tr>
						<tr>
							<td>Nagesh K</td>
							<td>K Chinnaanjinappa</td>
							<td>748</td>
						</tr>
						<tr>
							<td>Nagur Yugandhar</td>
							<td>N Arjun</td>
							<td>658</td>
						</tr>
						<tr>
							<td>Naguru Venu Vardhan</td>
							<td>Naguru Sreenivasulu</td>
							<td>569</td>
						</tr>
						<tr>
							<td>Nanda Kumar Reddy</td>
							<td>B.Lakshmi Narayana Reddy</td>
							<td>44</td>
						</tr>
						<tr>
							<td>Nandineni Venkata Naidu</td>
							<td>Nandineni Reddepa Na</td>
							<td>620</td>
						</tr>
						<tr>
							<td>Nandini Singh</td>
							<td>Sanjay Kumar Singh</td>
							<td>785</td>
						</tr>
						<tr>
							<td>Narasimha</td>
							<td>B Chakrapani</td>
							<td>26</td>
						</tr>
						<tr>
							<td>Narasimha Reddy</td>
							<td>B Lakshmi Reddy</td>
							<td>28</td>
						</tr>
						<tr>
							<td>Narayana Chakravarthi</td>
							<td>Narayana Viswa Bhara</td>
							<td>435</td>
						</tr>
						<tr>
							<td>Narendra</td>
							<td>A H Babji</td>
							<td>9</td>
						</tr>
						<tr>
							<td>Narendra</td>
							<td>G Thippe Swamy</td>
							<td>108</td>
						</tr>
						<tr>
							<td>Narpala Vijaya Lakshmi</td>
							<td>Narpala Subba Reddy</td>
							<td>808</td>
						</tr>
						<tr>
							<td>Nasi Rhussain</td>
							<td>Hussain Saheb</td>
							<td>124</td>
						</tr>
						<tr>
							<td>Naveen Kumar</td>
							<td>D.V Ramanaiah</td>
							<td>81</td>
						</tr>
						<tr>
							<td>Naveen Kumar Reddy</td>
							<td>Raghava Reddy</td>
							<td>262</td>
						</tr>
						<tr>
							<td>Naveen Kumar Reddy</td>
							<td>Veerasekhar Reddy</td>
							<td>375</td>
						</tr>
						<tr>
							<td>Naveen Uusa</td>
							<td>Srinu</td>
							<td>479</td>
						</tr>
						<tr>
							<td>Nayan Deep</td>
							<td>V.Amar Nath</td>
							<td>371</td>
						</tr>
						<tr>
							<td>Neeraj Chowdary</td>
							<td>Bhaskara Rao</td>
							<td>436</td>
						</tr>
						<tr>
							<td>Nehashree Giri</td>
							<td>Ganesh Giri</td>
							<td>780</td>
						</tr>
						<tr>
							<td>Niket Kumar</td>
							<td>Manoj Kumar Singh</td>
							<td>450</td>
						</tr>
						<tr>
							<td>Niket Kumar</td>
							<td>Manoj Kumar Singh</td>
							<td>788</td>
						</tr>
						<tr>
							<td>Niranjan</td>
							<td>N Srinivasulu</td>
							<td>217</td>
						</tr>
						<tr>
							<td>Nisha Burnwal</td>
							<td>Ramesh Prasad Burnwa</td>
							<td>803</td>
						</tr>
						<tr>
							<td>Nisha Sarkar</td>
							<td>Nikhil Chandra Sarka</td>
							<td>868</td>
						</tr>
						<tr>
							<td>Nithish Chandra Reddy.Guddeti</td>
							<td>Rama Subba Reddy.Gud</td>
							<td>570</td>
						</tr>
						<tr>
							<td>Noor Mahamadh</td>
							<td>D Babu Sab</td>
							<td>71</td>
						</tr>
						<tr>
							<td>Nyamathulla</td>
							<td>S Sardar Basha</td>
							<td>298</td>
						</tr>
						<tr>
							<td>Obulanaidu</td>
							<td>G Kasirangaswamy</td>
							<td>97</td>
						</tr>
						<tr>
							<td>Omkar</td>
							<td>K Sudharshan</td>
							<td>148</td>
						</tr>
						<tr>
							<td>P Pavan Reddy</td>
							<td>P Aswatha Narayana R</td>
							<td>542</td>
						</tr>
						<tr>
							<td>P Uday Kumar</td>
							<td>P Kuppaiah</td>
							<td>799</td>
						</tr>
						<tr>
							<td>P. Hari Priya</td>
							<td>P. Sreenivasa Reddy</td>
							<td>670</td>
						</tr>
						<tr>
							<td>P. Maheswar Reddy</td>
							<td>P. Mallikarjuna Redd</td>
							<td>504</td>
						</tr>
						<tr>
							<td>P. R. Praneeth</td>
							<td>P.Ramesh</td>
							<td>809</td>
						</tr>
						<tr>
							<td>P. R. Praneeth</td>
							<td>P.Ramesh</td>
							<td>830</td>
						</tr>
						<tr>
							<td>P.Anil Kumar</td>
							<td>P Ayyaswamy</td>
							<td>233</td>
						</tr>
						<tr>
							<td>P.Dhanunjay Rao</td>
							<td>P.Venkata Srinivasa</td>
							<td>609</td>
						</tr>
						<tr>
							<td>P.Eliyaz Khan</td>
							<td>P.Khaja Mohiddin</td>
							<td>846</td>
						</tr>
						<tr>
							<td>P.Girish</td>
							<td>P.Eswariah</td>
							<td>571</td>
						</tr>
						<tr>
							<td>P.Gurunithin</td>
							<td>P.Gurunadha</td>
							<td>889</td>
						</tr>
						<tr>
							<td>P.Khasim Saheb</td>
							<td>Khaja Bande Nawaaz</td>
							<td>167</td>
						</tr>
						<tr>
							<td>P.Madhu</td>
							<td>Prasadu</td>
							<td>252</td>
						</tr>
						<tr>
							<td>P.Mahammed Rafi</td>
							<td>Osman</td>
							<td>232</td>
						</tr>
						<tr>
							<td>P.Mahesh</td>
							<td>P.Sriramulu</td>
							<td>411</td>
						</tr>
						<tr>
							<td>P.Manoj Sai</td>
							<td>P.Govinda Rajulu</td>
							<td>789</td>
						</tr>
						<tr>
							<td>P.Prasanth</td>
							<td>Ramasubbaiah</td>
							<td>274</td>
						</tr>
						<tr>
							<td>P.Rama Krishna</td>
							<td>P. Venkatappa</td>
							<td>493</td>
						</tr>
						<tr>
							<td>P.Rambhupal Reddy</td>
							<td>P.Jaya Chandra Reddy</td>
							<td>708</td>
						</tr>
						<tr>
							<td>P.Sai Jyotsna</td>
							<td>P.Vijaya Kumar</td>
							<td>874</td>
						</tr>
						<tr>
							<td>P.Shiva Prasad</td>
							<td>Ps Narayana</td>
							<td>254</td>
						</tr>
						<tr>
							<td>P.Siva Sai Venkat</td>
							<td>P Sunil Kumar</td>
							<td>240</td>
						</tr>
						<tr>
							<td>P.Suleman Khan</td>
							<td>Hussain Khan</td>
							<td>123</td>
						</tr>
						<tr>
							<td>P.Suresh</td>
							<td>P Karrapa</td>
							<td>234</td>
						</tr>
						<tr>
							<td>P.Sushma</td>
							<td>P.Ashok Kumar</td>
							<td>437</td>
						</tr>
						<tr>
							<td>P.Tejeswar</td>
							<td>P Kumar Swamy</td>
							<td>235</td>
						</tr>
						<tr>
							<td>P.Vaishnava Sunil Kumar</td>
							<td>P V Venkateswarlu</td>
							<td>241</td>
						</tr>
						<tr>
							<td>P.Venkata Mahesh</td>
							<td>P.Siva Prasad</td>
							<td>682</td>
						</tr>
						<tr>
							<td>P.Vishnu Sai</td>
							<td>P.Poorna Chandra Red</td>
							<td>671</td>
						</tr>
						<tr>
							<td>Paamuru Jayannth</td>
							<td>P.Ravi Kumar</td>
							<td>448</td>
						</tr>
						<tr>
							<td>Palaparthi Greeshmitha Shree</td>
							<td>Pvr Durga Chalam</td>
							<td>786</td>
						</tr>
						<tr>
							<td>Papani Dhanush</td>
							<td>P.Murali Naidu</td>
							<td>379</td>
						</tr>
						<tr>
							<td>Parthasaradhi Reddy</td>
							<td>K.Sreenivasa Reddy</td>
							<td>161</td>
						</tr>
						<tr>
							<td>Parvathalareddysai</td>
							<td>Manohar</td>
							<td>494</td>
						</tr>
						<tr>
							<td>Pasupula Anil Kumar</td>
							<td>P Ramakrishnudu</td>
							<td>514</td>
						</tr>
						<tr>
							<td>Pathakota Gowtham Reddy</td>
							<td>Pathakota Koti Reddy</td>
							<td>610</td>
						</tr>
						<tr>
							<td>Pathivada Pratyusha</td>
							<td>Pathivada Pydi Naidu</td>
							<td>438</td>
						</tr>
						<tr>
							<td>Patnala Surya Prakash</td>
							<td>Patnala Ramu</td>
							<td>515</td>
						</tr>
						<tr>
							<td>Pavan</td>
							<td>Srinivasulu</td>
							<td>341</td>
						</tr>
						<tr>
							<td>Pavan Kumar</td>
							<td>G Ramaiah</td>
							<td>103</td>
						</tr>
						<tr>
							<td>Pedamajji Venkata Sai Jhansi Laxmi</td>
							<td>Pedamajji Ramana</td>
							<td>679</td>
						</tr>
						<tr>
							<td>Peddeti Narasimha</td>
							<td>Peddeti Narasaiah</td>
							<td>840</td>
						</tr>
						<tr>
							<td>Pentakota Saranya</td>
							<td>Krishna Eswararao</td>
							<td>769</td>
						</tr>
						<tr>
							<td>Pinapolu Saiindra</td>
							<td>Pinapolu Tatababu</td>
							<td>773</td>
						</tr>
						<tr>
							<td>Pocha Diwakar Reddy</td>
							<td>Pocha Chandra Reddy</td>
							<td>694</td>
						</tr>
						<tr>
							<td>Polampallidhanush</td>
							<td>Polampallichandrasha</td>
							<td>621</td>
						</tr>
						<tr>
							<td>Poly Supra Geethika</td>
							<td>Polu Umasankar</td>
							<td>385</td>
						</tr>
						<tr>
							<td>Ponnaganti Mounika</td>
							<td>Ponnaganti Sankarara</td>
							<td>787</td>
						</tr>
						<tr>
							<td>Pothina Sai Kiroodh Babu</td>
							<td>Pothina Appalaraju</td>
							<td>752</td>
						</tr>
						<tr>
							<td>Potuka Geetha</td>
							<td>P.Dharma Reddy</td>
							<td>611</td>
						</tr>
						<tr>
							<td>Pradeep</td>
							<td>G Ramesh</td>
							<td>105</td>
						</tr>
						<tr>
							<td>Pradeep Kumar</td>
							<td>Srinivasulu</td>
							<td>342</td>
						</tr>
						<tr>
							<td>Pradyumna Garada</td>
							<td>Iswar Garada</td>
							<td>838</td>
						</tr>
						<tr>
							<td>Prasad</td>
							<td>P Pullaiah</td>
							<td>237</td>
						</tr>
						<tr>
							<td>Prashanth</td>
							<td>Ramanamurthy</td>
							<td>866</td>
						</tr>
						<tr>
							<td>Praveen Kumar Reddy</td>
							<td>Anantha Reddy</td>
							<td>21</td>
						</tr>
						<tr>
							<td>Prerana</td>
							<td>Sridhar</td>
							<td>805</td>
						</tr>
						<tr>
							<td>Prince Kumar</td>
							<td>Krishna Singh</td>
							<td>834</td>
						</tr>
						<tr>
							<td>Pritha Sarkar</td>
							<td>Ashis Sarkar</td>
							<td>807</td>
						</tr>
						<tr>
							<td>Priyanka</td>
							<td>Srinivasarao</td>
							<td>677</td>
						</tr>
						<tr>
							<td>Priyanshu Mishra</td>
							<td>Badri Nath Mishra</td>
							<td>597</td>
						</tr>
						<tr>
							<td>Prudviraj</td>
							<td>Jayasimha</td>
							<td>137</td>
						</tr>
						<tr>
							<td>Pudi Narendra Yadav</td>
							<td>Pudi Umapathi</td>
							<td>480</td>
						</tr>
						<tr>
							<td>Pushna</td>
							<td>Prajjual</td>
							<td>806</td>
						</tr>
						<tr>
							<td>R Manu</td>
							<td>Raghunaik</td>
							<td>582</td>
						</tr>
						<tr>
							<td>R Manu</td>
							<td>Raghu Naik</td>
							<td>766</td>
						</tr>
						<tr>
							<td>R. B. Madhava Reddy</td>
							<td>R. B. Rami Reddy</td>
							<td>852</td>
						</tr>
						<tr>
							<td>R.Jagadeesh Reddy</td>
							<td>R.Hemadri Reddy</td>
							<td>622</td>
						</tr>
						<tr>
							<td>R.Kiran</td>
							<td>R.Kotaiah</td>
							<td>749</td>
						</tr>
						<tr>
							<td>R.Pavan Karthik</td>
							<td>R H Raju</td>
							<td>781</td>
						</tr>
						<tr>
							<td>R.Pavankarthik</td>
							<td>Rhraju</td>
							<td>865</td>
						</tr>
						<tr>
							<td>R.Sumanth</td>
							<td>R Devaraju</td>
							<td>257</td>
						</tr>
						<tr>
							<td>R.Venkata Ajay</td>
							<td>R V Ravindra</td>
							<td>258</td>
						</tr>
						<tr>
							<td>Rachamalla Manish Kumar Reddy</td>
							<td>Rachamalla Siva Sank</td>
							<td>623</td>
						</tr>
						<tr>
							<td>Rachamalla.Pallavi</td>
							<td>Rã Chamalla.Nageshwa</td>
							<td>522</td>
						</tr>
						<tr>
							<td>Radha Krishna</td>
							<td>Suresh Babu</td>
							<td>352</td>
						</tr>
						<tr>
							<td>Radha Krishna Goud</td>
							<td>Channakesulu Goud</td>
							<td>67</td>
						</tr>
						<tr>
							<td>Raghava</td>
							<td>Sekhar</td>
							<td>315</td>
						</tr>
						<tr>
							<td>Raghavendra</td>
							<td>Sivaiah</td>
							<td>329</td>
						</tr>
						<tr>
							<td>Raghunath Reddy</td>
							<td>B.Thimma Reddy</td>
							<td>47</td>
						</tr>
						<tr>
							<td>Raghunatha Reddy</td>
							<td>Ramachandra Reddy</td>
							<td>268</td>
						</tr>
						<tr>
							<td>Rahul</td>
							<td>Uk Chandra</td>
							<td>364</td>
						</tr>
						<tr>
							<td>Rahul Das</td>
							<td>Rabi Charan Das</td>
							<td>414</td>
						</tr>
						<tr>
							<td>Raja Jalinth</td>
							<td>P Shanthi Raju</td>
							<td>239</td>
						</tr>
						<tr>
							<td>Rajanala.Greeshmanth</td>
							<td>Rajanala.Viswanatham</td>
							<td>733</td>
						</tr>
						<tr>
							<td>Rajashekar Reddy</td>
							<td>M.Bhaskar Reddy</td>
							<td>184</td>
						</tr>
						<tr>
							<td>Rajesh</td>
							<td>D.Obulesh</td>
							<td>80</td>
						</tr>
						<tr>
							<td>Rajesh</td>
							<td>N Venkataramudu</td>
							<td>218</td>
						</tr>
						<tr>
							<td>Rajesh Kumar Reddy</td>
							<td>N Amarnath Reddy</td>
							<td>2</td>
						</tr>
						<tr>
							<td>Raju</td>
							<td>G Para,Es</td>
							<td>99</td>
						</tr>
						<tr>
							<td>Rakesh</td>
							<td>P Venkateswarlu</td>
							<td>243</td>
						</tr>
						<tr>
							<td>Rama Sundar Goud</td>
							<td>M Suresh Goud</td>
							<td>183</td>
						</tr>
						<tr>
							<td>Ramatulasi Paila</td>
							<td>Venkata Ramana Paila</td>
							<td>735</td>
						</tr>
						<tr>
							<td>Ravi Kanth Reddy</td>
							<td>Venkata Ramana Reddy</td>
							<td>543</td>
						</tr>
						<tr>
							<td>Ravi Teja</td>
							<td>Sudarshan Reddy</td>
							<td>347</td>
						</tr>
						<tr>
							<td>Ravikant Shahi</td>
							<td>Ashwini Kumar</td>
							<td>701</td>
						</tr>
						<tr>
							<td>Ravindra</td>
							<td>Ramesh Babu</td>
							<td>275</td>
						</tr>
						<tr>
							<td>Reddi Bhavya Sri</td>
							<td>Reddi Srinivasa Rao</td>
							<td>562</td>
						</tr>
						<tr>
							<td>Reddy Baby Bhuvana</td>
							<td>Reddy Swamy Naidu</td>
							<td>544</td>
						</tr>
						<tr>
							<td>Rishab Kumar Sah</td>
							<td>Bijay Kumar Sah</td>
							<td>563</td>
						</tr>
						<tr>
							<td>Rishikar Babu</td>
							<td>K Shekhar Babu</td>
							<td>146</td>
						</tr>
						<tr>
							<td>Rishiraj Momin</td>
							<td>Clement Momin</td>
							<td>782</td>
						</tr>
						<tr>
							<td>Ritika Sah</td>
							<td>Upendra Prasad Sah</td>
							<td>753</td>
						</tr>
						<tr>
							<td>Rituraj Roy Chowdhury</td>
							<td>Rakteem Roy Chowdhur</td>
							<td>794</td>
						</tr>
						<tr>
							<td>Rohit Singh</td>
							<td>Mukul Kumar</td>
							<td>784</td>
						</tr>
						<tr>
							<td>Rokkam Ramya</td>
							<td>Rokkam Srinivash</td>
							<td>523</td>
						</tr>
						<tr>
							<td>Rudra Narayan Chetty</td>
							<td>Rames Chetty</td>
							<td>872</td>
						</tr>
						<tr>
							<td>S Fazil Karim</td>
							<td>S Asadulla Sait</td>
							<td>829</td>
						</tr>
						<tr>
							<td>S. Manjunath</td>
							<td>S. Sathish Kumar</td>
							<td>644</td>
						</tr>
						<tr>
							<td>S.Abdul Raheman</td>
							<td>Muneer Ahmed</td>
							<td>210</td>
						</tr>
						<tr>
							<td>S.Abdul Salam</td>
							<td>Jaleel Ahmedq</td>
							<td>131</td>
						</tr>
						<tr>
							<td>S.Akhil Kumar</td>
							<td>Srinivasulu</td>
							<td>343</td>
						</tr>
						<tr>
							<td>S.Ameed Ahmed Shahid</td>
							<td>S Sayeed Ahmed</td>
							<td>299</td>
						</tr>
						<tr>
							<td>S.Asif Hussain Khadri</td>
							<td>Maqbool Basha Khadri</td>
							<td>202</td>
						</tr>
						<tr>
							<td>S.Awaez Basha</td>
							<td>Shaik Ansar Basha</td>
							<td>318</td>
						</tr>
						<tr>
							<td>S.Chaitanya Kumar</td>
							<td>S.Raja Kumar</td>
							<td>350</td>
						</tr>
						<tr>
							<td>S.Dilip Kumar</td>
							<td>S Ravi Kumar</td>
							<td>296</td>
						</tr>
						<tr>
							<td>S.Fairoz</td>
							<td>Shaik Ansar Basha</td>
							<td>319</td>
						</tr>
						<tr>
							<td>S.Fyaz Ahmed</td>
							<td>Mabasha</td>
							<td>190</td>
						</tr>
						<tr>
							<td>S.Ghouse Peer Khadri</td>
							<td>Chota Basha</td>
							<td>70</td>
						</tr>
						<tr>
							<td>S.Imran</td>
							<td>S Shaiksha Vali</td>
							<td>301</td>
						</tr>
						<tr>
							<td>S.Imran</td>
							<td>Shaik Mastha Vali</td>
							<td>321</td>
						</tr>
						<tr>
							<td>S.Ismail</td>
							<td>Abdul Khadir</td>
							<td>20</td>
						</tr>
						<tr>
							<td>S.Khalid Mohammed</td>
							<td>Abdul Khadar</td>
							<td>19</td>
						</tr>
						<tr>
							<td>S.Madhusekhar</td>
							<td>S Chennakesavulu</td>
							<td>288</td>
						</tr>
						<tr>
							<td>S.Mahaboob Basha</td>
							<td>Dada Basha</td>
							<td>82</td>
						</tr>
						<tr>
							<td>S.Md.Siddiq</td>
							<td>S.Rajendra Alias Mou</td>
							<td>495</td>
						</tr>
						<tr>
							<td>S.Mohammed Abdur Rahma</td>
							<td>S Saleem Basha</td>
							<td>297</td>
						</tr>
						<tr>
							<td>S.Muneer Basha</td>
							<td>Khajabanda Nawaz</td>
							<td>169</td>
						</tr>
						<tr>
							<td>S.Pravallika</td>
							<td>S.Narayana Reddy</td>
							<td>672</td>
						</tr>
						<tr>
							<td>S.R.Nagavenkata Vasanth</td>
							<td>S.Raghavendra Prasad</td>
							<td>574</td>
						</tr>
						<tr>
							<td>S.Raghavendra</td>
							<td>Jayanna</td>
							<td>134</td>
						</tr>
						<tr>
							<td>S.Raheem Basha</td>
							<td>Mahaboob Basha</td>
							<td>196</td>
						</tr>
						<tr>
							<td>S.Ranganayakulu</td>
							<td>Bhagya Chandra Bhupal</td>
							<td>54</td>
						</tr>
						<tr>
							<td>S.Sabir</td>
							<td>Smd Saleem</td>
							<td>331</td>
						</tr>
						<tr>
							<td>S.Sai Akhil Kashyap</td>
							<td>S Girija Manohar Rao</td>
							<td>289</td>
						</tr>
						<tr>
							<td>S.Sameer Basha</td>
							<td>Saleem Basha</td>
							<td>308</td>
						</tr>
						<tr>
							<td>S.Shadab Hussain</td>
							<td>S Abdul Munab</td>
							<td>286</td>
						</tr>
						<tr>
							<td>S.Shakeel Basha</td>
							<td>Chand Basha</td>
							<td>65</td>
						</tr>
						<tr>
							<td>S.Umair</td>
							<td>Shaik Aejaaz Basha</td>
							<td>317</td>
						</tr>
						<tr>
							<td>S.Umair Ahmed</td>
							<td>Shaik Muqthair Ahmed</td>
							<td>323</td>
						</tr>
						<tr>
							<td>S.Veera Devender Reddy</td>
							<td>S.Bhaskar Reddy</td>
							<td>545</td>
						</tr>
						<tr>
							<td>S.Yaswanth</td>
							<td>S.Mallikarjunareddy</td>
							<td>449</td>
						</tr>
						<tr>
							<td>Sadanala Venkata Kireeti</td>
							<td>Sadanala.Venkateswar</td>
							<td>624</td>
						</tr>
						<tr>
							<td>Sadath Nazeema Afrin</td>
							<td>Syed Sadath Ali</td>
							<td>417</td>
						</tr>
						<tr>
							<td>Sai Charan Reddy</td>
							<td>Asambasiva Reddy</td>
							<td>24</td>
						</tr>
						<tr>
							<td>Sai Charan Reddy</td>
							<td>B.Umakanth Reddy</td>
							<td>48</td>
						</tr>
						<tr>
							<td>Sai Kiran</td>
							<td>D Purushotham</td>
							<td>74</td>
						</tr>
						<tr>
							<td>Sai Kiroodh Babu</td>
							<td>Appalaraju</td>
							<td>572</td>
						</tr>
						<tr>
							<td>Sai Krishan Reddy</td>
							<td>A.Venkateswara Reddy</td>
							<td>18</td>
						</tr>
						<tr>
							<td>Sai Krishna Reddy</td>
							<td>M Veera Sena Reddy</td>
							<td>1</td>
						</tr>
						<tr>
							<td>Sai Mukesh</td>
							<td>G.Praveen Kumar</td>
							<td>115</td>
						</tr>
						<tr>
							<td>Sai Nath Reddy</td>
							<td>C Sreenivasa Reddy</td>
							<td>57</td>
						</tr>
						<tr>
							<td>Sai Rohitha Vanjarapu</td>
							<td>Bhaskara Rao Vanjara</td>
							<td>659</td>
						</tr>
						<tr>
							<td>Sai Sreenivasa Kumar Talari</td>
							<td>Talari Hema Kumar La</td>
							<td>496</td>
						</tr>
						<tr>
							<td>Sai Teja</td>
							<td>Krishnaiah</td>
							<td>171</td>
						</tr>
						<tr>
							<td>Sai Vankat</td>
							<td>D Bhanu Prakash Babu</td>
							<td>72</td>
						</tr>
						<tr>
							<td>Saibharathi</td>
							<td>Obulesu</td>
							<td>885</td>
						</tr>
						<tr>
							<td>Saicharan Reddy</td>
							<td>Prathap Reddy</td>
							<td>253</td>
						</tr>
						<tr>
							<td>Saichetan</td>
							<td>Anjineyulu</td>
							<td>737</td>
						</tr>
						<tr>
							<td>Saichetan</td>
							<td>Anjineyulu</td>
							<td>819</td>
						</tr>
						<tr>
							<td>Saivasanth Kumar</td>
							<td>T Raghavendar</td>
							<td>357</td>
						</tr>
						<tr>
							<td>Sake Narasimha</td>
							<td>Sake Prabhakar</td>
							<td>596</td>
						</tr>
						<tr>
							<td>Saliya.</td>
							<td>Rahiman</td>
							<td>583</td>
						</tr>
						<tr>
							<td>Sambangi Raju</td>
							<td>Sambangi Apparao</td>
							<td>481</td>
						</tr>
						<tr>
							<td>Sambu Sasi Kiran</td>
							<td>Sambu Arun Kumar</td>
							<td>763</td>
						</tr>
						<tr>
							<td>Sandeep</td>
							<td>B Ramanna</td>
							<td>36</td>
						</tr>
						<tr>
							<td>Sandeep Kumar</td>
							<td>Narayana</td>
							<td>231</td>
						</tr>
						<tr>
							<td>Sandeep Kumar Reddy</td>
							<td>H K Veera Reddy</td>
							<td>122</td>
						</tr>
						<tr>
							<td>Sandra Poojitha</td>
							<td>Sandra Mahesh</td>
							<td>612</td>
						</tr>
						<tr>
							<td>Sandra Sai Chandu</td>
							<td>Bhaskar Naidu</td>
							<td>573</td>
						</tr>
						<tr>
							<td>Sane Bhargava</td>
							<td>Sane Sivashankariah</td>
							<td>497</td>
						</tr>
						<tr>
							<td>Sanjeeva Prasanth</td>
							<td>Sanjappa</td>
							<td>309</td>
						</tr>
						<tr>
							<td>Sannala Jaya Chennakesavareddy</td>
							<td>Sannala Sudhakar Red</td>
							<td>844</td>
						</tr>
						<tr>
							<td>Santhosh</td>
							<td>Matam Thippe Swamy</td>
							<td>204</td>
						</tr>
						<tr>
							<td>Santhosh Reddy</td>
							<td>Chinna Subbi Reddy</td>
							<td>69</td>
						</tr>
						<tr>
							<td>Sarfaraz Khader</td>
							<td>Jeelani Basha</td>
							<td>719</td>
						</tr>
						<tr>
							<td>Sasaank</td>
							<td>Anjaneyulu</td>
							<td>680</td>
						</tr>
						<tr>
							<td>Sashank.H.S</td>
							<td>K.V.Sreedharachari</td>
							<td>792</td>
						</tr>
						<tr>
							<td>Satish Kumar Reddy</td>
							<td>P Raja Gopal Reddy</td>
							<td>238</td>
						</tr>
						<tr>
							<td>Satya Narayana Raju</td>
							<td>Subbaraju</td>
							<td>425</td>
						</tr>
						<tr>
							<td>Satyam Swami</td>
							<td>Om Praksh Swami</td>
							<td>722</td>
						</tr>
						<tr>
							<td>Satyanarayana</td>
							<td>N.Ampaiah</td>
							<td>219</td>
						</tr>
						<tr>
							<td>Satyaswarup Jena</td>
							<td>Debendra Kumar Jena</td>
							<td>524</td>
						</tr>
						<tr>
							<td>Saumya Mahapatra</td>
							<td>S B Mahapatra</td>
							<td>457</td>
						</tr>
						<tr>
							<td>Seethi Yathish Kumar Reddy</td>
							<td>S.Subba Reddy</td>
							<td>407</td>
						</tr>
						<tr>
							<td>Seshi Reddy</td>
							<td>Vera Reddy</td>
							<td>398</td>
						</tr>
						<tr>
							<td>Shaik Abbas Basha</td>
							<td>Shaik Mahaboob Basha</td>
							<td>473</td>
						</tr>
						<tr>
							<td>Shaik Ameena</td>
							<td>Shaik Baba Fakruddin</td>
							<td>613</td>
						</tr>
						<tr>
							<td>Shaik Asif</td>
							<td>Shaik Akthar</td>
							<td>645</td>
						</tr>
						<tr>
							<td>Shaik Asif</td>
							<td>Shaik Arif</td>
							<td>790</td>
						</tr>
						<tr>
							<td>Shaik Jaffar Ali</td>
							<td>Shaik Liyakhath Ali</td>
							<td>461</td>
						</tr>
						<tr>
							<td>Shaik Mahammad Maruf</td>
							<td>Shaik Mahammad Shafi</td>
							<td>458</td>
						</tr>
						<tr>
							<td>Shaik Mohamad Immee Gouse Basha</td>
							<td>Shaik Ansar Basha</td>
							<td>699</td>
						</tr>
						<tr>
							<td>Shaik Mohammed Esa</td>
							<td>Shaik Mohammed Yusuf</td>
							<td>533</td>
						</tr>
						<tr>
							<td>Shaik Mohammed Faizan</td>
							<td>Shaik Abdul Basheer</td>
							<td>614</td>
						</tr>
						<tr>
							<td>Shaik Mohammed Ghouse Suhail</td>
							<td>Shaik Karimulla Bash</td>
							<td>678</td>
						</tr>
						<tr>
							<td>Shaik Mohammed Suhail</td>
							<td>Shaik Kamal Basha</td>
							<td>695</td>
						</tr>
						<tr>
							<td>Shaik Raja Sameer</td>
							<td>Shaik Bannisa</td>
							<td>320</td>
						</tr>
						<tr>
							<td>Shaik Salman Basha</td>
							<td>Shaik Mahaboob Basha</td>
							<td>625</td>
						</tr>
						<tr>
							<td>Shaik Sonu Basha</td>
							<td>Shaik Lalu Basha</td>
							<td>777</td>
						</tr>
						<tr>
							<td>Shaik Subhan Basha</td>
							<td>Shaik Saleem</td>
							<td>482</td>
						</tr>
						<tr>
							<td>Shaik Tahseen Nishat</td>
							<td>Abdul Rahaman</td>
							<td>293</td>
						</tr>
						<tr>
							<td>Shaik.Nayab Rasool</td>
							<td>S.Jakeer Hussain</td>
							<td>800</td>
						</tr>
						<tr>
							<td>Shaik.Shajid</td>
							<td>Shaik.Karimulla</td>
							<td>388</td>
						</tr>
						<tr>
							<td>Shanmukh Sai Srinivas Buddi</td>
							<td>Buddi Siva Prasad</td>
							<td>825</td>
						</tr>
						<tr>
							<td>Shanmukh Sai Srinivas.B</td>
							<td>Siva Prasad.B</td>
							<td>412</td>
						</tr>
						<tr>
							<td>Shanmukha Krisha</td>
							<td>Sredhar</td>
							<td>332</td>
						</tr>
						<tr>
							<td>Sharathchanra</td>
							<td>Venkata Subbaiah</td>
							<td>387</td>
						</tr>
						<tr>
							<td>Shareef Basha</td>
							<td>Ghouse Basha</td>
							<td>118</td>
						</tr>
						<tr>
							<td>Shashank Shekhar</td>
							<td>Arvind Kumar</td>
							<td>598</td>
						</tr>
						<tr>
							<td>Shiv Shankar Sahu</td>
							<td>Bishnu Sahu</td>
							<td>704</td>
						</tr>
						<tr>
							<td>Shruti Gawai</td>
							<td>Dharmendra Gawai</td>
							<td>767</td>
						</tr>
						<tr>
							<td>Shubham Kumar</td>
							<td>Aditya Kumar Shandil</td>
							<td>629</td>
						</tr>
						<tr>
							<td>Sirigiri Raaga Sindhu</td>
							<td>Sirigiri Rama Bhupal</td>
							<td>474</td>
						</tr>
						<tr>
							<td>Siriki Sowjanya</td>
							<td>Siriki Jagannadham</td>
							<td>770</td>
						</tr>
						<tr>
							<td>Siva Kumar Reddy</td>
							<td>Dharma Reddy</td>
							<td>87</td>
						</tr>
						<tr>
							<td>Siva Nagi Reddy</td>
							<td>T.Madhusudhan Reddy</td>
							<td>362</td>
						</tr>
						<tr>
							<td>Siva Swapnil Reddy</td>
							<td>Samba Siva Reddy</td>
							<td>534</td>
						</tr>
						<tr>
							<td>Sk.Khaja Umar Fazil</td>
							<td>Sk.Jeelani</td>
							<td>764</td>
						</tr>
						<tr>
							<td>Sohail Ahammed</td>
							<td>S.Rasheed Ahammed</td>
							<td>305</td>
						</tr>
						<tr>
							<td>Soumya Ranajn Sahoo</td>
							<td>Prabhakar Sahoo</td>
							<td>546</td>
						</tr>
						<tr>
							<td>Sravanth Kumar</td>
							<td>Sreedhar Gupta</td>
							<td>615</td>
						</tr>
						<tr>
							<td>Sree Ram</td>
							<td>N Kullai Swamy</td>
							<td>214</td>
						</tr>
						<tr>
							<td>Sreekanth</td>
							<td>V Brahmaaiah Achari</td>
							<td>366</td>
						</tr>
						<tr>
							<td>Sreenath Reddy</td>
							<td>K Sai Reddy</td>
							<td>143</td>
						</tr>
						<tr>
							<td>Sreenivas Sreejith Sagar</td>
							<td>E.V Sreni Vasan</td>
							<td>90</td>
						</tr>
						<tr>
							<td>Sreeramulu</td>
							<td>Mudaava Giddaiah</td>
							<td>209</td>
						</tr>
						<tr>
							<td>Sri Ram Charan Reddy</td>
							<td>Raja Gopal Reddy</td>
							<td>462</td>
						</tr>
						<tr>
							<td>Sridhar</td>
							<td>T Venkateswarlu</td>
							<td>361</td>
						</tr>
						<tr>
							<td>Sriharsha Paruchuru</td>
							<td>Sriram Paruchuru</td>
							<td>408</td>
						</tr>
						<tr>
							<td>Srikar Reddy</td>
							<td>Pothula Sreedhar Reddy</td>
							<td>249</td>
						</tr>
						<tr>
							<td>Srinivas</td>
							<td>Ranganath</td>
							<td>280</td>
						</tr>
						<tr>
							<td>Srinivasa Prasad</td>
							<td>Venkateswarlu</td>
							<td>396</td>
						</tr>
						<tr>
							<td>Srinivasulu</td>
							<td>Ramudu</td>
							<td>278</td>
						</tr>
						<tr>
							<td>Srinuvasulu</td>
							<td>Chenna Venkata Ramud</td>
							<td>709</td>
						</tr>
						<tr>
							<td>Sudharshan Reddy</td>
							<td>Chandra Obulreddy</td>
							<td>696</td>
						</tr>
						<tr>
							<td>Sudheer</td>
							<td>Nageswararao</td>
							<td>227</td>
						</tr>
						<tr>
							<td>Sudheer Reddy</td>
							<td>Purusotham Reddy</td>
							<td>256</td>
						</tr>
						<tr>
							<td>Sugunath Reddy</td>
							<td>Raghavareddy</td>
							<td>263</td>
						</tr>
						<tr>
							<td>Sujith Kumar Reddy</td>
							<td>Subramanyam</td>
							<td>700</td>
						</tr>
						<tr>
							<td>Sumanth</td>
							<td>Nageswararao</td>
							<td>226</td>
						</tr>
						<tr>
							<td>Sumanth</td>
							<td>Masthanaiah</td>
							<td>626</td>
						</tr>
						<tr>
							<td>Sumit Kumar</td>
							<td>Ram Ratan Parsad</td>
							<td>816</td>
						</tr>
						<tr>
							<td>Sunil Kumar</td>
							<td>Nageswaraiah</td>
							<td>225</td>
						</tr>
						<tr>
							<td>Suresh</td>
							<td>Subba Rayudu</td>
							<td>345</td>
						</tr>
						<tr>
							<td>Suresh Kumar Reddy</td>
							<td>G Venkata Reddy</td>
							<td>110</td>
						</tr>
						<tr>
							<td>Surya Prakash</td>
							<td>K H Lava Kumar</td>
							<td>139</td>
						</tr>
						<tr>
							<td>Surya Prakash Reddy</td>
							<td>G Ramachandra Reddy</td>
							<td>102</td>
						</tr>
						<tr>
							<td>Surya Teja</td>
							<td>Chandra Sekhar</td>
							<td>66</td>
						</tr>
						<tr>
							<td>Suryaragavendra</td>
							<td>Sathyanarayana</td>
							<td>311</td>
						</tr>
						<tr>
							<td>Swapna Mavudilli</td>
							<td>Mavudilli Srinivasa</td>
							<td>835</td>
						</tr>
						<tr>
							<td>Syed Nakhi Aki</td>
							<td>Syed Subani</td>
							<td>765</td>
						</tr>
						<tr>
							<td>T Naga Sai Akshay</td>
							<td>T V Nagaraj Prasad</td>
							<td>793</td>
						</tr>
						<tr>
							<td>T Sai Sreekar</td>
							<td>T Seetharam</td>
							<td>413</td>
						</tr>
						<tr>
							<td>T. Kiran</td>
							<td>T. Chinnasudhakar</td>
							<td>646</td>
						</tr>
						<tr>
							<td>T.Jaya Surya</td>
							<td>T Ramesh</td>
							<td>358</td>
						</tr>
						<tr>
							<td>T.Lokesh Reddy</td>
							<td>T.Ramana Reddy</td>
							<td>547</td>
						</tr>
						<tr>
							<td>T.Medarimahesh</td>
							<td>Prakash</td>
							<td>251</td>
						</tr>
						<tr>
							<td>T.Shashikumar</td>
							<td>T Ayyanna</td>
							<td>354</td>
						</tr>
						<tr>
							<td>T.Sree Chaithanya</td>
							<td>T.Sreenivasulu</td>
							<td>710</td>
						</tr>
						<tr>
							<td>T.Yashwanth</td>
							<td>Madhu Mohan</td>
							<td>194</td>
						</tr>
						<tr>
							<td>Tanmesh Chandra Sahu</td>
							<td>Ramesh Chandra Sahu</td>
							<td>860</td>
						</tr>
						<tr>
							<td>Tarun Sai</td>
							<td>Dhanaiah</td>
							<td>368</td>
						</tr>
						<tr>
							<td>Teja Harsha Vardhan</td>
							<td>Sreenivasulu</td>
							<td>333</td>
						</tr>
						<tr>
							<td>Teja Kumar</td>
							<td>B.V Sreenivasulu</td>
							<td>49</td>
						</tr>
						<tr>
							<td>Thamim</td>
							<td>Ma Ha Boob Basha</td>
							<td>863</td>
						</tr>
						<tr>
							<td>Thohid Azar Basha</td>
							<td>K.Barji Vali Saheb</td>
							<td>152</td>
						</tr>
						<tr>
							<td>Tunga Prudhvi Raj</td>
							<td>T.Muniraja</td>
							<td>711</td>
						</tr>
						<tr>
							<td>U Purushotham Yadav</td>
							<td>U Ramapullaiah</td>
							<td>459</td>
						</tr>
						<tr>
							<td>U.Ramesh</td>
							<td>Venkateswarulu</td>
							<td>397</td>
						</tr>
						<tr>
							<td>U.Ravi</td>
							<td>Guru Das</td>
							<td>121</td>
						</tr>
						<tr>
							<td>U.Sofia</td>
							<td>U.Venkatasesaiah</td>
							<td>439</td>
						</tr>
						<tr>
							<td>Upendra</td>
							<td>Ganesh Babu</td>
							<td>750</td>
						</tr>
						<tr>
							<td>Upendra Kumar</td>
							<td>K.Venkateswarlu</td>
							<td>165</td>
						</tr>
						<tr>
							<td>Usha Ramba</td>
							<td>R. Ramu Naidu</td>
							<td>702</td>
						</tr>
						<tr>
							<td>V C Madhu Sai Venkat</td>
							<td>V C Venkata Prasad</td>
							<td>847</td>
						</tr>
						<tr>
							<td>V Lakshmi Raja</td>
							<td>V Sundaram</td>
							<td>431</td>
						</tr>
						<tr>
							<td>V. Niranjan</td>
							<td>V. Dassana</td>
							<td>483</td>
						</tr>
						<tr>
							<td>V. Niranjan</td>
							<td>V. Dassana</td>
							<td>810</td>
						</tr>
						<tr>
							<td>V. Said Vikas</td>
							<td>V. Nagaraju</td>
							<td>673</td>
						</tr>
						<tr>
							<td>V. Saranya</td>
							<td>V. Ravi Chandra Gupt</td>
							<td>409</td>
						</tr>
						<tr>
							<td>V.Anjan Kiran Kumar</td>
							<td>V Govindu</td>
							<td>367</td>
						</tr>
						<tr>
							<td>V.Anvitha</td>
							<td>V.Harinath Reddy</td>
							<td>420</td>
						</tr>
						<tr>
							<td>V.Bhuvaneswari</td>
							<td>V.Ramu</td>
							<td>584</td>
						</tr>
						<tr>
							<td>V.Chethan</td>
							<td>M. Vasudevan</td>
							<td>585</td>
						</tr>
						<tr>
							<td>V.Harish Kumar</td>
							<td>V.Murali Krishna</td>
							<td>498</td>
						</tr>
						<tr>
							<td>V.Jahnavi</td>
							<td>V.Tulasi Das</td>
							<td>881</td>
						</tr>
						<tr>
							<td>V.S.Md.Saleem</td>
							<td>V.Md.Ghouse</td>
							<td>880</td>
						</tr>
						<tr>
							<td>V.Saiteja</td>
							<td>V.Venkatadri</td>
							<td>535</td>
						</tr>
						<tr>
							<td>V.Sudheendra Sai</td>
							<td>V.Sekhar</td>
							<td>463</td>
						</tr>
						<tr>
							<td>V.Vishwa Sai</td>
							<td>V.Chandra</td>
							<td>661</td>
						</tr>
						<tr>
							<td>Vadde Kunchepu Bhargavi</td>
							<td>Vadde Kunchepu Anjin</td>
							<td>505</td>
						</tr>
						<tr>
							<td>Vakamalla Chandrika</td>
							<td>Vakamalla Lakshmi Na</td>
							<td>418</td>
						</tr>
						<tr>
							<td>Vakamalla Manjula</td>
							<td>Vakamalla Dasaradha</td>
							<td>674</td>
						</tr>
						<tr>
							<td>Valadasu. Gnaneswar</td>
							<td>V. Thoyajakshudu</td>
							<td>464</td>
						</tr>
						<tr>
							<td>Vamshi</td>
							<td>Satish Kumar Elluru</td>
							<td>312</td>
						</tr>
						<tr>
							<td>Vamsi Krishna</td>
							<td>Sriramulu</td>
							<td>344</td>
						</tr>
						<tr>
							<td>Vamsidhara Reddy</td>
							<td>Venkateswara Reddy</td>
							<td>394</td>
						</tr>
						<tr>
							<td>Vamsika. Allu</td>
							<td>Allu. Ramana Murthy</td>
							<td>739</td>
						</tr>
						<tr>
							<td>Vanaja</td>
							<td>Anjaneyulu</td>
							<td>712</td>
						</tr>
						<tr>
							<td>Vanipenta Balaji</td>
							<td>Vanipenta Chalapathi</td>
							<td>516</td>
						</tr>
						<tr>
							<td>Varun Kumar</td>
							<td>K Vijay Kumar</td>
							<td>150</td>
						</tr>
						<tr>
							<td>Veera Chandra Reddy</td>
							<td>Seetarami Reddy</td>
							<td>314</td>
						</tr>
						<tr>
							<td>Veera Raghva Reddy</td>
							<td>K.Siva Shankar</td>
							<td>160</td>
						</tr>
						<tr>
							<td>Velpucherla Sravan Kumar</td>
							<td>Velpucherla Venu Gop</td>
							<td>465</td>
						</tr>
						<tr>
							<td>Vemula Jashwanth</td>
							<td>Vemula Ramulu</td>
							<td>723</td>
						</tr>
						<tr>
							<td>Vemula Saiteja</td>
							<td>Vemula Venkatadri</td>
							<td>890</td>
						</tr>
						<tr>
							<td>Venkata Goutham Reddy</td>
							<td>Ramana Reddy</td>
							<td>270</td>
						</tr>
						<tr>
							<td>Venkata Gowtham</td>
							<td>Venkata Rao</td>
							<td>382</td>
						</tr>
						<tr>
							<td>Venkata Mahesh</td>
							<td>Srinivasulu</td>
							<td>339</td>
						</tr>
						<tr>
							<td>Venkata Suresh Thummalapenta</td>
							<td>Thummalapenta Venkat</td>
							<td>372</td>
						</tr>
						<tr>
							<td>Venkatakiran</td>
							<td>D Sreenivasulu</td>
							<td>75</td>
						</tr>
						<tr>
							<td>Venkateswara Reddy</td>
							<td>L.Madhava Reddy</td>
							<td>173</td>
						</tr>
						<tr>
							<td>Venkateswarlu</td>
							<td>K.Brahmaiah</td>
							<td>154</td>
						</tr>
						<tr>
							<td>Venugopal</td>
							<td>K.Venkateswarlu</td>
							<td>164</td>
						</tr>
						<tr>
							<td>Vepamanu Sravani</td>
							<td>Vepamanu Anjaneyulu</td>
							<td>721</td>
						</tr>
						<tr>
							<td>Vijay Kumar</td>
							<td>Venu Gopal</td>
							<td>870</td>
						</tr>
						<tr>
							<td>Vijay Kumar</td>
							<td>Narasimhulu</td>
							<td>229</td>
						</tr>
						<tr>
							<td>Vinay Goud</td>
							<td>K.Venkata Ramana</td>
							<td>162</td>
						</tr>
						<tr>
							<td>Vinay Kumar</td>
							<td>T.Venkateswarlu</td>
							<td>363</td>
						</tr>
						<tr>
							<td>Vinay Kumar Reddy</td>
							<td>B Rajendra Reddy</td>
							<td>34</td>
						</tr>
						<tr>
							<td>Vineeth Kumar Reddy</td>
							<td>C.Ram Mohan Reddy</td>
							<td>61</td>
						</tr>
						<tr>
							<td>Vinod</td>
							<td>J Veeresh</td>
							<td>128</td>
						</tr>
						<tr>
							<td>Vinod Kumar</td>
							<td>S Ramaiah</td>
							<td>295</td>
						</tr>
						<tr>
							<td>Vinod Kumar</td>
							<td>Raphael</td>
							<td>281</td>
						</tr>
						<tr>
							<td>Vishnu Vardhan Reddy</td>
							<td>B Nageswar Reddy</td>
							<td>32</td>
						</tr>
						<tr>
							<td>Vishnuvardan Reddy</td>
							<td>Ramana Reddy</td>
							<td>271</td>
						</tr>
						<tr>
							<td>Vishnuvardhan Reddy</td>
							<td>Nageswara Reddy</td>
							<td>224</td>
						</tr>
						<tr>
							<td>Viswam</td>
							<td>Gangaiah</td>
							<td>861</td>
						</tr>
						<tr>
							<td>Vithahavya</td>
							<td>Nagaraju</td>
							<td>222</td>
						</tr>
						<tr>
							<td>Vivek</td>
							<td>K.Basavaraju</td>
							<td>153</td>
						</tr>
						<tr>
							<td>Vivek</td>
							<td>Sreenivasulu</td>
							<td>334</td>
						</tr>
						<tr>
							<td>Vundela Bala Obula Reddy</td>
							<td>Vundela Chandra Obul</td>
							<td>734</td>
						</tr>
						<tr>
							<td>Vyshnavi</td>
							<td>Subramanyam</td>
							<td>876</td>
						</tr>
						<tr>
							<td>Y. Dhanya</td>
							<td>Y.Srinivasulu</td>
							<td>548</td>
						</tr>
						<tr>
							<td>Y. Dinesh Kumar Reddy</td>
							<td>Y. Surendra Nath Red</td>
							<td>430</td>
						</tr>
						<tr>
							<td>Y.Dinesh Reddy</td>
							<td>Y.Ravichandra Reddy</td>
							<td>549</td>
						</tr>
						<tr>
							<td>Y.Divyasree</td>
							<td>Y. Rameshwarreddy</td>
							<td>791</td>
						</tr>
						<tr>
							<td>Y.Pranitha</td>
							<td>Y.Venkata Reddy</td>
							<td>328</td>
						</tr>
						<tr>
							<td>Y.Siva Krishna</td>
							<td>Y.Yangamuni</td>
							<td>627</td>
						</tr>
						<tr>
							<td>Y.Sreenivasulu</td>
							<td>Y Chinna Reddy</td>
							<td>399</td>
						</tr>
						<tr>
							<td>Yala.Churnika</td>
							<td>Yala.Apparao</td>
							<td>648</td>
						</tr>
						<tr>
							<td>Yalapalli Kumar</td>
							<td>Yalapalli Jayachandr</td>
							<td>506</td>
						</tr>
						<tr>
							<td>Yaragonda Sai Haran Kumar Reddy</td>
							<td>Yaragonda Gangul Red</td>
							<td>507</td>
						</tr>
						<tr>
							<td>Yaseen Basha</td>
							<td>Riyajuddin</td>
							<td>285</td>
						</tr>
						<tr>
							<td>Yash Aman Srivastava</td>
							<td>Aman Srivastava</td>
							<td>828</td>
						</tr>
						<tr>
							<td>Yashovardan</td>
							<td>Venkata Ramudu</td>
							<td>381</td>
						</tr>
						<tr>
							<td>Yaswanth Kumar</td>
							<td>B.Veera Prasad</td>
							<td>50</td>
						</tr>
						<tr>
							<td>Yellala Arun Kumar</td>
							<td>Yellala Sanjeeva Ray</td>
							<td>697</td>
						</tr>
						<tr>
							<td>Yellanuru Sree Harshitha</td>
							<td>Yellanuru Muniswara</td>
							<td>517</td>
						</tr>
						<tr>
							<td>Yendeti Venkata Krishna Chaitanya</td>
							<td>Yendeti Srinivasulu</td>
							<td>886</td>
						</tr>
						<tr>
							<td>Yerrama Reddy Sathvik Reddy</td>
							<td>Yerrama Reddy Prabha</td>
							<td>550</td>
						</tr>
						<tr>
							<td>Yogeshwar</td>
							<td>Sheahanna</td>
							<td>327</td>
						</tr>
						<tr>
							<td>Yunush</td>
							<td>Nagaraju</td>
							<td>223</td>
						</tr>
						<tr>
							<td>Yuva Prathima Sola</td>
							<td>Raghunath Sola</td>
							<td>421</td>
						</tr>
					</tbody>
				</table>


			</div>
		</div>

		<div class="footer-w3-agile">
			<p>NGI RESULTS</p>
		</div>

		<script>
			function myFunction() {
				// Declare variables
				var input, filter, table, tr, td, i, txtValue;
				input = document.getElementById("myInput");
				filter = input.value.toUpperCase();
				table = document.getElementById("myTable");
				tr = table.getElementsByTagName("tr");

				// Loop through all table rows, and hide those who don't match the search query
				for (i = 0; i < tr.length; i++) {
					td = tr[i].getElementsByTagName("td")[0];
					if (td) {
						txtValue = td.textContent || td.innerText;
						if (txtValue.toUpperCase().indexOf(filter) > -1) {
							tr[i].style.display = "";
						} else {
							tr[i].style.display = "none";
						}
					}
				}
			}
		</script>

		<!---main--->
	</body>

	</html>



<?php

}

?>