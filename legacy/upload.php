<?php
include('connection.php');
session_start();
if($_SESSION['role'] == "user"){
    header("Location:index.php");
} else if($_SESSION['role'] != "user" && $_SESSION['role'] != "admin"){
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Upload</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Upload a Product</h5>
            <form class='' name='form' action = 'uploadProduct.php' method='POST' enctype="multipart/form-data">
              <div class="form-floating mb-3 input-group has-validation">
              <input type="text" name='name' class="form-control" id="floatingInput" placeholder="Name of Product" required>
                <label for="floatingInput">Name</label>
              </div>
              <div class="form-floating mb-3 input-group has-validation">
                <input type="text" name='price' class="form-control" id="floatingInput" placeholder="£100" required>
                <label for="floatingPassword">Price</label>
              </div>
              <div class="form-floating mb-3 input-group has-validation">
                <input type="text" name='description' class="form-control" id="floatingInput" placeholder="This is the description" required>
                <label for="floatingPassword">Description</label>
              </div>
              <label for="pet-select">Category:</label>

<select name="category" id="category" required>
    <option value="">--Please choose an option--</option>
    <option value="Smart Wearables">Smart Wearables</option>
    <option value="Smart Speakers">Smart Speakers</option>
    <option value="Smart Kitchen">Smart Kitchen</option>
    <option value="Smart Doorbells">Smart Doorbells</option>
    <option value="Smart Lighting">Smart Lighting</option>
    <option value="Smart TVs">Smart TVs</option>
</select>
              <input type="file" name="file" required/>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" name='upload' type="submit">Upload</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="script.js"></script> 
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>