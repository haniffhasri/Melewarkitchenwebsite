<?php
    include 'config.php';
    $userID = $mysqli->real_escape_string($_GET['userID']);

    $query = "DELETE FROM user WHERE userID = '$userID'";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: user.php');
    exit();
?>