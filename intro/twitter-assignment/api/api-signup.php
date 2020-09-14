<?php
session_start();
if( ! $_POST ){  header('Location: ../index.php'); }
if( ! filter_var(  $_POST['email'], 
  FILTER_VALIDATE_EMAIL  ) ){ 
    header('Location: ../index.php');
    exit();
}

if( ! isset($_POST['email']) ){
  echo 'Missing email';
  header('Refresh: 2; URL = ../index.php');   
}
if( strlen($_POST['email']) < 6  ){
  echo 'Email must be at least 6 characters';
  header('Refresh: 2; URL = ../index.php');
}
if( strlen($_POST['email']) > 200  ){
  echo 'Email max length 200 characters';
  header('Refresh: 2; URL = ../index.php');
}

$sUsers = file_get_contents('../private/users.txt');
$aUsers = json_decode($sUsers);

// Check for duplicated emails
foreach( $aUsers as $aUser ){
  // $aUser ["5f48e543ec534","b@b.com"]
  if( $_POST['email'] ==  $aUser[1] ){
    header('Location: ../index.php');
    exit();
  }
}

// echo $sUsers;
// print_r($aUsers);
// [ID, email]
$aUser = [uniqid(), $_POST['email'], $_POST['password']];
array_push($aUsers, $aUser);
// var_dump($aUsers);
file_put_contents('../private/users.txt', json_encode($aUsers)  );
//print_r($aUser);
$_SESSION['id']     = $aUser[0];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password']   = $_POST['password'];
header('Location: ../main-page.php');
exit();