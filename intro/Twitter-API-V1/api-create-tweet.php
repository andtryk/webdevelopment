<?php

try{

  $sTweetId = uniqid();
  
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
    echo '{"error":"title cannot be longet than 100 characters"}';
    exit();
  }


  // $aTweet = ["id"=>$sTweetId, "title"=>$sTweetTitle];
  // echo json_encode($aTweet);
  // {"id":"5f5728a48e590","title":"x"}

  $jTweet = new stdClass(); // {}
  $jTweet->id = $sTweetId;
  $jTweet->title = $_POST['tweetTitle'];
  // echo json_encode($jTweet);

  // open the db
  $sTweets = file_get_contents('tweets.txt');
  // convert the data to an object []
  $aTweets = json_decode($sTweets);
  // write the tweet to the object
  array_push($aTweets, $jTweet);
  // convert the object back to text
  $sTweets = json_encode($aTweets);
  // save the text into the file
  file_put_contents('tweets.txt', $sTweets);

  header('Content-Type: application/json');
  echo '{"message":"tweet created"}';

}
catch(Exception $ex){
  // http_response_code(500);
  // header('Content-Type: application/json');
  echo '{"message":"error '.__LINE__.'"}';
}
