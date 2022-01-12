<?php
session_start();
$host = "localhost";
$user = "leo";
$pass = "LE0n@rd0.";
$dbname = "alecourse";


try {
    # MySQL with PDO_MYSQL
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  }
  catch(PDOException $e) {
      echo $e->getMessage();
  }
