<?php
// Database configuratie
// Database configuration
$host  = "mariadb";
$dbuser = "root";
$dbpass = "password";
$dbname = "members";

// Maak een atabase connectie
// Connect to the database
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
?>