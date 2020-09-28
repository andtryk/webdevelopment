<?php

require_once(__DIR__.'/db.php');

try{

  $name = $_POST['name'];
  $lastName = $_POST['lastName'];
  $password = password_hash( $_POST['password'], PASSWORD_DEFAULT );
  
  // TODO: validate


  // INSERT INTO users  VALUES (NULL, 'B')
  // UUID4
  // INSERT INTO users VALUES (NULL, 'A', 'B');
  $query = $db->prepare('INSERT INTO users  VALUES (NULL, :name, :lastName, :password, :active, :verificationCode)');
  $query->bindValue(':name', $name);
  $query->bindValue(':lastName', $lastName);
  $query->bindValue(':password', $password);
  $query->bindValue(':active', 1);
  $query->bindValue(':verificationCode', getUuid());
  $query->execute();
  $id = $db->lastInsertId();
  http_response_code(200); // default is this line
  header('Content-Type: application/json');
  echo '{"id":'.$id.'}';
  exit();

}catch(PDOException $ex){
  http_response_code(500);
  header('Content-Type: application/json');
  // echo $ex;
  echo '{"message":"System error:'.__LINE__.'"}';
  exit();
}




// ############################################################
// ############################################################
// ############################################################
function getUuid() {
  return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
      // 32 bits for "time_low"
      mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

      // 16 bits for "time_mid"
      mt_rand( 0, 0xffff ),

      // 16 bits for "time_hi_and_version",
      // four most significant bits holds version number 4
      mt_rand( 0, 0x0fff ) | 0x4000,

      // 16 bits, 8 bits for "clk_seq_hi_res",
      // 8 bits for "clk_seq_low",
      // two most significant bits holds zero and one for variant DCE1.1
      mt_rand( 0, 0x3fff ) | 0x8000,

      // 48 bits for "node"
      mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
  );
}