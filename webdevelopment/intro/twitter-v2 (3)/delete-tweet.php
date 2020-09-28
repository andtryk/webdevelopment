<?php
$sTweetIdFromUrl = $_GET['tweetId'];
// echo "The user wants to delete tweet with ID $sTweetId";
// Open the database (file) and get the data from it
$sTweets = file_get_contents('tweets.txt');
// echo $sTweets;
// Convert the string(text) to an array
$aTweets = json_decode($sTweets);
// var_dump($aTweets);
// $aTweetsIndex = 0;
foreach($aTweets as $iIndex => $aTweet){
  $sTweetIdFromFile = $aTweet[0];
  // echo $sTweetId; // 5f463f65a4db9
  if($sTweetIdFromUrl == $sTweetIdFromFile){
    echo 'match';
    // Delete the tweet array from the tweets array
    unset($aTweets[$iIndex]);
  }
} 
// echo json_encode($aTweets);
// Tweet is no longer in memory, but it is still in the file
// Convert the new tweets array into text
$sTweets = json_encode(array_values($aTweets));
// echo $sTweets;
// save the new text with the tweets (one was deleted)
file_put_contents('tweets.txt', $sTweets);

header('Location: tweets.php');

// 13:45