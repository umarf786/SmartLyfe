<?php
include('../components/connection.php');
session_start();
if (isset($_POST['query'])) {
     
    $query = "SELECT * FROM products WHERE name LIKE '%{$_POST['query']}_%' AND '{$_POST['query']}' != '' LIMIT 100";
    $result = mysqli_query($conn, $query);
 
  if (mysqli_num_rows($result) > 0) {
     while ($row = mysqli_fetch_array($result)) {
      $name = $row['name'];
      $imagename = $row['imagename'];
      $_SESSION['search'] = '<a href="home.php?m='.$imagename.'" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">'.$name.'</a>';
  echo $_SESSION['search'];
    }
  } else {
    echo "<p style='color:red'>Product not found...</p>";
  }
 
}

?>