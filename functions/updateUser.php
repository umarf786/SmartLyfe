<?php
include('../components/connection.php');
$name = strval($_POST['name']);
$role = strval($_POST['role']);
$id = strval($_POST['id']);
$email = strval($_POST['email']);

$sql= "UPDATE test SET name='$name', role='$role', email='$email' WHERE id='$id'";
if(empty($name) && empty($cat) && empty($price) && empty($desc) && empty($id)){

} else{
  if ($conn->query($sql)){
    header("Location:../admin/adminusers.php");
  }
}
$conn->close();
?>