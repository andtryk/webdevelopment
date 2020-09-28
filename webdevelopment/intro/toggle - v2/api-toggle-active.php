<?php

$sUsers = file_get_contents('users.txt');
$aUsers = json_decode($sUsers);
foreach($aUsers as $jUser){
  if( $_POST['id'] == $jUser->id ){
    $jUser->active = 1 - $jUser->active;
    file_put_contents('users.txt', json_encode($aUsers));
    break;
  }
}







