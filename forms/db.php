<?php
// db.php

$host = "localhost"; // Don't change unless you're on a remote DB
$db_name = "leadcode_leadcoderz_db";
$db_user = "leadcoderz_user"; // Replace with the username you created
$db_pass = "LeadCoderz_user@21"; // Replace with the password you set

// Create connection
$conn = new mysqli($host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
