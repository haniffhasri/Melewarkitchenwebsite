<?php
    include 'config.php';
    $userID = $mysqli->real_escape_string($_POST['userID']);
    $username = $mysqli->real_escape_string($_POST['userName']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $phoneNumber = $mysqli->real_escape_string($_POST['phoneMumber']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $birthDate = $mysqli->real_escape_string($_POST['birthDate']);
    $address = $mysqli->real_escape_string($_POST['address']);
    $in_mailing_list = (isset($_POST['in_mailing_list']))? 1:0;

    $query = "UPDATE user
        SET userName = '$userName', email = '$email', phoneNumber = '$phoneNumber', password = '$password', birthDate = '$birthDate', address = '$address', in_mailing_list = $in_mailing_list
        WHERE userID = '$userID'";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: user.php');
    exit();
?>