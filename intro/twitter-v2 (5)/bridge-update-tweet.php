<?php
$sTweetId = $_POST['txtTweetId'];
$sTweetTitle = $_POST['txtTweetTitle'];
// echo "The new tweet title is $sTweetTitle for tweet with ID $sTweetId";
// bridge pages do NOT show anything, they
// do a job and take the user somehwere else
// echo 'This page only update and redirects the user';

// Open the file and get the content
$sTweets = file_get_contents('tweets.txt');
// Convert the content to an array
$aTweets = json_decode($sTweets);
// Loop through the array
// echo '<div>';
// print_r($aTweets);
// echo '</div>';

foreach($aTweets as &$aTweet){
  // Find a match in the tweet ID
  if($sTweetId == $aTweet[0]){
    // echo 'match';
    $aTweet[1] = $_POST['txtTweetTitle'];
    // echo json_encode($aTweet);
  }
}
// echo '<div>';
// print_r($aTweets);
// echo '</div>';
// Update the title with the new title
// Convert the main array to string
$sTweets = json_encode($aTweets);
// Save it back to the file
file_put_contents('tweets.txt', $sTweets);
// redirect the user to the tweets page
header('Location: tweets.php');







