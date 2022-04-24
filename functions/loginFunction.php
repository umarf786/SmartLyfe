<?php
include('../components/connection.php');
session_start(); 

$email = strval($_POST['email']);
$pass = strval($_POST['pass']);

$sql = "SELECT * FROM test where email='$email'";
if ($result = $conn->query($sql)){
  $row = $result->fetch_assoc();
  $dbpass = $row["pass"];
}

if($pass == $dbpass){
    $_SESSION['user'] = $email;
    
    $sql2 = "SELECT * FROM test WHERE email='$email'";
    if($role = $conn->query($sql2)){
        $row = $role->fetch_assoc();
        if(($row['role'] == "admin")){
            $_SESSION['role'] = "admin";
            $_SESSION['cart'] = [];
            $_SESSION['name'] = $row['name'];
            header('Location:../admin/admin.php');
        }
        else{
            $_SESSION['role'] = "user";
            $_SESSION['name'] = $row['name'];
            $_SESSION['cart'] = [];
            header("Location:../user/home.php");
        }
    }
} else{
    echo "<script>alert('Wrong Password'); </script>";
    header('Location:../user/login2.php?pass=0');
    
}
$conn->close();
?>