<?php
// Connect to your database (assuming $conn is your database connection)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are provided
    if (isset($_POST['vollenteer_name']) && isset($_POST['vollenteer_number']) && isset($_POST['vollenteer_type'])) {
        $vollenteer_name = $_POST['vollenteer_name'];
        $vollenteer_number = $_POST['vollenteer_number'];
        $vollenteer_type = $_POST['vollenteer_type'];
        
        // Construct the INSERT query
        $sql = "INSERT INTO vollenteer (vollenteer_name, vollenteer_number, vollenteer_type) VALUES ('$vollenteer_name', '$vollenteer_number', '$vollenteer_type')";
        
        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "Volunteer inserted successfully.";
        } else {
            echo "Error inserting volunteer: " . $conn->error;
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request method.";
}
?>