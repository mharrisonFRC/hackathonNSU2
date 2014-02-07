<?php	
	/*
	Prints all eight users from the database
	and the following attributes below
	*/
//If the first name is set get all of the following variables
if(isset($_GET['uname'])){
  $uname = $_GET['uname'];
}

//Stores server information into variables
$server = 'localhost';
$db_username = 'root';
$db_password = 'root';
$database = 'hacku';

//Php conects to mysql database 
$connection=mysql_connect($server, $db_username, $db_password) or die('Could not connect to the mySQL databse');

mysql_select_db($database, $connection) or die('could not connect to the database');
$sql = "SELECT * FROM user WHERE uname='$uname'"; 
mysql_select_db("hacku", $connection);
$myData = mysql_query($sql, $connection);

if(mysql_num_rows($myData) != '' & mysql_num_rows($myData) != 0){
	echo 'Success';
} else {
	echo 'Error';
}
mysql_close($connection);
?>