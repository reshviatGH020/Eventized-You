<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "planner";

$conn = new mysqli("localhost", "root", "", "planner");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
