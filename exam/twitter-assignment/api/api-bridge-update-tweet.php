<?php
session_start();

if (!isset($_GET['tweetId'])) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo '{"error":"missing id"}';
    exit();
}
 
if (strlen($_GET['tweetId']) != 13) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo '{"error":"id is not valid"}';
    exit();
}
 
// connect to the db
$sTweets = file_get_contents('../private/tweets.txt');
$aTweets = json_decode($sTweets, true);
$TweetIdFromUrl = $_GET['tweetId'];
for ($i = 0; $i < count($aTweets); $i++) {
    if ($_GET['tweetId'] == $aTweets[$i]['id'] && $aTweets[$i]['userId'] == $_SESSION["id"]) {
        ?>
    <div class="tweet">
        <?php
      echo "<form action='api-update-tweet.php?tweetId=$TweetIdFromUrl' method='POST'>" ?>
        <input 
          name="newTitle" 
          type="text" value="<?= $aTweets[$i]['title']; ?>"
        >
        <input 
          name="newMessage" 
          type="text" value="<?= $aTweets[$i]['message']; ?>"
        >
        <button>UPDATE TWEET</button>
      </form>
    </div>
    <?php
    }
}
//header('Content-Type: application/json');
http_response_code(400);