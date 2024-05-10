<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "buabatAlatta";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
       
    </style>
    </style>
</head>
<body>
    <h1>Search Results</h1>
    <?php
    
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if username is provided
        if(isset($_POST['inp_usermane']) && !empty($_POST['inp_usermane']) && isset($_POST['page_type'])) {
            // Sanitize input to prevent SQL injection
            $username = $_POST['inp_usermane'];
            $page_search = $_POST['page_type'];

            // SQL query to retrieve donation orders for the provided username
            if ($page_search == 'donations') {
                $sql = "SELECT * FROM donation_orders WHERE username = '$username'";

                // Execute query
                $result = $conn->query($sql);

                // Check if there are results
                if ($result->num_rows > 0) {
                    // Output table header
                    echo "<table border='1'>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Donation Type</th>
                                <th>Quantity</th>
                            </tr>";

                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["first_name"] . "</td>
                                <td>" . $row["last_name"] . "</td>
                                <td>" . $row["username"] . "</td>
                                <td>" . $row["donation_type"] . "</td>
                                <td>" . $row["quantity"] . "</td>
                            </tr>";
                    }
                    echo "</table>";
                    
            

                } else {
                    echo "No results found for username: " . $username;
                }
            }
            else if ($page_search == 'voleenteer') {
                echo "<form action='vol_delete.php' method='post'>";
                $sql = "SELECT * FROM vollenteer WHERE vollenteer_name = '$username'";

                // Execute query
                $result = $conn->query($sql);
                
                // Check if there are results
                if ($result->num_rows > 0) {
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
                    // Output table header
                    echo "<table border='1'>
                            <tr>
                                <th>vollenteer_name </th>
                                <th>vollenteer_number</th>
                                <th>vollenteer_type</th>
                                
                            </tr>";

                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["vollenteer_name"] . "</td>
                                <td>" . $row["vollenteer_number"] . "</td>
                                <td>" . $row["vollenteer_type"] . "</td>
                              
                            </tr>";
                    }
                    echo "<tr> 
                    <td><input type='text' name='vollenteer_name' placeholder='Volunteer Name'/></td> 
                    <td><input type='text' name='vollenteer_number' placeholder='Volunteer Number'/></td> 
                    <td><input type='text' name='vollenteer_type' placeholder='Volunteer Type'/></td> 
                    <td><input type='submit' name='delete' value='Delete' style='border: none;'/></td>
                  </tr>";
                        
                    echo "</table>";
                    
                   
                    
                    echo "</form>";

                    ?>
                       <form action="vol_to_database.php" method="post">
    <input type="text" name="username" placeholder="Volunteer Name"/>
    <input type="text" name="phoneNumber" placeholder="Volunteer Number"/>
    <input type="text" name="exampleRadios" placeholder="Volunteer Type"/>
    <input type="submit" name="insert" value="Insert"/>
</form>

                       <?php 
                        echo "add in the before last column detail if you want to delete or in last column if yo want to insert <br>";
                    
                } else {
                    echo "No results found for username: " . $username;
                }
            }
            else if ($page_search == 'store') {
                $sql = "SELECT * FROM store_orders WHERE username = '$username'";

                // Execute query
                $result = $conn->query($sql);

                // Check if there are results
                if ($result->num_rows > 0) {
                    // Output table header
                    echo "<table border='1'>
                            <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Order id</th>
                            <th>Quantity</th>
                            <th>Box</th>    
                            </tr>";

                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["first_name"] . "</td>
                                <td>" . $row["last_name"] . "</td>
                                <td>" . $row["username"] . "</td>
                                <td>" . $row["order_id"] . "</td>
                                <td>" . $row["quantity"] . "</td>
                                <td>" . $row["Box"] . "</td>
\
                            </tr>";
                    }
                    echo "</table>";
            
            

                } else {
                    echo "No results found for username: " . $username;
                }
            }
            else {
                echo "Please provide a valid page type.";
            }
        } else {
            echo "Please provide a username. or enter the page you want to select";
        }
    }
    ?>
</body>
</html>