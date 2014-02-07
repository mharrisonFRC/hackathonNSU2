	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Hackathon NSU Team 2 - Avatars</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<link type="text/css" href="css/hack.css" rel="stylesheet"/>
	</head>
	<body class="m5">
<?php	
	/*
	Prints all eight users from the database
	and the following attributes below
	*/
//If the first name is set get all of the following variables
if(isset($_GET['fname'])){
  //Declares variables store strings 
  $uname = $_GET['uname'];
  $pword = $_GET['pword'];
  $pword2 = $_GET['pword2'];
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  $email = $_GET['email'];
  $points= $_GET['points'];
}
?>
<?php if(isset($fname)){ ?>
	<p>uname: <?= $uname; ?></p>
	<p>pword: <?= $pword; ?></p>
	<p>pword2: <?= $pword2; ?></p>
	<p>fname: <?= $fname; ?></p>
	<p>lname: <?= $lname; ?></p>
	<p>email: <?= $email; ?></p>
	<p class="mb10">lname: <?= $points; ?></p>
<?php } else { ?>
	<p>you are not registered.</p>
<?php } ?>
<?php
//Stores server information into variables
$server = 'localhost';
$db_username = 'root';
$db_password = 'root';
$database = 'hacku';
//Php conects to mysql database 
$connection=mysql_connect($server, $db_username, $db_password) or die('Could not connect to the mySQL databse');

mysql_select_db($database, $connection) or die('could not connect to the database');
$sql = "SELECT * FROM user"; 
mysql_select_db("hacku", $connection);
$myData = mysql_query($sql, $connection);
?>
<?php while($record = mysql_fetch_array ($myData)){ ?>
	<div class="mb10">
		<p> User Name: <?= $record['uname']; ?></p>
		<p> Password: <?= $record['pword']; ?></p>
		<p> First Name: <?= $record['fname']; ?></p>
		<p>Last Name: <?= $record['lname']; ?></p>
		<p>Email: <?= $record['email']; ?></p>
		<p>Points: <?= $record['points']; ?></p>
	</div>
<?php } ?>
<?php 
       mysql_close($connection);
    ?>