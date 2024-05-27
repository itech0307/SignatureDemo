<?php
// Database connection parameters
$mysql_host     = "localhost";
$mysql_user     = "root";
$mysql_pass     = "root";
$mysql_db       = 'signature_infor';

// Establish connection
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set charset to UTF-8 for proper character encoding
mysqli_set_charset($conn, 'UTF8');
?>
