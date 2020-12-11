<?php

$servername = "localhost";
$username = "root";
$password = "SeaBeach123";
$dbname = "home";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM people WHERE ID=4";
//$sql = "SELECT * FROM people WHERE name= "John";
//$sql = "SELECT * FROM people ORDER BY name;
$result = $conn->query($sql);


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();

?>