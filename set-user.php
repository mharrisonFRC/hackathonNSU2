<?php
/*
Prints the first name of the user 
Updates that users points in the database
*/
	   
//Declares variables store strings 
$fname = $_GET['fname'];
$points = $_GET['points'];
/******Development Only DELETE **********/
echo 'fname: ' . $fname . '<br/>';
echo 'points: ' . $points . '<br/>';
//Stores server information into variables
$server = 'localhost';
$db_username = 'root';
$db_password = 'root';
$database = 'hacku';
///Php conects to mysql database 
$connection=mysql_connect($server, $db_username, $db_password)
or die('Could not connect to the mySQL databse');
mysql_select_db($database, $connection)
or die('could not connect to the database');	  
// Check the users input against the DB.
$namequery = "UPDATE user SET points='$points' WHERE fname = '$fname'";
$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());


?>