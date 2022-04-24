<?php
include('../components/connection.php');

$name = strval($_POST['name']);
$desc = strval($_POST['desc']);
$price = strval($_POST['price']);
$id = strval($_POST['ida']);
$category = strval($_POST['category']);

$sql= "UPDATE products SET name='$name', description='$desc', price='$price', category='$category' WHERE id='$id'";
if(empty($name) && empty($cat) && empty($price) && empty($desc) && empty($id)){

} else{
  if ($conn->query($sql)){
    header("Location:../admin/adminhome.php");
  }
}
$conn->close();
?>


