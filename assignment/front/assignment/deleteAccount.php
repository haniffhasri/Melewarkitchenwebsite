<?php
session_start();
include_once 'config.php';


    $userID = $_POST['userID'];
        
        $query = "DELETE FROM user WHERE userID = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("i", $userID);

        // Execute the statement
        if ($stmt->execute()) {
        // Row was successfully deleted
        header("Location: register.php");
        } else {
        // An error occurred while deleting the row
        header("Location: profile.php");
        }
        
            

        // Close the statement and database connection
        //$stmt->close();
        //$mysqli->close();
        
?>