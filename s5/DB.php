<?php 
/// Connect to Database 
$host = "localhost";
$username = "root";
$password = "";

try {
    // connect to Database 
  $conn = new PDO("mysql:host=$host;dbname=learn",
   $username,
 $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
}
 catch(PDOException $error) {
  echo "Connection failed: " . $error->getMessage().' Code Line DB:'. $error->getLine();
}
?>