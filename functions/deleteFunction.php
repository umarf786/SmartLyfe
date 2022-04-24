<?php
include('../components/connection.php');
session_start(); 
if(!empty($_POST['check_list'])) {
    $arr = [];
    foreach($_POST['check_list'] as $check) {
            array_push($arr, $check);
    }
    $checked = implode(",", $arr);
    $sql = "DELETE from products WHERE imagename IN ($checked);";
    if($conn->query($sql)){
        header("location: ../admin/adminhome.php?del=1");
    }
} else{
    header("location: ../admin/adminhome.php");
}

// if(isset($_POST['imagename'])){
//     $delete_id = $_POST['imagename'];
   
//     $sql = "DELETE FROM products WHERE imagename = '$delete_id'";
//     if($conn->query($sql)){
//         header("Location:delete.php");
//     }
   
//     }
$conn->close();
?>