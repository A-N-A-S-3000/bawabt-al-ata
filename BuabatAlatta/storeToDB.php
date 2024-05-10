<?php

class Box
{
    private $name;
    private $quantity;

    public function __construct($name, $quantity)
    {
        $this->name = $name;
        $this->quantity = $quantity;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
}

class StoreOrder
{
    private $conn;

    function __construct($host, $user, $pass, $db)
    {
        $this->conn = new mysqli($host, $user, $pass, $db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function insertOrder($firstName, $lastName, $username, $items)
    {
        $boxItemsValues = "";
        foreach ($items as $item) {
            $boxType = $item->getName();
            $quantity = $item->getQuantity();
            $boxItemsValues .= "('$firstName', '$lastName', '$username', '$quantity', '$boxType'),";
        }
        $boxItemsValues = rtrim($boxItemsValues, ",");

        $sql = "INSERT INTO store_orders (first_name, last_name, username, quantity, Box) VALUES $boxItemsValues";

        if ($this->conn->query($sql) === TRUE) {
            echo "<p>Donation order placed successfully!</p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $this->conn->error . "</p>";
        }
    }

    function closeConnection()
    {
        $this->conn->close();
    }
}

$host = "localhost";
$user = "root";
$pass = "";
$db = "buabatAlatta";

$order = new StoreOrder($host, $user, $pass, $db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];

    $storeItems = array();
    echo "<table border='1'>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Donation Type</th>
                                <th>Quantity</th>
                            </tr>";

    for ($i = 1; $i <= 6; $i++) {
        $quantity = intval($_POST['num' . $i]);
        if ($quantity > 0) {
            $boxType = $_POST['Box' . $i];
            $storeItems[] = new Box($boxType, $quantity);
                            echo "<tr>
                                <td>" . $firstName . "</td>
                                <td>" . $lastName . "</td>
                                <td>" . $username . "</td>
                                <td>" . $boxType . "</td>
                                <td>" . $quantity . "</td>
                            </tr>";
        }
    }
    echo "</table>";

                            
    $order->insertOrder($firstName, $lastName, $username, $storeItems);
}

$order->closeConnection();

?>