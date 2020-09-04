<?php

if( ! filter_var($_POST['email'], 
    FILTER_VALIDATE_EMAIL) ){
      echo 'email not valid';
      exit();
}
if( strlen($_POST['fullName']) < 2 ){
      echo 'name is too short';
      exit();
}
if( strlen($_POST['fullName']) > 5 ){
  echo 'name is too long';
  exit();
}


// open the file as text
$sUsers = file_get_contents('users.txt');
// conver text into array
$aUsers = json_decode($sUsers);
// print_r($aUsers);
// create a new array for the user
$aUser = [uniqid(), $_POST['email'], $_POST['fullName']];
array_push($aUsers, $aUser);
// convert users into text
$sUsers = json_encode($aUsers);
// save the data back to the file
file_put_contents('users.txt', $sUsers);

require_once('send-email.php');


