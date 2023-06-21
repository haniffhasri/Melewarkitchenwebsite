<?php
session_start();

// Unset the logged_in session variable
unset($_SESSION['logged_in']);

// Redirect to login.php
header("Location: login.php");
exit;
?>