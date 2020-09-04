<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <title>Documentxxxx</title>
</head>
<body>
  <?php
    // s is for string
    $sTweets = file_get_contents('tweets.txt');
    // Convert text into an object / array
    // a is for array
    // one of them takes text and makes it into object
    // the other function, takes an object and makes into text
    // json_encode
    // json_decode
    // Converting text(en) into an object
    $aTweets = json_decode($sTweets);
    echo '<div id="tweets">';
      foreach($aTweets as $aTweet){
        $sTweetTitle = $aTweet[0];
        $sTweetMessage = $aTweet[1];
        echo 
        "
        <div class='tweet'>
          <div>$sTweetTitle</div>
          <div>$sTweetMessage</div>
        </div>
        ";
      }
    echo '</div>';
  ?>
</body>
</html>







