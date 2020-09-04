<?php
$page = $_GET['page'] ?? 0;
$limit = 2;
$nextPage = $page + $limit; // 1
$aLetters = ['a','b','c','d','e','f'];

for( $i=$page; $i<$nextPage; $i++){
  echo $aLetters[$i+$page];
}




