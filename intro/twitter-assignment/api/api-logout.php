<?php
   session_start();
   unset($_SESSION["id"]);
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have successfully logged out';
   header('Refresh: 2; URL = ../index.php');
   session_destroy();
?>