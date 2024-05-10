<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "buabatAlatta";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];

    $donationItems = array();

    for ($i = 1; $i <= 6; $i++) {
        $quantity = intval($_POST['num' . $i]);
        if ($quantity > 0) {
            $donationType = $_POST['donation_type_' . $i]; // Retrieving the donation type from the hidden input field
            $donationItems[] = array(
                'type' => $donationType,
                'quantity' => $quantity
            );
        }
    }

    // Prepare the values for donation items
    $donationItemsValues = "";
    foreach ($donationItems as $item) {
        $donationType = $item['type']; 
        $quantity = $item['quantity'];
        $donationItemsValues .= "('$firstName', '$lastName', '$username', '$donationType', '$quantity'),";
    }
    $donationItemsValues = rtrim($donationItemsValues, ",");

    // Insert user information and donation items in one query
    $sql = "INSERT INTO donation_orders (first_name, last_name, username, donation_type, quantity) VALUES $donationItemsValues";

    if ($conn->query($sql) === TRUE) {
        echo "Donation order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
