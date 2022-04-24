<?php
include('../components/connection.php');
session_start(); 
$currentUser = $_SESSION['user'];
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $cart = $_SESSION['cart'];
    for($i = 0; $i < count($cart); $i++){
        if($cart[$i] == $email){
            unset($cart[$i]);
            $cart = array_values($cart);
            $i--;
            $_SESSION['cart'] = $cart;
        }
    }
    if(count($cart) >= 1){
        $cart = implode(",", $_SESSION['cart']);
        $sqlupdate = "UPDATE cart SET list = '$cart' WHERE email = '$currentUser'";
           $conn->query($sqlupdate);
           header('Location:../user/cart2.php');
    }
    else if(count($cart)==0){
        $sqlremove = "DELETE FROM cart WHERE email='$currentUser'";
        $conn->query($sqlremove);
        $_SESSION['cart'] = [];
        $cart = [];
        header('Location:../user/cart2.php');
    }
    }
$conn->close();
?>