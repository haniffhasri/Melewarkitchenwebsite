<?php
session_start();
unset($_SESSION["username"]);
//header("Location: home.php");
echo "Log out successfully";
?>