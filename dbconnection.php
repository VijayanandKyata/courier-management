<?php
    // Database connection parameters
    $db_host = 'localhost';  // Change this if your MySQL server is running on a different host
    $db_user = 'root';       // Your MySQL username
    $db_pass = 'Vijay@123';           // Your MySQL password, leave it blank if no password is set
    $db_name = 'courierdb'; // Your database name

    // Attempt to connect to MySQL server
    $dbcon = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // Check if the connection was successful
    if (!$dbcon) {
        // Print an error message if connection fails
        echo "Database is not Connected!";
        // Optionally, you can print the specific error message to help debug
        // echo "Error: " . mysqli_connect_error();
    } else {
        // Connection successful, you can proceed with your database operations
        echo "Database Connected!";
    }
?>
