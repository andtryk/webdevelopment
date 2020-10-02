<?php

// Never use this in development mode
// professional servers ad this for you atomatically.
// ini_set('display_errors', 0); // Do not show errors
// ini_set('display_errors', 1); // Show errors

if( ! isset($_POST['name']) ){
  sendError(400, 'missing name', __LINE__);
}
if( ! isset($_POST['lastname']) ){
  sendError(400, 'missing lastname', __LINE__);
}
if( ! isset($_POST['username']) ){
  sendError(400, 'missing username', __LINE__);
}
if( ! isset($_POST['email']) ){
  sendError(400, 'missing email', __LINE__);
}
if( ! isset($_POST['password']) ){
  sendError(400, 'missing password', __LINE__);
}
if( ! isset($_POST['confirmPassword']) ){
  sendError(400, 'missing confirmPassword', __LINE__);
}
if( ! isset($_FILES['profile_picture']) ){
  sendError(402, 'missing profile picture', __LINE__);
}


if( strlen($_POST['name']) < 2 ){
  sendError(400, 'name must be at least 2 characters', __LINE__);
}
if( strlen($_POST['name']) > 20 ){
  sendError(400, 'name cannot be longer than 20 characters', __LINE__);
}
if( strlen($_POST['lastname']) < 2 ){
  sendError(400, 'lastname must be at least 2 characters', __LINE__);
}
if( strlen($_POST['lastname']) > 20 ){
  sendError(400, 'lastname cannot be longer than 20 characters', __LINE__);
}


if( strlen($_POST['username']) < 2 ){
  sendError(400, 'username must be at least 2 characters', __LINE__);
}
if( strlen($_POST['username']) > 20 ){
  sendError(400, 'username cannot be longer than 20 characters', __LINE__);
}
if( ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ){
  sendError(400, 'email is not valid', __LINE__);
}
if( strlen($_POST['password']) < 2 ){
  sendError(400, 'password must be at least 2 characters', __LINE__);
}
if( strlen($_POST['password']) > 20 ){
  sendError(400, 'password cannot be longer than 20 characters', __LINE__);
}
if( $_POST['password'] !=  $_POST['confirmPassword'] ){
  sendError(400, 'passwords do not match', __LINE__);
}


require_once( __DIR__.'/../private/db.php' );

try{
  // INSERT INTO `users` VALUES (NULL, 'a', 'a', 'a', '0', 'a');
  $query = $db->prepare('SELECT * FROM users 
  WHERE email = :email LIMIT 1');
  $query->bindValue(':email', $_POST['email']);
  $query->execute();
  $aRow = $query->fetch();
  if( $aRow ){
    sendError(500, 'email already registered', __LINE__);
  }
  $query = $db->prepare('INSERT INTO users 
  VALUES(:id, :name, :lastname, :username, :email, :password, :profile_picture, :active, :verification_code)');
  $query->bindValue(':id', null);
  $query->bindValue(':name', $_POST['name']);
  $query->bindValue(':lastname', $_POST['lastname']);
  $query->bindValue(':username', $_POST['username']);
  $query->bindValue(':email', $_POST['email']);
  $query->bindValue(':password', password_hash($_POST['password'], PASSWORD_DEFAULT));
  $query->bindValue(':profile_picture', $_FILES['profile_picture']['name']);
  $query->bindValue(':active', 0);
  $query->bindValue(':verification_code', uniqid());

  $query->execute();
  $filename    = $_FILES["profile_picture"]["tmp_name"];
  $destination = "../images/" . $_FILES["profile_picture"]["name"]; 
  move_uploaded_file($filename, $destination); //save uploaded picture in your directory
  $picture = "images/" . $_FILES["profile_picture"]["name"];

  session_start();
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['lastname'] = $_POST['lastname'];
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['profile_picture'] = $picture;
  // http_response_code(200); // 201 created
  header('Content-Type: application/json');
  echo '{"id":'.$db->lastInsertId().'}';

}catch(Exception $ex){
  sendError(500, 'system under maintainance', __LINE__);
}






// #############################################
function sendError($iResponseCode, $sMessage, $iLine){
  http_response_code($iResponseCode);
  header('Content-Type: application/json');
  echo '{"message":"'.$sMessage.'", "error":'.$iLine.'}';
  exit();
}





