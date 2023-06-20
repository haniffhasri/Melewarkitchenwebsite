<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
    $tableNumber = $_POST['table-number'];
    $item1 = $_POST['item1'];
    $item1Quantity = $_POST['item1-quantity'];
    $item2 = $_POST['item2'];
    $item2Quantity = $_POST['item2-quantity'];
    $item3 = $_POST['item3'];
    $item3Quantity = $_POST['item3-quantity'];
    $item4 = $_POST['item4'];
    $item4Quantity = $_POST['item4-quantity'];
    $item5 = $_POST['item5'];
    $item5Quantity = $_POST['item5-quantity'];
    echo '<br>'.'<br>'.'masa'.$time;
    
    // TODO: Perform input validation and sanitization
    
    // Connect to the database
    $servername = "localhost";
    $username = "user";
    $password = "userpwd";
    $database = "melewar";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Check the database connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Insert the data into the reservations table
    $sql = "INSERT INTO reservations (name, email, phone, date, time, guests, table_number, item1, item1_quantity, item2, item2_quantity, item3, item3_quantity, item4, item4_quantity, item5, item5_quantity)
            VALUES ('$name', '$email', '$phone', '$date', '$time', '$guests', '$tableNumber', '$item1', '$item1Quantity', '$item2', '$item2Quantity', '$item3', '$item3Quantity', '$item4', '$item4Quantity', '$item5', '$item5Quantity')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Reservation successfully created.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>