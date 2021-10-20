<?php
$servername = getenv('DB_HOSTNAME');
$username = getenv('MYSQL_ROOT_USER');
$password = getenv('MYSQL_ROOT_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');
$dbport = "3306";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $dbport);

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$dbport", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully :)";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 
