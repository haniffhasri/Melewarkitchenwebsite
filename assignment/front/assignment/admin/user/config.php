<?php

$host = 'localhost';
$dbname = 'melewar';
$username = 'root';
$password = '1234';


// Create a new MySQLi instance
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}else{
    echo("Database successfully connect");
}

?>