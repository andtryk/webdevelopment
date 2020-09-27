<?php
session_Start();
try{

  $sTweetId = uniqid();

  if( ! isset($_SESSION['id']) ){
    http_response_code(400);
    echo 'You have to bee logged in to make a tweet';
    header('Refresh: 2; URL = ../index.php');
    exit();
  }


  if( ! isset($_POST['tweetTitle']) ){
    http_response_code(400);
    header('Content-Type: application/json');
    echo '{"error":"missing title"}';
    exit();
  }
  if( strlen($_POST['tweetTitle']) < 2 ){
    http_response_code(400);
    header('Content-Type: application/json');
    echo '{"error":"title must be at least 2 characters"}';
    exit();
  }
  if( strlen($_POST['tweetTitle']) > 100 ){
    http_response_code(400);
    header('Content-Type: application/json');
    echo '{"error":"title cannot be longer than 100 characters"}';
    exit();
  }


  if( ! isset($_POST['tweetMessage']) ){
    http_response_code(400);
    header('Content-Type: application/json');
    echo '{"error":"missing message"}';
    exit();
  }
  if( strlen($_POST['tweetMessage']) < 2 ){
    http_response_code(400);
    header('Content-Type: application/json');
    echo '{"error":"message must be at least 2 characters"}';
    exit();
  }
  if( strlen($_POST['tweetMessage']) > 140 ){
    http_response_code(400);
    header('Content-Type: application/json');
    echo '{"error":"title cannot be longer than 140 characters"}';
    exit();
  }

  // $aTweet = ["id"=>$sTweetId, "title"=>$sTweetTitle];
  // echo json_encode($aTweet);
  // {"id":"5f5728a48e590","title":"x"}

  $jTweet          = new stdClass(); // {}
  $jTweet->id      = $sTweetId;
  $jTweet->title   = $_POST['tweetTitle'];
  $jTweet->message = $_POST['tweetMessage'];
  $jTweet->userId = $_SESSION['id'];
  // echo json_encode($jTweet);

  // open the db
  $sTweets = file_get_contents('../private/tweets.txt');
  // convert the data to an object []
  $aTweets = json_decode($sTweets);
  // write the tweet to the object
  array_push($aTweets, $jTweet);
  // convert the object back to text
  $sTweets = json_encode($aTweets);
  // save the text into the file
  file_put_contents('../private/tweets.txt', $sTweets);

  header('Content-Type: application/json');
  echo '{ "id":"'.$sTweetId.'"}';
}
catch(Exception $ex){
  // http_response_code(500);
  // header('Content-Type: application/json');
  echo '{"message":"error '.__LINE__.'"}';
}