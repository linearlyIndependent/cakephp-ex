<?php
$servername = "mysql.hosting-test.cluster.local";
$username = "karl_der_benutzer";
$password = "karl_der_user_passwort";
$dbname = "karl_der_datenbank";
$dbport = "3306";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $dbport);

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$dbport", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 
