<?php
 
try {
 
 if (!isset($_POST['tweetId'])) {
 http_response_code(400);
 header('Content-Type: application/json');
 echo '{"error":"missing id"}';
 exit();
 }
 
 if (strlen($_POST['tweetId']) != 13) {
 http_response_code(400);
 header('Content-Type: application/json');
 echo '{"error":"id is not valid"}';
 exit();
 }
 if (!isset($_POST['newTitle'])) {
 http_response_code(400);
 header('Content-Type: application/json');
 echo '{"error":"missing title"}';
 exit();
 }
 if (!isset($_POST['newMessage'])) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo '{"error":"missing title"}';
    exit();
}
 
 if (strlen($_POST['newTitle']) < 2) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo '{"error":"title must be at least 2 characters"}';
    exit();
 }
 if (strlen($_POST['newTitle']) > 100) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo '{"error":"title cannot be longer than 100 characters"}';
    exit();
 }
 if (strlen($_POST['newMessage']) < 2) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo '{"error":"title must be at least 2 characters"}';
    exit();
    }
    if (strlen($_POST['newMessage']) > 140) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo '{"error":"title cannot be longer than 100 characters"}';
    exit();
}
 
 $sTweets = file_get_contents('../private/tweets.txt');
 $aTweets = json_decode($sTweets, true);
 
 for ($i = 0; $i < count($aTweets); $i++) {
  if ($_POST['tweetId'] == $aTweets[$i]['id']) {
  $aTweets[$i]['title'] = $_POST['newTitle'];
  $aTweets[$i]['message'] = $_POST['newMessage'];
  //header('Content-Type: application/json');
  $sTweets = json_encode($aTweets);
  file_put_contents('../private/tweets.txt', $sTweets);
  echo '{ "id":"'.$aTweets[$i]['id'].'"}';
  exit();
 }
 }
 header('Content-Type: application/json');
 http_response_code(400);
 echo '{"message" :"tweet not found"}';
} catch (Exception $ex) {
 http_response_code(500);
 header('Content-Type: application/json');
 echo '{"message":"error ' . __LINE__ . '"}';
}