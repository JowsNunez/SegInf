<?php
  $server = 'bivppxwr3ef4nnchwsvx-mysql.services.clever-cloud.com';
  $username = 'ug4ea0vhu3lesmxy';
  $password = 'RKzIvRE2XD2Tpf70b8GE';
  $database = 'bivppxwr3ef4nnchwsvx';


  try {
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
  } catch (PDOException $e) {
    die('Connected failed: '.$e->getMessage());
  }

 ?>

