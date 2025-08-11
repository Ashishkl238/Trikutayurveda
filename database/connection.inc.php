<?php

session_start();


define("DB_HOST" ,"localhost");
define("DB_NAME","trikutayurveda");
define("DB_USER","root");
define("DB_PASS","");
define("DB_CHARSET","utf8mb4");

$trikutdsn="mysql:host=". DB_HOST .";db_name=". DB_NAME .";charset=". DB_CHARSET;

$trkikut_optional = [
      PDO::ATTR_ERRMODE  => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

];

try{
  
  $trikutconn = new PDO($trikutdsn, DB_USER,DB_PASS, $trkikut_optional);

}catch (PDOException $e) {
     error_log("DB connection error:", $e->getMessage());
     http_response_code(500);
     die("❌ unable to connect to the database");
}


?>