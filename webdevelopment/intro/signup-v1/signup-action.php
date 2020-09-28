<?php
if( ! $_POST ){  header('Location: signup-view.php'); }
if( ! filter_var(  $_POST['email'], 
  FILTER_VALIDATE_EMAIL  ) ){ 
    header('Location: signup-view.php');
    exit();
}

$sUsers = file_get_contents('users.txt');
// echo $sUsers;
$aUsers = json_decode($sUsers);
// print_r($aUsers);
// [ID, email]
$aUser = [uniqid(), $_POST['email']];
array_push($aUsers, $aUser);
// var_dump($aUsers);
file_put_contents('users.txt', json_encode($aUsers)  );
header('Location: login.php');
exit();