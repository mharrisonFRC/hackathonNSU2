<?php	
echo 'Working';
//When the submit button is pressed on html page
if(isset($_POST['SUBMIT'])){
  //Declares variables store strings 
  $fname = $_POST['fname'];
  $points= $_GET['points'];
   
}




      $fname = $_POST["fname"];

      $points = $_POST["points"];
   
?>





<?php
//Stores server information into variables
$server = 'localhost';
$db_username = 'root';
$db_password = 'root';
$database = 'hacku';

///Php conects to mysql database 
$connection=mysql_connect($server, $db_username, $db_password) or die('Could not connect to the mySQL databse');
         
mysql_select_db($database, $connection) or die('could not connect to the database');
$sql = "SELECT * FROM user"; 
mysql_select_db("hacku", $connection);
$myData = mysql_query($sql, $connection);
?>










<?PHP

              
// Check the users input against the DB.
	    $namequery = "SELECT * FROM hacku WHERE points = '$points'";
	    $nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
   


//The INSERT INTO statement is used to insert new records in a table.
  $sql=sprintf("INSERT INTO hacku (fname,points) VALUES('$fname','$points')",
            mysql_real_escape_string($points);
       
    
    
    
    
    if(!mysql_query($sql))
  {
        echo 'Query failed '.mysql_error();
        exit();
  } 
             
   if(0 == mysql_num_rows($nameresult))
   {
      header("location:home_page.html");
   }      
}

  else
    {
         //this will be the default message if the form accessed without POSTing
        echo '<p>Please fill in the form </p>';
    }
    
}//connects to first if satment 


?>

