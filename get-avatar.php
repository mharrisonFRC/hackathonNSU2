<?php
$uname = $_GET['uname'];
$png = 'http://www.doppelme.com/avatar.png?xx='; //base url
if(isset($uname) & $uname != ''){
	$server = 'localhost';
	$db_username = 'root';
	$db_password = 'root';
	$database = 'hacku';
	//Php conects to mysql database 
	$connection=mysql_connect($server, $db_username, $db_password) or die('Could not connect to the mySQL databse');
	
	mysql_select_db($database, $connection) or die('could not connect to the database');
	$userSQL = "SELECT user_id FROM user WHERE uname='$uname'";
	$users = mysql_query($userSQL, $connection);
	while($user = mysql_fetch_array($users)){
		$user_id = $user['user_id'];
	}
	$sql = "SELECT * FROM attributes WHERE user_id='$user_id'"
		or die('DB did not connect');
	mysql_select_db("hacku", $connection);
	$myData = mysql_query($sql, $connection);
	while($record = mysql_fetch_array ($myData)){ 
		$gender = $record['gender'];
		$expression = $record['expression'];
		$beard = $record['beard'];
		$hat = $record['hat'];
		$hair = $record['hair'];
		$shirt = $record['shirt'];
		$pant = $record['pant'];
		$shoe = $record['shoe'];
		$glass = $record['glass'];
		$beardColor = $record['beardColor'];
		$hatColor = $record['hatColor'];
		$hairColor = $record['hairColor'];
		$shirtColor = $record['shirtColor'];
		$pantColor = $record['pantColor'];
		$shoeColor = $record['shoeColor'];
		$skinColor = $record['skinColor'];
		$img = $png . '&style=' . $gender . '&s=' . $skinColor . '&fa=' . $expression . '&ff=' . $beard . '&ha=' . $hat . '&h=' . $hair . '&t=' . $shirt . '&b=' . $pant . '&f=' . $shoe . '&e=' . $glass . '&ffc=' . $beardColor . '&hac=' . $hatColor . '&hc=' . $hairColor . '&tc=' . $shirtColor . '&bc=' . $pantColor . '&fc=' . $shoeColor;
		echo $img;
		
	}
}
?>