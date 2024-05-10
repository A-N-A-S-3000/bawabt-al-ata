<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "buabatAlatta";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$age = $_POST['age'];
$gender = $_POST['gender'];
$donation_defecality = $_POST['donation_defecality'];
$voleenter_difficality = $_POST['voleenter_difficality'];
$store_difficalty = $_POST['store_difficalty'];
$improved_page = implode(",", $_POST['improved_page']);
$satisfication = $_POST['satisfication'];
$difficalities = $_POST['difficalities'];
$suggestions = $_POST['suggestions'];
$email = $_POST['email'];

$sql = "INSERT INTO questioner_ans (age, gender, donation_defecality, voleenter_difficality, store_difficalty, improved_page, satisfication, difficalities, suggestions, email) 
VALUES ('$age', '$gender', '$donation_defecality', '$voleenter_difficality', '$store_difficalty', '$improved_page', '$satisfication', '$difficalities', '$suggestions', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Questionnaire submitted successfully!";
    
        
    echo "<table border='1'>
                <tr>
                <th>age</th>
                <th>gender</th>
                <th>donation defecality</th>
                <th>voleenter difficality</th>
                <th>store difficalty</th>
                <th>need to be improved page</th>
                <th>satisfication</th>
                <th>difficalities</th>
                <th>suggestions</th>
                <th>donation defecality</th>
            </tr>";
        echo "<tr>
                                <td>" . $age . "</td>
                                <td>" . $gender . "</td>
                                <td>" . $donation_defecality . "</td>
                                <td>" . $voleenter_difficality . "</td>
                                <td>" . $store_difficalty . "</td>
                                <td>" . $improved_page . "</td>
                                <td>" . $satisfication . "</td>
                                <td>" . $difficalities . "</td>
                                <td>" . $suggestions . "</td>
                                <td>" . $email . "</td>

                            </tr>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>