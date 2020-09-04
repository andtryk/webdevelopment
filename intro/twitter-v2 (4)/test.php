<?php

$aTweets = 
[ 
  [1, 'a'],
  [2, 'b'],
  [3, 'c'] 
];
array_splice($aTweets, 1, 2);
print_r($aTweets);
