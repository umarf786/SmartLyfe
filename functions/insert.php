<?php
include('../components/connection.php');

$email = strval($_POST['email']);
$name = strval($_POST['name']);
$pass = strval($_POST['pass']);

// $sql = "INSERT INTO test ('email', 'pass') VALUES ('$email', '$pass')"
$sql= "INSERT INTO test (email, name, pass) VALUES ('$email', '$name', '$pass')";
if ($conn->query($sql)){
  header("Location:../user/login2.php");
}
$conn->close();
?>