<?php
echo 'Working';

//When the submit button is pressed on html page
   if($_POST["Submit"])
   {
      //Declares variables store strings 
      $fname = $_POST['fname'];
      $points = $_POST['points'];
  


//Checks the information entered determines if valid strings
   function sanityCheck($string, $type, $length)
{
  // assign the type
  $type = 'is_'.$type;

  if(!$type($string))
    {
          return FALSE;
    }
  // now we see if there is anything in the string
  elseif(empty($string))
    {
    return FALSE;
    }
  // then we check how long the string is
  elseif(strlen($string) > $length)
    {
    return FALSE;
    }
  else
    {
    // if all is well, we return TRUE
    return TRUE;
    }
}



  function checkSet()
{
      return isset($_POST['fname'], $_POST['points']);
}

  function checkNumber($num, $length)
{
  if($num > 0 && strlen($num) == $length)
   {
      return TRUE;
   }
}

 /*

   if(checkSet() != FALSE)
    {  
    // here we test for the sanity of userAddress, we dont need to stop the
    // the script if it is empty as it is not a required field.
    if(empty($_POST['fname'])==FALSE && sanityCheck($_POST['fname'], 'string', 100) != FALSE)
   {
        $fname = $_POST["fname"];
   }
    else
   {
        echo 'First Name is not set';
        exit();
   } 
    // here we test for the sanity of userCity, we dont need to stop the
    // the script if it is empty as it is not a required field.
     if(empty($_POST['points'])==FALSE && sanityCheck($_POST['points'], 'string', 225) != FALSE)
   {
        $points = $_POST['points']; 
   }
    else
        {
        echo 'points are not set';
        exit();
   }
        
    */
  
    
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
	    //$namequery = "UPDATE user SET points='$points' WHERE fname = '$fname'";
	    $nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());
	
   
 
      
     
   
 
	        
     

//The INSERT INTO statement is used to insert new records in a table.
  $sql=sprintf("INSERT INTO user (fname,points) VALUES('$fname','$points')",
            mysql_real_escape_string($fname),
            mysql_real_escape_string($points),
   
    
                 
}

  else
    {
         //this will be the default message if the form accessed without POSTing
        echo '<p>Please fill in the form </p>';
   }
   
}//connects to first if satment 


?>