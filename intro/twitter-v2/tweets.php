<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <nav>
    <a href="index.php">POST A TWEET</a>
  </nav>
  <h1>TWEETS</h1>
  <?php


  // open the file. you will get text
  $sData = file_get_contents('tweets.txt');
  // echo $sData;
  // convert the text into an array
  $aData = json_decode($sData);
  // print_r($aData);
  // loop through the array of tweets and show it
  foreach($aData as $sTweetTitle){
    echo 
    "<div>
      <div>$sTweetTitle</div>
    </div>";
  }
  // you just built a fullstack app
  
  ?>
</body>
</html>