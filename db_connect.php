<?php
$host = 'localhost';
$user = 'root';
$password = ''; 
$database = 'ishan';

echo "Connecting to: host=$host, user=$user, password=$password, db=$database<br>"; 

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connection successful!"; // If it connects
?>