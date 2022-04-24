<?php
include('connection.php');
session_start(); 

if(isset($_POST['email'])){
    $email = $_POST['email'];
   
    $sql = "DELETE FROM test WHERE email = '$email'";
    if($conn->query($sql)){
        header("Location:deleteUser.php");
    }
    }
$conn->close();
?>