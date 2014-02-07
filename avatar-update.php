<?php
//Declares variables store strings 
echo 'working';
$user_id = $_GET['user_id'];
$skinColor = $_GET['skinColor'];
$gender = $_GET['gender'];
$expression = $_GET['expression'];
$hat = $_GET['hat'];
$hair = $_GET['hair'];
$shrit = $_GET['shrit'];
$pant = $_GET['pant'];
$shoe = $_GET['shoe'];
$glass = $_GET['glass'];
$bg = $_GET['bg'];
$beardColor = $_GET['beardColor'];
$hatColor = $_GET['hatColor'];
$hairColor = $_GET['hairColor'];
$shirtColor = $_GET['shirtColor'];
$pantColor = $_GET['pantColor'];
$shoeColor = $_GET['shoeColor'];
/******Development Only DELETE **********/
echo 'skinColor: ' . $skinColor. '<br/>';
echo 'user_id: ' . $user_id . '<br/>';
//Stores server information into variables
$server = 'localhost';
$db_username = 'root';
$db_password = 'root';
$database = 'hacku';
//Php conects to mysql database 
$connection=mysql_connect($server, $db_username, $db_password)
	or die('Could not connect to the mySQL databse');
mysql_select_db($database, $connection)
   or die('could not connect to the database');	  
// Check the users input against the DB.
if( isset($skinColor)){
	$namequery = "UPDATE attributes SET skinColor='$skinColor' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}

if( isset($gender)){
	$namequery = "UPDATE attributes SET gender='$gender' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if( isset($expression)){
	$namequery = "UPDATE attributes SET expression='$expression' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if( isset($hat)){
	$namequery = "UPDATE attributes SET hat='$hat' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if( isset($hair)){
	$namequery = "UPDATE attributes SET hair='$hair' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if( isset($shrit)){
	$namequery = "UPDATE attributes SET shrit='$shrit' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if( isset($pant)){
	$namequery = "UPDATE attributes SET pant='$pant' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if( isset($shoe)){
	$namequery = "UPDATE attributes SET shoe='$shoe' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if( isset($glass)){
	$namequery = "UPDATE attributes SET glass='$glass' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if( isset($bg)){
	$namequery = "UPDATE attributes SET bg='$bg' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if( isset($beardColor)){
	$namequery = "UPDATE attributes SET beardColor='$beardColor' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if( isset($hatColor)){
	$namequery = "UPDATE attributes SET hatColor='$hatColor' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if( isset($hairColor)){
	$namequery = "UPDATE attributes SET hairColor='$hairColor' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if( isset($shirtColor)){
	$namequery = "UPDATE attributes SET shirtColor='$shirtColor' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
if( isset($pantColor)){
	$namequery = "UPDATE attributes SET pantColor='$pantColor' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}\
if( isset($shoeColor)){
	$namequery = "UPDATE attributes SET shoeColor='$shoeColor' WHERE user_id = '$user_id'";
	$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
}
?>