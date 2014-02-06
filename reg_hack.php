<?php

//When the submit button is pressed on html page
   if($_GET['fname']){
      //Declares variables store strings 
      $uname = $_GET['uname'];
      $pword = $_GET['pword'];
      $pword2 = $_GET['pword2'];
      $fname = $_GET['fname'];
      $lname = $_GET['lname'];
      $email = $_GET['email'];
      
   }
      
?>
      <p>uname: <?= $uname; ?></p>
      <p>pword: <?= $pword; ?></p>
      <p>pword2: <?= $pword2; ?></p>
      <p>fname: <?= $fname; ?></p>
      <p>lname: <?= $lname; ?></p>
      <p>email: <?= $email; ?></p>
      
      
