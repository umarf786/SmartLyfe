<?php
include('../components/connection.php');

$email = strval($_POST['email']);
$name = strval($_POST['name']);
$pass = strval($_POST['pass']);
$role = strval($_POST['role']);

$sql= "INSERT INTO test (email, name, pass, role) VALUES ('$email', '$name', '$pass', '$role')";
if ($conn->query($sql)){
  header("Location:../admin/adminusers.php");
}
$conn->close();
?>