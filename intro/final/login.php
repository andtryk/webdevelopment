<?php
// Self invoking function - runs automatically
// C#
// Tomas
// 


(function(){
  // Must start the session
  session_start();
  if( isset($_SESSION['name']) ){ header('Location: admin.php'); }

  if( ! $_POST ){return;}
  if( ! isset($_POST['email']) ){ echo 'missing email'; return; }
  if( strlen($_POST['email']) < 6  ){ echo 'email must be at least 6 characters'; return;}
  if( strlen($_POST['email']) > 200  ){echo 'email max length 200 characters';return;}
  // TODO: connect to the db and check if
  // the user exists
  $sUsers = file_get_contents('users.txt');
  $aUsers = json_decode($sUsers);
  foreach($aUsers as $aUser){
    if( $_POST['email'] == $aUser[3] ){
      $_SESSION['name'] = $aUser[1];
      $_SESSION['lastName'] = $aUser[2];
      header('Location: admin.php'); // does it break it?
    }
  }
})();


?>

  <?php
  $sInjectPageTitle = 'Tweeter Clone login';
  // $bInjectShowLogoutButton = 0;
  $hideLogoutButton = 'hidden';
  require_once('top.php');  
  ?>

  <form action="login.php" method="POST">
    <input  name="email" 
            type="text" 
            placeholder="email"
    >
    <button type="submit">
      login
    </button>
  </form>
  
</body>
</html>











