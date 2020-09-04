<?php
$sTweetIdFromUrl = $_GET['tweetId'];
// echo 'UPDATE '.$sTweetIdFromUrl;
$sTweets = file_get_contents('tweets.txt');
// echo $sTweets;
$aTweets = json_decode($sTweets);
// print_r($aTweets);
foreach($aTweets as $aTweet){
  $sTweetIdFromFile = $aTweet[0]; // Id is index 0
  if( $sTweetIdFromUrl ==  $sTweetIdFromFile ){
    ?>
    <div class="tweet">
      <form action="bridge-update-tweet.php" method="POST">
        <input
          type="text"
          name="txtTweetId"
          value="<?= $sTweetIdFromFile ?>"
        >
        <input 
          name="txtTweetTitle" 
          type="text" value="<?= $aTweet[1]; ?>"
        >
        <button>UPDATE TWEET</button>
      </form>
    </div>
    <?php
  }
}
