<?php
//shell.hamk.fi >>>localhost
$servername = "localhost"; // Replace with your MySQL server hostname get docker db-1 click
$username = "nuwani23000";     // Replace with your MySQL username .which created from local 85.omit giving root
$password = "vHf0JcuM";     // Replace with your MySQL password
$dbname = "wp_nuwani23000";       // Replace with the name of your MySQL database


// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
