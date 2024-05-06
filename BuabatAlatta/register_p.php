<?php 

include ("connect.php");



    $email=$_POST['Username'];
    $password=$_POST['Password'];
    

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(email,password)
                       VALUES ('$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: login.html");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   




?>