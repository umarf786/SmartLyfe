<?php
include('../components/connection.php');
// Create connection
$sqll = "SELECT id FROM products";
$id_result = $conn->query($sqll);
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['desc'];
$category = $_POST['category'];

while ($row = $id_result->fetch_assoc()) {
  $last_id = $row['id'];
}
$imagename = (int)$last_id+1;

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}
if(isset($_POST['upload'])){
  $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="../assets/";

 /* new file size in KB */
 $new_size = $file_size/1024;  
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=$imagename.".png";
 if(copy($file_loc,$folder.$final_file)){
  $sql= "INSERT INTO products (name, price, description, category, imagename) VALUES ('$name', '$price', '$description', '$category', $imagename)";
  $result = $conn->query($sql);
  echo "Successfully Uploaded";
 } else{
   echo "Broken";
 }
}
header("Location:../admin/adminhome.php?add=1");

// $sql= "INSERT INTO products (name, price, description, imagename) VALUES ('$name', '$price', '$description', $imagename)";
// $result = $conn->query($sql);

$conn->close();
?>