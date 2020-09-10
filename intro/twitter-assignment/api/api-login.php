<?php

(function(){
  
  session_start();
  if( ! isset($_POST['email']) ){
    echo 'missing email'; 
    return;   
  }
  if( strlen($_POST['email']) < 6  ){
    echo 'email must be at least 6 characters';
    return;
  }
  if( strlen($_POST['email']) > 200  ){
    echo 'email max length 200 characters';
    return;
  }
  // TODO: connect to the db and check if
  // the user exists
  $sUsers = file_get_contents('../private/users.txt');
  $aUsers = json_decode($sUsers);
  $sCorrentEmail = 'a@a.com';
  if(   $_POST['email']  !=  $sCorrentEmail  ){
    echo 'cannot login';
    return;
  }

  foreach( $aUsers as $aUser ){
    // $aUser ["5f48e543ec534","b@b.com"]
    if( $_POST['email'] !=  $aUser[1] ){
      header('Location: ../index.php');
      exit();
    }
    if( $_POST['password'] !=  $aUser[2] ){
      header('Location: ../index.php');
      exit();
    }
  }
  // To use sessions you MUST start the session engine
  
  $_SESSION['name']     = 'A';
  $_SESSION['lastName'] = 'AA';
  $_SESSION['number']   = 5;
  // $_GET['']
  // $_POST['']

  header('Location: admin.php');


})();


?>