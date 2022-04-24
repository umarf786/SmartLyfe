<?php
include('connection.php');
session_start();
if($_SESSION['role'] == "user"){
    header("Location:index.php");
} else if($_SESSION['role'] != "user" && $_SESSION['role'] != "admin"){
  header("Location:index.php");
}
$sql = "SELECT * FROM products";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Website</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href='bootstrap.css' rel='stylesheet' />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Product List</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="upload.php">Add Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="delete.php">Del Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="deleteUser.php">Delete User</a></li>
                        <li class="nav-item dropdown">
                            </ul>
                        </li>
                    </ul>
                        <button class="btn btn-outline-dark signin" type="submit" style="margin-left: 20px;">
                        <?php
                        if(isset($_SESSION['user'])){
                            echo "<a href='signout.php'>Sign Out</a>";
                        } else{
                            echo "<a href='login.php'>Sign In</a>";
                        }
                        ?>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">All These Products</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Ready To Be Deleted</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php 
                    if ($result = $conn->query($sql)){
                        while ($row = $result->fetch_assoc()) {
                            $imagename = $row['imagename'];
                            $name = $row['name'];
                            $price = $row['price['];
                            echo '<div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src=./assets/'.$imagename.'.png>
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">'.$name.'</h5>
                                        <!-- Product price-->
                                                '.$price.'
                                    </div>
                                </div>
                                <!-- Product actions-->
                                
                                <form action="deleteFunction.php" method="POST">
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <input type="hidden" name="imagename" value="'.$imagename.'">
                                        <div class="text-center"><td><input type="submit" name="btn_delete" class="btn btn-danger" value="Delete"/></td></div>
                                    </div>
                                </form>
                            </div>
                        </div>';
                        }
                      }
                    ?>  
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark fixed-bottom">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Umar Farooq</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>
