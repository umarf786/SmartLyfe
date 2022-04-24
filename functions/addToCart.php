<?php
include('../components/connection.php');

session_start();
$currentUser = $_SESSION['user'];
if($_SESSION['role']=="user"){
    if(isset($_POST['cartID'])){
        $email = $_POST['cartID'];
        if(in_array($email, $_SESSION['cart'])){
            echo"<script>alert('This product is already in the cart'); window.location.href = '../user/home.php';</script>";
        } else{
            array_push($_SESSION['cart'], $email);
        // echo '<pre>'; print_r($_SESSION['cart']); echo '</pre>';
       $cart = implode(",", $_SESSION['cart']);
       $sqlupload = "INSERT INTO cart (email, list) VALUES ('$currentUser', '$cart')";
       $sqlcheck = "SELECT email FROM cart WHERE email = '$currentUser'";
       $result = $conn->query($sqlcheck);
       if($result->num_rows == 0) {
           $conn->query($sqlupload);
           header('Location:../user/cart2.php');
       } else{
           $sqlupdate = "UPDATE cart SET list = '$cart' WHERE email = '$currentUser'";
           $conn->query($sqlupdate);
           header('Location:../user/cart2.php');
       }
//        $result = $conn->query($sqlcheck);
//        if($result->num_rows == 0) {
//         $sqlupload = "INSERT INTO cart (email, list) VALUES ('$currentUser', '$cart')";
//         $conn->query($sqlupload);
//    } 
//    else {
//        $sqlupdate = "UPDATE cart SET list = '$cart' WHERE email = '$currentUser'";
//        $conn->query($sqlupdate);
//    }
        }
    } else{
        echo "You need to be logged in to do this";
    }
        }
$conn->close();
?>