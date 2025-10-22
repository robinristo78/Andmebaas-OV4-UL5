<?php
// Basic connection settings
$databaseHost = 'localhost'; // 'localhost' kui üleslaetud. '127.0.0.1' kui kohalikus masinas.
$databaseUsername = 'vs24kivit';
$databasePassword = '@3zp[w&xl,oe';
$databaseName = 'vs24kivit_Harjutus';
$port = 3306; // 3306 kui üleslaetud. 3307 kui kohalikus masinas.

// Connect to the database
$mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName, $port);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} else {
    echo "Connected successfully";
}
?>
