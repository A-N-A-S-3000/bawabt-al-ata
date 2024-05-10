<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "buabatAlatta";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are provided
    if (isset($_POST['vollenteer_name']) && isset($_POST['vollenteer_type']) && isset($_POST['vollenteer_number'])) {
        $vollenteer_name = $_POST['vollenteer_name'];
        $vollenteer_type = $_POST['vollenteer_type'];
        $vollenteer_number = $_POST['vollenteer_number'];
        
        // Check if the record exists before attempting to delete
        $check_sql = "SELECT * FROM vollenteer 
                      WHERE vollenteer_name = '$vollenteer_name' 
                      AND vollenteer_type = '$vollenteer_type' 
                      AND vollenteer_number = '$vollenteer_number'";
        $check_result = $conn->query($check_sql);
        
        if ($check_result->num_rows > 0) {
            // Construct the DELETE query
            $delete_sql = "DELETE FROM vollenteer 
                           WHERE vollenteer_name = '$vollenteer_name' 
                           AND vollenteer_type = '$vollenteer_type' 
                           AND vollenteer_number = '$vollenteer_number'";
            
            // Execute the DELETE query
            if ($conn->query($delete_sql) === TRUE) {
                echo "Volunteer deleted successfully.";
            } else {
                echo "Error deleting volunteer: " . $conn->error;
            }
        } else {
            echo "Volunteer not found in the database.";
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request method.";
}

// Close the database connection
$conn->close();

?>