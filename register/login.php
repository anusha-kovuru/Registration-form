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
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form class="shadow w-450 p-3" autocomplete="off" action="" method="post">
    <h2 class="display-4 text-center fs-1">LOGIN</h2>
    <div class="mb-3">
      <input type="hidden" id="action" value="login">
      <label for="">email</label>
      <input type="text" class="form-control"  id="email" value=""> <br>
      </div>
      <div class="mb-3">
      <label for="">Password</label>
      <input type="password" class="form-control" id="password" value=""> <br></div>
      <button type="button" class="btn btn-primary" onclick="submitData();">Login</button>
      <button class="btn btn-primary">
      <a href="register.php" class="button-a">Register</a></button>
    </form>
    <?php require 'script.php'; ?>
    </div>
  </body>
</html>
