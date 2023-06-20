<?php
session_start();
unset($_SESSION["username"]);
//header("Location: home.php");
echo "登出成功";
?>