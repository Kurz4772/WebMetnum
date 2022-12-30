<?php
$host     = 'localhost';
$user     = 'root';
$password = '';
$db       = 'metnum';

// Create connection
$conn = new mysqli($host, $user, $password, $db);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
