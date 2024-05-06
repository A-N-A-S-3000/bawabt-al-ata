<?php
include ("connect.php");
   $email=$_POST['Username'];
   $password=$_POST['Password'];
   
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: index.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }


?>