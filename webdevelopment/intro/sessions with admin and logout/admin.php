<?php
session_start();
if( ! isset($_SESSION['name']) ){
  header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  WELCOME <?= $_SESSION['name']; ?>
  <a href="logout.php">logout</a>
</body>
</html>

