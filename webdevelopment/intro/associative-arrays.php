<?php

// Create a system that has 5 students
// Each student has a name, lastname, and cpr
// Show the students in the website
// No COPY-PASTE

/*
Name: A
Lastname: AA
CPR: 1

Name: B
Lastname: BB
CPR: 2
*/

$students = [];
array_push($students, ['nameA', 'lastNameA', '111199-1111']);
array_push($students, ['nameB', 'lastNameB', '111199-2222']);
array_push($students, ['nameC', 'lastNameC', '111199-3333']);
 
foreach($students as $student) {
    echo 
    "<div>
        <p>
            Name:$student[0]
        </p>
        <p>
            Last name:$student[1]
        </p>
        <p>
            CPR: $student[2]
        </p>
    </div>";
}





$tweets = []; // normal array
// associative array has keys and values
// DOCUMENTATION
// $tweet = ['Title A',''];
$tweet = ['title'=>'Title A', 'message'=>'AAA'];
array_push($tweets, $tweet );

$tweet = ['title'=>'Title B', 'message'=>'BBB'];
array_push($tweets, $tweet );

$tweet = ['title'=>'Title C', 'message'=>'CCC'];
array_push($tweets, $tweet );


foreach($tweets as $tweet){
  echo '<div>';
    echo '<div>'.$tweet['title'].'</div>';
    echo '<div>'.$tweet['message'].'</div>';
  echo '</div>';
}

echo 'There are '.sizeof($tweets).' tweets';
1,2,2,1
[
  ['a','aa'],
  ['b','bb', 
    ['d','dd',
      ['x','xx']
    ]
  ],
  ['c','cc']
]





