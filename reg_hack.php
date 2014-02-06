<?php
//When the submit button is pressed on html page
if(isset($_GET['fname'])){
  //Declares variables store strings 
  $uname = $_GET['uname'];
  $pword = $_GET['pword'];
  $pword2 = $_GET['pword2'];
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  $email = $_GET['email'];
}
?>




<?php if(isset($fname)){ ?>
	<p>uname: <?= $uname; ?></p>
	<p>pword: <?= $pword; ?></p>
	<p>pword2: <?= $pword2; ?></p>
	<p>fname: <?= $fname; ?></p>
	<p>lname: <?= $lname; ?></p>
	<p>email: <?= $email; ?></p>
<?php } else { ?>
	<p>you are not registered.</p>
<?php } ?>








<?php
/* */
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
       
       $sql = "SELECT * FROM user"; 
       mysql_select_db("hacku", $con);
       $myData = mysql_query($sql, $con);
       echo 'myData: ' . mysql_num_rows($myData);

       while($record = mysql_fetch_array ($myData)){
       		echo $record['fname'];
       }
       mysql_close($con)
       
   

 
    ?>