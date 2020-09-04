<?php
session_start();
if( ! isset($_SESSION['name']) ){
  header('Location: login.php');
}
?>

  <?php
  $sInjectPageTitle = 'Tweeter Clone Admin';
  // $bInjectShowLogoutButton = 1;
  $hideLogoutButton = '';
  require_once('top.php');
  ?>

  WELCOME <?= $_SESSION['name']; ?>

</body>
</html>


