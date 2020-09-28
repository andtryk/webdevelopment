<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <title>Document</title>
</head>
<body>

  <div id="users">
    <?php
    $aUsers = json_decode(file_get_contents('users.txt'));
    foreach($aUsers as $jUser)
    {
      ?>
      <div class="user" id="<?= $jUser->id ?>">
        <div><?= $jUser->id ?></div>
        <div><?= $jUser->name ?></div>
        <?php
        echo '<button onclick="toggleActive()">'.$jUser->active.'</button>';
        ?>
      </div>
      <?php
    }
    ?>


  </div>


  <script src="app.js"></script>
  
</body>
</html>