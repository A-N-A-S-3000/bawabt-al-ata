<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "buabatAlatta";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username =  $_POST["username"];
$phonenumber = (int) $_POST["phoneNumber"];
$vol_type = "";
// check if user input 8 digit
if(strlen($phonenumber) == 8){
    if(isset($_POST["exampleRadios"])){
        $vol_type = $_POST["exampleRadios"];
        $sql = "INSERT INTO `vollenteer`(`vollenteer_name`, `vollenteer_number`, `vollenteer_type`) VALUES ('$username',$phonenumber,'$vol_type')";
    
        if ($conn->query($sql) === TRUE) {
            echo "Your request saved successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
    }else{
        echo "choose radio";
    }
             
}else{
    echo "your number must be 8 digit!!";
}


$conn->close();
?>