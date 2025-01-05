<?php
$host = 'localhost';
$username = 'geethanjali'; // Use your MySQL username
$password = 23-01-2004; // Use your MySQL password
$dbname = 'student_results';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>