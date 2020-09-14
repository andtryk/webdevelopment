<?php
// echo "latestReceivedTweetId";
// echo $_GET['latestReceivedTweetId'];

$sTweets = file_get_contents('../private/tweets.txt');
$aTweets = json_decode($sTweets);

// Based on the array on top
// Based on the latestReceivedTweetId
// Send one tweet at a time NO array


// http_response_code(200);
header('Content-Type: application/json');
echo json_encode($aTweets);
