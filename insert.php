<?php
$host = "localhost";
$userName = "id10518661_complaintssatyamevjayate";
$password = "Yuvraj@123";
$dbName = "id10518661_complaints";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
}

?>