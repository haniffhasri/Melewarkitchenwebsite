<?php

$host = 'localhost';
$dbname = 'database';
$username = 'root';
$password = 'password';


// Create a new MySQLi instance
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

function isPost(){
    return $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false;

}
?>