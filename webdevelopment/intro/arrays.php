<?php
// Arrays always start at index 0
//            0    1    2 
/*       
$students = ['a', 'b', 'c'];
echo 'The array has '.count($students).' elements'; // count sizeof
$numberOfStudents = sizeof($students); // 3
echo "<div>The array has $numberOfStudents elements</div>"; // count sizeof
$firstStudentName = $students[0];
echo '<div>$firstStudentName</div>';
$students[1] = 'x';
echo "<div>$students[1]</div>";
unset($students[2]); // delete an element
echo "<div>$students[2]</div>";
*/

$tweets = [];
$tweets = [];
 
$tweet = ['Welcome', 'This is the second class'];
array_push($tweets, $tweet);
$tweet = ['Can I do this?', 'Yes I can.'];
array_push($tweets, $tweet);
foreach($tweets as $tweet){
 $tweetTitle = $tweet[0];
 $tweetBody = $tweet[1];
 echo "<div> $tweetTitle </div>";
 echo "<div> $tweetBody </div>";
 echo '<div> </div>';
}



// print_r var_dump
// echo $tweets; // doesn't work
// print_r($tweets);
// echo '<div></div>';
// var_dump($tweets);
// echo '<div></div>';
// echo json_encode($tweets);









/*
Create
Read
Update
Delete
*/

