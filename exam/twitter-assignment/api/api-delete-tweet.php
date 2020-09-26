<?php
session_start();

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
 
// connect to the db
$sTweets = file_get_contents('../private/tweets.txt');
$aTweets = json_decode($sTweets, true);
 
for ($i = 0; $i < count($aTweets); $i++) {
    if ($_POST['tweetId'] == $aTweets[$i]['id'] && $aTweets[$i]['userId'] == $_SESSION["id"]) {
        array_splice($aTweets, $i, 1);
        header('Content-Type: application/json');
        $sTweets = json_encode($aTweets);
        file_put_contents('../private/tweets.txt', $sTweets);
        exit();
    }
}
header('Content-Type: application/json');
http_response_code(400);
echo 'You cannot delete other peoples tweets';
//header('Refresh: 2; URL = ../main-page.php');