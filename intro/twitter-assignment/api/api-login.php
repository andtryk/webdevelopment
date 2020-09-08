<?php

(function(){
  
  session_start();
  if( isset($_SESSION['name']) ){
    header('Location: admin.php');
  }
  
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
  $sCorrentEmail = 'a@a.com';
  if(   $_POST['email']  !=  $sCorrentEmail  ){
    echo 'cannot login';
    return;
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