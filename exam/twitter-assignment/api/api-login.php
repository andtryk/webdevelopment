<?php

(function(){
  
  session_start();
  if( ! isset($_POST['email']) ){
    echo 'Missing email';
    header('Refresh: 2; URL = ../index.php');   
  };
  if( strlen($_POST['email']) < 6  ){
    echo 'Email must be at least 6 characters';
    header('Refresh: 2; URL = ../index.php');
  };
  if( strlen($_POST['email']) > 200  ){
    echo 'Email max length 200 characters';
    header('Refresh: 2; URL = ../index.php');
  };
  $sUsers = file_get_contents('../private/users.txt');
  $aUsers = json_decode($sUsers);

  foreach( $aUsers as $aUser ){
    // $aUser ["5f48e543ec534","b@b.com"]
    if( $_POST['email'] ==  $aUser[1] && $_POST['password'] ==  $aUser[2] ){
      $_SESSION['id']     = $aUser[0];
      $_SESSION['email'] = $aUser[1];
      $_SESSION['password']   = $aUser[2];
      header('Location: ../main-page.php');
      exit();
    }
  };
})();
echo 'Wrong Email or Password';
header('Refresh: 2; URL = ../index.php');

?>