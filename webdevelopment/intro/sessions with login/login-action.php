<?php
// Defensive coding
// username min 2 max 5
// password min 6 max 50
if( isset($_POST['username']) && 
    strlen($_POST['username']) >= 2 &&
    strlen($_POST['username']) <= 5
){
  echo 'user posted something';
}else{
  header('Location: login-view.php');
}











