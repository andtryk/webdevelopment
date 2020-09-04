<?php

require_once 'faker/src/autoload.php';
$faker = Faker\Factory::create();
// echo $faker->password;
// echo $faker->address;
// echo $faker->text;
$sUsers = file_get_contents('users.txt');
$aUsers = json_decode($sUsers);

for( $i = 0; $i < 500 ; $i++ ){
  $aUser = [  uniqid(), 
              $faker->firstName, 
              $faker->lastName,
              $faker->email,
              $faker->password
            ];
  array_push($aUsers, $aUser);
}
$sUsers = json_encode($aUsers);
file_put_contents('users.txt', $sUsers);
