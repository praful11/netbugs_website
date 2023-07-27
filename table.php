<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "netbugsRegistration";

// Create connection
$conn =  mysqli_connect("localhost","root","","netbugsRegistration");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error);
}

// sql to create table
$sql = "CREATE TABLE netbugsRegistration (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL ,
middlename VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
course VARCHAR(50),
yearofgraduation INT(20),
statu VARCHAR (20),
dateofbirth DATE ,
gender VARCHAR (20),
phoneno BIGINT(10),
currentaddress VARCHAR(100)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table NetbugsRegistration created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>