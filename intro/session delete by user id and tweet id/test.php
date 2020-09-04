<?php
$sUserId = 'User1';
// This id should come from the db
// if the email and password match
session_start();
$_SESSION['userId'] = $sUserId;
// Get the tweet data
$sTweetId = uniqid();
$sTweetTitle = 'Tweet Title'; // $_POST['inputTweetTitle']
$sTweetMessage = 'Tweet Message'; // $_POST['inputTweetTitle']
$aTweet = [ $sTweetId, 
            $sUserId, 
            $sTweetTitle, 
            $sTweetMessage];
echo json_encode($aTweet);
            


