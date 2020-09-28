<?php
session_start();
$sUserId = $_SESSION['userId'];
$aTweets = [
  [1, 'User23', 'A', 'AA'],
  [2, 'User78', 'B', 'BB'],
  ['5f4cb0df48105', 'User1', 'C', 'CC']
];

$_POST['inputTweetId'] = '5f4cb0df48105';
// $sTweetId = '5f4cb0df48105'; // $_POST['inputTweetId'];

foreach( $aTweets as $aTweet ){
  if( 
      $_POST['inputTweetId'] == $aTweet[0] && 
      $sUserId == $aTweet[1]
    ){
      echo 'Match';
  }
}





