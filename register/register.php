<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form class="shadow w-450 p-3" autocomplete="off" action="" method="post">
    <h2 class="display-4 text-center fs-1">SIGN IN</h2>
     <div class="mb-3">
     <input type="hidden" id="action" value="register">
      <label for="">Full Name</label>
      <input type="text" class="form-control" id="name" value=""> <br>
     </div>
     <div class="mb-3">
      <label for="">Phone Number</label>
      <input type="text" class="form-control" id="phone_number" value=""> <br>
     </div>
      <div class="mb-3">
      <label for="">email</label>
      <input type="email" class="form-control" id="email" value=""> <br>
      </div>
      <div class="mb-3">
        <label for="">Password</label>
      <input type="password" class="form-control" id="password" value=""> <br>
      </div>
      <button type="button" class="btn btn-primary" onclick="submitData();">Register</button>
      <button class="btn btn-primary">
      <a href="login.php" class="button-a">Login</a></button>
    </form>
    
    <?php require 'script.php'; ?>
    </div>
  </body>
</html>
