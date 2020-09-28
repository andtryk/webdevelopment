<?php
// Get tweet from the URL (GET / Query String) 
$data = $_GET['txtTwitterTitle'];
// Open the file and get the data as text
$sFile = file_get_contents('tweets.txt');
// Convert the text to an array
$aFile = json_decode($sFile);
array_push($aFile, $data);
// var_dump($aFile);
// Convert the array into text because you CANNOT
// save an array into a file
$sFile = json_encode($aFile);
echo $sFile;
// Save the text into the file
file_put_contents('tweets.txt', $sFile);


// Redirect the user to the tweets page
header('Location: tweets.php');



