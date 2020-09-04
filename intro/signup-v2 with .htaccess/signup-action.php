<?php
if( ! $_POST ){  header('Location: signup-view.php'); }
if( ! filter_var(  $_POST['email'], 
  FILTER_VALIDATE_EMAIL  ) ){ 
    header('Location: signup-view.php');
    exit();
}

$sUsers = file_get_contents('private/users.txt');
$aUsers = json_decode($sUsers);

// Check for duplicated emails
foreach( $aUsers as $aUser ){
  // $aUser ["5f48e543ec534","b@b.com"]
  if( $_POST['email'] ==  $aUser[1] ){
    header('Location: signup-view.php');
    exit();
  }
}







// echo $sUsers;
// print_r($aUsers);
// [ID, email]
$aUser = [uniqid(), $_POST['email']];
array_push($aUsers, $aUser);
// var_dump($aUsers);
file_put_contents('private/users.txt', json_encode($aUsers)  );
header('Location: login.php');
exit();