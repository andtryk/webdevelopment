<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
  <?= $sInjectPageTitle ?? 'Twitter Clone' ?>
  </title>
</head>
<body>

<nav>
  <a href="/">home</a>
  <a href="/about-us.php">about us</a>
  <a href="/contact-us.php">contact us</a>
  
  <a href="/logout.php" <?= $hideLogoutButton; ?>>logout</a>

  <?php
  /*
  if($bInjectShowLogoutButton){
    ?>
    <a href="/logout.php" hidden>logout</a>
    <?php
  }
  */
  ?>
  
  
</nav>