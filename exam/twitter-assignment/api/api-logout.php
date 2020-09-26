<?php
   session_start();
   unset($_SESSION["id"]);
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have successfully logged out';
   header('Location: ../index.php');
   session_destroy();
?>