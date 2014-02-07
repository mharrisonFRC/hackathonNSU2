<?php
//Declares variables store strings 
$uname = $_GET['uname'];

//Stores server information into variables
$server = 'localhost';
$db_username = 'root';
$db_password = 'root';
$database = 'hacku';

//Php conects to mysql database 
$connection = mysql_connect($server, $db_username, $db_password) or die('Could not connect to the mySQL databse');
mysql_select_db($database, $connection) or die('could not connect to the database');

$userSQL = "SELECT user_id FROM user WHERE uname='$uname'";
$users = mysql_query($userSQL, $connection);
while($user = mysql_fetch_array($users)){
	$user_id = $user['user_id'];
}
 
// Check the users input against the DB.
if(isset($_GET['gender'])){
	$namequery = "UPDATE attributes SET gender='$_GET[gender]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if(isset($_GET['expression'])){
	$namequery = "UPDATE attributes SET expression='$_GET[expression]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if(isset($_GET['hat'])){
	$namequery = "UPDATE attributes SET hat='$_GET[hat]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if(isset($_GET['hair'])){
	$namequery = "UPDATE attributes SET hair='$_GET[hair]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if(isset($_GET['shirt'])){
	$namequery = "UPDATE attributes SET shirt='$_GET[shirt]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if(isset($_GET['pant'])){
	$namequery = "UPDATE attributes SET pant='$_GET[pant]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if(isset($_GET['shoe'])){
	$namequery = "UPDATE attributes SET shoe='$_GET[shoe]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if(isset($_GET['glass'])){
	$namequery = "UPDATE attributes SET glass='$_GET[glass]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if(isset($_GET['skinColor'])){
	$namequery = "UPDATE attributes SET skinColor='$_GET[skinColor]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if(isset($_GET['beardColor'])){
	$namequery = "UPDATE attributes SET beardColor='$_GET[beardColor]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if(isset($_GET['hatColor'])){
	$namequery = "UPDATE attributes SET hatColor='$_GET[hatColor]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if(isset($_GET['hairColor'])){
	$namequery = "UPDATE attributes SET hairColor='$_GET[hairColor]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if(isset($_GET['shirtColor'])){
	$namequery = "UPDATE attributes SET shirtColor='$_GET[shirtColor]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if(isset($_GET['pantColor'])){
	$namequery = "UPDATE attributes SET pantColor='$_GET[pantColor]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if(isset($_GET['shoeColor'])){
	$namequery = "UPDATE attributes SET shoeColor='$_GET[shoeColor]' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}	
?>