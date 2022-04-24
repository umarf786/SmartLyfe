<?php
include('../components/connection.php');
session_start();
$currentUser = $_SESSION['user'];
$sql = "SELECT * FROM products";
$sqlcat = "SELECT * FROM products WHERE category = 'Smart Lighting'";
if($_SESSION['role'] == "user"){
    $sqlcheck = "SELECT * FROM cart WHERE email = '$currentUser'";
    $result = $conn->query($sqlcheck);
if($result->num_rows == 0) {
    
} else{
    $sqlgetcart = "SELECT * FROM cart WHERE email = '$currentUser'";
    $getCart = $conn->query($sqlgetcart);
    $row = $getCart->fetch_assoc();
    $cart = explode(",",$row['list']);
    $_SESSION['cart'] = $cart;
    $clength = count($cart);

}
}

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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.php">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="wearables.php">Smart Wearables</a></li>
                                <li><a class="dropdown-item" href="speakers.php">Smart Speakers</a></li>
                                <a class="dropdown-item" href="kitchen.php">Smart Kitchen</a></li>
                                <a class="dropdown-item" href="doorbells.php">Smart Doorbells</a></li>
                                <a class="dropdown-item" href="lighting.php">Smart Lighting</a></li>
                                <a class="dropdown-item" href="tvs.php">Smart TV's</a></li>
                            </ul>
                        </li>
                        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form></ul>

                    <form class="d-flex ml-auto">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill"><?php if(is_numeric($clength)){ echo " $clength "; } else{ echo "0"; } ?></span>
                        </button>
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
        <!-- <header class="bg-dark py-5" id='headerr'>
                        <div class="container px-4 px-lg-5 my-5">
                            <div class="text-center text-white">
                                <h1 class="display-4 fw-bolder">All these products</h1>
                                <p class="lead fw-normal text-white-50 mb-0">Available to purchase</p>
                            </div>
                        </div>
                    </header> -->
        <!-- Section -->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    if($getProductNumber = htmlspecialchars($_GET["id"])){
                        echo '<script>document.getElementById("headerr").style.display = "none";</script>';
                        $sql3 = "SELECT * FROM products WHERE imagename = '$getProductNumber'";
                        $result = $conn->query($sql3);
                        $row = $result->fetch_assoc();
                        $imagename1 = $row['imagename'];
                        $name1 = $row['name'];
                        $price1 = $row['price'];
                        $desc1 = $row['description'];
                        $category = $row['category'];
                        echo '
                        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">'.$name1.'</h1>
                    <p class="lead fw-normal text-white-50 mb-0">'.$desc1.'</p>
                </div>
            </div>
        </header>
                        <div class="col mb-5" style="max-width: 40%; ">
                            <div class="card h-30">
                                <!-- Product image-->
                                <img class="card-img-top" src=./assets/'.$getProductNumber.'.png>
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">'.$name1.'</h5>
                                        <!-- Product price-->
                                        <h5 class="fw-bolder">£'.$price1.'</h5>
                                        <span class="text-muted font-weight-normal font-italic d-block">'.$category.'</span>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <form action="addToCart.php" method="POST">
                                <input type="hidden" name="email" id="'.$imagename.'" value="'.$imagename1.'">
                                <div class="text-center" style="padding-bottom: 5px;"><td><input type="submit" name="btn" class="btn btn" value="Add To Cart"/></td></div>
                                </input>
                                <form/>
                                </div>
                            </div>
                        </div>';
                    } 
                    else if ($result = $conn->query($sqlcat)){
                        while ($row = $result->fetch_assoc()) {
                            $imagename = $row['imagename'];
                            $name = $row['name'];
                            $price = $row['price'];
                            $category = $row['category'];
                            echo '
                            <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src=./assets/'.$imagename.'.png >
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">'.$name.'</h5>
                                        <!-- Product price-->
                                        <h5 class="fw-bolder">£'.$price.'</h5>
                                        <span class="text-muted font-weight-normal font-italic d-block">'.$category.'</span>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <form action="addToCart.php" method="POST">
                                    <input type="hidden" name="email" value="'.$imagename.'">
                                        <div class="text-center" style="padding-bottom: 10px;"><td><input type="submit" name="btn" class="btn " value="Add To Cart"/></td></div>
                                    </input>
                                    <input type="hidden" name="admin" value="'.$name.'">
                                        
                                        </input>
                                </form>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="?id='.$imagename.'">More Details</a></div>
                                </div>
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
    </body>
</html>
