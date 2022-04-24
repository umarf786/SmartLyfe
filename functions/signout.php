<?php
session_start();
session_destroy();
echo "Logout Successful";
header("Location:../user/home.php");
?>